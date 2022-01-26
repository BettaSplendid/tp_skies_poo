<?php

namespace App\Controllers;

require_once 'vendor/autoload.php';

use App\Entity\User;
use App\Entity\Employee;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Faker;





class UserController
{

    public array $LESINFOS = ['firstname', 'lastname'];

    public static function getEM()
    {
        require "bootstrap.php";
        return $entityManager;
    }

    public static function index()
    {
        echo ("<br>Bienvenue chez les users bb<br>");
    }

    public static function show_form()
    {
        include("src/vues/AddUser.php");
    }


    public static function create_user(array $LESINFOS = null)
    {
        echo ("<br>Create chez les users bb<br>");
        $LESINFOS['firstname'] = $_POST['firstname'];
        $LESINFOS['lastname'] = $_POST['lastname'];
        var_dump($LESINFOS);
        echo ("balbla");

        $faker = Faker\Factory::create();
        $new_user = new User(rand(), $LESINFOS['firstname'], $LESINFOS['lastname'], rand());
        // $new_user = new User(rand(), rand(), rand(), rand());
        $entityManager = self::getEM();
        $entityManager->persist($new_user);
        $entityManager->flush();
    }

    public static function display_user($lapin = null)
    {
        echo ("<br>Display chez les users bb<br>");
        if ($lapin == null)
            echo ("No user argument");
        var_dump($lapin);
        $lapin = preg_replace('/[^A-Za-z0-9\-]/', '', $lapin);
        $entityManager = self::getEM();
        $le_reposito = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
        $le_user = $le_reposito->find((int)$lapin);
        var_dump($le_user);
    }



    public static function update_user($lapin, $new_fname, $new_lname)
    {
        echo ("<br>Modify chez les users bb<br>");
        $entityManager = self::getEM();
        $le_reposito = new EntityRepository($entityManager, new ClassMetadata("App\Entity\User"));
        $le_user = $le_reposito->find((int)$lapin);
        $le_user->setFirstname($new_fname);
        $le_user->setLastname($new_lname);
        $entityManager->persist($le_user);
        $entityManager->flush();
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
