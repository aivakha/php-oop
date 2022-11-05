<?php

require_once 'A.php';

class B extends A
{
    private $attributeB_1 = 'Attribute 1 from class B';
    private $attributeB_2 = 'Attribute 2 from class B';

    public function getAttributes()
    {
        return [
            $this->attributeB_1,
            $this->attributeB_2
        ];
    }

    public function getParentAttributes()
    {
        return parent::getAttributes();
    }
}