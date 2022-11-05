<?php

require_once 'Classes/Employee.php';

$employee_1 = new Employee('Jaddian 1', 'Forte 1', 'Manager 1', 10, 25, 1);
$employee_2 = new Employee('Jaddian 2', 'Forte 2', 'Manager 2', 11, 26, 2);
$employee_3 = new Employee('Jaddian 3', 'Forte 3', 'Manager 3', 12, 27, 3);

echo '<h3>Employees List: </h3>';

echo 'First Name: ' . $employee_1->getFirstName() . '<br>';
echo 'Last Name: ' . $employee_1->getLastName() . '<br>';
echo 'Status: ' . $employee_1->getStatus() . '<br>';
echo 'User ID: ' . $employee_1->getId() . '<br>';
echo 'Pay Rate: ' . $employee_1->getPayRate() . '<br>';
echo 'Worked Hours: ' . $employee_1->getWorkedHours() . '<br>';
echo '<b>' . 'Paycheck Amount: ' . $employee_1->calcSalary() . '</b><br><br>';


echo 'First Name: ' . $employee_2->getFirstName() . '<br>';
echo 'Last Name: ' . $employee_2->getLastName() . '<br>';
echo 'Status: ' . $employee_2->getStatus() . '<br>';
echo 'User ID: ' . $employee_2->getId() . '<br>';
echo 'Pay Rate: ' . $employee_2->getPayRate() . '<br>';
echo 'Worked Hours: ' . $employee_2->getWorkedHours() . '<br>';
echo '<b>' . 'Paycheck Amount: ' . $employee_2->calcSalary() . '</b><br><br>';

echo 'First Name: ' . $employee_3->getFirstName() . '<br>';
echo 'Last Name: ' . $employee_3->getLastName() . '<br>';
echo 'Status: ' . $employee_3->getStatus() . '<br>';
echo 'User ID: ' . $employee_3->getId() . '<br>';
echo 'Pay Rate: ' . $employee_3->getPayRate() . '<br>';
echo 'Worked Hours: ' . $employee_3->getWorkedHours() . '<br>';
echo '<b>' . 'Paycheck Amount: ' . $employee_3->calcSalary() . '</b><br><br>';