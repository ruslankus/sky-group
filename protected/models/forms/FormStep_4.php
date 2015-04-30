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
            $children = $_REQUEST['children'];
            print_r(array_filter($children));
            $i=-1;
            foreach ($children as $child) {
                $i++;
                $this->addError("children[{$i}][name]", 'what is that? '.$atr);
                $this->addError("children[{$i}][surname]", 'what is that? '.$atr);
            }
        }
    }
}

?>
