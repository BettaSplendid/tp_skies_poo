<?php



namespace App\Entity;

require "bootstrap.php";

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
final class Stopover
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    public int $flight_id;
}
