<?php

namespace App;

use AltoRouter;

class RouteDispatcher
{
  
  protected $match;
  protected $controller;
  protected $method;

  public function __construct(AltoRouter $router)
  {

    $this->match = $router->match();

    // $match = $router->match();

    if($this->match) {

    

    } else {
      header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
      echo "Page Not found";

    }

  }

  

}