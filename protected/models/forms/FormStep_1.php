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
			array('email, password, next_pass, user_name, last_name', 'application.validators.Required'),
            array('email','application.validators.Email'),
            array('password','application.validators.Compare','compareAttribute'=>'next_pass'),
            array('promotion_number', 'promotionAuth'),		
		);
       /* return array(
			// username and password are required
			array('user_name, last_name, email, password, next_pass', 'iRequire', 'check'=>'user_name, last_name, email, password, next_pass'),
            array('email', 'application.helpers.LangEmailValidator'),
		);*/
	}
    public function promotionAuth($attributes, $params)
    {
        if ( !empty($this->promotion_number)) {
            $this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->promotion_number));
            if (!$this->_promo) {
                $this->addError('promotion_number', Yii::t('skygroup','A PHP extension stopped the file upload.'));
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
