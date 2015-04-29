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
        $lng = Yii::app()->language;
        $this->title = $lng == 'ru' ? "Контакты" : "Contacts";
        $this->render("{$lng}/contacts");
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