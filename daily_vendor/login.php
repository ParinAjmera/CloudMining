<?php
include("header.php");
$user=$pwd=$err=$result=$query=$temp="";
mysql_connect("localhost","root", "pass123");
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
				 echo "Login Success $user";
				 $log="logout";
				 }
				 else
     {
         echo "Login Failed";
     }


}
?>
<div class="row">
<div class="large-12 columns">
<?php
include("sidnav.php");
?>
<center><h1>Welcome to our login page</h1></center>
<div class="small-4 small-centered columns">
<div class="panel callout radius">
<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
<fieldset>

<div class="row">
<h5>User Name</h5><input type="text" name="user" maxlength="50" value="<?php echo $user;?>" placeholder="<?php echo $validateSms;?>">
</div>
<div class="row">
 <h5>Password</h5><input type="password" name="pwd" maxlength="50" value="<?php echo $pwd;?>" placeholder="<?php echo $validateSms2;?>">
 </div>
 <div class="row">
<input class="small button button secondary" type="submit" name="Login" value="Login" /><label><?php echo $err?></label>
</div>
</fieldset>
</form>
</div>
</div>
</div>
</div>

  <?php
include("footer.php");
?>