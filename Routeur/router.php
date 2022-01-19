<?php

namespace Routeur;


require_once('vendor/autoload.php');
require "bootstrap.php";


/**
 * @ORM\Entity
 */

final class Routeur
{
    public $listes_des_routes = [];
    public $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    // public La_Route $route;

    public function add_une_route_bb_get($chemin, $methode)
    {
        $this->listes_des_routes['GET'][] = new La_Route($chemin, $methode);
        // $this->La_Route[]
    }

    // public function add_une_route_bb_post()
    // {
    //     $this->listes_des_routes = new La_Route("aaaa");
    // }

    // public function add_une_route_bb_put()
    // {
    //     $this->listes_des_routes = new La_Route("aaaa");
    // }

    public function check_match($listes_des_routes)
    {
        foreach ($this->$listes_des_routes as $route) {
            if ($route->matches($this->url))
                $route->execute();
            # If route is cool
            // redirect($result)j
        }

        return;
    }
}

class La_Route
{
    public $chemin;
    public $methode;

    public int $id_de_la_route;

    public function __construct(string $chemin, $methode)
    {
        $this->chemin = trim($chemin);
        $this->methode = trim($methode);
        $this->id_de_la_route = rand();
    }

    public function matches()
    {
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
