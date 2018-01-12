<?php

$router = new AltoRouter;

// for visitor routes
$router->map('GET', '/', 'App\Controllers\IndexController@show', 'home');

// for admin routes
$router->map('GET', '/admin', 'App\Controllers\Admin\DashboardController@show', 'admin_dashboard');

// 
$router->map('POST', '/admin', 'App\Controllers\Admin\DashboardController@get', 'admin_form');


