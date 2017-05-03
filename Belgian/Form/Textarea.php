<?php 

namespace Belgian\Form;

use Belgian\Element\CreateElement;
use Belgian\Element\IGetElement;


class Textarea implements IGetElement
{
    private $e;
    



    public function __construct($name, $value = NULL)
    {
        $this->e = new CreateElement('textarea');
        $this->e->setAttribute('name', $name);
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

