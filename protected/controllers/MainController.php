<?php

class MainController extends Controller
{
    public function actionIndex(){
        
        $request = Yii::app()->request;
        if($request->isPostRequest){
            
            $arrStep = $_POST;
            Yii::app()->session->add("step_1", $arrStep);
            
            $this->redirect("/registration/step/1"); 
        }
        
        $this->render('index');
    }//index
    
    
    public function actionAbout(){
        $this->render('about'); 
    }
    
    
    public function actionContacts(){
      $this->render('contacts');     
    }
    
    
    public function actionProducts(){
        $this->render('products');      
    }
    
    
    public function actionNews(){
        $this->render('news');
    }
    
    
}