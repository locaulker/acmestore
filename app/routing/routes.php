<?php

$router = new AltoRouter;

$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');

// $match = $router->match();

// if($match) {


//   // $index = new \App\Controllers\IndexController();
//   // $index->show();

//   // var_dump($match); exit;
//   list($controller, $method) = explode('@', $match['target']);

//   // echo $controller . "<br>";
//   // echo $method . "<br>";

//   require_once __DIR__ . '/../controllers/BaseController.php';
//   require_once __DIR__ . '/../controllers/IndexController.php';

//   if(is_callable(array(new $controller, $method))) {

//     // echo "Yes, it is callable";
//     call_user_func_array(array(new $controller, $method), array($match['params']));

//   } else {
//     echo "This method {$method} is not valid in {$controller}";
//   }


// } else {
//   header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
//   echo "Page Not found";

// }
