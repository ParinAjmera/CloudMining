<html>
<head>
<title>
Admin Login
</title>
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/style.css"> 

  <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>

  

<?php
$con=mysqli_connect("localhost","root","","dailyvendor");
$user=$pwd=$err=$result=$query=$temp="";
mysql_connect("localhost","root", "");
mysql_select_db("dailyvendor");
$msg1="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
{

if(isset($_POST['admin']))
			{
			if($_POST['auser'] == ''){
			$msg1 = "user name can not be empty";
			
			}
			elseif(!preg_match("/^[A-Za-z0-9._-]+$/", $_POST['auser']))
			{
			$msg1 = "user name should be only in letters";
			}
			elseif($_POST['apwd'] == ''){
			$meg1 = "Password can not be empty";
			
			}
			$user=$_POST['auser'];
         $password=$_POST['apwd'];
		
 
                 $query = mysql_query("SELECT * FROM admin WHERE username='$user' AND pass='$password'");
                 $numrows = mysql_num_rows($query);
                 if($numrows == 1)
                 {
				    $msg1="Login success";
					
					header( 'Location: access.php' ) ;
				 
				 }
				else
				{
				$msg1="Login invalid";
				}
			
			}

}
?>
</br>
</br>


<div class="row">

<div class="section-container accordion" data-section="accordion">
 <section class="active">
    
    <div class="content" data-section-content>
  

<div class="row">
<div class="small-11 large-centered columns">


  <section>
   
    <div class="content" data-section-content>
	 <form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
<legend><h3> Admin Login</h3></legend>
 <fieldset>
 <div class="small-11 large-centered columns">
<div class="row">

<h5>User Name</h5><input type="text" name="auser" maxlength="50"  >
</div>
<div class="row">
<h5>Password</h5><input type="password" name="apwd" maxlength="50"  >
 </div>
 <div class="row">
<input class="small button button secondary" type="submit" name="admin" /><h4><?php echo $msg1;?></h4>
</div>
</fieldset>
</form>


    </div>
  </section>
  
  </div>
  </div>
  </div>
  </div>

  
  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
    <script>
    $(document).foundation();
  </script>
</body>
</html>
