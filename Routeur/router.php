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

    // public La_Route $route;

    public function add_une_route_bb_get(La_Route $route)
    {
        $this->listes_des_routes = $route;
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
        foreach ($listes_des_routes as $key => $value) {
            # If route is cool
            // redirect($result)
        }
    }
}

class La_Route
{
    public $la_le_url;
    public int $id_de_la_route;

    public function __construct(string $url)
    {
        $this->la_le_url = $url;
        $this->id_de_la_route = rand();
    }


    /**
     * Get the value of la_le_url
     */
    public function getLa_le_url()
    {
        return $this->la_le_url;
    }

    /**
     * Set the value of la_le_url
     *
     * @return  self
     */
    public function setLa_le_url($la_le_url)
    {
        $this->la_le_url = $la_le_url;

        return $this;
    }
}
