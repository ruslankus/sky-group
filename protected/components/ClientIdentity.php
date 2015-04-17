<?php
class ClientIdentity extends CUserIdentity
{

    const CLIENT_STATUS_NEW = 1;
    const CLIENT_STATUS_APPROVED = 2;
    const CLIENT_STATUS_SUSPENDED = 3;

    /**
     * Authentication for administrators
     * @return bool
     */
    public function authenticate()
    {
        // WORK IN PROGRESS!
        $client = Clients::model()->findByAttributes(array('login' => $this->username));

        //if user found
        if(!empty($client) && $client->status_id == self::CLIENT_STATUS_APPROVED)
        {
            $hashed_pass = md5($this->password);

            //if password not correct
            if($client->password !== $hashed_pass)
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
                $this->setState('id',$client->id);
                $this->setState('login',$client->login);
                $this->setState('email',$client->login);
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