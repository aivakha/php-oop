<?php

require_once 'Classes/Person.php';

$person = new Person();

// display default person info
echo $person->getInfo();

// change person info
$person->setFirstName('Joddian');
$person->setLastName('Forte');

// display changed person info
echo $person->getInfo();

// display person status
echo $person->getStatus();