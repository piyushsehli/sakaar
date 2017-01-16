<?php
// Include Config
require('config.php');

require('header.php');
session_start();
//var_dump($_SESSION['is_logged_in']);
if(!$_SESSION['is_logged_in']){
	header('location:login.php');
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
						
				<!--//outer-wp-->
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