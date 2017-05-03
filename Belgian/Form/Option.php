<?php 

namespace Belgian\Form;

use Belgian\Element\CreateElement;
use Belgian\Element\IGetElement;;

class Option implements IGetElement
{
    private $optArr = array();





    public function __construct(array $optionArr, $selected = NULL)
    {
        foreach ($optionArr as $value => $description)
        {
            $opt = new CreateElement('option');
            $opt->setAttribute('value', $value);
            $opt->addInnerText($description);

            if(!is_null($selected) && $selected == $key) 
            {
                $opt->setAttribute('selected', 'selected');
            }

            $this->optArr[] = $opt->getElement();
        }
    }





    public function getElement()
    {
        return implode('', $this->optArr);
    } 



}

