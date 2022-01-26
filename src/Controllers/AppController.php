<?php

namespace App\Controllers;

require_once 'vendor/autoload.php';

use App\Entity\User;
use App\Entity\Employee;
use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\EntityRepository;


class AppController
{

    public static function getEM()
    {
        require "bootstrap.php";
        return $entityManager;
    }
    public static function index()
    {

        echo "<br>App Controller<br>";
    }

    public static function show_login_form()
    {
        include("src/vues/AddUser.php");
    }

    public static function login_process()
    {
        var_dump($_POST);

        if (empty($_POST)) {
            echo ("<br>Données pas recues<br>");
            return;
        }
        echo ("<br>Données recues<br>");

        $entityManager = self::getEM();
        $id = 2;
        $le_reposito = new EntityRepository($entityManager, new ClassMetadata("App\Entity\Employee"));
        $product = $le_reposito->find($id);
        var_dump($product);

    }
}

