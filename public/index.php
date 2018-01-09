<?php

require_once __DIR__ . '/../bootstrap/init.php';


$app_name = getenv('APP_NAME');

use Illuminate\Database\Capsule\Manager as Capsule;

$category = Capsule::table('categories')->get();

echo '<pre>';
var_dump($category->toArray());