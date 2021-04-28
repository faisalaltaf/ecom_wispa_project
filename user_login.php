<?php
require "config.php";
session_start();
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = md5($_POST['password']);

  $sql = "SELECT * FROM register_users WHERE email = '$email' AND password = '{$password}' ";

  $result = mysqli_query($conn,$sql) or die("faild query");

  if(mysqli_num_rows($result) > 0){
  $row =mysqli_fetch_assoc($result);
     

   $_SESSION['LOGIN_USER'] = 'YES';
   $_SESSION['LOGIN_NAME'] = $row['name'];
   $_SESSION['LOGIN_ID'] = $row['id'];
    

   echo 'valid';
  
}
else{
  
  echo 'wrong';
}
 

 ?>

