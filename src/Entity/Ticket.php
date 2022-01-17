<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class ticket
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $ticket_id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $passport_id;

    /**
     * @ORM\Column(type="float")
     */
    private float $price;

    /**
     * Get the value of ticket_id
     */ 
    public function getTicket_id()
    {
        return $this->ticket_id;
    }

    /**
     * Set the value of ticket_id
     *
     * @return  self
     */ 
    public function setTicket_id($ticket_id)
    {
        $this->ticket_id = $ticket_id;

        return $this;
    }


    /**
     * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumn(name="id", referencedColumnName="$id")
     */
    private Reservation $reservation_number;


    public function __construct(int $ticket_id, int $passport_id, Reservation $reservation_number )
    {
        $this->ticket_id = $ticket_id;
        $this->passport_id = $passport_id;
        $this->reservation_number = $reservation_number;
    }
}
