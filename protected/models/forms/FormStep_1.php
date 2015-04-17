<?php
class FormStep_1 extends CFormModel
{
    
    public $promotion_number;
    public $user_name;
    public $last_name;
    public $email;
    public $password;
    public $next_pass;
    
    
    public function rules()
	{
		return array(
			// username and password are required
			array('email, password, next_pass, user_name, last_name', 'required'),
            array('email','email'),
            array('password','compare','compareAttribute'=>'next_pass'),		
		);
	}
    
    
}

?>
