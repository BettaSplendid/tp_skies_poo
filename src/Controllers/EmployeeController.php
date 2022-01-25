<?php

namespace App\Controllers;

require_once 'vendor/autoload.php';

use App\Entity\Employee;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Faker;




class EmployeeController
{
    public static function getEM()
    {
        require "bootstrap.php";
        return $entityManager;
    }

    public static function index()
    {
        echo ("<br>Bienvenue chez les employee  bb<br>");
        self::fetch_All();
    }

    public static function fetch_All()
    {
        $entityManager = self::getEM();
        $le_reposito = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Employee"));
        $le_user = $le_reposito->findAll();
        var_dump($le_user);
    }


    public static function show_form()
    {
        include("src/vues/AddEmployee.php");
    }


    public static function create_employee(array $LESINFOS = null)
    {
        echo ("<br>Create chez les employee bb<br>");
        $LESINFOS['firstname'] = $_POST['firstname'];
        $LESINFOS['lastname'] = $_POST['lastname'];
        var_dump($LESINFOS);

        echo ("balbla");

        $new_user = new Employee(rand(), $LESINFOS['firstname'], $LESINFOS['lastname'], rand());

        $new_user->rand_id();

        echo ("<br>vardump<br>");
        var_dump($new_user);
        $entityManager = self::getEM();
        $entityManager->persist($new_user);
        $entityManager->flush();
    }

    public static function create_random_employee()
    {
        echo ("<br>Create Random<br>");
        $faker = Faker\Factory::create();
        $new_user = new Employee(rand(), $faker->firstname, $faker->lastname, $faker->country);
        $new_user->rand_id();
        $entityManager = self::getEM();
        $entityManager->persist($new_user);
        $entityManager->flush();

    }
}
