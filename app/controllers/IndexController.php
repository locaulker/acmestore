<?php

namespace App\Controllers;
use App\Classes\Mail;

class IndexController extends BaseController
{
  
  public function show()
  {

    echo "Inside homePage from the Controller Class";

    $mail = new Mail();

    $data = [

      'to' => 'locaulker@gmail.com',
      'subject' => 'Welcome to Acme Store',
      'view' => 'welcome',
      'name' => 'John Doe',
      'body' => 'Testing email and template'
    
    ];

    if($mail->send($data)) {
      echo "Email sent successfully";
    } else {
      echo "Email sending failed";
    }
    
  }

}