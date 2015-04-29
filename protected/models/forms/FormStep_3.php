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
			// username and password are required
			array('married, partner_id, p_fname, p_lname, bday, bmonth, byear', 'marriedRules'),
            array('same_address, street, house, flat, city, country, post_code', 'addressRules'),
		);
	}
    public function marriedRules($attributes, $params)
    {
        if ($this->married == 'yes') {
            if ( empty( $this->partner_id )) {
                  $this->addError('partner_id', "Требуется вход");
             }
            if ( empty( $this->p_fname )) {
                  $this->addError('p_fname', "Требуется вход");
             }
            if ( empty( $this->p_lname )) {
                  $this->addError('p_lname', "Требуется вход");
             }
            if ( empty( $this->bday )) {
                  $this->addError('bday', "Требуется вход");
             }
            if ( empty( $this->byear )) {
                  $this->addError('byear', "Требуется вход");
             }
            if ( empty( $this->bmonth )) {
                  $this->addError('bmonth', "Требуется вход");
             }
            if ( !is_numeric( $this->byear )) {
                  $this->addError('byear', "Неправильный выбор");
             }
            if ( !is_numeric( $this->bmonth )) {
                  $this->addError('bmonth', "Неправильный выбор");
             }
            if ( !is_numeric( $this->bday )) {
                  $this->addError('bday', "Неправильный выбор");
             }
        }
    }
    public function addressRules($attributes, $params)
    {
        if ($this->same_address == 'no') {
            if ( empty( $this->street )) {
                  $this->addError('street', "Требуется вход");
             }
            if ( empty( $this->house )) {
                  $this->addError('house', "Требуется вход");
             }
            if ( empty( $this->flat )) {
                  $this->addError('flat', "Требуется вход");
             }
            if ( empty( $this->city )) {
                  $this->addError('city', "Требуется вход");
             }
            if ( empty( $this->country )) {
                  $this->addError('country', "Требуется вход");
             }
            if ( empty( $this->post_code )) {
                  $this->addError('post_code', "Требуется вход");
             }
        }
    }
}

?>
