<?php
class FormStep_1 extends CFormModel
{
    
    public $promotion_number;
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
    }
    
}

?>
