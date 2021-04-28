<?php
require "config.php";
require "func1.php";

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$password = mysqli_real_escape_string($conn, md5($_POST['password']));
$data= date('Y-m-d h:i:s');

$sql = "SELECT * FROM register_users WHERE email = '$email' ";
$result = mysqli_query($conn, $sql);
$check_user = mysqli_num_rows($result);
if ($check_user > 0) {

  echo  $present ='email_present';

} else{
    $sql1 = "INSERT INTO register_users (email,name, mobile, password )   

              VALUES ('{$email}','{$name}','{$mobile}','{$password}')";
    if(mysqli_query($conn,$sql1)){
      echo "thanks for massage good response";
    }else{
echo "no insert data";
    }

  echo   $insert = "insert";
}