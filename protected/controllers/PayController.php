<?php

class PayController extends Controller
{
    
    private $_host = "http://inlusion.eu/pay/callback/";
    
    public $layout='//layouts/main_layout';
    
    public $title = "Регистрация";
    
    public function actionIndex(){
        $this->render('success');
    }
    
    public function actionSend(){
        
		//$this->render('send');
		$this->render('registration',array('step'=> "send", 'sessData' => $sessData));
        /*$pay = new SolidPay();
        $pay->setPaymentCode('DC.DB');
        
        // login, password
        $pay->setMerchantUser('8a8294174406c1f2014416ccece406dd', '9prrhkqb');
        
        // sender, token
        $pay->setMerchantSender('8a8294174406c1f2014416ccece306d9', 'c5dWcFsFkWca3MQF');
        
        //mode, channel, response
        $pay->setTransaction('CONNECTOR_TEST', '8a8294174406c1f2014416cd1ed006df', 'SYNC');
        
        //amount, currency, usage, transaction id
        $pay->setPaymentInformation('1','EUR','items on site.net','transactionId');
        
        //given name, family name, company, salutation, title
        $pay->setCustomerName('Joe', 'Doe');
        
        //email, mobile, ip, phone
        $pay->setCustomerContact('test@mail.com');
        
        //$pay->setColectData("false");
        
        //street, zip, city, state, country
        $pay->setCustomerAddress('HOPER ROAD','E163PU','LONDON', null, 'GB');
        
        //card holder, number, brand, exp_month, exp_year, verification cvc
        //$pay->setCreditCard('Joe Doe','4929453812312008','VISA','09','2015','391');
        
        //bank account holder, number, bank code, country
        //$pay->setDirectDebit('joe doe','xxxxxxxxxxx','xxxx','LT');
        
        //$pay->setLangSelector("true");
        
        // for 3d security
        // is enabled, response callback url, mode, popup, onepage, language
        $pay->setWPF("true","http://inlusion.eu/pay/callback/", "DEFAULT","false","true","en");
        
        $pay->sendRequest();   */ 
        
    }
    
    public function actionCallback(){
		
		$callback = new SolidPayResponse();

		if($callback->isSuccess() === true && $callback->needReview() == false)
		{
			$response = $callback->getResponse();
			//$fp = fopen("callback.txt", "w+"); fwrite($fp, json_encode($response)); fclose($fp); // loging callback
			// Payment successfull
			echo "http://inlusion.eu/pay";
			// $decode->return->code;
			// $decode->return->message;
			
			// $decode->identification->transactionid
			// $decode->identification->uniqueid
			// $decode->identification->shortid
			
			// $decode->payment->amount
			// $decode->payment->currency
			// $decode->payment->descriptor
			// $decode->payment->timestamp
			// $decode->payment->riskscore
			// ...
		}
		else if($callback->isSuccess() === true && $callback->needReview() == true)
		{
			// payment successful, but needs manual review of transaction.
			echo "http://inlusion.eu/pay";
		}
		else
		{
			// Payment unsuccessfull
			echo "http://inlusion.eu/pay/error";
		}
    }//actionCallback
    
    
    public function actionError(){
        
        $this->render('fail');
    }
    
    
    
}//Pay