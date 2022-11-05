<?php

require_once 'Classes/Person.php';

$person_1 = new Person('Jaddian 1', 'Forte 1', 1);
$person_2 = new Person('Jaddian 2', 'Forte 2', 2);
$person_3 = new Person('Jaddian 3', 'Forte 3', 3);

echo '<h3>List of employees:</h3>';

echo 'First Name: ' . $person_1->getEmployeeFirstName() . '<br>';
echo 'Last Name: ' . $person_1->getEmployeeLastName() . '<br>';
echo 'ID: ' . $person_1->getEmployeeId() . '<br><br>';

echo 'First Name: ' . $person_2->getEmployeeFirstName() . '<br>';
echo 'Last Name: ' . $person_2->getEmployeeLastName() . '<br>';
echo 'ID: ' . $person_2->getEmployeeId() . '<br><br>';

echo 'First Name: ' . $person_3->getEmployeeFirstName() . '<br>';
echo 'Last Name: ' . $person_3->getEmployeeLastName() . '<br>';
echo 'ID: ' . $person_3->getEmployeeId() . '<br><br>';