<?php

class RegistrationController extends Controller
{
    public $layout='//layouts/main_layout';
    public $title = "Регистрация";
    public $currentStep;
    
    public $steps = array(
        '1' => true,
        '2' => false,
        '3' => false,
        '4' => false,
        '5' => false ,
        '6' => false,
        '7' => false,
     );
    
    public function actionIndex(){
        $this->redirect("/registration/step/1");
    }
    
    public function actionStep($id){
        
        $model_class_name = "FormStep_".$id;
        $errors = array();
        $model = new $model_class_name();
        
        $sessData = Yii::app()->session->get("step_{$id}");
        
        $sessSteps = Yii::app()->session->get("steps");
        if(empty($sessSteps)){
             Yii::app()->session->add("steps", $this->steps);
        }
        
        $this->currentStep = $id;
        $request = Yii::app()->request;
        if($request->isPostRequest){
            
            $arrStep = $_POST;
            $model->attributes = $_POST;
            if($model->validate()){
                Yii::app()->session->add("step_{$id}", $arrStep);
                //write session step like complited
                $sessSteps[$id] = true;
                 Yii::app()->session->add("steps", $sessSteps);
                $next = $id + 1;
                 if($id == 7){
                   $this->redirect("/pay/send");
                }else{
                    $this->redirect("/registration/step/{$next}");    
                }
            }else{
                foreach($model->errors as $key => $value){
                    $errors[$key] = array_shift($value); 
                }
            }//end validation
            //Debug::d($errors);    
        }
        //Debug::d($_SESSION);
        $this->render('registration',array('step'=> $id, 'sessData' => $sessData, 'errors' => $errors));
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