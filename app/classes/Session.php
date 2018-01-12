<?php

namespace App\Classes;

class Session
{
  // create a session
  /**
   * @param $name
   * @param $value
   * @return mixed
   * @throws \Exception
   */
  public static function add($name, $value)
  {

    if($name != '' && !empty($name) && $value != '' && !empty($value)) {
      return $_SESSION[$name] = $value;
    }

    throw new \Exception('Name and Value Required');

  }

  // get value from session
  /**
   * get
   * @param mixed $name 
   * @return mixed 
   */
  public static function get($name)
  {
    return $_SESSION[$name];
  }

  // check if session exists
  /**
   * has
   * @param mixed $name 
   * @return mixed 
   */
  public static function has($name)
  {
    if($name != '' && !empty($name)) {
      return (isset($_SESSION[$name])) ? true : false;
    }

    throw new \Exception('Name is required');
  }

  /**
   * 
   * @var mixed
   */
  // remove session
  public static function remove($name)
  {
    if(self::has($name)) {
      unset($_SESSION[$name]);
    }
  }
}