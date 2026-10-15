<?php

// This file runs once PER REQUEST. Every browser visit re-runs it from the top.

// $_SERVER is a superglobal: info about the request itself, filled in by PHP.
$method = $_SERVER['REQUEST_METHOD']; // GET, POST, etc.
$path   = $_SERVER['REQUEST_URI'];    // e.g. /, /hello, /hello?name=Ali

echo "Method: $method\n";
echo "Path: $path\n";

// $_GET holds query string params: /hello?name=Ali -> $_GET['name'] === 'Ali'
if (isset($_GET['name'])) {
    echo "Hello, " . $_GET['name'] . "!\n";
} else {
    echo "No name given. Try ?name=Ali in the URL.\n";
}
