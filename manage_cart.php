<?php
session_start();
require "config.php";
require "add_to_cart.php";


 $pid = mysqli_real_escape_string($conn, $_POST['pid']);
 $qty = mysqli_real_escape_string($conn, $_POST['qty']);
 $type = mysqli_real_escape_string($conn, $_POST['type']);

$obj=new add_to_cart();

if($type=='add'){
  $obj->addProduct($pid,$qty);
}
if($type=='remove'){
  $obj->removeProduct($pid);
}
if($type=='update'){
  $obj->updateProduct($pid,$qty);
}
echo $obj->totalProduct();
  ?>

