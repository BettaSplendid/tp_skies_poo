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
    private int $stopover_id;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $takeoff_time;

    /**
     * 
     * @ORM\Column(type ="datetime")
     */
    private \DateTime $landing_time;



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
     * @ORM\JoinColumn(name="id_departure", referencedColumnName="airport_id")
     */
    private Airport $id_departure;

    /**
     * @ORM\ManyToOne(targetEntity="Airport")
     * @ORM\JoinColumn(name="id_arrival", referencedColumnName="airport_id")
     */
    private Airport $id_arrival;

    public function __construct(int $flight_id, Airport $id_departure, Airport $id_arrival, \DateTime $takeoff_time, \DateTime $landing_time, bool $bookable)
    {
        $this->flight_id = $flight_id;
        $this->id_departure = $id_departure;
        $this->id_arrival = $id_arrival;
        $this->takeoff_time = $takeoff_time;
        $this->landing_time = $landing_time;
        $this->bookable = $bookable;
    }

    /**
     * @ORM\Column(type="boolean")
     */
    private bool $bookable;


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
