<?php


namespace App;



use Routeur\Routeur;


require_once('Routeur/router.php');;
require_once('vendor/autoload.php');

// print_r($_GET);



// print_r($_REQUEST);



// print_r($_SERVER);

$routeur = new Routeur($_GET['url']);



$routeur->add_une_route_bb_get('/', 'App\Controllers\AppController@index');

$routeur->add_une_route_bb_get('/user', 'App\Controllers\UserController@index');
$routeur->add_une_route_bb_get('/createuser', 'App\Controllers\UserController@create_user');


$routeur->run();

// $routeur->get('/', 'App\Controllers\AppController@index');



// // var_dump($_SERVER);
// $current_url = $_SERVER['REQUEST_URI'];
// var_dump($url);


// $routeurRouteur = new Routeur($current_url);


// $routeurRouteur->add_une_route_bb_get($test);

// var_dump($routeurRouteur);