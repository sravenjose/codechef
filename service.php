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
    <title>Services</title>
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
                    <li><a href="product.php">Products</a></li>
                    <li><a href="#">Services</a></li>
                    
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
    
<div style="width: 30%; position: absolute;top: 30%;left: 2%;">
<script src="af1.js"></script>
<script src="af2.js"></script>
<div id="card" > 
  <div class="front"> 
    
    <img src="s1.jpg  " style="width: 100%">

  </div> 
  <div class="back">
    
    <img src="graphics.jpg" style="width: 100%;">
  </div> 
</div>

<script >
    
$("#card").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>

<div style="width: 30%;position: absolute;top: 30%;left: 34%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card1"  > 
  <div class="front"> 
    
    <img src="s2.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="broucher.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card1").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>


<div style="width: 30%;position: absolute;top: 30%;left: 66%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card2"  > 
  <div class="front"> 
    
    <img src="s3.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="flex.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card2").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>


<div style="width: 30%;position: absolute;top: 63%;left: 2%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card3"  > 
  <div class="front"> 
    
    <img src="s4.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="vinyl.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card3").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>

<div style="width: 30%;position: absolute;top: 63%;left: 34%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card4"  > 
  <div class="front"> 
    
    <img src="s5.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="sticker.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card4").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>


<div style="width: 30%;position: absolute;top: 63%;left: 66%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card5"  > 
  <div class="front"> 
    
    <img src="s6.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="number.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card5").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>


<div style="width: 30%;position: absolute;top: 96%;left: 2%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card6"  > 
  <div class="front"> 
    
    <img src="s7.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="key.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card6").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>



<div style="width: 30%;position: absolute;top: 96%;left: 34%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card7"  > 
  <div class="front"> 
    
    <img src="s8.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="brass1.png" style="width: 100%;">
  </div> 
</div>
<script >
$("#card7").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>

<div style="width: 30%;position: absolute;top: 96%;left: 66%; ">
<script src="af1.js"></script>
<script src="af2.js"></script>


<div id="card8"  > 
  <div class="front"> 
    
    <img src="s9.jpg  " style="width: 100%;">

  </div> 
  <div class="back">
    
    <img src="led.jpg" style="width: 100%;">
  </div> 
</div>
<script >
$("#card8").flip({
  axis: 'x',
  trigger: 'hover',
  reverse: true
});


</script>
</div>





    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</body>
</html>
