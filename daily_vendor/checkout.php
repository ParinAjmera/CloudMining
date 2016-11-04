<?php
include("header.php");
$msg="Thankyou for shopping with us";
$err="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

if(isset($_POST['del']))
{
if($_POST['delete'] == ''){
			$err = "Product ID empty";
			
			}
			elseif(!preg_match("/^[0-9]+$/", $_POST['delete']))
			{
			$err = "Product ID should be in numbers";
			}
			else{
$delete=$_POST['delete'];
$result=mysqli_query($con,"DELETE FROM cart WHERE productid='$delete'");
if($result)
{
$msg="Item Deleted";
}
}
}
if(isset($_POST['cout']))
{
if($_POST['card'] == ''){
			$err = "Credit Card number cannot be empty";
			
			}
			elseif(!preg_match("/^[0-9]+$/", $_POST['card']))
			{
			$err = "Credit card number should be in numbers";
			}
			elseif($_POST['expir'] == ''){
			$err = "Expire date cannot be empty";
			
			}
			elseif(!preg_match("/^[0-9-]+$/", $_POST['expir']))
			{
			$err = "Expire date is wrong";
			}
			elseif($_POST['cw'] == ''){
			$err = "CW cannot be empty";
			
			}
			elseif(!preg_match("/^[0-9]+$/", $_POST['cw']))
			{
			$err = "CW is wrong";
			}
			elseif($_POST['name'] == ''){
			$err = "Name cannot be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z]+$/", $_POST['name']))
			{
			$err = "Name is wrong";
			}
			else{
			mysqli_query($con,"INSERT INTO payment (cardno,cardex,cardcw,cardnm)
VALUES ('$_POST[card]','$_POST[expir]','$_POST[cw]','$_POST[name]')");
$msg="Transaction Complete. Expect your order in an hour or two";

}
}
}
?>
<h1><center>Your Cart</center></h1><br/>
<div class="small-7 small-centered columns">
 <div data-alert class="alert-box success round">
  <?php echo $msg;?>
  <a href="#" class="close">&times;</a>
</div></div>
<center>
<font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 1.125em;
  color: #58ACFA;">
<?php echo $err;?></font></center>

<?php
$t="";
$con=mysqli_connect("localhost","root","","dailyvendor");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM cart");

echo "<center><table> <thead>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Product Type</th>
<th>Product Quantity</th>
<th>Product Cost</th>
<th>Total</th>
</tr> </thead> <tbody>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['productid'] . "</td>";
  echo "<td>" . $row['productname'] . "</td>";
   echo "<td>" . $row['producttype'] . "</td>";
    echo "<td>" . $row['productquantity'] . "</td>";
	 echo "<td>" . $row['productcost'] . "</td>";
	 echo "<td>" . $row['productcost']*$row['productquantity'] . "</td>";
	 $t=$t+($row['productcost']*$row['productquantity']);
  echo "</tr>";

  }
   echo "<tr>";
   echo "<td colspan=5>Total</td><td>" . $t . "</td>";
    echo "</tr></tbody>";
echo "</table></center>";


?>
<div class="row">
  <div class="small-6 large-centered columns">
<ul class="button-group">

<li><a href="#" data-reveal-id="checkout" class="button">Check Out</a></li>
<li><a href="#" data-reveal-id="edit" class="button">Delete an item from your cart</a></li>

</ul>
</div>
</div>

  <?php
include("footer.php");
?>
