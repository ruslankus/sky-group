<?php
class FormStep_1 extends CFormModel
{
    
    public $promotion_number;
    public $promotion_number_1;
    public $promotion_number_2;
    public $promotion_number_3;
    public $promotion_number_4;
    public $promotion_number_5;
    public $promotion_number_6;
    public $promotion_number_7;
    public $promotion_number_8;
    public $promotion_number_9;
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
            array('promotion_number_1, promotion_number_2, promotion_number_3, promotion_number_4, promotion_number_5, promotion_number_6, promotion_number_7, promotion_number_8, promotion_number_9', 'promotionAuth'),		
		);
       /* return array(
			// username and password are required
			array('user_name, last_name, email, password, next_pass', 'iRequire', 'check'=>'user_name, last_name, email, password, next_pass'),
            array('email', 'application.helpers.LangEmailValidator'),
		);*/
	}
    public function promotionAuth($attributes, $params)
    {
        $this->promotion_number = $this->promotion_number_1.$this->promotion_number_2.$this->promotion_number_3.$this->promotion_number_4.$this->promotion_number_5.$this->promotion_number_6.$this->promotion_number_7.$this->promotion_number_8.$this->promotion_number_9;
        if ( empty($this->promotion_number)) {
            $this->addError('promotion_number', Yii::t('yii.skygroup','Field cannot be blank.'));
        } else {
            $this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->promotion_number));
            if (!$this->_promo) {
                $this->addError('promotion_number', Yii::t('yii.skygroup','Promoter\'s code is invalid.'));
            }
        }
    }
    /*public function iRequire($attribute, $params)
    {
        $lng = Yii::app()->language;
        if (!empty($params['check'])) {
            $attributes = explode(",", str_replace(' ', '', $params['check']));
            foreach ($attributes as $get) {
                if (empty($this->{$get})) {
                    $this->addError($get, ($lng == 'ru' ? 'Необходимо заполнить поле':'Field cannot be blank'));
                }
            }
        }
    }*/
    
    
    
}

?>
