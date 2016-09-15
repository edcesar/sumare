<?php

$object = new StdClass;
$object->foo = 'bar';


// print $object->foo;



class DynamicProperties { }
$object = new DynamicProperties;
//print isset($object->foo) ? 'existe' : 'nao existe'; // f

$object->foo = 'bar';
$object->fooz = 'baz';


foreach($object as $property => $value)  { 
     print($property . ' = ' . $value . '<br />'); 
}