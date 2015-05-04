<?php
class FormStep_7 extends CFormModel
{
    public $other_person;
    public $c_fname;
    public $c_lname;
    public $c_street;
    public $c_house;
    public $c_flat;
    public $c_city;
    public $c_zip;
    public $c_country;
    public $c_phone;
    public $c_phone_mobile;
    public $c_email;
    
    public function rules()
    {
        return array(
            array('other_person, c_fname, c_lname, c_street, c_house, c_city, c_country, c_zip, c_email', 'otherRules', 'check'=>'c_fname, c_lname, c_street, c_house, c_city, c_country, c_zip, c_email'),
        );
    }
    public function otherRules($attribute, $params)
    {
        if (!empty($params['check']) && $this->other_person == 'yes') {
            $attributes = explode(",", str_replace(' ', '', $params['check']));
            foreach ($attributes as $get) {
                if (empty($this->{$get})) {
                    $this->addError($get, Yii::t('skygroup','Field cannot be blank.'));
                }
            }
        }
    }
}

