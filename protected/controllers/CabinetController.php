<?php

class CabinetController extends Controller
{
    const MESSAGE_ERROR = 1;
    const MESSAGE_SUCCESS = 2;
    const MESSAGE_NO_ACCESS = 3;

    /**
     * Check
     * @param CAction $action
     * @return bool|void
     */
    function beforeAction($action)
    {
        //if user not allowed to this controller and action
        if(Yii::app()->user->isGuest && $action->id != 'message' && $action->id != 'login')
        {
            $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_NO_ACCESS)));
        }

        return true;
    }


    /**
     * Login
     */
    function actionLogin()
    {
        if(Yii::app()->request->isPostRequest)
        {
            $login = Yii::app()->request->getParam('login',null);
            $password = Yii::app()->request->getParam('password',null);

            $form = new ClientLoginForm();
            $form->password = $password;
            $form->username = $login;

            if($form->validate() && $form->login())
            {
                $this->redirect(Yii::app()->createUrl('cabinet/index'));
            }
            else
            {
                $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_ERROR)));
            }
        }

        $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_NO_ACCESS)));
    }

    /**
     * Logout
     */
    function actionLogout()
    {
        Yii::app()->user->logout(false);
        $this->redirect(Yii::app()->createUrl('main/index'));
    }

    /**
     * Main entry
     */
    function actionIndex()
    {
        /* @var $current_client Clients */

        $products = Products::model()->findAll();
        $current_client = Clients::model()->findByPk(Yii::app()->user->id);

        $this->render('index',array('products' => $products, 'current_client' => $current_client));
    }

    /**
     * Changing packet
     */
    function actionChange()
    {
        if(Yii::app()->request->isPostRequest)
        {
            Debug::out($_POST);
        }
        else
        {
            $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_NO_ACCESS)));
        }
    }

    /**
     * Renders message page (depending on type of message)
     * @param $id
     */
    public function actionMessage($id)
    {
        $templates = array(
            self::MESSAGE_ERROR => "message_error",
            self::MESSAGE_SUCCESS => "message_success",
            self::MESSAGE_NO_ACCESS => "message_no_access"
        );

        $this->render($templates[$id]);
    }
    
    
}//Cabinet