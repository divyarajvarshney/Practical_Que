<?php
$string = "hello world";

// Display string length
echo "String length: ".strlen($string)."\n";

// Reverse string
$reversed = strrev($string);
echo "Reversed string: ".$reversed."\n";

// Convert to uppercase
$uppercase = strtoupper($string);
echo "Uppercase string: ".$uppercase."\n";

// Convert to lowercase
$lowercase = strtolower($string);
echo "Lowercase string: ".$lowercase."\n";
?>