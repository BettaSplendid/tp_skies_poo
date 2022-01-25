<?php

namespace App\Controllers;

require_once 'vendor/autoload.php';

use App\Entity\Employee;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Mapping\ClassMetadata;





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

        echo("<br>vardump<br>");
        var_dump($new_user);
        $entityManager = self::getEM();
        $entityManager->persist($new_user);
        $entityManager->flush();
    }
}
