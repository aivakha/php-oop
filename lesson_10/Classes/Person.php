<?php

class Person
{
    const STATUS = 'Married';

    public $firstName = 'N/A';
    public $lastName = 'N/A';

    public function setFirstName($name)
    {
        $this->firstName = $name;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getInfo()
    {
        return 'Person details: ' . $this->firstName . ' '. $this->lastName;
    }

    public function getStatus()
    {
        return $this::STATUS;
    }
}