<?php
const BASEURL='/pone';
define('VIEWS_PATH', dirname(__DIR__) . '/views/');


spl_autoload_register(function ($class) {
    // Replace backslashes with directory separators
    $class = str_replace('\\', '/', $class);
    
    // Define root directory for your project
    $root = __DIR__ . '/';
    
    // Define extension for your PHP files
    $ext = '.php';
    
    // Define path to your file using namespace and root directory
    $path = $root . $class . $ext;
    
    // Require the file if it exists
    if (file_exists($path)) {
        require_once($path);
    }
});