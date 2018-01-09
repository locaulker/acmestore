<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');

$match = $router->match();

if($match) {

  // require_once __DIR__ . '/../controllers/BaseController.php';
  // require_once __DIR__ . '/../controllers/IndexController.php';


  // $index = new \App\Controllers\IndexController();
  // $index->show();

  var_dump($match);

} else {
  header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
  echo "Page Not found";

}
