<?php

// This is my controller for the week6 project

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload file
require_once ('vendor/autoload.php');

// Start a session
session_start();

// Instantiate Fat-Fre
$f3 = Base::instance();

// Define default route
$f3->route('GET /', function($f3){
    // save variables to the F3 'hive'
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', '67');

    // Display the home page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3->run();