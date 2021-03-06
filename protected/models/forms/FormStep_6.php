<?php
class FormStep_6 extends CFormModel
{
    public $discount;
    public $packet;
    
    public $_promo;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('discount_is, discount', 'checkDiscount'),
		);
	}
    public function checkDiscount($attributes, $params)
    {
        if ($this->discount) {
             $this->_promo = Discounts::model()->find("code=:promo", array(":promo"=>$this->discount));
             if (!$this->_promo) {
                $this->addError('discount', Yii::t('skygroup','Discount code is invalid.'));
             }
        }
    }
}

?>
