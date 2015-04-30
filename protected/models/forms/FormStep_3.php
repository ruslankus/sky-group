<?php
class FormStep_3 extends CFormModel
{
    public $married;
    public $same_address;
    
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
    
    public $p_fname;
    public $p_lname;
    public $bday;
    public $bmonth;
    public $byear;
    
    public $profession;
    public $employment;
    
    public $street;
    public $house;
    public $flat;
    public $city;
    public $country;
    public $post_code;
    
    public function rules()
	{
		return array(
			array('married, p_fname, p_lname, bday, bmonth, byear', 'marriedRules', 'check'=>'p_fname, p_lname, bday, bmonth, byear'),
            array('same_address, street, house, flat, city, country', 'addressRules', 'check'=>'street, house, flat, city, country'),
            array('id_number_1, id_number_2, id_number_3, id_number_4, id_number_5, id_number_6, id_number_7, id_number_8, id_number_9', 'iRequire'),
		);
	}
    public function iRequire($attributes, $params)
    {
        if ( $this->married == 'yes') {
            $this->id_number = $this->id_number_1.$this->id_number_2.$this->id_number_3.$this->id_number_4.$this->id_number_5.$this->id_number_6.$this->id_number_7.$this->id_number_8.$this->id_number_9;
            if ( empty($this->id_number)) {
                $this->addError('id_number', Yii::t('yii.skygroup','Field cannot be blank.'.$this->id_number_1));
            }
            if ( strlen($this->id_number) != 9) {
                $this->addError('id_number', Yii::t('yii.skygroup','Must be equal to {compareValue}.', array("{compareValue}"=>9)));
            }
        }
    }
    public function marriedRules($attribute, $params)
    {
        if (!empty($params['check']) && $this->married == 'yes') {
            $attributes = explode(",", str_replace(' ', '', $params['check']));
            foreach ($attributes as $get) {
                if (empty($this->{$get})) {
                    $this->addError($get, Yii::t('yii.skygroup','Field cannot be blank.'));
                }
            }
        }
    }
    public function addressRules($attribute, $params)
    {
        if (!empty($params['check']) && $this->same_address == 'no') {
            $attributes = explode(",", str_replace(' ', '', $params['check']));
            foreach ($attributes as $get) {
                if (empty($this->{$get})) {
                    $this->addError($get, Yii::t('yii.skygroup','Field cannot be blank.'));
                }
            }
        }
    }
}

?>
