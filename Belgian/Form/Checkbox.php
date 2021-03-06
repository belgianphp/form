<?php 

namespace Belgian\Form;

use Belgian\Element\IGetElement;




class Checkbox implements IGetElement
{

    private $e;





    public function __construct($name, $value = NULL)
    {
        self::_setValue($value);

        $this->e = new Input('checkbox', $name, $value);
    }






    public function setAttribute($name, $value = NULL)
    {
        $this->e->setAttribute($name, $value);

        return $this;
    } 





    public function getElement()
    {
        return  $this->e->getElement();
    } 





    public function checked($checked)
    {
        if(
            ($this->_value !== NULL) && 
            ($this->_value == $checked)
        )
        {
            $this->e->setAttribute('checked', 'checked');
        }

        return $this;
    } 





    private function _setValue($value)
    {
        $this->_value = $value; 
        return $this;
    } 





}


