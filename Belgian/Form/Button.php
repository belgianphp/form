<?php 

namespace Belgian\Form;

use Belgian\Element\CreateElement;
use Belgian\Element\IGetElement;

class Button implements IGetElement
{

    public function __construct($value)
    {
        $this->e = new CreateElement('button');
        $this->e->addInnerText($value);
    }






    public function setAttribute($property, $value)
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 





    public function getElement()
    {
        return $this->e->getElement();
    } 



}

