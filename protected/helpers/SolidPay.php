<?php
class SolidPay
{
	protected $request = [];
	protected $wpf_enabled = false;
	protected $url = 'https://test.solidpayments.net/frontend/payment.prc';
	
	function __construct()
	{
		$this->request['REQUEST.VERSION'] = '1.0';
		// 3d
		//$this->request['AUTHENTICATION.TYPE'] = '3DSecure';
		$this->request['AUTHENTICATION.RESULT_INDICATOR'] = '05';
		$this->request['AUTHENTICATION.PARAMETER.VERIFICATION_ID'] = 'AACAgSRBklmQCFgMpEGAAAAAAA';
		$this->request['AUTHENTICATION.PARAMETER.VERIFICATION_TYPE'] = '2';
		$this->request['AUTHENTICATION.PARAMETER.XID'] = 'CAACCVVUlwCXUyhQNlSXAAAAAAA';
	}
	
	function sendRequest()
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, $this->url);

		curl_setopt($curl, CURLINFO_HEADER_OUT, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));

		curl_setopt($curl, CURLOPT_POST, count($this->request));
		$requestData = $this->createRequestData();
		curl_setopt($curl, CURLOPT_POSTFIELDS, $requestData);
		$result = curl_exec($curl);
		$response = $this->responseToArray($result);
		if ($this->wpf_enabled == "true" && $response['POST.VALIDATION'] == 'ACK')
		{
			$redirectUrl = $response['FRONTEND.REDIRECT_URL'];
			if (strstr($redirectUrl,"http"))
				{
					header("Location: $redirectUrl");
					exit;
				}
			else {
				return $this->printResponse($response);
			}
		}
		else
		{
			return $this->printResponse($response);
		}
		curl_close($curl); 
	}
	
	private function createRequestData()
	{
		$data = "";
		foreach ( $this->request as $key => $value ) { $data .= "$key=$value&"; }
		return stripslashes($data); 
	}
	
	private function responseToArray($response)
	{
		$response = explode("&", $response);
		$array = [];
		foreach ( $response as $string)
			{
				list ( $key, $value ) = explode("=", urldecode($string), 2);
				$array[$key] = $value;
			}
		return $array;
	}
	
	function printResponse($response, $full = false)
	{
		//$full = true;
		if ($full == true)
			{
				$new_response = $response;
			}
		else
			{
				//FRONTEND_REQUEST_CANCELLED = true
				if ($response['PROCESSING.RETURN.CODE'] == '000.000.000')
				{
					$new_response = (object) [];
					$new_response->success = 'true';
					$new_response->result = 'NOK';
					$new_response->code = $response['POST.VALIDATION'];
					$new_response->message = $this->_requestPostValidationStatus($response['POST.VALIDATION']);
					$new_response->paid_amount = $this->_requestPostValidationStatus($response['CLEARING.AMOUNT']);
					$new_response->paid_currency = $this->_requestPostValidationStatus($response['CLEARING.CURRENCY']);
					$new_response->paid_date = $this->_requestPostValidationStatus($response['PROCESSING.TIMESTAMP']);
					$new_response->risk_score = $this->_requestPostValidationStatus($response['PROCESSING.RISK_SCORE']);
				}
				else if($response['POST.VALIDATION'] != 'ACK')
					{
						$new_response = (object) [];
						$new_response->result = 'NOK';
						$new_response->code = $response['POST.VALIDATION'];
						$new_response->message = $this->_requestPostValidationStatus($response['POST.VALIDATION']);
					}
				else
					{
						$new_response = (object) [];
						$new_response->result = $response['PROCESSING.RESULT'];
						$new_response->statusCode = $response['PROCESSING.STATUS.CODE'];
						$new_response->statusMessage = $response['PROCESSING.STATUS'];
						$new_response->code = $response['PROCESSING.RETURN.CODE'];
						$new_response->message = $response['PROCESSING.RETURN'];
					}
			}
		return json_encode($new_response, JSON_PRETTY_PRINT);
	}
	
	function setMerchantUser($user_login = null, $user_pwd = null)
	{
		$this->request['USER.LOGIN'] = $user_login;
		$this->request['USER.PWD'] = $user_pwd;
		return $this;
	}
	function setMerchantSender($security_sender = null, $security_token = null)
	{
		$this->request['SECURITY.SENDER'] = $security_sender;
		$this->request['SECURITY.TOKEN'] = $security_token;
		return $this;
	}
	function setTransaction($transaction_mode = 'LIVE', $transaction_channel = null, $transaction_response = 'SYNC')
	{
		$this->request['TRANSACTION.MODE'] = $transaction_mode;
		$this->request['TRANSACTION.CHANNEL'] = $transaction_channel;
		$this->request['TRANSACTION.RESPONSE'] = $transaction_response;
		return $this;
	}
	function setPaymentCode($payment_code)
	{
		$this->request['PAYMENT.CODE'] = $payment_code;
		return $this;
	}
	function setPaymentInformation ( $payment_amount = '1.0', $payment_currency = 'EUR', $payment_usage = 'inlu', $payment_transaction_id = 'TRANSACTION')
	{
		$this->request['PRESENTATION.AMOUNT'] = $payment_amount;
		$this->request['PRESENTATION.CURRENCY'] = $payment_currency;
		$this->request['PRESENTATION.USAGE'] = $payment_usage;
		$this->request['IDENTIFICATION.TRANSACTIONID'] = $payment_transaction_id;
		return $this;
	}
	function setCustomerContact($contact_email=null, $contact_mobile=null, $contact_ip=null, $contact_phone=null)
	{
		$this->request['CONTACT.EMAIL'] = $contact_email;
		$this->request['CONTACT.MOBILE'] = $contact_mobile;
		$this->request['CONTACT.IP'] = $contact_ip;
		$this->request['CONTACT.PHONE'] = $contact_phone;
		return $this;
	}
	function setCustomerAddress($address_street=null,$address_zip=null,$address_city=null,$address_state=null,$address_country=null)
	{
		$this->request['ADDRESS.STREET'] = $address_street;
		$this->request['ADDRESS.ZIP'] = $address_zip;
		$this->request['ADDRESS.CITY'] = $address_city;
		$this->request['ADDRESS.STATE'] = $address_state;
		$this->request['ADDRESS.COUNTRY'] = $address_country;
		return $this;
	}
	function setCustomerName($name_given=null,$name_family=null,$name_company=null, $name_salutation=null,$name_title=null)
	{
		$this->request['NAME.SALUTATION'] = $name_salutation;
		$this->request['NAME.TITLE'] = $name_title;
		$this->request['NAME.GIVEN'] = $name_given;
		$this->request['NAME.FAMILY'] = $name_family;
		$this->request['NAME.COMPANY'] = $name_company;
		return $this;
	}
	function setCreditCard($holder_name = null, $number = null, $brand = null, $exp_month = null, $exp_year = null, $verification = null)
	{
		$this->request['ACCOUNT.HOLDER'] = $holder_name;
		$this->request['ACCOUNT.NUMBER'] = $number;
		$this->request['ACCOUNT.BRAND'] = $brand;
		$this->request['ACCOUNT.EXPIRY_MONTH'] = $exp_month;
		$this->request['ACCOUNT.EXPIRY_YEAR'] = $exp_year;
		$this->request['ACCOUNT.VERIFICATION'] = $verification;
		return $this;
	}
	function setDirectDebit($holder_name = null, $number = null, $bank = null, $country = null)
	{
		$this->request['ACCOUNT.HOLDER'] = $holder_name;
		$this->request['ACCOUNT.NUMBER'] = $number;
		$this->request['ACCOUNT.BANK'] = $bank;
		$this->request['ACCOUNT.COUNTRY'] = $country;
		return $this;
	}
    
    
    function setLangSelector($lang_selector = "true"){
        $this->request["FRONTEND.LANGUAGE_SELECTOR"] = $lang_selector;
        return $this;    
    }
    
    
    function setColectData($colect_data="true"){
    	$this->request["FRONTEND.COLLECT_DATA"] = $colect_data;
    }
    
	function setWPF($frontend_enabled = 'true', $frontend_response_url = null, $frontend_mode = 'DEFAULT', $frontend_popup = 'true', $frontend_onepage = "true", $frontend_lang = 'en')
	{
		$this->wpf_enabled=$frontend_enabled;
		$this->request["FRONTEND.ENABLED"] = $frontend_enabled;
		$this->request["FRONTEND.POPUP"] = $frontend_popup;
		$this->request["FRONTEND.MODE"] = $frontend_mode;
		$this->request["FRONTEND.LANGUAGE"] = $frontend_lang;
		$this->request["FRONTEND.RESPONSE_URL"] = $frontend_response_url;
		$this->request["FRONTEND.ONEPAGE"] = $frontend_onepage;
		return $this;
	}
	
	private function _requestPostValidationStatus($code)
	{
		$status = [
			'ACK' => 'Request OK',
			
			2010 => 'Parameter PRESENTATION.AMOUNT missing or not a number',
			2030 => 'Parameter PRESENTATION.CURRENCY missing',
			2020 => 'Parameter PAYMENT.CODE missing or wrong',
			
			3010 => 'Parameter FRONTEND.MODE missing or wrong',
			3020 => 'Parameter FRONTEND.NEXT_TARGET wrong',
			3040 => 'Parameter FRONTEND.NEXT_TARGET wrong',
			3050 => 'Parameter FRONTEND. RESPONSE_URL wrong',
			3070 => 'Parameter FRONTEND. POPUP wrong',
			3090 => 'Wrong FRONTEND.LINK parameter combination',
			3100 => 'Wrong BANNERS information',
			3110 => 'Wrong FRONTEND.PM_METHOD parameter combination',
			3120 => 'Wrong FRONTEND.BUTTON parameter combination',
			
			4020 => 'Parameter SECURITY.IP missing or wrong',
			4030 => 'Parameter SECURITY.SENDER missing or wrong',
			4040 => 'Wrong User/Password combination',
			4050 => 'Parameter USER.LOGIN missing or wrong',
			4060 => 'Parameter USER.PWD missing or wrong',
			4070 => 'Parameter TRANSACTION.CHANNEL missing or wrong',
			
			5010 => 'Parameter ACCOUNT.COUNTRY is wrong or missing for WPF_LIGHT mode and payment code starts with DD',
			
			8080 => 'The payment system is currently unavailable. If this error persists, please contact our support.',
			
			0 => 'Unknown status.'
		];
		return ( $status[$code] ) ? $status[$code] : $status[0]; 
	}
}