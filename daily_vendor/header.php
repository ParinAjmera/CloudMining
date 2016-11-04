<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Daily Vendor</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css"> 

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=593599953997421";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php
	$con=mysqli_connect("localhost","root","","dailyvendor");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  
  ?>
  <div class="moveMe">
                            <img src="img/tw.png" data-reveal-id="twitter" style="float: left; position: relative; z-index: 9999;">
                        </div>
                        <div class="moveMe">
                           
                                <img src="img/fb.png" data-reveal-id="facebook" style="float: left; position: relative; z-index: 9999;">
                        </div>
<div class="row">
    <div class="large-12 columns">
 
    <!-- Navigation -->
 
      <div class="row">
        <div class="large-12 columns">

                   

          <nav class="top-bar">
            <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
                <h1>
                  <a href="home.php">
                    Home
                  </a>
                </h1>
              </li>
              <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
			  <section class="top-bar-section">
			  <ul class="right/left">
			    <li class="divider"></li>
			  <li><a href="products.php">Products</a></li>
			  <li class="divider"></li>
			  <li class="has-dropdown">
			
			  
			  <ul class="dropdown">
				  <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
						</ul>
						</li>
			 <li class="divider"> </li>
			  
			  </ul>
			  <ul class="right">
			   <li class="divider"></li>
      <li class="has-form">
        <form method="post" action="search.php">
          <div class="row collapse">
            <div class="small-8 columns">
			
              <input type="text" name="src" placeholder="Product Name">
            </div>
            <div class="small-4 columns">
			
              <input class="alert button" type="submit" name="search" value="Search">
            </div>
          </div>
        </form>
		</li>
                <li class="divider"></li>
                <li class="has-dropdown">
				<a href="#">
				<?php

$con=mysqli_connect("localhost","root","","dailyvendor");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM login");
while($row = mysqli_fetch_array($result))
  {
echo $row['user']." 's " ;
}
 ?>
                  Account</a>
                  <ul class="dropdown">
				  <li><a href="checkout.php">My Cart</a></li>
                        <li><a href="logout.php">Log Out</a></li>
						</ul>
						</li>
						</ul>
			  </section>
            </ul>
         
           
          </nav>
          <!-- End Top Bar -->
        </div>
      </div>
 
    <!-- End Navigation -->

	
	
	<div id="container">
