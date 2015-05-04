<?php

class PayController extends Controller
{
    public $layout='//layouts/main_layout';
    
    public $title = "Регистрация";
    
    public function actionIndex(){
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
        $this->render('success');
    }
    
    public function actionSend(){
        
        $arrSteps = array();
        Yii::app()->session;
        
        for($i = 1; $i <= 7; $i++){
            if(!empty($_SESSION["step_$i"])){
                $arrSteps["step_$i"] = $_SESSION["step_$i"];
                //unset($_SESSION["step_$i"]);
            }
        }
        // delete steps
        //unset($_SESSION['steps']);
        
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
                $objOrders->price = '31';
                $objOrders->discount_id = '1';
                
                if($objOrders->save()){
                    $terms = file_get_contents("terms.txt");
                    $this->render('_pay_form', array('order'=>$objOrders, 'steps'=>$arrSteps, 'terms'=>$terms));
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
				
				$order->payment_status = json_encode(array('status'=>"OK",'code'=>$response->return->code, 'message'=>$response->return->message, 'fullResponse'=>$response->return->fullResponse));
                echo Yii::app()->params['payMerchantUrl']."/".Yii::app()->language."/pay";
			}
			else if($callback->isSuccess() === true && $callback->needReview() == true)
			{
				$order->payment_status = json_encode(array('status'=>"CHECK",'code'=>$response->return->code, 'message'=>$response->return->message, 'fullResponse'=>$response->return->fullResponse));
                // payment successful, but needs manual review of transaction.
				echo Yii::app()->params['payMerchantUrl']."/".Yii::app()->language."/pay";
			}
			else
			{
				$order->payment_status = json_encode(array('status'=>"NOK",'code'=>$response->return->code, 'message'=>$response->return->message, 'fullResponse'=>$response->return->fullResponse));
                // Payment unsuccessfull
				echo Yii::app()->params['payMerchantUrl']."/".Yii::app()->language."/pay/error/".$response->identification->transactionid;
			}
		
		$order->save();
		
    }//actionCallback
    
    
    public function actionError(){
        $orderId = Yii::app()->request->getParam("id");
        $order = Orders::model()->findBypk($orderId);
        $response = json_decode($order->payment_status);
        $this->render('fail', array('orderId'=>$orderId, 'response'=>$response));
    }
    
    
    
}//Pay