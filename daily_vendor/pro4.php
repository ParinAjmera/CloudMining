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
(10,'Mobiles','Electronics','$_POST[q1]',300.00)");
$add="Item added to cart";
}
elseif(isset($_POST['bt2']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(11,'MusicSystem','Electronics','$_POST[q2]',400.00)");
$add="Item added to cart";
}
elseif(isset($_POST['bt3']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(12,'PlayStation','Electronics','$_POST[q3]',600.00)");
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
 <blk><li align="center"><a href="products.php">Vegetables</a></li></blk>
   <li class="divider"></li>
 <blk> <li align="center"><a href="pro2.php">Fruits</a></li></blk>
  <li class="divider"></li>
  <blk><li align="center"><a href="pro3.php">Toys</a></li></blk>
   <li class="divider"></li>
  <blk><li class="active"  align="center"><a href="pro4.php">Electronics</a></li></blk>
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
  <li><a href="img/mot2.jpg"><img src="img/mot2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/moto.jpg"><img src="img/moto.jpg" width="50"></a></li>
  <li><a href="img/mot3.jpg"><img src="img/mot3.jpg"></a></li>
</ul>
		</div>
        <div class="large-10 columns">
                     <ul class="pricing-table">
  <li class="title">Mobiles</li>
  <li class="price">$300.00</li>
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
  <li><a href="img/mus2.jpg"><img src="img/mus2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/mus1.jpg"><img src="img/mus1.jpg" width="50"></a></li>
  <li><a href="img/mus3.jpg"><img src="img/mus3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
           <ul class="pricing-table">
  <li class="title">Music System</li>
  <li class="price">$400.00</li>
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
  <li><a href="img/ps2.jpg"><img src="img/ps2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/ps1.png"><img src="img/ps1.png" width="50"></a></li>
  <li><a href="img/ps3.jpeg"><img src="img/ps3.jpeg"></a></li>
</ul></div>
        <div class="large-10 columns">
         <ul class="pricing-table">
  <li class="title">Play Station</li>
  <li class="price">$600.00</li>
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
    <p><img src="img/add/ad3.jpg"/></p>
      <p><img src="img/add/ad1.png" /></p>
    </aside>
 
  </div>
 
 
<?php 
include("footer.php");
?>
