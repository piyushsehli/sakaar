
<?php require('header.php');?>
<?php
	if(isset($_POST['submit'])){
		require('user.php');
		$nu=new User();
		$nu->register();
	}
?>
<div class="error_page">
												<!--/login-top-->

					<div class="error-top">
					<h2 class="inner-tittle page">Augment</h2>
					    <div class="login">
						<h3 class="inner-tittle t-inner">Register</h3>
								<form action="register.php" method="post">
										<input type="text" class="text" value="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" name="name">

										<input type="text" class="text" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}" name="email">

										<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" name="password">

                                        <input type="text" class="text" value="Contact Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact';}" name="contact">


										<div class="sign-up">
													<input type="reset" value="Reset">
													<input type="submit"  value="submit" name="submit">
										</div>
										<div class="clearfix"></div>

										<div class="new">
											<p><label class="checkbox11"><input type="checkbox" name="checkbox"><i> </i>I agree with the terms</label></p>
											<p class="sign">Already register ? <a href="login.php">Login</a></p>
											<div class="clearfix"></div>
										</div>
									</form>
						</div>

					</div>
					 </div>
				<!--//login-top-->

		  	<!--//login-->
		    <!--footer section start-->
		<div class="footer">

		</div>
	<?php require('footer.php');?>
