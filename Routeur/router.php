<?php

namespace Routeur;


require_once('vendor/autoload.php');
require "bootstrap.php";


/**
 * @ORM\Entity
 */

final class Routeur
{

    public $url;
    public $listes_des_routes = [];

    public function __construct($url)
    {
        $this->url = trim($url, '/');
    }

    public function get($chemin, $action)
    {
        $this->listes_des_routes['GET'][] = new Route($chemin, $action);
        // $this->Route[]

    }

    public function post(string $chemin, string $action)
    {
        $this->listes_des_routes["POST"][] = new Route($chemin, $action);
    }



    public function run()
    {
        foreach ($this->listes_des_routes[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->url))
                $route->execute();
        }

        return header('HTTP/1.0 404 Pas trouvé');
    }
}

class Route
{
    public $chemin;
    public $action;
    public $matches;

    public int $id_de_la_route;

    public function __construct(string $chemin, $action)
    {
        $this->chemin = trim($chemin, '/');
        $this->action = trim($action);
        $this->id_de_la_route = rand();
    }

    public function matches($url)
    {
        $chemin = preg_replace('#:([\w]+)#', '([^/]+)', $this->chemin);
        $cheminAVerifier = "#^$chemin$#";


        if (preg_match($cheminAVerifier, $url, $matches)) {
            $this->matches = $matches;
            return true;
        } else {
            return false;
        }
    }

    public function execute()
    {
        $params = explode('@', $this->action);
        $controller = new $params[0]();
        $methode = $params[1];

        return isset($this->matches[1]) ? $controller->$methode($this->matches[1]) : $controller->$methode();
    }

    /**
     * Get the value of chemin
     */
    public function getchemin()
    {
        return $this->chemin;
    }

    /**
     * Set the value of chemin
     *
     * @return  self
     */
    public function setchemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }
}
