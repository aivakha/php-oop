<?php

class Person
{

    const SCHOOL = 'Palomar';

    public static $firstName = 'N/A';
    public static $lastName = 'N/A';

    static function setFullName($firstName, $lastName)
    {
        self::$firstName = $firstName;
        self::$lastName  = $lastName;
    }

    static function getFullName()
    {
        return self::$lastName . ' ' . self::$firstName;
    }
}