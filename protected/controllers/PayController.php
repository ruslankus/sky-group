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
            if(!empty($_SESSION["step_$i"])){
                $arrSteps["step_$i"] = $_SESSION["step_$i"];
                unset($_SESSION["step_$i"]);
            }
        }
        // delete steps
        unset($_SESSION['steps']);
        
        if(!empty($arrSteps)){
            //ctrate cuctomers
            $objClient = new Clients();
            $objClient->login = $arrSteps['step_1']['email'];
            $objClient->password = md5($arrSteps['step_1']['password']);
            $objClient->current_packet_id = $arrSteps['step_6']['packet'];
            //save anketa in db
            $objClient->profile_array = serialize($arrSteps);
            
            if($objClient->save()){
                
                //formiruem zakas
                $objOrders = new Orders();
                $objOrders->client_id = $objClient->id;
                $objOrders->product_id = $arrSteps['step_6']['packet'];
                $objOrders->order_time = time();
                
                if($objOrders->save()){
                    
                    $this->render('_pay_form', array('order_id'=>$objOrders->id));
                    Yii::app()->end();        
                }    
             
            }
       }
       echo "error";
    }
    
    public function actionCallback(){
		
		$callback = new SolidPayResponse();
		
		$response = $callback->getResponse();
			
		$order = Orders::model()->findByPk($response->identification->transactionid);
		$order->price = $response->identification->transactionid;
		$order->order_time = time();
			
			if($callback->isSuccess() === true && $callback->needReview() == false)
			{
				echo "http://inlusion.eu/pay";
				$order->payment_status = "OK,".$response->return->code.", ".$response->return->message;
			}
			else if($callback->isSuccess() === true && $callback->needReview() == true)
			{
				$order->payment_status = "CHECK, ".$response->return->code.", ".$response->return->message;
				// payment successful, but needs manual review of transaction.
				echo "http://inlusion.eu/pay";
			}
			else
			{
				$order->payment_status = "NOK, ".$response->return->code.", ".$response->return->message;
				// Payment unsuccessfull
				echo "http://inlusion.eu/pay/error";
			}
		
		$order->save();
		
    }//actionCallback
    
    
    public function actionError(){
        
        $this->render('fail');
    }
    
    
    
}//Pay