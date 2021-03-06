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
     * @ORM\Column(type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     */
    public int $id_reservation;

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
    public function setReservation_number($id_reservation)
    {
        $this->reservation_number = $id_reservation;

        return $this;
    }

    /**
     * @ORM\Column(type="datetime")
     */
    public \DateTime $Reservation_date;

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
     * @ORM\JoinColumn(name="user_id", referencedColumnName="user_id",onDelete="SET NULL",onDelete="SET NULL")
     */
    public User $user_id;


    public function __construct(int $id_reservation, \datetime $Reservation_date, User $user_id)
    {
        $this->reservation_number = $id_reservation;
        $this->Reservation_date = $Reservation_date;
        $this->user_id = $user_id;
    }
}
