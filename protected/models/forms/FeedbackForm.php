<?php

/**
 * ContactForm class.
 * ContactForm is the data structure for keeping
 * contact form data. It is used by the 'contact' action of 'SiteController'.
 */
class FeedbackForm extends CFormModel
{
	public $name;
	public $email;
	public $phone_number;
	public $country;
    public $message;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('name, email, phone_number, country, message', 'required'),
			array('email', 'email'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'name'=>'Имя',
            'country' => 'Страна',
            'email' => 'Эл. почта',
            'phone_number' => 'Номер телефона',
            'message' => 'Ваше сообщение'
		);
	}
}