<?php

namespace App\Classes;

/**
 * Redirect to specific page
 * @var mixed
 * @param $page
 */
class Redirect
{
  public static function to($page)
  {
    header("Location: $page");
  }


  public static function back()
  {
    $uri = $_SERVER['REQUEST_URI'];
    header("Location: $uri");
  }
}