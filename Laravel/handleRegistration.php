<?php
function fileWriteAppend(){
     $current_data = file_get_contents("person.json");
     $array_data = json_decode($current_data, true);
   
     $extra = array(
       'name' => $_POST['name'],
       'email' => $_POST['email'],
       'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
     );
   
     $array_data[] = $extra;
     $final_data = json_encode($array_data);
     return $final_data;
   }
   
   function fileCreateWrite(){
     $file = fopen("person.json","w");
     $array_data = array();
   
     $extra = array(
       'name' => $_POST['name'],
       'email' => $_POST['email'],
       'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
     );

     $array_data[] = $extra;
     $final_data = json_encode($array_data);
     fclose($file);
     return $final_data;
   }


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
                    $error = "Email already Exists.";
               }   
          }
          if(isset($error)){
              echo $error;
          }else{
               if($user_password == $user_cpassword)
               {
                    if(file_exists('person.json')){
                         $final_data = fileWriteAppend();
                         if(file_put_contents('person.json', $final_data))
                         {
                         header("Refresh: 0.8; URL = demo.php");
                         $message = 'Data Added Successfully';
                         }
                    }else
                    {
                         $final_data = fileCreateWrite();
                         if(file_put_contents('person.json',$final_data))
                         {
                         header("Refresh: 0.8; URL = demo.php");
                         $message = 'File created and Data Added Successfully';
                         
                         }
                    }
               }
               else{
               $error = "Password didn't match!.";
               }
          }
     }

     


     if(isset($message)){
          echo $message;
     }
     if(isset($error)){
          echo $error;
     }

?>


