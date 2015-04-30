<?php
class FormStep_4 extends CFormModel
{
    public $has_children;
    public $children;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('has_children', 'hasChildren'),
            array('children','type','type'=>'array','allowEmpty'=>false),
		);
	}
    public function hasChildren ($atr, $params)
    {
        if ($this->has_children == 'yes') {
           // foreach ($this->children as $child) {
                //$this->addError($atr, print_r($this->children));
        //    }
        }
    }
}

?>
