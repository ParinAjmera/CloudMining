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
(07,'Transformer','Toys','$_POST[q1]',15.50)");
$add="Item added to cart";
}
elseif(isset($_POST['bt2']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(08,'Helicopter','Toys','$_POST[q2]',10.00)");
$add="Item added to cart";
}
elseif(isset($_POST['bt3']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(09,'RCcar','Toys','$_POST[q3]',12.00)");
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
  <blk><li class="active" align="center"><a href="pro3.php">Toys</a></li></blk>
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
  <li><a href="img/trn2.jpg"><img src="img/trn2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/trn1.jpg"><img src="img/trn1.jpg" width="50"></a></li>
  <li><a href="img/trn3.jpg"><img src="img/trn3.jpg"></a></li>
</ul>
		</div>
        <div class="large-10 columns">
                     <ul class="pricing-table">
  <li class="title">Transformers</li>
  <li class="price">$15.50</li>
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
  <li><a href="img/heli2.jpg"><img src="img/heli2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/heli.jpg"><img src="img/heli.jpg" width="50"></a></li>
  <li><a href="img/heli3.jpg"><img src="img/heli3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
           <ul class="pricing-table">
  <li class="title">Helicopter</li>
  <li class="price">$10.00</li>
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
  <li><a href="img/car2.jpg"><img src="img/car2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/car1.jpg"><img src="img/car1.jpg" width="50"></a></li>
  <li><a href="img/car3.jpg"><img src="img/car3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
         <ul class="pricing-table">
  <li class="title">RC Cars</li>
  <li class="price">$12.00</li>
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
       <p><img src="img/add/ad6.png"/></p>
      <p><img src="img/add/ad5.jpg" /></p>
    </aside>
 
  </div>
 
 
<?php 
include("footer.php");
?>
