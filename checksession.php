<?php 
session_start();
if(!$_SESSION['userid'])
 header("location:..WebApplication1/index.php");

?>