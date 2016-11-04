<?php
include('header.php');
$msg="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if(isset($_POST['bt1']))
{
	if($_POST['name'] == ''){
			$msg = "Subject can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z]+$/", $_POST['name']))
			{
			$msg = "Subject should be only in letters";
			}
			elseif($_POST['email'] == ''){
			$msg = "Email adress can not be empty";
			
			}
			elseif(!preg_match("/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $_POST['email']))
			{
			$msg = "invalid Email!";
			}
			elseif($_POST['msg'] == ''){
			$msg = "Message can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z0-9,-. ]+$/", $_POST['msg']))
			{
			$msg = "Message should be only in letters and numbers";
			}
			else
			{
	 $email = $_POST['email'] ;
  $subject = $_POST['name'] ;
  $message = $_POST['msg'] ;
  $header = "From: $email";
 $to="hearsh.m@gmail.com";
   $retval = @mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      $msg="Message sent successfully...";
   }
   else
   {
      $msg="Message could not be sent...";
   }
	}
	}
	elseif(isset($_POST['bt2']))
{
if($_POST['cname'] == ''){
			$msg = "Name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Z a-z]+$/", $_POST['cname']))
			{
			$msg = "Name should be only in letters";
			}
elseif($_POST['comm'] == ''){
			$msg = "Comment cannot be empty";
			
			}
			else
			{
			mysqli_query($con,"INSERT INTO comment (comname,comment)
VALUES
('$_POST[cname]','$_POST[comm]')");

$msg = "Thankyou for your feedback";
}
			}
			
}

	
	
?>
<div class="row">
 
    <!-- Contact Details -->
    <div class="large-9 columns">
 
      <h3>Get in Touch!</h3>
      <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
 <h4><?php echo $msg;?></h4>
         <div class="section-container tabs" data-section>
        <section class="section">
          <h5 class="title"><a href="#panel1">Contact Our Company</a></h5>
          <div class="content" data-slug="panel1">
            <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline">Subject</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" name="name">
                </div>
              </div>
              <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline"> Your Email</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" name="email">
                </div>
              </div>
              <label>What's up?</label>
              <input type="text" name="msg">
              <input type="submit" name="bt1" class="radius button">
            </form>
          </div>
        </section>
		<section class="section">
          <h5 class="title"><a href="#panel2">Comments</a></h5>
          <div class="content" data-slug="panel2">
            <form method="POST" action="<?php $_SERVER["PHP_SELF"];?>">
			 <div class="row collapse">
                <div class="large-2 columns">
                  <label class="inline">Name</label>
                </div>
                <div class="large-10 columns">
                  <input type="text" name="cname">
                </div>
              </div>
              <div class="row collapse">
			   <div class="large-2 columns">
              <label>Comment</label>
			  </div>
			  <div class="large-10 columns">
               <textarea name="comm"></textarea>
			  
              <input type="submit" name="bt2" class="button">
			  </div>
			  </div>
            </form>
			<font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 1.725em;
  color: #58ACFA;">
Comments</font>
<hr/>
<?php
$t="";
$con=mysqli_connect("localhost","root","pass123","dailyvendor");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM comment");

echo "<table> <thead>
<tr>
<th>No.</th>
<th>Name</th>
<th>Comment</th>
</tr> </thead> <tbody>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['comid'] . "</td>";
  echo "<td>" . $row['comname'] . "</td>";
   echo "<td colspan=4>" . $row['comment'] . "</td>";
  echo "</tr>";

  }

    echo "</tbody>";
echo "</table>";


?>
			
          </div>
    
  </section>
        
      </div>
	  
	  
	  
	  
    </div>
 
    <!-- End Contact Details -->
 
 
    <!-- Sidebar -->
 
 
    <div class="large-3 columns">
      <h5>Map</h5>
      <!-- Clicking this placeholder fires the mapModal Reveal modal -->
      <p>
        <a href="" data-reveal-id="mapModal"><img src="img/mp.png"></a><br />
        <a href="" data-reveal-id="mapModal">View Map</a>
      </p>
      <p>
        1201 D.N.Nagar<br />
       Andheri (WEST)
      </p>
    </div>
    <!-- End Sidebar -->
  </div>
 
  <!-- End Main Content and Sidebar -->

 
 
 
  <!-- Map Modal -->
 
 

<?php
include('footer.php');
?>