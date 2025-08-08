<?php

// Simple Function
// function sayHello() {
//     echo "Hello, World!";
// } 
// sayHello();

// With Parameter
// function greet($name) {
//     echo "Hello, $name!";
// }

// greet("Anna");
// greet("John");

// Parameter default value
// function greet($name = "Guest") {
//     echo "Hello, $name!";
// }
// greet();
// greet("Alice");

// Return from function
function multiply($a, $b) {
    return $a * $b;
}
$result = multiply(2,3);
echo $result;