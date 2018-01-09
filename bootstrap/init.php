<?php
/** 
 * Start session if not already started
 */
if(!isset($_SESSION)) session_start();

/** Load Environment Variables */
require_once __DIR__ . './../app/config/_env.php';

// Instantiate database class
new \App\Classes\Database();

require_once __DIR__ . '/../app/routing/routes.php';

new \App\RouteDispatcher($router);
