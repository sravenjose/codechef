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
			date_default_timezone_set("asia/kolkata");
$v=date("h:i:sa");
			if($usrtype=="user")
			{
			header("location:home_user.php");
			mysql_query("UPDATE login SET status = 'online',time1='$v' WHERE userid = '$_POST[username]'");
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
<head >
<link href="Content/bootstrap.min.css" rel="stylesheet" />
<img src="logo1.jpg" style="width:100px;height:100px;"align="left">
    <div id="header">

        <h1 align="middle">DAY & NIGHT COLOURS</h1>
        <h3 align="middle">D&N</h3>
    </div>
    <title>DAY & NIGHT COLOURS</title>
	
    
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
                <a class="navbar-brand" href="#">Home</a>
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
                    
                    <li><a href="contact.php">Contact Us</a></li>
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

<br/>

<center><h3>PREVIOUS WORKS</h3></center>

<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div style="width: 30%; position: absolute;top: 135%;left: 2%;">
<script src="af1.js"></script>
<script src="af2.js"></script>
<div id="card" > 
  <div class="front"> 
    
    <a href="http://cial.aero/" style="text-decoration: none;"><img src="w1.jpg  " style="width: 100%"></a>

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

<div style="width: 30%; position: absolute;top: 135%;left: 34%;">
<script src="af1.js"></script>
<script src="af2.js"></script>
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

<div style="width: 30%; position: absolute;top: 135%;left: 66%;">
<script src="af1.js"></script>
<script src="af2.js"></script>
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

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div>
  <link rel="stylesheet" type="text/css" href="materialize.css">
  <link rel="stylesheet" type="text/css" href="materialize.min.css">
<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">DAY & NIGHT COLOURS</h5>
                <p class="grey-text text-lighten-4">M.C ROAD , Near East Kappela<br/>Oliyan Kavala<br />Angamaly<br/>Pincode-683572</p>
              </div>
              <!--<div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <link rel="stylesheet" type="text/css" href="abc.css">
                  <li><a href="#" class="fa fa-facebook"></a></li>
                  <li><a  href="#!">Link 2</a></li>
                  <li><a  href="#!">Link 3</a></li>
                  <li><a  href="#!">Link 4</a></li>
                </ul>
              </div>-->
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Copyright
           
            </div>
          </div>
        </footer>

</div>



<script src="scripts/jquery-1.9.1.min.js"></script>
            <script src="scripts/bootstrap.min.js"></script>




   
       
</body>




</html>
