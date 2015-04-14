<?php
class StepWidget extends CWidget
{
    public $currentStep;
    
    
    public function run(){
        $this->render('steps',array('current' => $this->currentStep));
    }
}//StepWidget