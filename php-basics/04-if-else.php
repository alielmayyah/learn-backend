<?php

// A login check: PHP decides what to do
$password = "secret123";

if ($password == "secret123") {
    echo "Welcome! You are logged in.";
} else {
    echo "Wrong password. Try again.";
}

echo "\n";
