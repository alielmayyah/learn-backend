<?php

// A function packages code so you can reuse it instead of copy-pasting
function greet($name) {
    echo "Hello, $name!";
    echo "\n";
}

// Calling the function: PHP runs the code inside it with the value you give
greet("Ali");
greet("Sara");
greet("Omar");

echo "---\n";

// Functions can also give back (return) a value instead of printing
function square($number) {
    return $number * $number;
}

$result = square(4);
echo "4 squared is $result";
echo "\n";
