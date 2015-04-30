<?php
class FormStep_2 extends CFormModel
{
    public $id_number;
    public $id_number_1;
    public $id_number_2;
    public $id_number_3;
    public $id_number_4;
    public $id_number_5;
    public $id_number_6;
    public $id_number_7;
    public $id_number_8;
    public $id_number_9;
    
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
			array('first_name, last_name, day, month, year, street, house, flat, city, country', 'application.validators.Required'),
			array('day, month, year, phone, mobile_phone', 'application.validators.Numerical'),
            array('year', 'application.validators.String', 'min'=>4, 'max'=>4),
            array('month, day', 'application.validators.String', 'min'=>1, 'max'=>2),
            array('id_number_1, id_number_2, id_number_3, id_number_4, id_number_5, id_number_6, id_number_7, id_number_8, id_number_9', 'iRequire'),
		);
	}
    public function iRequire($attributes, $params)
    {
        $this->id_number = $this->id_number_1.$this->id_number_2.$this->id_number_3.$this->id_number_4.$this->id_number_5.$this->id_number_6.$this->id_number_7.$this->id_number_8.$this->id_number_9;
        if ( empty($this->id_number)) {
            $this->addError('id_number', Yii::t('yii.skygroup','Field cannot be blank.'.$this->id_number_1));
        }
        if ( strlen($this->id_number) != 9) {
            $this->addError('id_number', Yii::t('yii.skygroup','Must be equal to {compareValue}.', array("{compareValue}"=>9)));
        }
    }
}