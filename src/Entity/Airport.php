<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class Airport
{
    use \App\Traits\Nationality;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $airport_id;

    /**
     * @ORM\Column(type="string")
     */
    private string $airport_name;

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

    public function __construct(int $airport_id, string $country, string $airport_name)
    {
        $this->airport_id = $airport_id;
        $this->airport_name = $airport_name;
        $this->setCountry($country);
    }
}
