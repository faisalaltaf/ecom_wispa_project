<?php
// if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
//     ?>
    <script>
//     window.location.href="index.php"
//     </script>
 <?php
// }
// ?>


<?php


require "config.php";
session_start();
require "api.php";



if(isset($_POST['stripeToken'])){

  
 \Stripe\Stripe::setVerifySslCerts(false);

 $token  = $_POST['stripeToken'];


	$data=\Stripe\Charge::create(array(
    
		"amount"=>$_SESSION['total_cart_pay'] ,
		"currency"=>"usd",
		"description"=>"Ecommerce website",
		"source"=>$token,
    
    
		
	));
  
	$status= $data->status;

  
  if($status=='padding'){
    mysqli_query($conn,"update `order` set payment_status='$status',");	
    ?>
    <script>
      window.location.href="checkout.php";
    </script>
    <?php	
  }else{
    mysqli_query($conn,"update `order` set payment_status='$status'");
    ?>
    <script>
      window.location.href='thankyou.php';
      </script>
    <?php	
  }
  
	// $filename=
  
  unset($_SESSION['cart']);
  echo "<pre>";
   
	//  print_r($status);
  //  unset($_SESSION['cart']);
 ?>
  <!-- <script>window.location.href="index.php"</script>  -->
 <?php

}
?>