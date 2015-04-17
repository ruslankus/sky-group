<?php
class AdminIdentity extends CUserIdentity
{
    /**
     * Authentication for administrators
     * @return bool
     */

    public function authenticate()
    {
        $administrators = array(
            'admin' => '81dc9bdb52d04dc20036dbd8313ed055',
            'valera' => '81dc9bdb52d04dc20036dbd8313ed055'
        );

        $password = isset($administrators[$this->username]) ? $administrators[$this->username] : null;

        //if user found
        if(!empty($password))
        {
            //if password not correct
            if($password !== md5($this->password))
            {
                //can't connect
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            }
            //if no errors
            else
            {
                //no error
                $this->errorCode = self::ERROR_NONE;

                //write params to session
                $this->setState('id',1);
                $this->setState('role','admin');
            }
        }
        //if user not found
        else
        {
            //can't connect
            $this->errorCode = static::ERROR_USERNAME_INVALID;
        }

        //return error status
        return !$this->errorCode;

    }
}