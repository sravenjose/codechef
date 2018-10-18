<?php
include("dbconnection.php");
	if(isset($_POST['Submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="select * from login where userid='$username' and password='$password'";
		$result = mysql_query($query);
		if($result)
		{
			session_start();
			$row = mysql_fetch_row($result);
			$usrtype=$row[3];
			$_SESSION['userid']=$username;
			$_SESSION['usertype']=$usrtype;
			
			if($usrtype=="user")
			{
			header("location:home_user.php");
			mysql_query("UPDATE login SET status = 'online' WHERE userid = '$_POST[username]'");
			}
			else if($usrtype=="admin")
			{
			header("location:home_admin.php");
			}
		
		else
		{?>
		<script type="text/javascript">
		alert("Invalid Credentials");
header("location: index.php")
		
		</script>
		<?php
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <title>Products</title>
<img src="logo1.jpg" style="width:100px;height:100px;"align="left">
    <div id="header">

        <h1 align="middle">DAY & NIGHT COLOURS</h1>
        <h3 align="middle">D&N</h3>
    </div>


    <meta charset="utf-8" />
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Products</a></li>
                    <li><a href="service.php">Services</a></li>
                 </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                  
                    <li>
                        <a href="#" data-toggle="modal" data-target="#popUpWindow">Login</a>
                        <!--Login Pop Up-->

                        <div class="modal fade" id="popUpWindow">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h3>Log In</h3>

                                    </div>
                                    <div class="modal-body">
                                        <form role="form" action="" method="post">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Email" name="username" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password" name="password" />
                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" class="btn btn-primary btn-block " name="Submit"></button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
			<li><a href="register.php">Sign Up</a></li>
                    
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</head>
<body style="background-image: url('regback.jpg');">
<div >
	<center><h2>NEW ARRIVALS</h2></center>
<?php
include("dbconnection.php");
$i=0;
$ry1=mysql_query("select * from newarrive");
while($row4=mysql_fetch_row($ry1))
{
    $i=$i+1;
}

$query1=mysql_query("select * from newarrive");
$u=1;$v1=$i-2;$v2=$i-1;$v3=$i;
while ($row1=mysql_fetch_row($query1)) {
  if($u==$v1||$u==$v2||$u==$v3)
  {
 ?>
<link href="card.css" rel="stylesheet" />
<div class="card" style="float: left;margin-left: 10%;background-color: black;color: white;margin-top: 2%;width: 10%;">
  <?php 
  $x="image/".$row1[3];
  echo'<img src="'.$x.'" > ';?>
  <div class="container">

        <?php echo"<h5><b>Product ID:$row1[0]</b></h5>"; ?>
 <?php  echo"<p> Price:$row1[1]</p>";?>
 
        

        </div>
    </div>
<?php
   
   }
   $u=$u+1; 
}




?>

</div>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div align="center" style="align-content: center;">
<form method="POST" action="" >
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<label ><h3>CATEGORY</h3></label>
<select style="width: 30%;" id="i1" name="i1" >
    <option hidden ></option>
    <option>graphics</option>
    <option>flex</option>
    <option>vinyl</option>
    <option>sticker</option>
    <option>number</option>
    <option>key</option>
    <option>brass</option>
    <option>broucher</option>
    <option>form</option>

</select>
<br/><br/>

<button id="s1" name="s1" style="width: 15%;">SEARCH</button>
<br/><br/>

</form>
</div>
<?php
include("dbconnection.php");


if (isset($_POST['s1'])) {
    # code...
$x=$_POST['i1'];
$query=mysql_query("select * from product where cato='$x' order by price asc ");
while ($row=mysql_fetch_row($query)) {

 ?>
<link href="card.css" rel="stylesheet" />
<div class="card" style="float: left;margin-left: 10%;background-color: black;color: white;margin-top: 7%;width: 14.80%;">
  <?php 
  $x="image/".$row[3];
  echo'<img src="'.$x.'" > ';?>
  <div class="container">

        <?php echo"<h4><b>Product ID:$row[0]</b></h4>"; ?>
 <?php  echo"<p> Price:$row[1]</p>";?>
        

        </div>
    </div>
<?php
    
}

}


?>


            <script src="scripts/jquery-1.9.1.min.js"></script>
            <script src="scripts/bootstrap.min.js"></script>
</body>
</html>
