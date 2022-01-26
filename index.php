<?php


namespace App;

use Routeur\Routeur;

require_once('Routeur/router.php');;
require_once('vendor/autoload.php');


// print_r($_GET);
// print_r($_REQUEST);
// print_r($_SERVER);

$routeur = new Routeur($_GET['url']);



$routeur->get('/', 'App\Controllers\AppController@index');
$routeur->get('/login', 'App\Controllers\AppController@show_login_form');
$routeur->post('/login', 'App\Controllers\AppController@login_process');

// 
// 
//user//
// 
// 
$routeur->get('/user', 'App\Controllers\UserController@index');

// $routeur->get('/login', 'App\Controllers\UserController@show_form');
// $routeur->post('/login', 'App\Controllers\UserController@login_process');


$routeur->get('/createuser', 'App\Controllers\UserController@show_form');
$routeur->post('/createuser', 'App\Controllers\UserController@create_user');

$routeur->get('/displayuser', 'App\Controllers\UserController@display_user');
$routeur->get('/displayuser:user', 'App\Controllers\UserController@display_user');

$routeur->get('/updateuser:user', 'App\Controllers\UserController@update_user');

$routeur->get('/deleteuser:user', 'App\Controllers\UserController@delete_user');

// 
// 
//Employee
// 
// 

$routeur->get('/employee', 'App\Controllers\EmployeeController@index');
$routeur->get('/employeelist', 'App\Controllers\EmployeeController@fetch_All');
$routeur->get('/createemployee', 'App\Controllers\EmployeeController@show_form');
$routeur->post('/createemployee', 'App\Controllers\EmployeeController@create_employee');
$routeur->get('/createrandom', 'App\Controllers\EmployeeController@create_random_employee');

// 
// 
//
// 
// 

$routeur->run();


// $routeur->get('/', 'App\Controllers\AppController@index');



// // var_dump($_SERVER);
// $current_url = $_SERVER['REQUEST_URI'];
// var_dump($url);


// $routeurRouteur = new Routeur($current_url);


// $routeurRouteur->get($test);

// var_dump($routeurRouteur);