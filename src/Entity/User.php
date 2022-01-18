<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


class User
{
    use \App\Traits\Nationality;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $user_id;

    /**
     * @ORM\Column(type="string")
     */
    private string $firstname;

    /**
     * @ORM\Column(type="string")
     */
    private string $lastname;


    /**
     * Get the value of id
     */ 
    public function getid()
    {
        return $this->user_id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setid($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }


    public function __construct(int $user_id, string $firstname, string $lastname, string $user_country)
    {

        $this->user_id = $user_id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->setCountry($user_country);
    }

}
