<?php

class ContactsForm extends CFormModel
{    
    public $name;
    public $email;
    public $phone;
    public $country;
    public $text;
    
    public function rules()
    {
        return array(
			// username and password are required
			array('name, email, text, country', 'application.validators.Required'),
            array('email','application.validators.Email')	
		);
	}
}