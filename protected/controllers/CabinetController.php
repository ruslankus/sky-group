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
        if(Yii::app()->user->isGuest && $action->id != 'message')
        {
            $this->redirect(Yii::app()->createUrl('cabinet/message',array('id' => self::MESSAGE_NO_ACCESS)));
        }

        return true;
    }


    /**
     * Entry
     */
    function actionIndex()
    {
        $this->render('index');
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