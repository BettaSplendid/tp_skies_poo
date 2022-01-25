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
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    public int $employee_id;

    public function rand_id()
    {
        $this->employee_id = rand();
    }

    /**
     * Get the value of employee_id
     */
    public function getEmployee_id()
    {
        return $this->employee_id;
    }

    /**
     * Set the value of employee_id
     *
     * @return  self
     */
    public function setEmployee_id($employee_id)
    {
        $this->employee_id = $employee_id;

        return $this;
    }
}
