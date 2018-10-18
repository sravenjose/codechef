<?php 
include("dbconnection.php");
include("checklogin.php");
if(isset($_POST['logout']))
{	
	mysql_query("UPDATE login SET status = 'offline' WHERE 'userid' =$id ");
	session_destroy();
	header("Location:index.php");
	}