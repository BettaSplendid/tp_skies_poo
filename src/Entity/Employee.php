<?php


namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */


final class Employee extends User
{
    /**
     * @ORM\Column(type="integer")
     */
    private int $employee_id;
}
