<?php
require_once 'testOOP16.php';
$obj = new \Home\User("Alexei ", "123456234242 ", "alexey123456@gmail.com " , "Odessa ");
echo $obj->getInfo();
/*
use newClass\Home as Home;
use some\namespace\{ClassA, ClassB}
use function some\namespace\{fn_a,fn_b}
use const some\namespace\{fn_a,fn_b}
*/





?>