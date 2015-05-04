<?php

class FormStep_1 extends CFormModel
{    
    public $promotion_number;
    public $promotion_number_1;
    public $promotion_number_2;
    public $promotion_number_3;
    public $promotion_number_4;
    public $promotion_number_5;
    public $first_name;
    public $last_name;
    public $email;
    public $password;
    public $next_pass;
    
    public $_promo;
    public $_user;
    
    public function rules()
    {
        return array(
			// username and password are required
			array('email, password, next_pass, first_name, last_name', 'required'),
            array('email','email'),
            array('email','checkUser'),
            array('password','compare','compareAttribute'=>'next_pass'),
            array('password, next_pass', 'length', 'min'=>6, 'max'=>25),
            array('promotion_number_1, promotion_number_2, promotion_number_3, promotion_number_4, promotion_number_5', 'promotionAuth'),		
		);
	}
    public function promotionAuth($attributes, $params)
    {
        $this->promotion_number = $this->promotion_number_1.$this->promotion_number_2.$this->promotion_number_3.$this->promotion_number_4.$this->promotion_number_5;
        if ( empty($this->promotion_number)) {
            $this->addError('promotion_number', Yii::t('skygroup','Field cannot be blank.'));
        } else {
            //comment this in live
            if(strtolower(substr($this->promotion_number, 0, 2)) != 'aa') {
                $this->addError('promotion_number', Yii::t('skygroup','Promoter\'s code is invalid.'));
            }
            //uncomment in live
            /*$this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->promotion_number));
            if (!$this->_promo) {
                $this->addError('promotion_number', Yii::t('yii.skygroup','Promoter\'s code is invalid.'));
            }*/
        }
    }
    public function checkUser($attributes, $params)
    {
        $this->_user = Clients::model()->find("login=:login", array(":login"=>strtolower($this->email)));
        if ($this->_user) {
            $this->addError('email', Yii::t('yii.skygroup','Email already registered.'));
        }
    }
    public function attributeLabels()
    {
        return array(
            'first_name' =>  Yii::t('skygroup','Name'),
            'last_name' =>  Yii::t('skygroup','Last Name'),
            'email' => Yii::t('skygroup','Email'),
            'password' => Yii::t('skygroup','Password'),
            'next_pass' => Yii::t('skygroup', 'Next Pass')

        );
    }

}