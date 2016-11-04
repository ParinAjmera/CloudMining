<?php 
include('header.php');
?>

<?php
mysql_connect("localhost","root", "");
mysql_select_db("dailyvendor");
$redir=$numrows="";
$search=$_POST['src'];
trim($search);

  $query = mysql_query("SELECT * FROM inventory WHERE productname='$search' OR producttype='$search' OR productname LIKE '%$search%' OR producttype LIKE '%$search%'");
                 $numrows = mysql_num_rows($query);
                 if($numrows && $search != '')
                 {
  echo "<center><table> <thead>
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Product Type</th>
<th>Product Quantity</th>
<th>Product Price</th>
</tr> </thead> <tbody>";

while($row = mysql_fetch_array($query))
  {
  echo "<tr>";
  echo "<td>" . $row['productid'] . "</td>";
  echo "<td>" . $row['productname'] . "</td>";
   echo "<td>" . $row['producttype'] . "</td>";
    echo "<td>" . $row['productquantity'] . "</td>";
	 echo "<td>" . $row['productcost'] . "</td>";
  echo "</tr>";

  }
echo "</tbody>";
echo "</table></center>";

if($search == "Lemon" || "lemon" || "Tomatoes" || "tomatoes" || "Capsicum" || "capsicum" || "Vegetables" || "vegetables")
{
$redir="products.php";
}
elseif($search == "Orange" || "orange" || "Grape" || "grape" || "Watermelon" || "watermelon" || "Fruits" || "fruits")
{
$redir="pro2.php";
}
elseif($search == "Transformers" || "transformers" || "Helicopter" || "helicopter" || "RCCars" || "rccars" || "Toys" || "toys")
{
$redir="pro3.php";
}
elseif($search == "Mobiles" || "mobile" || "MusicSystem" || "musicsystem" || "PlayStation" || "playstation" || "Electronics" || "electronics")
{
$redir="pro4.php";
}
					
echo "<center><a href=". $redir .">Go to the page</a></center>";
				 
				}
				 else
     {
         echo "<center><h4>Invalid Search. Please Enter correct details<h4><center>";
     }

?>


<?php
include('footer.php');
?>
