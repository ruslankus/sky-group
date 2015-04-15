<?php
class StepWidget extends CWidget
{
    public $currentStep;
    
    
    public function run(){
        
        $sessSteps = Yii::app()->session->get("steps");
        //Debug::d($sessSteps);
        $this->render('steps',array('current' => $this->currentStep,'steps' => $sessSteps));
    }
}//StepWidget