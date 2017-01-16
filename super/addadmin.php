<?php

require('header.php');
session_start();
//var_dump($_SESSION['is_logged_in']);
if(!$_SESSION['is_logged_in']){
	header('location:login.php');
}

if(isset($_POST['submit'])){
	require('user.php');
	$nu=new User();
	$nu->registerAdmin();
}
?>


<div class="page-container">
<!--/content-inner-->
	<div class="left-content">
		<div class="inner-content">
			<!-- header-starts -->
			<div class="header-section">
				<!--menu-right-->
				<?php require('topmenu.php');?>
				<!--//menu-right-->
				<div class="clearfix"></div>
			</div>
<!-- //header-ends -->
<div class="outter-wp">
	<?php require('main_content.php');?>

	<div class="container-fluid">
		<div class="row">
			<h2 class="heading-text">Add a new member!</h2>		
		</div>
		<div class="row sub-area">
		
			<form action="addadmin" method="post">
				<div class="col-md-12">
					<p class="sub-heading">Enter login credentials</p>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="email" value="E-mail address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
					</div>	
					<div class="col-md-6">
						<input type="password" class="input-tag" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}">
					</div>
				</div>
				<div class="col-md-12 sub-area">
					<p class="sub-heading">Enter personal credentials</p>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="name" value="Full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full name';}">
					</div>	
					<div class="col-md-6">
						<input type="text" class="input-tag" name="contact" value="Contact number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact number';}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="employee_address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}">
					</div>	
				</div>
				<div class="col-md-12 sub-area">
					<p class="sub-heading">Enter company's credentials</p>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="company_name" value="Company name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company name';}">
					</div>	
					<div class="col-md-6">
						<input type="text" class="input-tag" name="businesstype" value="Company type" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company type';}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="designation" value="Your designation" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your designation';}">
					</div>	
					<div class="col-md-6">
						<input type="text" class="input-tag" name="company_contact" value="Company contact number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company contact number';}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="company_address" value="Company address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Company address';}">
					</div>	
					<div class="col-md-6">
						<input type="text" class="input-tag" name="city" value="City" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'City';}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="pincode" value="Pin code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin code';}">
					</div>	
					<div class="col-md-6">
						<input type="text" class="input-tag" name="state" value="State" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'State';}">
					</div>
				</div>
				<div class="col-md-12 sub-area">
					<p class="sub-heading">Give rights!</p>
				</div>
				<div class="col-md-12 rights">
					<span><label class="checkbox11"><input type="checkbox" value="1" name="isAdmin"><i> </i>Admin</label></span>
					
					<span><label class="checkbox11"><input type="checkbox" value="1" name="can_view"><i> </i>View</label></span>

					<span><label class="checkbox11"><input type="checkbox" value="1" name="can_insert"><i> </i>Insert</label></span>

					<span><label class="checkbox11"><input type="checkbox" value="1" name="can_update"><i> </i>Update</label></span>

					<span><label class="checkbox11"><input type="checkbox" value="1" name="can_delete"><i> </i>Delete</label></span>

					
				</div>
					<div class="col-md-12 sub-area">
						<input type="submit"  class="submit-btn" value="Register" name="submit">
					</div>
			</form>	
		</div>
	</div>	

										



</div>
	 <!--footer section start-->
		<footer>
		   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
		</footer>
	<!--footer section end-->
	</div>
</div>
<!--//content-inner-->
<!--/sidebar-menu-->
	<?php require('sidemenu.php');?>
  <div class="clearfix"></div>		
</div>
							
<?php require('footer.php');?>
