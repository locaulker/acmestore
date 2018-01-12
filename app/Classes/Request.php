<?php

namespace App\Classes;

class Request
{

  /**
   * return all requests
   * @param mixed $is_array 
   * @return mixed 
   */
  public static function all($is_array = false)
  {
    $result = [];
    if(count($_GET) > 0) $result['get'] = $_GET;
    if(count($_POST) > 0) $result['post'] = $_POST;
    $result['file'] = $_FILES;

    return json_decode(json_encode($result), $is_array);

  }


  /**
   * get specific request type
   * @param mixed $key 
   * @return mixed 
   */
  public static function get($key)
  {
    $object = new static;
    $data = $object->all();

    return $data->$key;
  }


  // check request availability







  
  // get request data
  // refresh request
}