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
$con=mysqli_connect("localhost","root","","dailyvendor");
$user=$pwd=$err=$result=$query=$temp="";
mysql_connect("localhost","root", "");
mysql_select_db("dailyvendor");
$validateSms=$validateSms2="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
			if($_POST['user'] == ''){
			$validateSms = "user name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z0-9._-]+$/", $_POST['user']))
			{
			$validateSms = "user name should be only in letters";
			}
			elseif($_POST['pwd'] == ''){
			$validateSms2 = "Password can not be empty";
			
			}
			$user=$_POST['user'];
         $password=$_POST['pwd'];
		
 
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
<a href="index.php"> <img src="img/logodv.png" alt="Daily Vendor" height="20%" width="20%"></a>

<font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 2.125em;
  color: #58ACFA;">

Daily Vendor</font>
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
User Name<br/><input type="text" name="user" maxlength="50" value="<?php echo $user;?>" placeholder="<?php echo $validateSms;?>">
</div>
<div class="large-5 columns">
Password<input type="password" name="pwd" maxlength="50" value="<?php echo $pwd;?>" placeholder="<?php echo $validateSms2;?>">
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
  <div class="row">
<div class="twelve columns">
<h3><center>Welcome To Daily Vendor</center></h3>
      
<ul data-orbit>
        
<li><img src="img/fruits.jpg" ></li>
     
 <li><img src="img/hw.jpg" ></li>
        
<li><img src="img/veg.jpg" ></li>
 </ul>

</div>
</div>
<br/><br/>
<font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 2.125em;
  color: #58ACFA;">
  Our Products</font><hr/>
  <font style ="font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;
  font-weight: bold;
  font-style: normal;
  font-size: 1.125em;
  color: #58ACFA;">
<ul class="large-block-grid-4">
  <li><img src="img/ps3.jpeg"><center>Electronics</center></li>
  <li><img src="img/wtr1.png"><center>Fruits</center></li>
  <li><img src="img/heli.jpg"><center>Toys</center></li>
  <li><img src="img/lem.jpg"><center>Vegetables</center></li>
</ul>
 </font>
<?php include("footer.php");?>
