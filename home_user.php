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
<img src="logo1.jpg" style="width:100px;height:100px;"align="left">
    <div id="header">

        <h1 align="middle">DAY & NIGHT COLOURS</h1>
        <h3 align="middle">D&N</h3>
    </div>
    <title>DAY & NIGHT COLOURS</title>
	<meta charset="utf-8" />
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
                <a class="active navbar-brand"  href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="product1.php">Products</a></li>
                    <li><a href="service1.php">Services</a></li>
                    <li><a href="req.php">Request</a></li>
                    <li><a href="changepass.php">Change Password</a></li>
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
   
       <div>
  <div>
  
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */


/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 0.5s;
  animation-name: fade;
  animation-duration: 2.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="banner/bnr-1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="banner/bnr-2.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="banner/bnr-3.jpg" style="width:100%">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</div>

</div>

<br/><br/><br/>
<center><h3>PREVIOUS WORKS</h3></center>


<div style="width: 30%; position: absolute;top: 130%;left: 2%;">
<script src="af1.js"></script>
<script src="af2.js"></script>
<div id="card" > 
  <div class="front"> 
    
   <a href="http://cial.aero/" style="text-decoration: none;"> <img src="w1.jpg  " style="width: 100%"></a>

  </div> 
  <div class="back">
    
    <a href="http://cial.aero/" style="text-decoration: none;"><img src="w2.jpg  " style="width: 100%;"></a>
  </div> 
</div>

<script >
    
$("#card").flip({
  axis: 'y',
  trigger: 'hover',
  reverse: true
});


</script>
</div>

<div style="width: 30%; position: absolute;top: 130%;left: 34%;">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<div id="card1" > 
  <div class="front"> 
    
    <a href="http://www.sajhotels.com/" style="text-decoration: none;"><img src="w4.jpg  " style="width: 100%"></a>

  </div> 
  <div class="back">
    
    <a href="http://www.sajhotels.com/" style="text-decoration: none;"><img src="w3.jpg" style="width: 100%;"></a>
  </div> 
</div>

<script >
    
$("#card1").flip({
  axis: 'y',
  trigger: 'hover',
  reverse: true
});


</script>
</div>

<div style="width: 30%; position: absolute;top: 130%;left: 66%;">
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<div id="card2" > 
  <div class="front"> 
    
    <img src="w5.jpg  " style="width: 100%">

  </div> 
  <div class="back">
    
    <img src="w6.jpg" style="width: 100%;">
  </div> 
</div>

<script >
    
$("#card2").flip({
  axis: 'y',
  trigger: 'hover',
  reverse: true
});


</script>
</div>

<br/><br/><br/><br/><br/><br/>
        <script src="scripts/jquery-1.9.1.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
       
</body>




</html>
