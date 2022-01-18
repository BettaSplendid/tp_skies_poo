<?php


namespace App;

require_once('vendor/autoload.php');
require "bootstrap.php";

use App\Entity\Airport;
use App\Entity\Flight;
use App\Entity\Flight_passenger;
use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Entity\User;
use App\Traits\Nationality;
use \DateTime;

echo "<br>blablaba<br><br>";

$papy = new User(5655656, "Papy", "Papou", "France");

$paris_brest = new Reservation(595566, new DateTime(), $papy);

$ticket_brest = new Ticket(595656, 559565, $paris_brest);

$paris_airport = new Airport(45455, "Ile de Frabce", "Paris cdg");

$brest_airport = new Airport(56656, "Bregange", "Paspasparis");

$vol_paris_brest = new Flight(58972, $paris_airport, $brest_airport, (new DateTime()), (new DateTime()), true);

$entityManager->persist($vol_paris_brest);
$entityManager->persist($paris_airport);
$entityManager->persist($brest_airport);
$entityManager->persist($paris_brest);
$entityManager->persist($ticket_brest);
$entityManager->persist($papy);
$entityManager->flush();

var_dump($papy);
echo "<br><br>blablaba<br><br>";
var_dump($paris_brest);
echo "<br><br>blablaba<br><br>";
var_dump($ticket_brest);
echo "<br><br>blablaba<br><br>";
var_dump($paris_airport);
echo "<br><br>blablaba<br><br>";
var_dump($brest_airport);
echo "<br><br>blablaba<br><br>";
var_dump($vol_paris_brest);
echo "<br><br>blablaba<br><br>";
