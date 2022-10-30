<?php

require_once 'Classes/Person.php';

$person = new Person('Jaddian', 'Forte');
$globals = get_defined_constants();

// display initial person info
echo '<h3>Original Person Info</h3>';
echo "First name: {$person->getFirstName()}";
echo '<br>';
echo "Last name: {$person->getLastName()}";

// change person info
$person->setFirstName('Oleksandr');
$person->setLastName('Ivakha');

// display changed person info
echo '<h3>Changed Person Info</h3>';
echo "First name: {$person->getFirstName()}";
echo '<br>';
echo "Last name: {$person->getLastName()}";

// display global constant
echo '<h3>Global Constant</h3>';
echo "Global constant value: {$globals['CODE_VERSION']}";