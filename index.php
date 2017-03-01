<!DOCTYPE html>
<?php 
include("functions/function.php");
?>
<html>
<head>
	<title>Shop Online</title>
	<link rel="stylesheet" type="text/css" href="styles/style.css">
</head>
<body>
	<!-- Main Container starts here -->
	<div class="main-wrapper">

		<!-- Header starts here -->
		<div class="header_wrapper">
			<img id="logo" src="images/logo1.png">
			<img id="banner" src="images/shopping_banner.jpg">
		</div>
		<!--Header ends here  -->

		<!-- Navigation starts here -->
		<div class="menubar">
			<ul id="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">All Products</a></li>
				<li><a href="#">My account</a></li>
				<li><a href="#">Sign up</a></li>
				<li><a href="#">Shopping carts</a></li>
				<li><a href="#">Contact Us</a></s></li>
			</ul>

			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" placeholder="Search a Product" />
					<input type="submit" name="search" value="Search"/>
				</form>
				
			</div>
		</div>
		<!-- Navigation ends here -->

		<!-- Container wrapper starts -->
		<div class="content_wrapper">
			<div id="content_area">
				<div id="sidebar">
					<div id="sidebar_title">Categories</div>
					<ul id="cats">
				<!-- <li><a href="#">Laptops</a></li>
				<li><a href="">Computers</a></li>
				<li><a href="#">Mobiles</a></li>
				<li><a href="#">Cameras</a></li>
				<li><a href="#">iPads</a></li>
				<li><a href="#">Tablets</a></li> -->
				<?php getCats(); ?>
			</ul>
			<div id="sidebar_title">Brands</div>
			<ul id="cats">
				<?php getBrands(); ?>
			</ul>
		</div>
		<div id="products_box">
			<?php getPro(); ?>
		</div>
	</div>
</div>
<!--Container wrapper ends  -->

<div id="footer">
	<h2 style="text-align:center; padding-top:30px;">&copy; 2017 by Purnima Gupta</h2>
</div>
</div>
<!--  Main container ends here-->
</body>
</html>

<!-- <?PHP
echo 'I know how to run a PHP Program in XAMPP! <br />';
?>
This is test.php File. -->