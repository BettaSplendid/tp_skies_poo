<?php


namespace App;


// use App\Controllers\AppController;

use Routeur\La_Route;
use Routeur\Routeur;

require_once('vendor/autoload.php');
require "bootstrap.php";
require_once('Routeur/router.php');
// AppController::index();


// // var_dump($_SERVER);
$current_url = $_SERVER['REQUEST_URI'];
// var_dump($url);


$routeurRouteur = new Routeur($current_url);


// $routeurRouteur->add_une_route_bb_get($test);

var_dump($routeurRouteur);