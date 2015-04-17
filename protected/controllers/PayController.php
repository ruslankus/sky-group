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
        
        $arrSteps = array();
        Yii::app()->session;
        
        for($i = 1; $i <= 7; $i++){
            
            $arrSteps["steps_$i"] = $_SESSION["step_$i"];
            unset($_SESSION["step_$i"]);
        }
        // delete steps
        unset($_SESSION['steps']);
        
        if(!empty($arrSteps)){
            //ctrate cuctomers
            $objClient = new Clients();
            $objClient->user_name    
	   
             //save anketa in db
       }
                   
       
        Debug::d($_SESSION);
       
		$this->render('_pay_form');
        
        
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