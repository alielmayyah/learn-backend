<?php

// An array is ONE box that holds a LIST of values
$fruits = ["apple", "banana", "orange"];

// Each item has a number (index). Counting starts at 0, not 1!
echo $fruits[0]; // apple
echo "\n";
echo $fruits[1]; // banana
echo "\n";
echo $fruits[2]; // orange
echo "\n";

// count() tells you how many items are in the list
echo "I have " . count($fruits) . " fruits";
echo "\n";
