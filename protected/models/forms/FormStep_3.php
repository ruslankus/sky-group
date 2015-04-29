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
			array('married', 'marriedRules'),
            array('same_address', 'addressRules'),
		);
	}
    public function marriedRules($attributes, $params)
    {
        return array(
            array('partner_id', 'required'),
        );
    }
    public function addressRules($attributes, $params)
    {
        return array(
            array('partner_id', 'required'),
        );
    }
}

?>
