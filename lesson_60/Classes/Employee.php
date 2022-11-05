<?php

class Employee
{
    protected $firstName;
    protected $lastName;
    protected $status;
    protected $payRate;
    protected $workedHours;
    protected $id;

    public function __construct($firstName, $lastName, $status, $payRate, $workedHours, $id)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->status = $status;
        $this->payRate = $payRate;
        $this->workedHours = $workedHours;
        $this->id = $id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getPayRate()
    {
        return $this->payRate;
    }

    public function getWorkedHours()
    {
        return $this->workedHours;
    }

    public function getId()
    {
        return $this->id;
    }

    public function calcSalary()
    {
        return $this->getWorkedHours() * $this->getPayRate();
    }

}