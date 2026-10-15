<?php

// A loop repeats code for every item in a list, so you don't write echo many times
$fruits = ["apple", "banana", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

echo "---\n";

// A for loop repeats code a fixed number of times
for ($i = 1; $i <= 5; $i++) {
    echo "Count: $i";
    echo "\n";
}
