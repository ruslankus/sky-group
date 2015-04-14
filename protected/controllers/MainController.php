<?php

class MainController extends Controller
{
    public function actionIndex(){
        $this->renderText('text');
    }
    
    
    public function actionAbout(){
        $this->renderText( 'about'); 
    }
    
    
    public function actionContacts(){
      $this->renderText('contacts');     
    }
    
    
    public function actionProducts(){
        $this->renderText('products');      
    }
    
    
    public function actionNews(){
        $this->renderText('news');
    }
    
    
}