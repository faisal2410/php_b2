<?php
/*
$age = 30; // Global Scope
function myAge() {
    echo $age;
}
myAge();
echo $age;

function myAge() {
    $age = 30; // Local Scope
    echo $age;
}
myAge();
echo $age;

$age = 30;
function myAge() {
    global $age;
    echo $age;
    echo $GLOBALS['age'];
}
myAge();
*/

function myAge() {
    static $age = 0;
    echo $age;
    $age = $age + 1;
}
myAge(); //0
myAge(); //1
myAge(); //2


?>