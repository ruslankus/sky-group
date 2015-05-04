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
        
        $lng = Yii::app()->language;
        
        if(!empty($arrSteps)){
            //checking if login already exists
            $objClient = Clients::model()->find("login=:login", array(":login"=>strtolower($arrSteps['step_1']['email'])));
            if (empty($objClient)) {
                $objClient = new Clients();
                $objClient->login = strtolower($arrSteps['step_1']['email']);
            }
            // updating user data
            $objClient->password = md5($arrSteps['step_1']['password']);
            $objClient->current_packet_id = $arrSteps['step_6']['packet'];
            //save anketa in db
            $objClient->profile_array = serialize($arrSteps);
            
            // find product price and discount.
            $objProds = Products::model()->findByPk($arrSteps['step_6']['packet']);
            $objDiscount = Discounts::model()->find("code=:discount", array(":discount"=>$arrSteps['step_6']['discount']));
            
            if (empty($objProds)) {
                 $this->redirect(Yii::app()->createUrl("{$lng}/registration/step/7"));
                Yii::app()->end();
            }
            else {
                if ($objDiscount) {
                    $discount = @ceil($objProds->price/$objDiscount->value);
                }
                $price = ceil($objProds->price - $discount);
                if($objClient->save()) {
                    // creating new order.
                    $objOrders = new Orders();
                    $objOrders->client_id = $objClient->id;
                    $objOrders->product_id = $arrSteps['step_6']['packet'];
                    $objOrders->order_time = time();
                    $objOrders->price = $price;
                    $objOrders->discount_id = ($objDiscount->id)?$objDiscount->id:0;

                    if($objOrders->save()){
                        $terms = file_get_contents("terms.txt");
                        $this->render('_pay_form', array('order'=>$objOrders, 'steps'=>$arrSteps, 'terms'=>$terms));
                        Yii::app()->end();        
                    }    

                }
            }
        }
       echo "error";
    }
    
    public function actionCallback(){
		
		$callback = new SolidPayResponse();
		
		$response = $callback->getResponse();
			
		$order = Orders::model()->findByPk($response->identification->transactionid);
		$order->order_time = time();
			
			if($callback->isSuccess() === true && $callback->needReview() == false)
			{
				$order->status_id=1;
				$order->created_time=time();
				$order->payment_status = json_encode(array('status'=>"OK",'code'=>$response->return->code, 'message'=>$response->return->message, 'fullResponse'=>$response->return->fullResponse));
                echo Yii::app()->params['payMerchantUrl']."/".Yii::app()->language."/pay";
			}
			else if($callback->isSuccess() === true && $callback->needReview() == true)
			{
				$order->status_id=1;
                $order->created_time=time();
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
        $response = Orders::model()->findByPk(Yii::app()->request->getParam("id"));
        $this->render('fail', array('response'=>json_decode($response->payment_status)));
    }
    
    
    
}//Pay