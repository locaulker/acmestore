<?php

namespace App\Classes;

class UploadFile
{
  protected $filename;
  protected $max_filesize = 2097152;
  protected $extension;
  protected $path;


  /**
   * get the fileName
   * @return mixed 
   */
  public function getName()
  {
    return $this->filename;
  }



  /**
   * setName of the file
   * @param mixed $file 
   * @param mixed $name 
   * @return mixed 
   */
  public function setName($file, $name = "")
  {
    if($name === "")
    {
      $name = pathinfo($file, PATHINFO_FILENAME);
    }

    $name = strtolower(str_replace(['_', ' '], '-', $name));
    $hash = md5(microtime());
    $ext = $this->fileExtension();

    $this->filename = "{$name}-{$hash}.{$ext}";

  }



  /**
   * set fileExtension
   * @param mixed $file 
   * @return mixed 
   */
  protected function fileExtension($file)
  {
    return $this->extension = pathinfo($file, PATHINFO_EXTENSION);
  }



  /**
   * validate fileSize
   * @param mixed $file 
   * @return mixed 
   */
  public static function fileSize($file)
  {
    $fileobj = new static;
    return $file > $fileobj->max_filesize ? true : false;
  }



  /**
   * validate file upload
   * @param mixed $file 
   * @return mixed 
   */
  public static function isImage($file)
  {

    $fileobj = new static;
    $ext = $fileobj->fileExtension($file);

    $validExt = ['jpg', 'jpeg', 'png', 'bmp', 'gif'];

    if(!in_array(strtolower($ext), $validExt)) {
      return false;
    }

    return true;
  }



  /**
   * get the path where file is uploaded to
   * @return mixed 
   */
  public function path()
  {
    return $this->path;
  }

}