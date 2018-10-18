<?php
 session_start();
// error_reporting(0);
include("dbconnection.php");
include("home.php");

/*$myuserid=$_POST['username'];

$mypassword=$_POST['password'];
$_SESSION['userid']= $myuserid;
*/
/*$sql= mysql_num_rows(mysql_query("SELECT * FROM login WHERE userid=$_POST[username] and pass=$_POST[password]"));
if($sql>=1)
{
*/

$flag=0;
$query=mysql_query("SELECT * FROM login WHERE userid='$_POST[username]' and password='$_POST[password]'");
$_SESSION['userid']=$_POST['username'];
 $row=mysql_fetch_array($query);
 $usertype=$row['type'];
 $_SESSION['type']=$usertype;
 
 if($usertype=='admin')
  {$falg=1;
	   header("location: home_admin.php");
	  }
 else if($usertype=='user')
 {$flag=1;
mysql_query("UPDATE login SET status = 'online' WHERE userid = '$_POST[username]'");

	  header("location: home_user.php");
	 }
 
 


if($flag==0)
{
 ?>
  <script language='javascript'>
    var con = alert("Invalid Login Credentials");
    window.location="home.html"; 
    </script>
   <?php 
  }