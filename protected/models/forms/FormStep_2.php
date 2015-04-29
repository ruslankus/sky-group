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
			array('id_number, first_name, last_name, day, month, year, street, house, flat, city, country, post_code', 'required'),
			array('id_number, day, month, year, phone, mobile_phone', 'numerical'),
            array('id_number', 'length', 'min'=>'9', 'max'=>'9'),
            array('year', 'length', 'min'=>4, 'max'=>4),
            array('month, day', 'length', 'min'=>1, 'max'=>2),
		);
	}
    
    /*public $promotion_number;
    public $user_name;
    public $last_name;
    public $email;
    public $password;
    public $next_pass;
    
    public $_promo;
    
    public function rules()
    {
        return array(
			// username and password are required
			array('email, password, next_pass, user_name, last_name', 'required'),
            array('email','email'),
            array('password','compare','compareAttribute'=>'next_pass'),
            array('promotion_number', 'promotionAuth'),		
		);
	}
    public function promotionAuth($attributes, $params)
    {
        if ( !empty($this->promotion_number)) {
            $this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->promotion_number));
            if (!$this->_promo) {
                $this->addError('promotion_number', 'Promotion number is not valid.');
            }
        }
    }*/
}

?>
