<?php
/*
 * use this class only for ASYNC POST classbacl
*/
class SolidPayResponse
{
	/*
	 * @param protected array $callback
	*/
	protected $callback = array ( );
	/*
	 * @param protected array $callbackFull
	*/
	
	protected $callbackFull = array ( );
	/*
	 * set $fullResponse on class initilazation
	*/
	
	function __construct ()
	{
		$this->callback = (object) array();
		$this->callbackFull = $_POST;
		$this->_generateCallback();
	}
	
	/*
	 * @method public boolean isSuccess - returns true if payment successful
	*/
	function isSuccess()
	{
		if ($this->callback->success == true)
			return true;
		return false;
	}
	
	/*
	* @method public boolean needReview - if payment was successful but needs manual review return true
	*/
	function needReview()
	{
		if ($this->callback->review == true)
			return true;
		return false;
	}


	/*
	 * @method public object getResponse
	*/
	function getResponse()
	{
		return $this->callback;
	}
	
	/*
	 * @method private void _generateCallback
	*/
	private function _generateCallback()
	{
		// https://test.solidpayments.net/payment/codes/resultCodes.jsp
		if ($this->callbackFull['PROCESSING_RETURN_CODE'] === '000.000.000')
		{
			$this->callback->success = true;
		}
		else if (in_array($this->callbackFull['PROCESSING_RETURN_CODE'], array('000.400.100','000.500.000','000.500.100','000.600.000')) == true)
		{	
			$this->callback->success = true;
		}
		else if (in_array($this->callbackFull['PROCESSING_RETURN_CODE'], array('000.400.000','000.400.010',
                '000.400.020','000.400.030','000.400.040','000.400.050','000.400.060','000.400.070','000.400.080',
                '000.400.090','000.100.110')) == true)
		{	
			$this->callback->success = true;
			$this->callback->review = true;
		}
		else
		{
			$this->callback->success = false;
		}
		$this->callback->code = $this->callbackFull['PROCESSING_RESULT'];
		$this->callback->message = $this->_callbackMessage($this->callback->code);
		
		$this->callback->return = (object) array();
		$this->callback->return->code = $this->callbackFull['PROCESSING_RETURN_CODE'];
		$this->callback->return->message = $this->callbackFull['PROCESSING_RETURN'];
		
		$this->callback->status = (object) array();
		$this->callback->status->code = $this->callbackFull['PROCESSING_STATUS_CODE'];
		$this->callback->status->message = $this->callbackFull['PROCESSING_STATUS'];
		
		$this->callback->reason = (object) array();
		$this->callback->reason->code = $this->callbackFull['PROCESSING_REASON_CODE'];
		$this->callback->reason->message = $this->callbackFull['PROCESSING_REASON'];
		
		$this->callback->identification = (object) array();
		$this->callback->identification->transactionid = $this->callbackFull['IDENTIFICATION_TRANSACTIONID']; 
		$this->callback->identification->uniqueid = $this->callbackFull['IDENTIFICATION_UNIQUEID']; 
		$this->callback->identification->shortid = $this->callbackFull['IDENTIFICATION_SHORTID']; 
		
		$this->callback->payment = (object) array();
		$this->callback->payment->amount = $this->callbackFull['CLEARING_AMOUNT'];
		$this->callback->payment->currency = $this->callbackFull['CLEARING_CURRENCY'];
		$this->callback->payment->descriptor = $this->callbackFull['CLEARING_DESCRIPTOR'];
		$this->callback->payment->timestamp = $this->callbackFull['PROCESSING_TIMESTAMP'];
		$this->callback->payment->riskscore = $this->callbackFull['PROCESSING_RISK_SCORE'];
	}
	
	/*
	 * @method private string _requestPostValidationStatus
	 * @param string $code - $response[PROCESSING_RESULT]
	*/
	private function _callbackMessage($code)
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
	/*
	 * @method private _callbackMessage
	*/
	/*private function _callbackMessage($code = 'x00')
	{
		$messages = array(
			'x00' = > 'Something wrong.',
			'x01' = > 'Payment successful.'
		);
		return ( $message[$code] ) ? $message[$code] : $message['x00']; 
	}*/
	/*
	 * instance for static class usage
	*/
	private static $instance = false;
	public static function _get()
	{
		if(!self::$instance)
			self::$instance = new self();
		return self::$instance;
	}
}