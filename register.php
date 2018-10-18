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
    <title>Register</title>
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
                    <li class="active"><a href="contact.php">Contact Us</a></li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</head>
<body style="background-image: url('regback.jpg');">
    
    <div class="col-md-4 col-lg-offset-3">
        <strong>&nbsp&nbsp&nbsp&nbsp&nbspRegistration Form</strong>
        <div class="container" style="width:500px">
            <div class="jumbotron">
                <form id="register_form" action="#" method="POST" onsubmit="return validateform()" enctype="multipart/form-data" class="col-lg-offset-1">
                   
			 <div class="row">
                        <label for="name">Name:</label><br />
                        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="email">Email:</label><br />
                        <input id="email" class="input" name="email" type="email" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="password">Password</label><br />
                        <input id="password" class="input" name="password" type="password" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="password">Confirm Password</label><br />
                        <input id="password" class="input" name="cpassword" type="password" value="" size="30" /><br />
<br />
                    </div>
                    <input id="submit_button" type="submit" value="Sign Up" name="submit_button"  class="btn btn-success"/>
                </form>
            </div>
        </div>
    </div>
   
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
<?php
include("dbconnection.php");

if(isset($_POST['submit_button']))
{
	$nme=$_POST['name'];		 
	$emai=$_POST['email'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];


if($nme==null||$emai==null||$pass==null||$cpass==null){?>
		<script type="text/javascript">
		alert("Please fill all fields");
		
		</script>
		<?php
}
if($pass==$cpass){

		$query=mysql_query("insert into login(name,userid,password,type)values('".$nme."','".$emai."','".$pass."','user')");

                
	
	if($query)
	{ 
	   if (strpos($emai,'.')!==false){
		?>
		<script type="text/javascript">
		alert("Registration successfull");
header("location: index.php");
		
		</script>
		<?php
	}
else{
?>
		<script type="text/javascript">
		alert("Invalid Email");
header("location: index.php");
		
		</script>
		<?php
}
}
	else
	{
		echo "User id already Exist";}
}
else 
{
?>
		<script type="text/javascript">
		alert("Passwords do not match");
header("location: home.html")
		
		</script>
		<?php
}}
	
?>

</body>

</html>
