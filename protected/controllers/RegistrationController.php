<?php

class RegistrationController extends Controller
{
    public $layout='//layouts/main_layout';
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
        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? 'Регистрация' : 'Registration';
        $this->redirect("/{$lng}/registration/step/1");
    }

    public function actionChildren() {
        $this->layout='';
        $request = Yii::app()->request;
        $this->render("_children", array("child"=>$request->getPost('child'), "lng"=>$request->getPost('lng')));
    }
    public function actionStep($id) {

        /* @var $model CFormModel | FormStep_1 | FormStep_2 | FormStep_3 | FormStep_4 | FormStep_5 | FormStep_6 | FormStep_7 */
        $sessData = array();
        $errors = array();
        
        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? 'Регистрация' : 'Registration';

        $objProds = null;
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
                $arrStep['promotion_number'] = isset($model->attributes['promotion_number']) ? $model->attributes['promotion_number']:'';
                Yii::app()->session->add("step_{$id}", $arrStep);
                //write session step like complited
                $sessSteps[$id] = true;
                 Yii::app()->session->add("steps", $sessSteps);
                $next = $id + 1;
                                
                 if($id == 7){
                   $this->redirect(Yii::app()->createUrl("{$lng}/pay/send"));
                }else{
                    $this->redirect(Yii::app()->createUrl("{$lng}/registration/step/{$next}"));
                }
            }
            else{
                foreach($model->errors as $key => $value){
                    $errors[$key] = array_shift($value); 
                }
                $sessData = $arrStep;
                
            }//end validation
            //Debug::d($errors); 
            
        }
        
        if($id == 6){
            $objProds = Products::model()->findAll(); 
        }
        
        if($id == 7){
            $objProds = Products::model()->findByPk($_SESSION['step_6']['packet']);
        }

        foreach(get_class_vars($model_class_name) as $key => $value){
            if(empty($errors[$key])){
                $errors[$key] = '';
            }
            if(empty($sessData[$key])){
                $sessData[$key] = '';
            }
        }
        if (is_array(isset($sessData['children'])?$sessData['children']:'')) {
        foreach ($sessData['children'] as $key=>$child) {
            foreach ($child as $val=>$vale) {
                $sessData['children'][$key][$val] = isset($sessData['children'][$key][$val]) ? $sessData['children'][$key][$val]:'';
                $errors['children_'.$key.'_'.$val] = isset($errors['children_'.$key.'_'.$val]) ? $errors['children_'.$key.'_'.$val]:'';
            }
        }}
        
        //Debug::d(get_class_vars($model_class_name));
        //checking errors

        

        $lng = Yii::app()->language;
        $this->render("{$lng}/registration",array('step'=> $id, 'sessData' => $sessData, 'got' => Yii::app()->session,
            'errors' => $errors,'objProds' => $objProds, 'lng' => $lng));
    }
    
    function clear_empty_array_values(&$array){
        if (is_array($array)) {
            foreach($array as $key => &$value){
                if (is_array($value)){
                    $this->clear_empty_array_values($value);
                }
                if(empty($value)) {
                    unset($array[$key]);
                }
            }
        }
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