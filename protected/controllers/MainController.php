<?php

class MainController extends Controller
{
    public function actionIndex(){

        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? "Главная" : "Home";
        
        $this->layout = '//layouts/page_layout';
        
        $request = Yii::app()->request;
        if($request->isPostRequest){
            
            $arrStep = $_POST;
            Yii::app()->session->add("step_1", $arrStep);

            $lng = Yii::app()->language;
            $this->redirect(Yii::app()->createUrl("{$lng}/registration/step/1"));
        }
        
        $this->render("{$lng}/index");
    }//index
    
    
    public function actionAbout(){
        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? "О нас" : "About us";
        $this->render("{$lng}/about");
    }
    
    
    public function actionContacts(){
        $send = '';
        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? "Контакты" : "Contacts";
        $model = new ContactsForm();
        $request = Yii::app()->request;
         if($request->isPostRequest){
            
            $model->attributes = $_POST;
            $data = $_POST;
            if($model->validate()){
                $send = true;
            }
            else{
                foreach($model->errors as $key => $value){
                    $error[$key] = array_shift($value); 
                }
                $send = false;
            }
        }
        $isset = array('name', 'email', 'country', 'phone', 'text');
        foreach ($isset as $is) {
            $error[$is] = isset($error[$is]) ? $error[$is]:'';
            $data[$is] = isset($data[$is]) ? $data[$is]:'';
        }
        $this->render("{$lng}/contacts", array("error"=>$error, "send"=>$send, "data"=>$data));
    }
    
    
    public function actionProducts(){
        $lng = Yii::app()->language;
        $this->render("{$lng}/products");
    }
    
    
    public function actionNews(){
        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? "Новости" : "News";
        $this->render("{$lng}/news");
    }
    
    public function actionError() {
        $this->layout = '';
        $lng = Yii::app()->language;
        if($error=Yii::app()->errorHandler->error)
        {
            $this->render("{$lng}/error", array("error"=>$error) );
        }
    }
}
