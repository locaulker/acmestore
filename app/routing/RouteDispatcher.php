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

      list($controller, $method) = explode('@', $this->match['target']);
        $this->controller = $controller;
        $this->method = $method;

        if(is_callable(array(new $this->controller, $this->method))) {

          // call_user_func_array(
          //   array(new $this->controller, $this->method), 
          //   array($this->$match['params'])
          // );

          call_user_func_array(
            [new $this->controller, $this->method], 
            [$this->match['params']]
          );

        } else {
          echo "This method {$this->method} is not valid in {$this->controller}";
        }

    } else {
      header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
        // echo "Page Not found";
        view('errors/404');

    }

  }

}