<?php


namespace App\Traits;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

trait Nationality
{
    /**
     * @ORM\Column(type="string")
     */
    private string $country;

    /**
     * Get the value of country
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @return  self
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }
}
