<?php


namespace App;
require_once('vendor/autoload.php');
require "bootstrap.php";

use App\Entity\Reservation;
use App\Entity\Ticket;
use App\Entity\User;
use DateTime;
use DateTimezone;

echo "blablaba";

$papy = new User(5655656, "Papy", "Papou");

$paris_brest = new Reservation(595566, new DateTime(), $papy);

$ticket_brest = new Ticket(595656, 559565, $paris_brest);

var_dump($papy);
var_dump($paris_brest);
var_dump($ticket_brest);


// new Ticket(5956566, 59566, new Reservation(595566, new DateTime(), new User()))