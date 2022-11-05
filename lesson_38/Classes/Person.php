<?php

define('CODE_VERSION', '1.0.0');

class Person
{

    private $firstName;
    private $lastName;
    private $id;

    public function __construct($firstName, $lastName, $id)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->id = $id;
    }

    public function __destruct() {
        echo 'Now destroying previous objects created...' . '<br><br>';
    }

    public function setEmployeeInfo($firstName, $lastName, $id)
    {
        $this->firstName = $firstName;
    }

    public function getEmployeeFirstName()
    {
        return $this->firstName;
    }

    public function getEmployeeLastName()
    {
        return $this->lastName;
    }

    public function getEmployeeId()
    {
        return $this->id;
    }
}