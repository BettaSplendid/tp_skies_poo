<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */

final class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $reservation_number;

    /**
     * Get the value of reservation_number
     */
    public function getReservation_number()
    {
        return $this->reservation_number;
    }

    /**
     * Set the value of reservation_number
     *
     * @return  self
     */
    public function setReservation_number($reservation_number)
    {
        $this->reservation_number = $reservation_number;

        return $this;
    }

    /**
     * @ORM\Column(type="datetime")
     */
    private \DateTime $Reservation_date;

    /**
     * Get the value of Reservation_date
     */
    public function getReservation_date()
    {
        return $this->Reservation_date;
    }

    /**
     * Set the value of Reservation_date
     *
     * @return  self
     */
    public function setReservation_date($Reservation_date)
    {
        $this->Reservation_date = $Reservation_date;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="$user_id")
     */
    private User $user_id;

    public function __construct(int $reservation_number, \datetime $Reservation_date, User $user_id)
    {
        $this->reservation_number = $reservation_number;
        $this->Reservation_date = $Reservation_date;
        $this->user_id = $user_id;
    }
}
