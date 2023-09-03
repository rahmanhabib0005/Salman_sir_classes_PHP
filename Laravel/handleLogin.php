<?php
session_start();
     $msg = '';
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          $email = $_POST['email'];
          $password = $_POST['password'];

          $string = file_get_contents("person.json");
          $json_a = json_decode($string, true);
     
          foreach($json_a as $value){
               if($value['email'] == $email )
               {
                    if($value['password'] == $password)
                    {
                         $_SESSION['valid'] = true;
                         $_SESSION['timeout'] = time();
                         $_SESSION['email'] = $email;
                         header("location: demo.php");
                    }
                    else{
                         $msg = "!Invalid Credentials";
                    }
               }
          }
     }
     
     if($msg != ''){
          echo $msg;
     }

?>