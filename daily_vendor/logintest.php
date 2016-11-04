<?php
mysql_connect("localhost","root", "pass123");
mysql_select_db("dailyvendor");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title> USER LOGIN</title>
 </head>
<body>
<?php
    
     
     $form= "<form action= './logintest.php' method='post'>
     
     <table>
     <tr>
         <td>Username:</td>
         <td><input type ='text' name='user'/></td>
     </tr>
     <tr>
         <td>Password:</td>
         <td><input type ='password' name='password'/></td>
     </tr>
     <tr>
         <td></td>
         <td><input type ='submit' name='loginbtn' value='login1'/></td>
     </tr>
     <tr>
         <td><a href= './register1.php'> REGISTER </a></td>
         <td><a href= './forgotpass1.php'>Forgot your password </td>
     </tr>
     </table> 
     </form>";
     
     if ($_POST['loginbtn'])
     {
         $user=$_POST['user'];
         $password=$_POST['pwd'];
 
                 $query = mysql_query("SELECT * FROM register WHERE username='$user'");
                 $numrows = mysql_num_rows($query);
                 if($numrows == 1)
                 {
      echo "adsas";
                     $row = mysql_fetch_assoc($query);
                     $dbuser= $row['username'];
                     $dbpass= $row['password'];
                 }
     }
     else
     {
         echo $form;
     }
     
     
     ?>
 
 </body>
 </html>