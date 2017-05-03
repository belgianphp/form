<?php 

require '../vendor/autoload.php';

use Belgian\Form;

$b = new Form\Button('ok');
$b->setAttribute('class', 'btn');



echo $b->getElement();






