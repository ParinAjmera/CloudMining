<?php 
include("header.php");
$add="Enjoy shoping";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$con=mysqli_connect("localhost","root","","dailyvendor");
if(isset($_POST['bt1']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(01,'Lemon','Vegetables','$_POST[q1]',1.50)");
$add="Item added to cart";
}
elseif(isset($_POST['bt2']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(02,'Tomatoes','Vegetables','$_POST[q2]',2.00)");
$add="Item added to cart";
}
elseif(isset($_POST['bt3']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(03,'Capsicum','Vegetables','$_POST[q3]',1.00)");
$add="Item added to cart";
}
}


?>
 <!-- Header and Nav -->
 
  <div class="row">
    <div class="large-12 columns">
      <div class="panel">
        <h1><center>Item List</center></h1>
      </div>
    </div>
  </div>
  <!-- End Header and Nav -->
  <div class="row">
 <!-- Nav Sidebar -->
    <!-- This is source ordered to be pulled to the left on larger screens -->
    <div class="large-3 columns ">
      <div class="panel">
        <a href="home.php"><img src="img/logo.png" /></a>
        <h5><center><a href="home.php">Daily Vendor</a></center></h5>
		<nav>
         <ul class="side-nav">
		  <li class="divider"></li>
  <blk><li class="active" align="center"><a href="products.php">Vegetables</a></li></blk>
   <li class="divider"></li>
 <blk> <li align="center"><a href="pro2.php">Fruits</a></li></blk>
  <li class="divider"></li>
  <blk><li align="center"><a href="pro3.php">Toys</a></li></blk>
   <li class="divider"></li>
  <blk><li align="center"><a href="pro4.php">Electronics</a></li></blk>
   <li class="divider"></li>
</ul>
 </nav>
      </div>
    </div>
    
    <!-- Main Feed -->
    <!-- This has been source ordered to come first in the markup (and on small devices) but to be to the right of the nav on larger screens -->
    <div class="large-6 columns">
 <div data-alert class="alert-box success round">
  <?php echo $add;?>
  <a href="#" class="close">&times;</a>
</div>
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3">
		<ul class="clearing-thumbs clearing-feature" data-clearing>
  <li><a href="img/lem2.jpg"><img src="img/lem2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/lem.jpg"><img src="img/lem.jpg" width="50"></a></li>
  <li><a href="img/lem3.jpg"><img src="img/lem3.jpg"></a></li>
</ul>
		</div>
        <div class="large-10 columns">
                     <ul class="pricing-table">
  <li class="title">Lemon</li>
  <li class="price">$1.50</li>
  <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
  <li class="bullet-item"><div class="six mobile-two columns push-three"><input type="text" name="q1" placeholder="Quantity" /></div><br/><br/></li>
  
  <li class="cta-button"><input type="submit" name="bt1" class="button" value="Add to Cart &raquo;" /></li>
  
</form>
</ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><ul class="clearing-thumbs clearing-feature" data-clearing>
  <li><a href="img/tom2.jpg"><img src="img/tom2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/tom.jpg"><img src="img/tom.jpg" width="50"></a></li>
  <li><a href="img/tom3.jpg"><img src="img/tom3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
           <ul class="pricing-table">
  <li class="title">Tomatoes</li>
  <li class="price">$2.00</li>
  <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
  <li class="bullet-item"><div class="six mobile-two columns push-three"><input type="text" name="q2" placeholder="Quantity" /></div><br/><br/></li>
  <li class="cta-button"><input type="submit" name="bt2" class="button" value="Add to Cart &raquo;" /></li>
</form>
</ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
      <hr />
 
      <!-- Feed Entry -->
      <div class="row">
        <div class="large-2 columns small-3"><ul class="clearing-thumbs clearing-feature" data-clearing>
  <li><a href="img/cap.jpg"><img src="img/cap.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/cap2.jpg"><img src="img/cap2.jpg" width="50"></a></li>
  <li><a href="img/cap3.jpg"><img src="img/cap3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
         <ul class="pricing-table">
  <li class="title">Capsicum</li>
  <li class="price">$1.00</li>
  <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
  <li class="bullet-item"><div class="six mobile-two columns push-three"><input type="text" name="q3" placeholder="Quantity" /></div><br/><br/></li>
  <li class="cta-button"><input type="submit" name="bt3" class="button" value="Add to Cart &raquo;" /></li>
</form>
</ul>
        </div>
      </div>
      <!-- End Feed Entry -->
 
    </div>
 
    <!-- Right Sidebar -->
    <!-- On small devices this column is hidden -->
    <aside class="large-3 columns hide-for-small">
       <p><img src="img/add/ad1.png"/></p>
      <p><img src="img/add/ad2.jpg" /></p>
    </aside>
 
  </div>
 

<?php 
include("footer.php");
?>
