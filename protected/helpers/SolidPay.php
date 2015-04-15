<?php
class SolidPay
{
	/*
	 * @param protected array $request
	 * request to send via CURL
	*/
	protected $request = array ();
	
	/*
	 * @param protected boolean $wpf_enabled
	 * should we use WPF interface or not
	*/
	protected $wpf_enabled = false;
	
	/*
	 * @param protected boolean $responseFull
	 * should we show full CURL response by default
	*/
	protected $responseFull = false;
	
	/*
	 * @param protected string $url
	 * test mode: https://test.solidpayments.net/frontend/payment.prc
	 * live mode: https://www.solidpayments.net/frontend/payment.prc
	*/
	//protected $url = 'https://www.solidpayments.net/frontend/payment.prc';
	protected $url = 'https://test.ctpe.net/frontend/payment.prc';
    //protected  $url = "https://test.solidpayments.net/frontend/payment.prc";
	
	
	function __construct()
	{
		$this->request['REQUEST.VERSION'] = '1.0';
	}
	
	/*
	 * @method public sendRequest
	*/
	function sendRequest()
	{
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 2);
		curl_setopt($curl, CURLOPT_HEADER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_URL, $this->url);

		curl_setopt($curl, CURLINFO_HEADER_OUT, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));

		curl_setopt($curl, CURLOPT_POST, count($this->request));
		$requestData = $this->createRequestData();
		curl_setopt($curl, CURLOPT_POSTFIELDS, $requestData);
		
		$result = curl_exec($curl);
		$response = $this->responseToArray($result);
		
		// if we use WPF interface, redirecting user external payment window
		// if not returning CURL response
		if ($this->wpf_enabled == "true" && $response['POST.VALIDATION'] == 'ACK')
		{
			$redirectUrl = $response['FRONTEND.REDIRECT_URL'];
			if (strstr($redirectUrl,"http"))
				{
					header("Location: $redirectUrl");
					exit;
				}
			else {
				return $this->printResponse($response, $this->responseFull);
			}
		}
		else
		{
			return $this->printResponse($response, $this->responseFull);
		}
		curl_close($curl); 
	}
	
	/*
	 * @method private createRequestData - generates POST string from $this->request array.
	*/
	private function createRequestData()
	{
		$data = "";
		foreach ( $this->request as $key => $value ) { $data .= "$key=$value&"; }
		return stripslashes($data); 
	}
	
	/*
	 * @method private responseToArray - generates array from CURL response string.
	 * @param string $response
	*/
	private function responseToArray($response)
	{
		$response = explode("&", $response);
		$array = array();
		foreach ( $response as $string)
			{
				list ( $key, $value ) = explode("=", urldecode($string), 2);
				$array[$key] = $value;
			}
		return $array;
	}
	
	/*
	 * @method public printResponse - returns response in json
	 * @param array $response
	 * @param boolean $full - 	if true shows full response got from request, 
	 *							if false shows custom response.
	 * !Only for CURL responses
	*/
	function printResponse($response, $full = false)
	{
		if ($full == true)
			{
				$new_response = $response;
			}
		else
			{
				// requested returned failed message
				if($response['POST.VALIDATION'] != 'ACK')
					{
						$new_response = (object)[];
						$new_response->paymentSuccess = false;
						$new_response->result = 'NOK';
						$new_response->code = $response['POST.VALIDATION'];
						$new_response->message = $this->_requestPostValidationStatus($response['POST.VALIDATION']);
						$new_response->isCanceled = $response['FRONTEND.REQUEST.CANCELLED'];
						
						$new_response->identification_transactionId = $response['IDENTIFICATION.TRANSACTIONID'];
						$new_response->identification_uniqueId = $response['IDENTIFICATION.UNIQUEID'];
						$new_response->identification_shortId = $response['IDENTIFICATION.SHORTID'];
						$new_response->identification_referenceId = $response['IDENTIFICATION.REFERENCEID'];
					}
				else
					{
						// PAID, request returned success message
						if ($response['PROCESSING.RETURN.CODE'] == '000.000.000')
							{
								$new_response = (object)[];
								$new_response->paymentSuccess = true;
								$new_response->result = 'ACK';
								$new_response->code = $response['POST.VALIDATION'];
								$new_response->message = $this->_requestPostValidationStatus($response['POST.VALIDATION']);
								$new_response->isCanceled = $response['FRONTEND.REQUEST.CANCELLED'];
								
								$new_response->paid_amount = $response['CLEARING.AMOUNT'];
								$new_response->paid_currency = $response['CLEARING.CURRENCY'];
								$new_response->paid_date = $response['PROCESSING.TIMESTAMP'];
								$new_response->paid_descriptor = $response['CLEARING.DESCRIPTOR'];
								$new_response->risk_score = $response['PROCESSING.RISK_SCORE'];
								
								$new_response->identification_transactionId = $response['IDENTIFICATION.TRANSACTIONID'];
								$new_response->identification_uniqueId = $response['IDENTIFICATION.UNIQUEID'];
								$new_response->identification_shortId = $response['IDENTIFICATION.SHORTID'];
								$new_response->identification_referenceId = $response['IDENTIFICATION.REFERENCEID'];
							}
						// request returned success message, but money wasnt paid.
						else
							{
								$new_response = (object)[];
								$new_response->paymentSuccess = false;
								$new_response->result = $response['PROCESSING.RESULT'];
								$new_response->statusCode = $response['PROCESSING.STATUS.CODE'];
								$new_response->statusMessage = $response['PROCESSING.STATUS'];
								$new_response->code = $response['PROCESSING.RETURN.CODE'];
								$new_response->message = $response['PROCESSING.RETURN'];
								$new_response->isCanceled = $response['FRONTEND.REQUEST.CANCELLED'];
								
								$new_response->paid_amount = $response['CLEARING.AMOUNT'];
								$new_response->paid_currency = $response['CLEARING.CURRENCY'];
								$new_response->paid_date = $response['PROCESSING.TIMESTAMP'];
								$new_response->paid_descriptor = $response['CLEARING.DESCRIPTOR'];
								$new_response->risk_score = $response['PROCESSING.RISK_SCORE'];
								
								$new_response->identification_transactionId = $response['IDENTIFICATION.TRANSACTIONID'];
								$new_response->identification_uniqueId = $response['IDENTIFICATION.UNIQUEID'];
								$new_response->identification_shortId = $response['IDENTIFICATION.SHORTID'];
								$new_response->identification_referenceId = $response['IDENTIFICATION.REFERENCEID'];
							}
					}
			}
		return json_encode($new_response);
	}
	
	/*
	 * @method public printResponse - returns response in json
	 * @param array $response
	 * @param boolean $full - 	if true shows full response got from request, 
	 *							if false shows custom response.
	 * !Only for ASYNC POST responses
	*/
	function printPOSTResponse($response, $full = false)
	{
		if ($full == true)
			{
				$new_response = $response;
			}
		else
			{
				// requested returned failed message
				if($response['PROCESSING_RESULT'] != 'ACK')
					{
						$new_response = (object)[];
						$new_response->paymentSuccess = false;
						$new_response->result = 'NOK';
						$new_response->processingCode = $response['PROCESSING_RESULT'];
						$new_response->processingMessage = $this->_requestPostValidationStatus($response['PROCESSING_RESULT']);
						$new_response->message = $response['PROCESSING_RETURN'];
						$new_response->isCanceled = $response['FRONTEND_REQUEST_CANCELLED'];
						
						$new_response->identification_transactionId = $response['IDENTIFICATION_TRANSACTIONID'];
						$new_response->identification_uniqueId = $response['IDENTIFICATION_UNIQUEID'];
						$new_response->identification_shortId = $response['IDENTIFICATION_SHORTID'];
						$new_response->identification_referenceId = $response['IDENTIFICATION_REFERENCEID'];
					}
				else
					{
						// PAID, request returned success message
						if ($response['PROCESSING.RETURN.CODE'] == '000.000.000')
							{
								$new_response = (object)[];
								$new_response->paymentSuccess = true;
								$new_response->result = 'ACK';
								$new_response->processingCode = $response['PROCESSING_RESULT'];
								$new_response->processingMessage = $this->_requestPostValidationStatus($response['PROCESSING_RESULT']);
								$new_response->message = $response['PROCESSING_RETURN'];
								$new_response->isCanceled = $response['FRONTEND_REQUEST_CANCELLED'];
								
								$new_response->paid_amount = $response['CLEARING_AMOUNT'];
								$new_response->paid_currency = $response['CLEARING_CURRENCY'];
								$new_response->paid_date = $response['PROCESSING_TIMESTAMP'];
								$new_response->paid_descriptor = $response['CLEARING_DESCRIPTOR'];
								$new_response->risk_score = $response['PROCESSING_RISK_SCORE'];
								
								$new_response->identification_transactionId = $response['IDENTIFICATION_TRANSACTIONID'];
								$new_response->identification_uniqueId = $response['IDENTIFICATION_UNIQUEID'];
								$new_response->identification_shortId = $response['IDENTIFICATION_SHORTID'];
								$new_response->identification_referenceId = $response['IDENTIFICATION_REFERENCEID'];
							}
						// request returned success message, but money wasnt paid.
						else
							{
								$new_response = (object)[];
								$new_response->paymentSuccess = false;
								$new_response->result = $response['PROCESSING_RESULT'];
								$new_response->statusCode = $response['PROCESSING_STATUS_CODE'];
								$new_response->statusMessage = $response['PROCESSING_STATUS'];
								$new_response->processingCode = $response['PROCESSING_RESULT'];
								$new_response->processingMessage = $this->_requestPostValidationStatus($response['PROCESSING_RESULT']);
								$new_response->message = $response['PROCESSING_RETURN'];
								$new_response->isCanceled = $response['FRONTEND_REQUEST_CANCELLED'];
								
								$new_response->paid_amount = $response['CLEARING_AMOUNT'];
								$new_response->paid_currency = $response['CLEARING_CURRENCY'];
								$new_response->paid_date = $response['PROCESSING_TIMESTAMP'];
								$new_response->paid_descriptor = $response['CLEARING_DESCRIPTOR'];
								$new_response->risk_score = $response['PROCESSING_RISK_SCORE'];
								
								$new_response->identification_transactionId = $response['IDENTIFICATION_TRANSACTIONID'];
								$new_response->identification_uniqueId = $response['IDENTIFICATION_UNIQUEID'];
								$new_response->identification_shortId = $response['IDENTIFICATION_SHORTID'];
								$new_response->identification_referenceId = $response['IDENTIFICATION_REFERENCEID'];
							}
					}
			}
		return json_encode($new_response);
	}
	/*
	 * @method public showFullResponse - set true if want full request response.
	 * @param boolean $set
	*/
	function showFullResponse($set = false)
	{
		$this->responseFull = $set;
		return $this;
	}
	
	/*
	 * @method public setMerchantUser
	 * @param string $user_login
	 * @param string $user_pwd
	*/
	function setMerchantUser($user_login = null, $user_pwd = null)
	{
		$this->request['USER.LOGIN'] = $user_login;
		$this->request['USER.PWD'] = $user_pwd;
		return $this;
	}
	
	/*
	 * @method public setMerchantSender
	 * @param string $security_sender
	 * @param string $security_token
	*/
	function setMerchantSender($security_sender = null, $security_token = null)
	{
		$this->request['SECURITY.SENDER'] = $security_sender;
		$this->request['SECURITY.TOKEN'] = $security_token;
		return $this;
	}
	
	/*
	 * @method public setTransaction
	 * @param string $transaction_mode
	 * @param string $transaction_channel
	 * @param string $transaction_response
	*/
	function setTransaction($transaction_mode = 'LIVE', $transaction_channel = null, $transaction_response = 'SYNC')
	{
		$this->request['TRANSACTION.MODE'] = $transaction_mode;
		$this->request['TRANSACTION.CHANNEL'] = $transaction_channel;
		$this->request['TRANSACTION.RESPONSE'] = $transaction_response;
		return $this;
	}
	
	/*
	 * @method public setPaymentCode
	 * @param string $payment_code
	*/
	function setPaymentCode($payment_code=null)
	{
		if ( $payment_code )
			$this->request['PAYMENT.CODE'] = $payment_code;
		
		return $this;
	}
	
	/*
	 * @method public setPaymentInformation
	 * @param float $payment_amount
	 * @param string $payment_currency
	 * @param string $payment_usage
	 * @param string $payment_transaction_id
	*/
	function setPaymentInformation ( $payment_amount = '1.0', $payment_currency = 'EUR', $payment_usage = 'inlu', $payment_transaction_id = 'TRANSACTION')
	{
		if ( $payment_amount )
			$this->request['PRESENTATION.AMOUNT'] = $payment_amount;
		
		if ( $payment_currency )
			$this->request['PRESENTATION.CURRENCY'] = $payment_currency;
		
		if ( $payment_usage )
			$this->request['PRESENTATION.USAGE'] = $payment_usage;
		
		if ( $payment_transaction_id )
			$this->request['IDENTIFICATION.TRANSACTIONID'] = $payment_transaction_id;
		
		return $this;
	}
	
	/*
	 * @method public setCustomerContact
	 * @param string $contact_email 
	 * @param string $contact_mobile - with or without +
	 * @param string $contact_ip
	 * @param string $contact_phone - with or without +
	*/
	function setCustomerContact($contact_email=null, $contact_mobile=null, $contact_ip=null, $contact_phone=null)
	{
		if ( $contact_email )
			$this->request['CONTACT.EMAIL'] = $contact_email;
		
		if ( $contact_mobile )
			$this->request['CONTACT.MOBILE'] = $contact_mobile;
		
		if ( $contact_ip )
			$this->request['CONTACT.IP'] = $contact_ip;
		
		if ( $contact_phone )
			$this->request['CONTACT.PHONE'] = $contact_phone;
		
		return $this;
	}
	
	/*
	 * @method public setCustomerAddress
	 * @param string $address_street 
	 * @param string $address_zip
	 * @param string $address_city
	 * @param string $address_state
	 * @param string $address_country
	*/
	function setCustomerAddress($address_street=null,$address_zip=null,$address_city=null,$address_state=null,$address_country=null)
	{
		if ( $address_street )
			$this->request['ADDRESS.STREET'] = $address_street;
		
		if ( $address_zip )
			$this->request['ADDRESS.ZIP'] = $address_zip;
		
		if ( $address_city )
			$this->request['ADDRESS.CITY'] = $address_city;
		
		if ( $address_state )
			$this->request['ADDRESS.STATE'] = $address_state;
		
		if ( $address_country )
			$this->request['ADDRESS.COUNTRY'] = $address_country;
		
		return $this;
	}
	
	/*
	 * @method public setCustomerName
	 * @param string $name_given 
	 * @param string $name_family
	 * @param string $name_company
	 * @param string $name_salutation
	 * @param string $name_title
	*/
	function setCustomerName($name_given=null,$name_family=null,$name_company=null, $name_salutation=null,$name_title=null)
	{
		if ( $name_salutation )
			$this->request['NAME.SALUTATION'] = $name_salutation;
		
		if ( $name_title )
			$this->request['NAME.TITLE'] = $name_title;
		
		if ( $name_given )
			$this->request['NAME.GIVEN'] = $name_given;
		
		if ( $name_family )
			$this->request['NAME.FAMILY'] = $name_family;
		
		if ( $name_company )
			$this->request['NAME.COMPANY'] = $name_company;
		
		return $this;
	}
	
	/*
	 * @method public setCreditCard
	 * @param string $holder_name
	 * @param int $number
	 * @param string $brand
	 * @param int $exp_month
	 * @param int $exp_year
	 * @param int verification
	*/
	function setCreditCard($holder_name = null, $number = null, $brand = null, $exp_month = null, $exp_year = null, $verification = null)
	{
		if ( $holder_name )
			$this->request['ACCOUNT.HOLDER'] = $holder_name;
		
		if ( $number )
			$this->request['ACCOUNT.NUMBER'] = $number;
		
		if ( $brand )
			$this->request['ACCOUNT.BRAND'] = $brand;
		
		if ( $exp_month )
			$this->request['ACCOUNT.EXPIRY_MONTH'] = $exp_month;
		
		if ( $exp_year )
			$this->request['ACCOUNT.EXPIRY_YEAR'] = $exp_year;
		
		if ( $verification )
			$this->request['ACCOUNT.VERIFICATION'] = $verification;
		
		return $this;
	}
	
	/*
	 * @method public setDirectDebit
	 * @param string $holder_name
	 * @param int $number
	 * @param int $bank
	 * @param string $country [GB, LT, ...]
	*/
	function setDirectDebit($holder_name = null, $number = null, $bank = null, $country = null)
	{
		if ( $holder_name )
			$this->request['ACCOUNT.HOLDER'] = $holder_name;
		
		if ( $number )
			$this->request['ACCOUNT.NUMBER'] = $number;
		
		if ( $bank )
			$this->request['ACCOUNT.BANK'] = $bank;
		
		if ( $country )
			$this->request['ACCOUNT.COUNTRY'] = $country;
		
		return $this;
	}
    
    /*
	 * @method public setLangSelector
	 * @param boolean $lang_selector
	*/
    function setLangSelector($lang_selector = "true"){
        $this->request["FRONTEND.LANGUAGE_SELECTOR"] = $lang_selector;
        return $this;    
    }
    
    /*
	 * @method public setColectData
	 * @param boolean $colect_data
	*/
    function setColectData($colect_data="true"){
    	$this->request["FRONTEND.COLLECT_DATA"] = $colect_data;
		return $this;
    }
	
    /*
	 * @method public setWPF
	 * @param boolean $frontend_enabled
	 * @param string $frontend_response_url
	 * @param string $frontend_mode [DEFAULT, WPF_LIGHT, VT, POST_ASYNC]
	 * @param boolean $frontend_popup
	 * @param boolean $frontend_onepage
	 * @param string $frontend_lang [en, ru, ...]
	*/
	function setWPF($frontend_enabled = 'true', $frontend_response_url = null, $frontend_mode = 'DEFAULT', $frontend_popup = 'true', $frontend_onepage = "true", $frontend_lang = null)
	{
		$this->wpf_enabled = $frontend_enabled;
		$this->request["FRONTEND.ENABLED"] = $frontend_enabled;
		$this->request["FRONTEND.POPUP"] = $frontend_popup;
		$this->request["FRONTEND.MODE"] = $frontend_mode;
		if ( $frontend_lang )
			$this->request["FRONTEND.LANGUAGE"] = $frontend_lang;
		
		if ( $frontend_response_url )
			$this->request["FRONTEND.RESPONSE_URL"] = $frontend_response_url;
		
		$this->request["FRONTEND.ONEPAGE"] = $frontend_onepage;
		return $this;
	}
	
	/*
	 * @method public setWPFsession
	 * @param string $session
	*/
	function setWPFsession($session = null)
	{
		if($session)
			$this->request['FRONTEND.SESSION_ID'] = $session;
		return $this;
	}
	
	/*
	 * @method public customizeWPF
	 * @param string $width
	 * @param string $height
	 * @param boolean $status_bar
	 * @param string $css [url, https]
	 * @param string $javascript [url, https]
	*/
	function customizeWPF($width = "350px", $height = "580px", $status_bar = 'false', $css = null, $javascript = null)
	{
		$this->request["FRONTEND.HEIGHT"] = $height;
		$this->request["FRONTEND.FORM_WIDTH"] = $width;
		$this->request["FRONTEND.JSCRIPT_PATH"] = $javascript;
		
		if ( $css )
			$this->request["FRONTEND.CSS_PATH"] = $css;
		
		if ( $javascript )
			$this->request["FRONTEND.STATUSBAR_VISIBLE"] = $status_bar;
	
		return $this;
	}
	
	/*
	 * @method public set3DSecure
	 * @param int $indicator
	 * @param string $verification_id
	 * @param int $verification_type
	 * @param string $parameter_xid
	 *
	 * use only if 3DSecure is possible.
	*/
	function set3DSecure($indicator=null, $verification_id=null, $verification_type=null, $parameter_xid=null)
	{
		$this->request['AUTHENTICATION.TYPE'] = '3DSecure';
		/*
		 * ECI value
		 * 01 = MASTER_3D_ATTEMPT 
		 * 02 = MASTER_3D_SUCCESS
		 * 05 = VISA_3D_SUCCESS
		 * 06 = VISA_3D_ATTEMPT
		 * 07 = DEFAULT_E_COMMERCE
		*/
		if ($indicator)
			$this->request['AUTHENTICATION.RESULT_INDICATOR'] = $indicator;
		/*
		 * Must be base64_encoded
		 * CAVV for Visa
		 * UCAF for mastercard
		 * lenght of 28 digits
		*/
		if ($verification_id)
			$this->request['AUTHENTICATION.PARAMETER.VERIFICATION_ID'] = $verification_id;
		/*
		 * 0 = HMAC 
		 * 1 = CVV 
		 * 2 = CVV_ATN 
		 * 3 = MASTERCARD_SPA
		*/
		if ($verification_type)
			$this->request['AUTHENTICATION.PARAMETER.VERIFICATION_TYPE'] = $verification_type;
		/*
		 * XID for Verified By Visa (VbV) or Mastercard Secure Code (MSC) transactions.
		 * Must be Base64 encoded.
		*/
		if ($parameter_xid)
			$this->request['AUTHENTICATION.PARAMETER.XID'] = $parameter_xid;
		return $this;
	}
	
	/*
	 * @method private _requestPostValidationStatus
	 * @param string $code - $response[POST.VALIDATION]
	*/
	private function _requestPostValidationStatus($code)
	{
		$status = array(
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
		);
		return ( $status[$code] ) ? $status[$code] : $status[0]; 
	}
}