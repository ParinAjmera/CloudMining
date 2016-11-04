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
(04,'Orange','Fruits','$_POST[q1]',2.50)");
$add="Item added to cart";
}
elseif(isset($_POST['bt2']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(05,'Grapes','Fruits','$_POST[q2]',5.00)");
$add="Item added to cart";
}
elseif(isset($_POST['bt3']))
{
mysqli_query($con,"INSERT INTO cart (productid,productname,producttype,productquantity,productcost)
VALUES
(06,'Watermelon','Fruits','$_POST[q3]',7.00)");
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
 <blk> <li class="active" align="center"><a href="pro2.php">Fruits</a></li></blk>
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
  <li><a href="img/org2.jpg"><img src="img/org2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/org1.jpg"><img src="img/org1.jpg" width="50" ></a></li>
  <li><a href="img/org3.jpg"><img src="img/org3.jpg"></a></li>
</ul>
		</div>
        <div class="large-10 columns">
                     <ul class="pricing-table">
  <li class="title">Orange</li>
  <li class="price">$2.50</li>
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
  <li><a href="img/grp2.jpg"><img src="img/grp2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/grp1.jpg"><img src="img/grp1.jpg" width="50"></a></li>
  <li><a href="img/grp3.jpg"><img src="img/grp3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
           <ul class="pricing-table">
<li class="title">Grapes</li>
  <li class="price">$5.00</li>
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
  <li><a href="img/wtr2.jpg"><img src="img/wtr2.jpg"></a></li>
  <li class="clearing-featured-img"><a href="img/wtr1.png"><img src="img/wtr1.png" width="50"></a></li>
  <li><a href="img/wtr3.jpg"><img src="img/wtr3.jpg"></a></li>
</ul></div>
        <div class="large-10 columns">
         <ul class="pricing-table">
  <li class="title">Watermelon</li>
  <li class="price">$7.00</li>
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
      <p><img src="img/add/ad4.jpg" /></p>
    </aside>
 
  </div>
 
 
<?php 
include("footer.php");
?>
