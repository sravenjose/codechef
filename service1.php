<?php 
include("dbconnection.php");
include("checksession.php");
$usrid=$_SESSION['userid'];
if(isset($_POST['logout']))
{	
	mysql_query("UPDATE login SET `status` = 'offline' WHERE `userid` = '$usrid'");
	session_destroy(); 
	header("Location:index.php");
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
                <a class="navbar-brand" href="home_user.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="product1.php">Products</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="req.php">Request</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="view_notifications.php">Notifications</a></li>
                    
                    <li><form action="" method="post">
<input type="submit" class = "btn btn-success" name="logout" id="logout" value="logout(<?php echo $_SESSION['userid']; ?>)"  /></form></li>
               
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
