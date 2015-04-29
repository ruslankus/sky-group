<?php
class FormStep_4 extends CFormModel
{
    public $children;
    
    public function rules()
	{
		return array(
			// username and password are required
			array('children', 'required'),
		);
	}
}

?>
