<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class flight
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $flight_id;



    /**
     * Get the value of flight_id
     */
    public function getFlight_id()
    {
        return $this->flight_id;
    }

    /**
     * Set the value of flight_id
     *
     * @return  self
     */

    public function setFlight_id($flight_id)
    {
        $this->flight_id = $flight_id;

        return $this;
    }

    public function __construct(int $flight_id)
    {
        $this->flight_id = $flight_id;
    }
}
