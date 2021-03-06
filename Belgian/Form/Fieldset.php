<?php 

namespace Belgian\Form;

use Belgian\Element\CreateElement;
use Belgian\Element\IGetElement;


class Fieldset implements IGetElement
{
    private $e;




    
    public function __construct($titleLegend)
    {
        $fieldset = new CreateElement('fieldset');
        $legend   = new CreateElement('legend');

        $legend   ->addInnerText($titleLegend);
        $fieldset ->addInnerText($legend);

        $this->e = $element;
    }





    public function setAttribute($property, $value)
    {
        $this->e->setAttribute($property, $value);

        return $this;
    } 





    public function addInnerText($text)
    {
        $this->e->addInnerText($text);

        return $this;
    } 





    public function addInnerJoin(IGetElement $inner)
    {
        $this->e->addInnerJoin($inner);

        return $this;
    } 





    public function getElement()
    {
        return $this->e->getElement();
    } 
    
    
    
    
}

