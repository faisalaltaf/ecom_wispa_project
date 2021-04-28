<?php
require "config.php";
require "func1.php";
$name = mysqli_real_escape_string($conn,($_POST['name']));
$email =mysqli_real_escape_string($conn,($_POST['email']));
  $mobile = mysqli_real_escape_string($conn,($_POST['mobile']));    
  $address = mysqli_real_escape_string($conn,($_POST['address']));
$data= date('Y-m-d h:i:s');
$sql1 = "INSERT INTO contact_us (email,company_name, mobile, address )   

              VALUES ('{$email}','{$name}','{$mobile}','{$address}')";
    if(mysqli_query($conn,$sql1)){
      echo "thanks for massage good response";
    }else{
echo "no insert data";
    }


?>