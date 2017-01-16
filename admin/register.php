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

					<input type="text" class="text" placeholder="User Name"  name="name">

					<input type="text" class="text" placeholder="E-mail address"  name="email">

					<input type="password" placeholder="Password"  name="password">

					<input type="text" placeholder="Enter your address"   name="employee_address">

					<input type="text" placeholder="Contact Number"  name="contact">

					<input type="text" placeholder="Company's Name"  name="company_name">

					<input type="text" placeholder="Company's Type" name="businesstype">

					<input type="text" placeholder="Your Designation" name="designation">

					<input type="text" placeholder="Company's Contact"
                    name="company_contact">

					<input type="text" placeholder="Company's Address" name="company_address">

					<input type="text" placeholder="City"
                    name="city">

					<input type="text" placeholder="Pin Code" name="pincode">

					<input type="text" placeholder="State"
                    name="state">

					<p><label class="checkbox11"><input type="checkbox" value="1" name="can_view"><i> </i>View</label></p>

					<p><label class="checkbox11"><input type="checkbox" value="1" name="can_insert"><i> </i>Insert</label></p>

					<p><label class="checkbox11"><input type="checkbox" value="1" name="can_update"><i> </i>Update</label></p>

					<p><label class="checkbox11"><input type="checkbox" value="1" name="can_delete"><i> </i>Delete</label></p>


					<div class="sign-up">
						<input type="reset" value="Reset">
						<input type="submit"  value="Register" name="submit">
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
