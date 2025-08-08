<?php 
// What is a variable?

// Vriables and Data Types in PHP

/*
string
integer
boolean
float or double
null
array
Object
Resource
*/
$name = "Ekato";
$age = 30;
$isMother = false;
$money = 178.5;
$salary = null;

// Print the variables
// echo $name . '<br>';
// echo "Hello " . $name . "!<br>";
// echo "Hello {$name}!<br>";
// echo 'Hello {$name}!<br>';
// echo $age ."<br>";
// echo $isMother . "<br>";
// echo $money . "<br>";
// echo $salary . "<br>";

// Print types of the variables
// echo gettype($name) . "<br>";
// echo gettype($age) . "<br>";
// echo gettype($isMother) . "<br>";
// echo gettype($money) . "<br>";
// echo gettype($salary) . "<br>";

// Print the whole variable
// print_r($name);
// echo "<br>";
// var_dump($name);
// echo "<br>";

// Change the value and print the type
// $name = 20;
// echo gettype($name);
// echo "<br>";

// Variable checking functions
// var_dump(is_string($name));
// echo "<br>";
// var_dump(is_int($age));
// echo "<br>";
// var_dump(is_string($age));
// echo "<br>"; 
// var_dump(is_int($salary));
// echo "<br>";        
// var_dump(is_double($money));
// echo "<br>";
// var_dump(is_bool($isMother));

var_dump(isset($name));
var_dump(isset($age));
var_dump(isset($isMother));
var_dump(isset($money));
var_dump(isset($salary));
