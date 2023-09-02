<?php
     if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
          $user_name = $_POST['name'];
          $user_email = $_POST['email'];
          $user_password = $_POST['password'];
          $user_cpassword = $_POST['password_confirmation']; 


          $string = file_get_contents("person.json");
          $json_a = json_decode($string, true);

          foreach($json_a as $value){
               if($user_email == $value['email']){
                    echo "Email already Exists.";
               }else{
                    if($user_password == $user_cpassword)
                    {
                         $hash = password_hash($user_password, PASSWORD_DEFAULT);
                         $file = file_put_contents('person.json', json_encode($user_name,$user_email,$hash,JSON_PRETTY_PRINT,4));
                         header('location: demo.php');
                    }else{
                         echo "Password didn't match!.";
                    }
               }
          }
     }

?>