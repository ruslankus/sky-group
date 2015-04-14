<?php

class RegistrationController extends Controller
{
    
    public $currentStep;
    
    public function actionIndex(){
        $this->redirect("registration/step/1");
    }
    
    public function actionStep($id){
        $this->currentStep = $id;
        $this->render('registration',array('step'=> $id));
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