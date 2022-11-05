<?php

require_once 'Classes/B.php';

$b = new B();

echo '<h3>Call attributes from class B</h3>';
foreach ($b->getAttributes() as $key => $attribute)
{
    $key += 1;
    echo 'Attribute ' . $key . ': ' . $attribute . '<br>';
}

echo '<h3>Call attributes from class A</h3>';
foreach ($b->getParentAttributes() as $key => $attribute)
{
    $key += 1;
    echo 'Attribute ' . $key . ': ' . $attribute . '<br>';
}
