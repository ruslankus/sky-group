<?php
class FormStep_6 extends CFormModel
{
    public $discount_is;
    public $discount;
    public $packet;
    
    public $_promo;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('discount_is, discount', 'checkDiscount'),
			array('packet', 'application.validators.Required'),
		);
	}
    public function checkDiscount($attributes, $params)
    {
        if ($this->discount_is) {
            if ( empty($this->discount) ) {
                $this->addError('discount', Yii::t('yii.skygroup','Field cannot be blank.'));
            } else {
                $this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->discount));
                if (!$this->_promo) {
                    $this->addError('discount', Yii::t('yii.skygroup','Discount code is invalid.'));
                }
            }
        }
    }
}

?>
