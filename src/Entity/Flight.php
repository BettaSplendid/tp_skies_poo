<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class Flight
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public int $flight_id;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    public \DateTime $takeoff_time;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    public \DateTime $landing_time;



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

    /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="departure_airport_id", referencedColumnName="airport_id",onDelete="SET NULL")
     */
    public Airport $departure_airport_id;

    /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="destination_airport_id", referencedColumnName="airport_id",onDelete="SET NULL")
     */
    public Airport $destination_airport_id;

    public function __construct(int $flight_id, Airport $departure_airport_id, Airport $destination_airport_id, \DateTime $takeoff_time, \DateTime $landing_time, bool $bookable)
    {
        $this->flight_id = $flight_id;
        $this->departure_airport_id = $departure_airport_id;
        $this->destination_airport_id = $destination_airport_id;
        $this->takeoff_time = $takeoff_time;
        $this->landing_time = $landing_time;
        $this->bookable = $bookable;
    }

    /**
     * @ORM\Column(type="boolean")
     */
    public bool $bookable;


    /**
     * Set the value of bookable
     *
     * @return  self
     */
    public function setBookable($bookable)
    {
        $this->bookable = $bookable;

        return $this;
    }
}
