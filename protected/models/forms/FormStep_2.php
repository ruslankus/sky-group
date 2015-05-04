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
			array('day, month, year, street, house, flat, city, country', 'required'),
			array('day, month, year, phone, mobile_phone', 'numerical'),
            array('year', 'application.validators.String', 'min'=>4, 'max'=>4),
            array('month, day', 'application.validators.String', 'min'=>1, 'max'=>2),
            array('id_number_1, id_number_2, id_number_3, id_number_4, id_number_5, id_number_6, id_number_7, id_number_8, id_number_9', 'iRequire'),
		);
	}
    public function iRequire($attributes, $params)
    {
        $this->id_number = $this->id_number_1.$this->id_number_2.$this->id_number_3.$this->id_number_4.$this->id_number_5.$this->id_number_6.$this->id_number_7.$this->id_number_8.$this->id_number_9;
        if ( empty($this->id_number)) {
            $this->addError('id_number', Yii::t('skygroup','Field cannot be blank.'.$this->id_number_1));
        }
        if ( strlen($this->id_number) != 9) {
            $this->addError('id_number', Yii::t('skygroup','Must be equal to {compareValue}.', array("{compareValue}"=>9)));
        }
    }
        
    public function attributeLabels()
    {
        return array(
            'day' =>  Yii::t('skygroup','Day'),
            'month' => Yii::t('skygroup','Month'),
            'year' => Yii::t('skygroup','Year'),
            'street' => Yii::t('skygroup', 'street'),
            'house' => Yii::t('skygroup', 'House'),
            'flat' => Yii::t('skygroup', 'Flat'),
            'city' => Yii::t('skygroup', 'City'),
            'country' => Yii::t('skygroup', 'Country'),
            'post_code' => Yii::t('skygroup', 'Post Code'),
            'phone' => Yii::t('skygroup', 'Phone'),
            'mobile_phone' => Yii::t('skygroup', 'Mobile Phone'),
            'profession' => Yii::t('skygroup', 'Profession'),
            'employment' => Yii::t('skygroup', 'Employment'),
        );
    }
}