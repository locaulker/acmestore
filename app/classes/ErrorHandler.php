<?php

namespace App\classes;

class ErrorHandler
{

  // custon error handler
  public function handleErrors($error_number, $error_message, $error_file, $error_line)
  {
    $error = "[{$error_number}]: An error occured in file {$error_file} on line $error_line: $error_message";

    $environment = getenv('APP_ENV');

    if($environment === 'local') {
      $whoops = new \Whoops\Run;
      $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
      $whoops->register();

    } else {

      $data = [
        'to' => getenv('ADMIN_EMAIL'),
        'subject' => 'System Error',
        'view' => 'errors',
        'name' => 'Admin',
        'body' => $error  
      ];

      // method chaining
      ErrorHandler::emailAdmin($data)->outputFriendlyError();

    }

  }
  

  // error displayed in production environmrnt
  public function outputFriendlyError()
  {
    if(ob_get_contents()){
      ob_end_clean();
      view('errors/generic');
      exit;
    }
  }

  // error email sent to to admin
  public static function emailAdmin($data)
  {
    $mail = new Mail;
    $mail->send($data);
    return new static;
  }

}