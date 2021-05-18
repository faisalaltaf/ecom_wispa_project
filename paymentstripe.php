<?php require "config.php" ?> 
<?php require "api.php" ?> 
<?php require "top.php" ?> 

<div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.html">Home</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Stripe Payment </span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="htc__product__grid bg__white ptb--100">


            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title--2 text-center">
<form action="submit.php" method="post">
<script

src="https://checkout.stripe.com/checkout.js" class="stripe-button"
data-key="<?php echo $publishableKey?>"
data-amount= "<?php echo $_SESSION['total_cart_pay'] *100 ?>"
data-name=" <?php echo $_SESSION['LOGIN_NAME']; ?>"
data-description="Ecommerce website"
data-image="asset_front/images/logo/4.png"
data-currency="usd"
data-email=""


>



// stripe.confirmCardPayment(  ).then(function(response) {
//   if (response.error) {
//     // Handle error here
//   } else if (response.paymentIntent && response.paymentIntent.status === 'succeeded') {
//     // Handle successful payment here
//   }
// });

//  </script>
</form>

                        </div></div></div></div></div>
<?php require "footer.php" ?> 
