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
<img src="logo1.jpg" style="width:100px;height:100px;"align="left">
         <div id="header">
        <h1 align="middle">DAY & NIGHT COLOURS</h1>
        <h3 align="middle">D&N</h3>
    </div>
    <title>Contact Us</title>
    <meta charset="utf-8" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
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
                    <li><a href="product.php">Products</a></li>
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
                    <li class="active"><a href="contact.html">Contact Us</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<style>
      #map {
        width: 500px;
        height: 400px;
      }
    </style>
</head>
<body style="background-image: url('regback.jpg');">
    <div class="col-md-4 col-lg-offset-1" style="color: white;">  DAY & NIGHT COLOURS<br/>
M.C ROAD , Near East Kappela<br/>Oliyan Kavala<br />Angamaly<br/>Pincode-683572<br/>contact no:0484 6057315
 <center><div class="col-lg-35"> Locate Us
	
  

	</div>
	<img src="map.jpeg" style="width:400px;height:450px;" >
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</div></center>
    </div>
    <div class="col-md-4 col-lg-offset-1">
        <strong>&nbsp&nbsp&nbsp&nbsp&nbspEnquiry Form</strong>
        <div class="container" style="width:500px">
            <div class="jumbotron">
                <form id="contact_form" action="#" method="POST" onSubmit="return validateform()" enctype="multipart/form-data" class="col-lg-offset-1">
                    <div class="row">
                        <label for="name">Name:</label><br />
                        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="email">Email:</label><br />
                        <input id="email" class="input" name="email" type="email" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="phno">Contact Number:</label><br />
                        <input id="phno" class="input" name="phno" type="number" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="message">Message:</label><br />
                        <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
                    </div>
                    <input id="submit_button" type="submit" value="Send email" name="submit_button"  class="btn btn-success"/>
                </form>
            </div>
        </div>
    </div>
    
	
<?php
include("dbconnection.php");
if(isset($_POST['submit_button']))
{

	$nme=$_POST['name'];		 
	$emai=$_POST['email'];
	$no=$_POST['phno'];
	$msg=$_POST['message'];	
	
	
if($nme==null||$emai==null||$no==null||$msg==null){?>
		<script type="text/javascript">
		alert("Please fill all fields");
		
		</script>
		<?php
} 
else if(strlen($no) < 10 ||strlen($no) > 10){
?>
<script type="text/javascript">
		alert("Please enter a valid mobile number");
		
		</script>
		<?php
}
else
{
$query=mysql_query("insert into enquiry(name,email,phno,msg)values('".$nme."','".$emai."','".$no."','".$msg."')");

	if($query)
	{ if (strpos($emai,'.')!==false)
		{
			
		?>
		<script type="text/javascript">
		alert("Submitted successfully");
header("location: home.html");
		
		</script>
		<?php

	}
else{
?>
		<script type="text/javascript">
		alert("Invalid Email");
header("location: home.html");
		
		</script>
		<?php
}

	   
	}
	else
	{
		echo "error";}
}

}
	
?>



</body>

</html>
