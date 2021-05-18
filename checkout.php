<?php require "top.php";
require "config.php";
require "func1.php";
require "api.php";


if(!isset($_SESSION['cart']) || count($_SESSION['cart'])==0){
    ?>
    <script>
    window.location.href="index.php"
    </script>
<?php
}
?>

<?php 
$cart_total=0;

if(isset($_POST['submit'])){
        
     $user_id=$_SESSION['LOGIN_ID'];
	 $address=mysqli_real_escape_string($conn,$_POST['address']);
     $city=mysqli_real_escape_string($conn,$_POST['city']);
     $pincode=mysqli_real_escape_string($conn,$_POST['pincode']);
	 $payment_type=mysqli_real_escape_string($conn,$_POST['payment_type']);
	 $name_user=mysqli_real_escape_string($conn,$_POST['name']);
	 $mobile=mysqli_real_escape_string($conn,$_POST['mobile']);
     $payment_status='padding';
     
     foreach($_SESSION['cart'] as $key=>$val){
        	$productArr=get_product($conn,'','',$key);
            $price=$productArr[0]['price'];
         	$qty=$val['qty'];
        	$cart_total=$cart_total+($price*$qty);
        }

        // $payment_status=='padding';
	$total_price=$cart_total;    
	 if($payment_type=='cod'){
	 	$payment_status='cash on delivery';
   

	 }
	$order_status= '1';
	 $added_on=date('Y-m-d h:i:s');
     
	// $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);

    
	//  echo "INSERT INTO `order`(`user_id`, `address`, `city`, `pincode`, `payment_type`, `user_name`, `mobile`, `total_price`, `payment_status`,`order_status`, `added_on`) VALUES ('$user_id','$address','$city','$pincode','$name_user','$mobile','$payment_type','$total_price','$payment_status','$order_status','$added_on')";
	mysqli_query($conn,"INSERT INTO `order`(`user_id`, `address`, `city`, `pincode`, `payment_type`, `user_name`, `mobile`, `total_price`, `payment_status`,`order_status`, `added_on`) VALUES ('$user_id','$address','$city','$pincode','$payment_type','$name_user','$mobile','$total_price','$payment_status','$order_status','$added_on')");
	
     $order_id=mysqli_insert_id($conn);
	
	foreach($_SESSION['cart'] as $key=>$val){
		$productArr=get_product($conn,'','',$key);
		$price=$productArr[0]['price'];
		$qty=$val['qty'];
		$sql="INSERT INTO order_detail(`order_id`, `product_id`, `qty`, `price`) VALUES ('$order_id','$key','$qty','$price')";
		mysqli_query($conn,$sql);
	}

    
    if($payment_type=='stripe'){
        ?> 
    
<script> window.location.href="paymentstripe.php"</script>
<?php

?>




  <?php


}
if($payment_type=='cod'){
    unset($_SESSION['cart']);	

    ?>




    <script>
        window.location.href='myorder.php';
        </script>
  <?php
    }



}
	

?>
	


    
   




    <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">shopping cart</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="checkout-wrap ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="checkout__inner">
                            <div class="accordion-list">
                                <div class="accordion">
                                    <?php 
                                    
                                    $accordion_class="accordion__title";
                                    if(!isset($_SESSION['LOGIN_USER'])){ 
                                        $accordion_class="accordion__hide";
                                    ?>
                                    <div class="accordion__title active">
                                        Checkout Method
                                    </div>
                                    <div class="accordion__body" style="">
                                        <div class="accordion__body__form">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="checkout-method">
                                                    <div class="checkout-method__login">
                                                    <form id="login-form"  method="post">
                                                            <h5 class="checkout-method__title">Login</h5>
                                                            <h5 class="checkout-method__title">Already Registered?</h5>
                                                            <p class="checkout-method__subtitle">Please login below:</p>
                                                            <div class="single-input">
                                                                <label for="user-email">Email Address</label>
                                                                <input type="email"  name="email" id="login_email" placeholder="Your Email*" style="width:100%">
                                                                <span style="color: red;" class="field_error" id="login_email_error"></span>

                                                            </div>

                                                            <div class="single-input">
                                                                <label for="user-pass">Password</label>
                                                                <input type="password"  name="password" id="login_password" placeholder="Your Password*" style="width:100%">
                                                                <span style="color: red;" class="field_error" id="login_password_error"></span>

                                                            </div>
                                                            <p class="require">* Required fields</p>
                                                          
                                                            <div class="dark-btn">
                                                            <button type="button" onclick="login_page()"  class="fv-btn">Login</button>

                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                  	<form id="register-form" action="#" method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id="name" name="name" placeholder="Your Name*" style="width:100%">
										</div>
                                        <span style="color: red;" class="field_error" id="name_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email" id="email" name="email" placeholder="Your Email*" style="width:100%">
										</div>
                                        <span style="color: red;" class="field_error" id="email_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="text" id="mobile" name="mobile" placeholder="Your Mobile*" style="width:100%">
										</div>
                                        <span style="color: red;" class="field_error" id="mobile_error"></span>
									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password" id="password" name="password" placeholder="Your Password*" style="width:100%">
										</div>
                                        <span style="color: red;" class="field_error" id="password_error"></span>
									</div>
									
									<div class="contact-btn">
										<button type="button" class="fv-btn" onclick="user_register()">Register</button>
									</div>
								</form>
                                <div class="register-msg form-output">
									<p class="form-messege field_error"></p>
								</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  <?PHP } ?>
                                   
                                    <div class="<?php echo $accordion_class?>">
                                        shipping information
                                    </div>
										<div class="accordion__body">
                                    <form action="" method="post">
											<div class="bilinfo">
												
													<div class="row">
														<div class="col-md-12">
															<div class="single-input">
																<input type="hidden" name="name" value="<?php echo  $_SESSION['LOGIN_NAME'] ?>" placeholder="enter the name" required>
															</div>
														</div>
														<div class="col-md-12">
															<div class="single-input">
																<input type="text" name="address" placeholder="Street Address" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="single-input">
																<input type="text" name="city" placeholder="City/State" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="single-input">
																<input type="text" name="pincode" placeholder="Post code/ zip" required>
															</div>
														</div>
														<div class="col-md-6">
															<div class="single-input">
																<input type="text" name="mobile" placeholder="Enter the Mobile No" value="+92" required>
															</div>
														</div>
														
													</div>
												
											</div>
										</div>
										<div class="<?php echo $accordion_class?>">
											payment information
										</div>
										<div class="accordion__body">
											<div class="paymentinfo">
												<div class="single-method">
													 <input type="radio" name="payment_type" value="cod"/>
													&nbsp;&nbsp;pay with card <input type="radio"  name="payment_type" value="stripe" required/>

                                                   


<div class="send__btn">
                                            <div id="paypal-payment-button"></div>
                                        </div>

                                            	</div>
												<div class="single-method">
												  
												</div>
											</div>
										</div>
										 <input type="submit" name="submit" value="submit">
									</form>
                                   
                                </div>
                            </div>
                          
                        </div>

                    </div>
     
                    <div class="col-md-4">
                        <div class="order-details">
                            <h5 class="order-details__title">Your Order</h5>
                            <?php 
                                    
                                        $cart_total=0;
                                    
                                    
                
                                        foreach($_SESSION['cart'] as $key=>$val){
                                            $productArr=get_product($conn,'','',$key);
                                            $pname=$productArr[0]['product_name'];
                                            $rmp=$productArr[0]['rmp'];
                                            $price=$productArr[0]['price'];
                                            $image=$productArr[0]['image'];
                                            $qty=$val['qty'];
                            
                            $cart_total= $cart_total+($price*$qty);
                                   $total = $qty*$price; 
                                    ?>
                            <div class="order-details__item">


                                <div class="single-item">
                                    <div class="single-item__thumb">
                                    <img src="media/product/<?php echo $productArr['0']['image'];  ?>">
                                    </div>
                                    <div class="single-item__content">
                                        <a href="#"><?php echo $pname ?></a>
                                        <span class="price"><?php echo $price *$qty ?></span>
                                    </div>
                                    <div class="single-item__remove">
                                        <a href="javascript:void(0)" onclick="manage_cart('<?php echo $key ?>','remove')"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                              
                            </div>
                            <?php }?>
                            <div class="order-details__count">
                                <div class="order-details__count__single">
                                    <h5>sub total</h5>
                                    <span class="price"><?php echo $cart_total; ?></span>
                                </div>
                                <!--  -->
                            </div>
                        
                            <div class="ordre-details__total">
                                <h5>Order total</h5>

                                <?php
?>
                                <h4 id="total" value="<?php echo $cart_total; ?>" class="price"><?php   echo ($cart_total) ?></h4>
                            </div>
                            <form action="submit.php" method="post">
                            <?php  $_SESSION['total_cart_pay']= $cart_total; ?>

<?php

$a=  $_SESSION['total_cart_pay'] ;
  
 
 ?>


</form>


                        </div>
                    </div>
                </div>
            </div>
        </div>

      
        <script src="https://www.paypal.com/sdk/js?client-id=ASkiJd9Y8TfRIQhRxclfiOCu7EZ45PrI6DB0-vNGmNnkn2mZLiSK1sVpVyprM2TbQl6Jjz_x5iFFVswc&disable-funding=credit,card"></script>
        <script>paypal.Buttons().render('#paypal-payment-button');</script>
<?php require "footer.php" ?>






