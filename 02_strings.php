<?php

// Strings: https://www.php.net/manual/en/language.types.string.php
$str = "Hello from PHP";
echo strtolower($str) . "<br>";
echo strtoupper($str) . "<br>";
echo str_replace("PHP", "Zvirti",$str) . "<br>"; 
echo str_word_count($str) . '<br>'; 