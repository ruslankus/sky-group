<?php
class FormStep_2 extends CFormModel
{
    public $id_number;
    public $first_name;
    public $last_name;
    public $day;
    public $month;
    public $year;
    public $street;
    public $house;
    public $flat;
    public $city;
    public $country;
    public $post_code;
    public $phone;
    public $mobile_phone;
    public $profession;
    public $employment;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('id_number, first_name, last_name, day, month, year, street, house, flat, city, country, post_code', 'application.validators.Required'),
			array('id_number, day, month, year, phone, mobile_phone', 'application.validators.Numerical'),
            array('id_number', 'application.validators.String', 'is'=>'9'),
            array('year', 'application.validators.String', 'min'=>4, 'max'=>4),
            array('month, day', 'application.validators.String', 'min'=>1, 'max'=>2),
		);
	}
}