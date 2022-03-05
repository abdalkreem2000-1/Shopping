<!DOCTYPE html>
<html lang="en">
<head>
<title>Laptop</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js
"></script>
<script type="text/javascript" >$(document).ready(function() {
  $("#formButton").click(function() {
    $("#form1").toggle();
  });
});</script>
<script type="text/javascript" >$(document).ready(function() {
  $("#formButton2").click(function() {
    $("#form2").toggle();
  });
});</script>

</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo"><a href="index.php">Shopping<font style="font-size:50px; color:red; ">.</font>sy</a></div>
							<nav class="main_nav">
								<ul>
									<li class="hassubs active">
										<a href="index.php">Home</a>
										<ul>
											<li><a href="#">Categories</a></li>
											
										</ul>
									</li>
									<li class="hassubs">
										<a href="categories.html">Categories</a>
										<ul>
											<li><a href="categories1.php">Smart Phone</a></li>
											<li><a href="laptop.php">Laptop</a></li>
											
											
										</ul>
									</li>
									
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</nav>
							<div class="header_extra ml-auto">
								<div class="shopping_cart">
									<a href="cart.php">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
											<g>
												<path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
													c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
													C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
													H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
													c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
											</g>
										</svg>
										<div>Cart</div>
									</a>
								</div>
							<div class="header_extra ml-auto">
								
								
								<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		

		<!-- Social -->
		<div class="header_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu menu_mm trans_300">
		<div class="menu_container menu_mm">
			<div class="page_menu_content">
							
				<div class="page_menu_search menu_mm">
					<form action="#">
						<input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
					</form>
				</div>
				<ul class="page_menu_nav menu_mm">
					<li class="page_menu_item has-children menu_mm">
						<a href="index.php">Home<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
							<li class="page_menu_item menu_mm"><a href="#">Categories<i class="fa fa-angle-down"></i></a></li>
						
						</ul>
					</li>
					<li class="page_menu_item has-children menu_mm">
						<a href="#">Categories<i class="fa fa-angle-down"></i></a>
						<ul class="page_menu_selection menu_mm">
								<li class="page_menu_item menu_mm"><a href="categories1.php">Smart Phone<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item menu_mm"><a href="laptop.php">Laptop<i class="fa fa-angle-down"></i></a></li>
						</ul>
					</li>
					
					<li class="page_menu_item menu_mm"><a href="contact.php">Contact<i class="fa fa-angle-down"></i></a></li>
				</ul>
			</div>
		</div>

		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/categories.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="home_title">Laptop<span>.</span></div>
								<div class="home_text"><p> is a small, portable personal computer (PC) with a "clamshell" form factor, typically having a thin LCD or LED computer screen mounted on the inside of the upper lid of the clamshell and an alphanumeric keyboard on the inside of the lower lid.</p></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<?php 
						$pdo=new PDO('mysql:host=localhost;dbname=my_project','root', '');
                          if ( isset($_POST['name'])){
    if ($_POST['name']==null){
									
echo " <div class='alert alert-danger'>
    <strong>Danger!</strong> Fill in the fields.
  </div>";

} else{
	  $sql = "DELETE FROM laptop WHERE name = :zip";
               
              	# code...
              
              echo "<div class='alert alert-success'>
  <strong>Success!</strong> Added successfully.
</div>";
        
    
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':zip' => $_POST['name']));

}}
						 ?>
						 <br>
						<button   type="button" class="btn btn-outline-dark" id="formButton2">Remove a laptop</button>
                                    <form method="post"  id="form2" style="display:none;" >
                                      <div class="form-group">
                                      <b>Name laptop:</b> <input class="form-control" type="text" name="name"></div>
                                         
                                         
                                       <button type="submit" class="btn btn-primary">Remove</button>
                    </form>
						<div class="sorting_container ml-md-auto">
							<?php
						   $pdo=new PDO('mysql:host=localhost;dbname=my_project','root', '');

							if ( isset($_POST['name']) && isset($_POST['price']) 
     && isset($_POST['src'])) {
								if ($_POST['name']==null&& $_POST['price']
              	==null &&$_POST['src']==null){
									
echo " <div class='alert alert-danger'>
    <strong>Danger!</strong> Fill in the fields.
  </div>";

}else{
    $sql = "INSERT INTO laptop (name, price, src,explained) 
              VALUES (:name, :price, :src,:,explained)";
               
              	# code...
              
              echo "<div class='alert alert-success'>
  <strong>Success!</strong> Added successfully.
</div>";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':price' => $_POST['price'],
        ':src' => $_POST['src'],
        ':explained' => $_POST['explained']));
}
} 
							?>
							
									<button style="float: right;" type="button" class="btn btn-outline-dark" id="formButton">Add a laptop</button>
                                    <br><br><center> <form method="post"  id="form1" style="display:none;" >
                                    	<div class="form-group">
                                    	<b>Name laptop:</b> <input class="form-control" type="text" name="name"></div>
                                         
                                         <div class="form-group">
                                        <b>laptop Price: </b><input type="text" class="form-control" name="price"></div>
                                       <div class="form-group"> <b>laptop Src img: </b><input class="form-control" type="text" name="src"></div>
                                       <div class="form-group">
                                    	<b>explained:</b> <input class="form-control" type="text" name="explained"></div>
                                       <button type="submit" class="btn btn-primary">Add</button>
										</form></center>
								
								
						
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col">
					
					<div class="product_grid">
                         <?php

                         
			$pdo=new PDO('mysql:host=localhost;dbname=my_project','root', '');
$stmt = $pdo->query("SELECT * FROM laptop");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ( $rows as $row ) {
    echo "<div id=".$row['id']." class='product'>
							<div class='product_image'><img src=".$row['src']." height='250px' width='250px' alt=''></div>
							<div class='product_extra product_new'><a href='categories.html'>New</a></div>
							<div class='product_content'>
								<div class='product_title'><a  href='product_laptop.php?name=".$row['name']."'>".$row['name']." </a></div>
								<div class='product_price'>$".$row['price']."</div>
							</div>
						</div>";
}

                	
						
                            
                           
                           
?>




			 
						
				</div>
			</div>
		</div>
	</div>
	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Free Shipping Worldwide</div>
						<div class="icon_box_text">
							<p>We ship our products to all people at the right prices.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Free Returns</div>
						<div class="icon_box_text">
							<p>We do return your products if they are not what you ordered.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">24h Fast Support</div>
						<div class="icon_box_text">
							<p>The support responds to all your inquiries as quickly as possible.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_border"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title">Subscribe to our newsletter</div>
						<div class="newsletter_text"><p>Subscribe to our newsletter to get prices for the latest technology products</p></div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						<div class="footer_logo"><a href="#">Shoing.sy</a></div>
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://Google.com" target="_blank">Abdalkreem&Amar</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							<ul>
								<li><a href="https://www.instagram.com/explore/locations/830144798/hpu/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href=https://www.facebook.com/AlHawashPrivateUniversity/?__tn__=%2Cd%2CP-R&eid=ARDMM3QYD0abWJF078vgBuimdl-sUGPo9-Qu0avGvhgBIBf7wbG7xTu0AuTzQN9joFxeFTqOXbi00H31><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="https://twitter.com/alhawashuniv"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/categories.js"></script>
</body>
</html>