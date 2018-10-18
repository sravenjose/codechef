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
    <title>Request Tutorial</title>
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
                <a class="active navbar-brand"  href="home_user.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="product1.php">Products</a></li>
                    <li><a href="service1.php">Services</a></li>
                    <li><a href="#">Request</a></li>
                    
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
<div class="col-md-4 col-lg-offset-1">
        <strong>&nbsp&nbsp&nbsp&nbsp&nbspEnquiry Form</strong>
        <div class="container" style="width:500px">
            <div class="jumbotron">
                <form id="request_form" action="" method="POST" onSubmit="return validateform()" enctype="multipart/form-data" class="col-lg-offset-1">
                    <div class="row">
                        <label for="title">Title:</label><br />
                        <input id="title" class="input" name="title" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="phno">Contact Number:</label><br />
                        <input id="phno" class="input" name="phno" type="number" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="message">Description</label><br />
                        <textarea id="message" class="input" name="desc" rows="7" cols="30"></textarea><br />
                    </div>
                    <input type="file" name="file" id="file">
                    <input id="submit_button" type="submit" value="Send Request" name="submit_button"  class="btn btn-success"/>
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
	$nme=$_SESSION['userid'];		 
	$title=$_POST['title'];
	$no=$_POST['phno'];
	$desc=$_POST['desc'];
    if (file_exists("userproduct/" . $_FILES["file"]["name"]))  
{  
echo $_FILES["file"]["name"] . " already exists. ";  
}  
else  
{  
move_uploaded_file($_FILES["file"]["tmp_name"],"userproduct/" . $_FILES["file"]["name"]);  
 
}
$pro=$_FILES["file"]["name"];

if($nme==null||$title==null||$no==null||$desc==null){?>
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
else{

		$query=mysql_query("insert into request(user,title,phno,description,imgname)values('".$nme."','".$title."','".$no."','".$desc."','".$pro."')");
	
	if($query)
	{ 
	   
		?>
		<script type="text/javascript">
		alert("Order placed successfully");
		
		</script>
		<?php
	}
	else
	{
		echo "error";}
}
}
	
?>



</body>
</html>