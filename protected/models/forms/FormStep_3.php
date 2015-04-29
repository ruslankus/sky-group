<?php
class FormStep_3 extends CFormModel
{
    public $married;
    public $same_address;
    public $partner_id;
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
			array('married, partner_id, p_fname, p_lname, bday, bmonth, byear', 'marriedRules', 'check'=>'partner_id, p_fname, p_lname, bday, bmonth, byear'),
            array('same_address, street, house, flat, city, country, post_code', 'addressRules', 'check'=>'street, house, flat, city, country, post_code'),
		);
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
