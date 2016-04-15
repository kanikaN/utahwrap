
<?php
 include_once 'header.phtml';?>
    <link href="css/login.css" media="screen" rel="stylesheet"> 
    
    <div class="container middle_content" >        
            <div class="user-login" id="container">
  <div class="wrap" id="content">
	<style>.commonContent{ padding: 20px; } .commonContent .btn {width: 100%;}</style>
	  <div style="width: 820px;margin: auto;margin-top: 20px;" class="row-fluid">
	  	<div class="commonContainer pull-left">
                    <h2>Log in</h2>
	  		<div class="commonContainer border shadow bg-white">
	  				  			<div class="tab-content">
	  					  				<!--End of tab-pane-->
	  				<div id="regularlogin" class="tab-pane commonContent active">
                         <form name="login-form" id="login-form" method="POST" action="https://www.custom-car-wraps.com/user/login/">
	  						<input type="text" value="" placeholder="Email" name="email" class="common">
	  						<input type="password" placeholder="Password" name="password" class="common">
	  						<input type="hidden" value="mystyle" name="login_type">
	  						<input type="hidden" value="1" name="login">
	  						<a class="forget" href="https://www.custom-car-wraps.com/user/reset-password/">Forgot Password</a>
	  						<input type="submit" value="Login" class="btn btn-login">
	  					</form>
	  				</div>
	  			</div>
	  			<!--End of tab-content-->
	  		</div>
	  		<!--End of topCommon-->
	  		<div class="bottomContent">
	  				  		</div>
	  		<!--End of bottomContent-->
	  	</div>
	  	<!--End of commonContainer-->
	  	<div class="commonContainer pull-right">
                    <h2>Register</h2>
	  		<div class="commonContent border shadow bg-white">
					<div class="tab-content">
					                                            
						<div id="regularregister" class="tab-pane active ">
                           <form name="register-form-mystyle" id="register-form-mystyle" method="POST" action="https://www.custom-car-wraps.com/user/login/">
	  						<input type="text" value="" placeholder="First name" name="user_first_name" class="common half pull-left">
	  						<input type="text" value="" placeholder="Last name" name="user_last_name" class="common half pull-right">
	  						<input type="text" value="" placeholder="Email" name="user_email" class="common pull-left">
	  						<input type="text" value="" placeholder="Retype Email" name="user_email2" class="common pull-left">
	  						<input type="password" placeholder="Password" name="user_password" class="common pull">
	  						<input type="password" placeholder="Retype Password" name="user_password2" class="common">
	  						<input type="hidden" value="1" name="register">
	  						<input type="hidden" value="mystyle" name="register_type">
	  						<span class="bagree">
	  							<span>
	  								<input type="checkbox" checked="" value="agree" name="terms-agree">
	  							</span>
	  							<label>
	  								I agree to the
	  								<a rel="nofollow" target="_blank" href="https://www.custom-car-wraps.com/terms-of-service.php">
	  									Terms of Service
	  								</a> and
	  								<a rel="nofollow" target="_blank" href="https://www.custom-car-wraps.com/privacy-policy.php">
	  									Privacy Policy
	  								</a>
	  							</label>
	  						</span>
							<!--End of -->
							<input type="submit" value="Register" class="btn btn-login">
								  					</form>
						</div>
					</div>
	  		</div>
	  		<!--End of commonContent-->
	  	</div>
                <div class="bottomContent"></div>
	  	<!--End of commonContainer-->
	  </div>
	  </div> <!-- /container -->
    <div style="clear: both;  block;" class="clear">&nbsp;</div>
  </div>        
        </div>
<?php include_once 'footer.php';?>