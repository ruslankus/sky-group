<?php

class AdminController extends Controller
{
    public $layout='//layouts/admin_layout';


    /**
     * Check
     * @param CAction $action
     * @return bool|void
     */
    function beforeAction($action)
    {
        //if user not allowed to this controller and action
        if((Yii::app()->user->isGuest || Yii::app()->user->getState('role') != 'admin') && $action->id != 'login')
        {
            $this->redirect(Yii::app()->createUrl('admin/login'));
        }

        return true;
    }

    /**
     * Entry point - just redirect to products
     */
    public function actionIndex()
    {
        Yii::app()->request->redirect(Yii::app()->createUrl('admin/products'));
    }

    /**
     * List all products
     */
    public function actionProducts()
    {
        $this->render('products');
    }

    /**
     * Admin login
     */
    public function actionLogin()
    {
        $this->layout = '//layouts/admin_login_layout';

        $formMdl = new AdminLoginForm();

        if($_POST['AdminLoginForm'])
        {
            $formMdl->attributes = $_POST['AdminLoginForm'];

            if($formMdl->validate() && $formMdl->login())
            {
                Yii::app()->request->redirect(Yii::app()->createUrl('admin/products'));
            }
        }

        $this->render('login',array('form_mdl' => $formMdl));
    }

    /**
     * List all clients
     */
    public function actionClients()
    {
        $this->render('clients');
    }

    /**
     * List all clients
     */
    public function actionOrders()
    {
        $this->render('orders');
    }

    /**
     * Admin logout
     */
    public function actionLogout()
    {
        Yii::app()->user->logout(false);
        $this->redirect(Yii::app()->createUrl('admin/login'));
    }




}