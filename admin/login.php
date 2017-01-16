<?php require('header.php');?>

<?php 
	if(isset($_POST['submit'])){
		require('user.php');
		$nu=new User();
		$nu->login();
	}
?>

<div class="error_page">
					<!--/login-top-->
					
						<div class="error-top">
						<h2 class="inner-tittle page">Augment</h2>
						    <div class="login">
							<h3 class="inner-tittle t-inner">Login</h3>
									<!-- <div class="buttons login">
												<ul>
													<li><a href="#" class="hvr-sweep-to-right">Facebook</a></li>
													<li class="lost"><a href="#" class="hvr-sweep-to-left">Twitter</a> </li>
													<div class="clearfix"></div>
												</ul>
											</div> -->
									<form action="login.php" method="post">
											<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" name="email" >
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="password">
											<div class="submit"><input type="submit" onclick="myFunction()" value="Login" name="submit"></div>
											<div class="clearfix"></div>
											
											<div class="new">
												<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>Forgot Password ?</label></p>
												<p class="sign">Do not have an account ? <a href="register.php">Sign Up</a></p>
												<div class="clearfix"></div>
											</div>
									</form>
							</div>

							
						</div>
						
						
					<!--//login-top-->
			   </div>

			  	<!--//login-->
			    <!--footer section start-->
			<div class="footer">
					
			   <p></p>
			</div>
<?php require('footer.php');?>