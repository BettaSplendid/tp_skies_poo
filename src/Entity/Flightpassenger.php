<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class Flight_passenger
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $flight_passenger_id;

    /**
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumn(name="ticket_id", referencedColumnName="ticket_id",onDelete="SET NULL")
     */
    private Ticket $ticket_id;

    /**
     * @ORM\ManyToOne(targetEntity="Flight")
     * @ORM\JoinColumn(name="flight_id", referencedColumnName="flight_id",onDelete="SET NULL")
     */
    private Flight $flight_id;

    public function __construct($flight_id)
    {
    }
}
