<?php


require_once('vendor/autoload.php');
require "bootstrap.php";


class le_routeur
{
    public $listes_des_routes = [];

    public function add_une_route_bb_get()
    {
        $this->listes_des_routes = new la_route();
    }

    public function add_une_route_bb_post()
    {
        $this->listes_des_routes = new la_route();
    }

    public function add_une_route_bb_put()
    {
        $this->listes_des_routes = new la_route();
    }
}

class la_route
{
    
}
