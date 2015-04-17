<?php

class CabinetController extends Controller
{
    const MESSAGE_ERROR = 1;
    const MESSAGE_SUCCESS_CHANGE = 2;
    const MESSAGE_NO_ACCESS = 3;
    const MESSAGE_SUCCESS_SEND = 4;
    const MESSAGE_NOT_APPROVED = 5;

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
        elseif(Yii::app()->user->getState('status') != ClientIdentity::CLIENT_STATUS_APPROVED && $action->id != 'message' && $action->id != 'login')
        {
            $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_NOT_APPROVED)));
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
        $feedback_form = new FeedbackForm();
        $products = Products::model()->findAll();
        $current_client = Clients::model()->findByPk(Yii::app()->user->id);

        if($_POST['FeedbackForm'])
        {
            $feedback_form->attributes = $_POST['FeedbackForm'];

            if($feedback_form->validate())
            {
                //TODO: send message
                $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_SUCCESS_SEND)));
            }
        }

        $this->render('index',array('products' => $products, 'current_client' => $current_client, 'feedback_form' => $feedback_form));
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
            self::MESSAGE_SUCCESS_CHANGE => "message_success_change",
            self::MESSAGE_NO_ACCESS => "message_no_access",
            self::MESSAGE_SUCCESS_SEND => "message_success_send",
            self::MESSAGE_NOT_APPROVED => "message_no_approved"
        );

        $this->render($templates[$id]);
    }
    
    
}//Cabinet