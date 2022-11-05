<?php

require_once 'Classes/Person.php';

$person = new Person();

echo '<h3>Default static values:</h3>';

echo 'First Name: ' . $person::$firstName . '<br>';
echo 'Last Name: ' . $person::$lastName . '<br>';

echo '<h3>New static values:</h3>';
$person::setFullName('Oleksandr', 'Ivakha');
echo 'Full Name: ' . $person::getFullName() . '<br>';

echo '<h3>Static constant:</h3>';
echo 'Full Name: ' . $person::SCHOOL . '<br>';