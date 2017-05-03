<?php 

require '../vendor/autoload.php';

use Belgian\Form\Label;
use Belgian\Form\Input;


for ($i = 1; $i <= 3; $i++)
{
    
   $radio = new Input('radio', 'optradio', $i);

   $label = new Label(
       $radio->getElement() . 'Option ' . $i
   );

   echo $label->getElement();
   echo '<br />';
   echo PHP_EOL;

}    

/*
<label class="radio-inline">
  <input type="radio" name="optradio">Option 1
</label>
<label class="radio-inline">
  <input type="radio" name="optradio">Option 2
</label>
<label class="radio-inline">
  <input type="radio" name="optradio">Option 3
</label>

*/ 
