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
    $f3->set('color', 'Purple');
    $f3->set('radius', '10');
    $f3->set('fruits', array('apple', 'orange', 'banana'));

    // defining an associative array
    $f3->set('desserts', array(
        'chocolate' => 'Chocolate Mousse',
        'vanilla' => 'Vanilla Custard',
        'strawberry' => "Strawberry Shortcake"
    ));

    $f3->set('preferredCustomer', 'true');
    $f3->set('lastLogin', strtotime('-1 week'));



    // Display the home page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
$f3->run();