<?php
include("header.php");
?>
<?php
// Create connection
$con=mysqli_connect("test","localhost","root","pass123");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysql_connect_error();
  }
  else
  {
  echo "Connection successful";
  }

  
  ?>
<form data-abide>
  <div class="name-field">
    <label>Your name <small>required</small></label>
    <input type="text" required pattern="[a-zA-Z]+">
    <small class="error">Name is required and must be a string.</small>
  </div>
  <div class="email-field">
    <label>Email <small>required</small></label>
    <input type="email" required>
    <small class="error">An email address is required.</small>
  </div>
  <button type="submit">Submit</button>
</form>

 <?php
include("footer.php");
?>