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
<?php
$uname=$pass=$lname=$fname=$address=$number=$email=$state=$city=$add="";
$validateSms="*Required Fields";
$con=mysqli_connect("localhost","root","pass123","dailyvendor");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
			if($_POST['uname'] == ''){
			$validateSms = "user name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z0-9._-]+$/", $_POST['uname']))
			{
			$validateSms = "user name should be only in letters";
			}
			elseif($_POST['pass'] == ''){
			$validateSms = "Password can not be empty";
			
			}
			elseif($_POST['fname'] == ''){
			$validateSms = "First name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z]+$/", $_POST['fname']))
			{
			$validateSms = "First name should be only in letters";
			}
			elseif($_POST['lname'] == ''){
			$validateSms = "Last name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z]+$/", $_POST['lname']))
			{
			$validateSms = "Last name should be only in letters";
			}
			elseif($_POST['email'] == ''){
			$validateSms = "Email adress can not be empty";
			
			}
			elseif(!preg_match("/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $_POST['email']))
			{
			$validateSms = "invalid Email!";
			}
			elseif($_POST['number'] == ''){
			$validateSms = "Phone Number can not be empty";
			
			}
			elseif(!preg_match("/^[0-9]+$/", $_POST['number']))
			{
			$validateSms = "Phone number should be only in numbers";
			}
			elseif($_POST['address'] == ''){
			$validateSms = "Address can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z0-9,-. ]+$/", $_POST['address']))
			{
			$validateSms = "Address should be only in letters and numbers";
			}
			elseif($_POST['city'] == ''){
			$validateSms = "City name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z]+$/", $_POST['city']))
			{
			$validateSms = "City name should be only in letters";
			}
			elseif($_POST['state'] == ''){
			$validateSms = "State name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z]+$/", $_POST['state']))
			{
			$validateSms = "State name should be only in letters";
			}
			else
			{
			$sql="INSERT INTO register (username,password,firstname,lastname,email,number,address,city,state)
VALUES
('$_POST[uname]','$_POST[pass]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[number]','$_POST[address]','$_POST[city]','$_POST[state]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
$add=$validateSms= "You have successfully registered";


			}
		
}

?>

<?php 
$con=mysqli_connect("localhost","root","pass123","dailyvendor");
$user1=$pwd1=$err=$result=$query=$temp="";
mysql_connect("localhost","root", "pass123");
mysql_select_db("dailyvendor");
$msg1=$msg2="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
			if($_POST['user1'] == ''){
			$msg1 = "user name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z0-9._-]+$/", $_POST['user1']))
			{
			$msg2 = "user name should be only in letters";
			}
			elseif($_POST['pwd1'] == ''){
			$validatesms2 = "Password can not be empty";
			
			}
			$user=$_POST['user1'];
         $password=$_POST['pwd1'];
		
 
                 $query = mysql_query("SELECT * FROM register WHERE username='$user' AND password='$password'");
                 $numrows = mysql_num_rows($query);
                 if($numrows == 1)
                 {
				    header( 'Location: home.php' ) ;
					mysql_select_db("login");
					mysqli_query($con,"INSERT INTO login (user)
VALUES ('$user')");
					
				 
				 }
				 elseif($numrows!= 1)
     {
         echo $err="Invalid User. Please Enter correct details";
     }
			}
?>


</head>
<body>
    


 <header>
 <div class="row">
 <div class="large-12 columns">
 <div class="large-4 columns">
 <a href="index.php"><img src="img/logodv.png" alt="Daily Vendor" height="20%" width="20%"></a>

<font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 2.125em;
  color: #58ACFA;">

<a href="index.php">Daily Vendor</a></font>
</div>
<div class="large-8 columns">
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">

<div class="row">
<div class="large-5 columns">
<font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 1.125em;
  color: #58ACFA;">
User Name<br/><input type="text" name="user1" maxlength="50" value="<?php echo $user1;?>" placeholder="<?php echo $msg1;?>">
</div>
<div class="large-5 columns">
Password<input type="password" name="pwd1" maxlength="50" value="<?php echo $pwd1;?>" placeholder="<?php echo $msg2;?>">
 </div>
 <div class="large-2 columns">
 </br>
<input class="small button button secondary" type="submit" name="Login" value="Login" />
</div>

</div>

</form>
To enjoy our services <a href="clog.php">become a member now !!!</a><br/><?php echo $err;?>
</font>
</div>
</div>
</div>
 </header>



<div class="row">
<div class="large-12 columns"><br/><br/>
 <div id="container">
<center><h1>Registration</h1></center>
<br/>
<div class="row">
<div class="large-6 columns">
<div data-alert class="alert-box alert round">
  <?php echo $validateSms;?>
  <a href="#" class="close">&times;</a>
</div>
</div></div>
<form action="<?php $_SERVER["PHP_SELF"];?>" method="POST" id="register_form">
 <fieldset>
 <legend>Registration</legend>
 <div class="row">
 <div class="large-6 columns">
 <label>User Name*</label><input type="text" name="uname" maxlength="50" value="<?php echo $uname;?>">
 </div>
 <div class="large-6 columns">
 <label>Password*</label><input type="password" name="pass" maxlength="50" value="<?php echo $pass;?>">
 </div>
 </div>
 <div class="row">
 <div class="large-6 columns">
 <label>First Name*</label><input type="text" name="fname" maxlength="30" value="<?php echo $fname;?>">
 </div>
  <div class="large-6 columns">
 <label>Last Name*</label><input type="text" name="lname" maxlength="50" value="<?php echo $lname;?>">
 </div>
 </div>
  <div class="row">
 <div class="large-6 columns">
 <label>Email*</label><input type="text" name="email" maxlength="60" value="<?php echo $email;?>">
 </div>
  <div class="large-6 columns">
 <label>Contact Number*</label><input type="text" name="number" maxlength="15" value="<?php echo $number;?>">
 </div>
 </div>
  <div class="row">
<div class="large-12 columns">
<label for="address">Address*</label>
<textarea name="address" id="address" rows="5" cols="50" maxlength="500" value="<?php echo $address;?>"></textarea>
 </div>
 </div>
  <div class="row">
 <div class="large-6 columns">
 <label>City*</label><input type="text" name="city" maxlength="50" value="<?php echo $city;?>">
 </div>
  <div class="large-6 columns">
 <label>State*</label><input type="text" name="state" maxlength="50" value="<?php echo $state;?>">
 </div>
 </div>
<div class="row">
<div class="large-6 columns">
  <input class="button" type="submit" name="submit" value="Submit" />
  </div>
  <div class="large-6 columns">
  <h5><?php echo $add;?></h5>
  </div>
  </div>

</fieldset>
</form>
</div>
</div>

  <?php
include("footer.php");
?>