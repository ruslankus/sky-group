<?php

class MainController extends Controller
{
    public function actionIndex(){
        
        $this->title = "Главная";
        
        $this->layout = '//layouts/page_layout';
        
        $request = Yii::app()->request;
        if($request->isPostRequest){
            
            $arrStep = $_POST;
            Yii::app()->session->add("step_1", $arrStep);
            
            $this->redirect("/registration/step/1"); 
        }
        
        $this->render('index');
    }//index
    
    
    public function actionAbout(){
        $this->title = "О нас";
        $this->render('about'); 
    }
    
    
    public function actionContacts(){
      $this->title = "Контакты";
      $this->render('contacts');     
    }
    
    
    public function actionProducts(){
        $this->render('products');      
    }
    
    
    public function actionNews(){
        $this->title = "Новости";
        $this->render('news');
    }
    
    public function actionError() {
        $this->layout = '';
        if($error=Yii::app()->errorHandler->error)
        {
            $this->render('error', array("error"=>$error) );
        }
    }
}