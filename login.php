<?php require "top.php";
require "config.php";
	

?>

<section class="htc__contact__area ptb--100 bg__white">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Login</h2>
								</div>
							</div>
							<div class="col-xs-12">
								<form id="login-form"  method="post">
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="email"  name="email" id="login_email" placeholder="Your Email*" style="width:100%">
										</div>
                                        <span style="color: red;" class="field_error" id="login_email_error"></span>

									</div>
									<div class="single-contact-form">
										<div class="contact-box name">
											<input type="password"  name="password" id="login_password" placeholder="Your Password*" style="width:100%">
										</div>
                                        <span style="color: red;" class="field_error" id="login_password_error"></span>

									</div>
									
									<div class="contact-btn">
										<button type="button" onclick="login_page()"  class="fv-btn">Login</button>
									</div>
								</form>
								<div class="register-msg form-output">
									<p class="form-messege field_error"></p>
								</div>
							</div>
						</div> 
                
				</div>
				

					<div class="col-md-6">
						<div class="contact-form-wrap mt--60">
							<div class="col-xs-12">
								<div class="contact-title">
									<h2 class="title__line--6">Register</h2>
								</div>
							</div>
							<div class="col-xs-12">
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
        </div></section>

        <?php require "footer.php";
?>


<script>
function login_page(){

jQuery('.field_error').html('');

var email=jQuery('#login_email').val();
var password=jQuery('#login_password').val();
var is_error="";


if(email ==""){
jQuery('#login_email_error').html('entre the email');
is_error='yes';
}

if(password == ""){
	jQuery('#login_password_error').html('entre the password');
	is_error='yes';
	
}
if(is_error==''){

	jQuery.ajax({
		url: "user_login.php",
		type: 'post',
		data: 
		{
					 
					   email: email,
					  password: password				
					},      
					success:function(result){
       					 if(result=='valid'){
							window.Location.href='product.php';
							} 
							if(result=='wrong'){
								jQuery('.register-msg').html('entre the valid email ');

							}
    }
				
		});

}
}

</script>