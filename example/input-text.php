<?php 

require '../vendor/autoload.php';

use Belgian\Form\Input;
use Belgian\Form\Label;
use Belgian\Element\CreateElement;



$grp = new CreateElement('div');
$lab = new Label('First Name:');
$usr = new Input('text', 'firstName', 'john');

$grp->setAttribute('class', 'form-group');
$lab->setAttribute('for', 'usr');
$usr->setAttribute('id', 'usr');

$grp->addInnerJoin($lab);
$grp->addInnerJoin($usr);

echo $grp->getElement();

/*
<div class="form-group">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
*/

