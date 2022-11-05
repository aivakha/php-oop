<?php

class A
{
    protected $attributeA_1 = 'Attribute 1 from class A';
    protected $attributeA_2 = 'Attribute 2 from class A';

    public function getAttributes()
    {
        return [
            $this->attributeA_1,
            $this->attributeA_2
        ];
    }
}