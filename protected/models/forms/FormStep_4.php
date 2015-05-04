<?php
class FormStep_4 extends CFormModel
{
    public $has_children;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('has_children', 'hasChildren'),
		);
	}
    public function hasChildren ($atr, $params)
    {
        if ($this->has_children == 'yes') {
            if(isset($_REQUEST['children'])) {
                $children = $_REQUEST['children'];
                $i=-1;

                foreach ($children as $child) {
                    $i++;
                    //first child is required, other only if atleast one input submited
                    if ( $i == 0 || ($child['name'] || $child['surname'] || $child['day'] || $child['month'] || $child['year']) ) {

                        if (empty($child['name'])) {
                            $this->addError("children_".$i."_name", Yii::t('skygroup','Field cannot be blank.'));
                        }
                        if (empty($child['surname'])) {
                            $this->addError("children_".$i."_surname", Yii::t('skygroup','Field cannot be blank.'));
                        }
                        if (empty($child['day'])) {
                            $this->addError("children_".$i."_day", Yii::t('skygroup','Field cannot be blank.'));
                        }
                        if (empty($child['month'])) {
                            $this->addError("children_".$i."_month", Yii::t('skygroup','Field cannot be blank.'));
                        }
                        if (empty($child['year'])) {
                            $this->addError("children_".$i."_year", Yii::t('skygroup','Field cannot be blank.'));
                        }
                    }
                }
            }
            else {
                $this->addError("children_0_name", Yii::t('skygroup','Field cannot be blank.'));
                $this->addError("children_0_surname", Yii::t('skygroup','Field cannot be blank.'));
                $this->addError("children_0_year", Yii::t('skygroup','Field cannot be blank.'));
                $this->addError("children_0_day", Yii::t('skygroup','Field cannot be blank.'));
                $this->addError("children_0_month", Yii::t('skygroup','Field cannot be blank.'));
            }
        }
    }
}

?>
