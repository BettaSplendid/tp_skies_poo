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
        echo ("<br>Bienvenue chez les users bb<br>");
    }

    public static function create_user()
    {
        echo ("<br>Create chez les users bb<br>");

        $new_user = new User(rand(), $faker->name(), $faker->name(), rand());
        $entityManager = self::getEM();
        $entityManager->persist($new_user);
        $entityManager->flush();
    }

    public static function display_user($lapin)
    {
        echo ("<br>Display chez les users bb<br>");
        var_dump($lapin);
        $lapin = preg_replace('/[^A-Za-z0-9\-]/', '', $lapin);
        $entityManager = self::getEM();
        $le_reposito = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
        $le_user = $le_reposito->find((int)$lapin);
        var_dump($le_user);
    }



    public static function update_user()
    {
    }

    public static function delete_user($lievre)
    {
        echo ("<br>Delete chez les users bb<br>");
        $entityManager = self::getEM();
        $le_reposito = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
        $lievre = preg_replace('/[^A-Za-z0-9\-]/', '', $lievre);
        $le_user = $le_reposito->find((int)$lievre);
        if (!isset($lievre)) {
            echo ("pasbien");
        };
        var_dump($le_user);
        $entityManager->remove($le_user);
        $entityManager->flush();
    }
}
