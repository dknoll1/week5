<?php
/* Daniel Knoll
 * January 2024
 * https://dknoll.greenriverdev.com/328/diner/
 * this is my controller for the diner app
 */

// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// require the autoload file
require_once ('vendor/autoload.php');

// instantiate fat-free framework (f3)
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
    echo "<h1>Week 5</h1>";
    //display a view page
    $view = new Template();
    echo $view->render('views/home.html');
});

// run f3
$f3->run();
