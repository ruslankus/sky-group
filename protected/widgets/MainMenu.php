<?php
class MainMenu extends CWidget {
    
    public $current;

    public function run()
    {
        $objMenus = Menu::model()->findAll();
        
        $this->render('main_menu',array('objMenus' => $objMenus, 'current' => $this->current));
    }
}
?>