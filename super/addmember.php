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
		$nu->register();
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
		
			<form action="addmember.php" method="post">
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
					<p class="sub-heading">Enter other credentials</p>
				</div>
				
				<div class="col-md-12">
					<div class="col-md-6">
						<input type="text" class="input-tag" name="name" value="Full name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Full name';}">
					</div>	
					<div class="col-md-6">
						<input type="text" class="input-tag" name="contact" value="Contact number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Contact number';}">
					</div>
				</div>
				<div class="col-md-12 sub-area">
					<p class="sub-heading">Give rights!</p>
				</div>
				<div class="col-md-12 rights">
					<span><label class="checkbox11"><input type="checkbox" value="1" name="isSuper"><i> </i>Super Member</label></span>
					
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
