<?php

namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class User
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

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
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setid($id)
    {
        $this->id = $id;

        return $this;
    }


    public function __construct(int $id, string $firstname, string $lastname)
    {

        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

}
