<?php


namespace App;



use Routeur\Routeur;


require_once('Routeur/router.php');;
require_once('vendor/autoload.php');


$faker = Faker\Factory::create();


// print_r($_GET);



// print_r($_REQUEST);



// print_r($_SERVER);

$routeur = new Routeur($_GET['url']);



$routeur->get('/', 'App\Controllers\AppController@index');



//user
$routeur->get('/user', 'App\Controllers\UserController@index');
$routeur->post('/createuser', 'App\Controllers\UserController@create_user');
$routeur->get('/displayuser:user', 'App\Controllers\UserController@display_user');
$routeur->get('/modifyuser:user', 'App\Controllers\UserController@modify_user');
$routeur->get('/deleteuser:user', 'App\Controllers\UserController@delete_user');





$routeur->run();






// $routeur->get('/', 'App\Controllers\AppController@index');



// // var_dump($_SERVER);
// $current_url = $_SERVER['REQUEST_URI'];
// var_dump($url);


// $routeurRouteur = new Routeur($current_url);


// $routeurRouteur->get($test);

// var_dump($routeurRouteur);