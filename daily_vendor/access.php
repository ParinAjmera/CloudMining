<?php 
include("header.php");

?>


<?php
$con=mysqli_connect("localhost","root","","dailyvendor");
$user=$pwd=$err=$result=$query=$temp="";
mysql_connect("localhost","root", "");
mysql_select_db("dailyvendor");
$msg1="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

	if(isset($_POST['d']))
	{
	$p = new SplFixedArray(13);
	$na = new SplFixedArray(13);
	$list= new SplFixedArray(13);
		$result = mysqli_query($con,"SELECT * FROM transaction");
		$i=0;
		while($row = mysqli_fetch_array($result))
		{
		$p[0]=$row['p1'];
		$p[1]=$row['p2'];
		$p[2]=$row['p3'];
		$p[3]=$row['p4'];
		$p[4]=$row['p5'];
		$p[5]=$row['p6'];
		$p[6]=$row['p7'];
		$p[7]=$row['p8'];
		$p[8]=$row['p9'];
		$p[9]=$row['p10'];
		$p[10]=$row['p11'];
		$p[11]=$row['p12'];
		echo "1"; 
		$list=array($p[0],$p[1],$p[2],$p[3],$p[4],$p[5],$p[6],$p[7],$p[8],$p[9],$p[10],$p[11]);
		echo "2";
		
				
		$file = fopen("output.csv","a");

		foreach ($list as $line)
		{
		fputcsv($file,explode(',',$line));
		}

		fclose($file); 
	

		
		
		
		
		}
		
		echo "<center><table> <thead>
			<tr>
			<th>Transaction ID</th>
			<th colspan='12'>Product list </th>
			
			</tr> </thead> <tbody>";

		
			
			
			
			  echo "<tr>";
			  echo "<td>" . $list[0] . "</td>";
			  
				echo "</tr>"; 
			 
			  
			  
			 
			 
 			  
				echo "</tbody>";
			echo "</table></center>";

		
	}
		elseif(isset($_POST['disp']))
	{
	
		
		
			
			$con=mysqli_connect("localhost","root","","dailyvendor");
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			$result = mysqli_query($con,"SELECT * FROM transaction");

			echo "<center><table> <thead>
			<tr>
			<th>Transaction ID</th>
			<th colspan='12'>Product list </th>
			
			</tr> </thead> <tbody>";

			while($row = mysqli_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['transactionid'] . "</td>";
			  echo "<td>" . $row['p1'] . "</td>";
			   echo "<td>" . $row['p2'] . "</td>";
				echo "<td>" . $row['p3'] . "</td>";
				 echo "<td>" . $row['p4'] . "</td>";
				echo "<td>" . $row['p5'] . "</td>";
				echo "<td>" . $row['p6'] . "</td>";
				echo "<td>" . $row['p7'] . "</td>";
				echo "<td>" . $row['p8'] . "</td>";
				echo "<td>" . $row['p9'] . "</td>";
				echo "<td>" . $row['p10'] . "</td>";
				echo "<td>" . $row['p11'] . "</td>";
				echo "<td>" . $row['p12'] . "</td>";
				 
			  echo "</tr>";

			  }
			  
				echo "</tbody>";
			echo "</table></center>";


		

					
					
		
	}
	elseif(isset($_POST['upld']))
	{
			
	}
	elseif(isset($_POST['conn']))
	{
			
	}	
}


?>

</br>
</br>
</br>
</br>

<div class="row">

<div class="small-9 large-centered column">
<form method="post" target="_blank" action="https://reports.zoho.com/ZDBDataSheetView.cc?OBJID=962934000000002045&STANDALONE=true&WIDTH=600&HEIGHT=300&ZDB_THEME_NAME=grey&DATATYPESYMBOL=false&REMTOOLBAR=true&SEARCHBOX=true&SHOWHIDEOPT=true">
<input type="submit" class="button expand" name="disp" value="Display the transaction db" >   
</form>
</br>
</br>

<form action="<?php $_SERVER["PHP_SELF"];?>">
 <a href="datacsv.php" class="button expand" target="_blank">
				 Download the transaction db to csv file
				 </a>  
</form>
<br/>
<br/>


<form action="http://localhost:3838/analysis/" target="_blank">
<input type="submit" class="button expand" name="conn" value="analysis" > 
</form>

</div>

</div>

</br>
</br>


 
</div>





 


<?php
include("footer.php");
?>
