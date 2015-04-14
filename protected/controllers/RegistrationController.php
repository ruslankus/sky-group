<?php

class RegistrationController extends Controller
{
    
    public $currentStep;
    
    public function actionIndex(){
        $this->redirect("/registration/step/1");
    }
    
    public function actionStep($id){
        
        $sessData = Yii::app()->session->get("step_{$id}");
        $this->currentStep = $id;
        $request = Yii::app()->request;
        if($request->isPostRequest){
            
            $arrStep = $_POST;
            Yii::app()->session->add("step_{$id}", $arrStep);
            $next = $id + 1;
            if($id == 7){
                
                //redirect payment
                echo "payment";
            }else{
                $this->redirect("/registration/step/{$next}");    
            }
            
        }
       
        $this->render('registration',array('step'=> $id, 'sessData' => $sessData));
    }
    
    
    /*
    public function actionStep2(){
        $this->currentStep = 2;
        echo 'step2';
    }
    
    public function actionStep3(){
        $this->currentStep = 3;
        echo 'step3';
    }
    
    public function actionStep4(){
        $this->currentStep = 4;
        echo 'step4';
    }
    
    public function actionStep5(){
        $this->currentStep = 5;
        echo 'step5';
    }
    
    public function actionStep6(){
        $this->currentStep = 6;
        echo 'step6';
    }
    
    public function actionStep7(){
        $this->currentStep = 7;
        echo 'step7';
    }
    */
    
}//end: registration    