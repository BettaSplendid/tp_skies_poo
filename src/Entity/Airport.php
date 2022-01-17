<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class Airport
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $airport_id;

    /**
     * @ORM\Column(type="string")
     */
    private string $place;

    /**
     * Get the value of airport_id
     */ 
    public function getAirport_id()
    {
        return $this->airport_id;
    }

    /**
     * Set the value of airport_id
     *
     * @return  self
     */ 
    public function setAirport_id($airport_id)
    {
        $this->airport_id = $airport_id;

        return $this;
    }

    public function __construct(int $airport_id)
    {
        $this->airport_id = $airport_id;
    }
}
