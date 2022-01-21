<?php

namespace App\Controllers;

use App\Entity\User;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;

class UserController
{

    public static function getEM()
    {
        require "bootstrap.php";
        return $entityManager;
    }

    public static function index()
    {
        echo("<br>Bienvenue chez les users bb<br>");
    }

    public static function create_user()
    {
        echo("<br>Create chez les users bb<br>");
        $new_user = new User(rand(), "Jean", "Richard", "Belgique");
        $entityManager = self::getEM();
        $entityManager->persist($new_user);
        $entityManager->flush();
    }

    public static function display_user($target_id)
    {
        $le_reposito = new EntityRepository(self::getEM(), new ClassMetadata("App\Entity\User"));

    }



    public static function update_user()
    {
    }

    public static function delete_user()
    {
    }
}
