<?php

class FormStep_1 extends CFormModel
{    
    public $promotion_number;
    public $promotion_number_1;
    public $promotion_number_2;
    public $promotion_number_3;
    public $promotion_number_4;
    public $promotion_number_5;
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
			array('email, password, next_pass, user_name, last_name', 'application.validators.Required'),
            array('email','application.validators.Email'),
            array('password','application.validators.Compare','compareAttribute'=>'next_pass'),
            array('password, next_pass', 'application.validators.String', 'min'=>6, 'max'=>25),
            array('promotion_number_1, promotion_number_2, promotion_number_3, promotion_number_4, promotion_number_5', 'promotionAuth'),		
		);
	}
    public function promotionAuth($attributes, $params)
    {
        $this->promotion_number = $this->promotion_number_1.$this->promotion_number_2.$this->promotion_number_3.$this->promotion_number_4.$this->promotion_number_5;
        if ( empty($this->promotion_number)) {
            $this->addError('promotion_number', Yii::t('yii.skygroup','Field cannot be blank.'));
        } else {
            //comment this in live
            if(strtolower(substr($this->promotion_number, 0, 2)) != 'aa') {
                $this->addError('promotion_number', Yii::t('yii.skygroup','Promoter\'s code is invalid.'));
            }
            //uncomment in live
            /*$this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->promotion_number));
            if (!$this->_promo) {
                $this->addError('promotion_number', Yii::t('yii.skygroup','Promoter\'s code is invalid.'));
            }*/
        }
    }
}