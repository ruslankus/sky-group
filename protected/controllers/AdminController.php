<?php

class AdminController extends Controller
{
    public $layout='//layouts/admin_layout';




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
        $this->render('login');
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


}