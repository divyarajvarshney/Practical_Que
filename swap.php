<?php

// Call by Value
function swapValues($a, $b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
}

// Call by Reference
function swapReferences(&$a, &$b) {
    $a = $b;
    $b = $a;
}

$a = 5;
$b = 10;

echo "Before swapping:\na = $a\nb = $b";

// Swap using call by value
swapValues($a, $b);

echo "\nAfter swapping using call by value:\na = $a\nb = $b";

// Swap using call by reference
swapReferences($a, $b);

echo "\nAfter swapping using call by reference:\na = $a\nb = $b";
