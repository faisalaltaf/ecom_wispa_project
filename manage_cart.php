<?php
require "config.php";
require "add_to_cart.php";

 $pid = mysqli_real_escape_string($conn, $_POST['pid']);
 $qty = mysqli_real_escape_string($conn, $_POST['qty']);
 $type = mysqli_real_escape_string($conn, $_POST['type']);

 $obj = new add_to_cart();
if($type =='add' ){
  $obj->addProduct($pid,$qty);
}
  echo $obj->totalProduct();
 ?>

