<?php 
include("dbconnection.php");
include("checksession.php");
$usrid1=$_SESSION['userid'];
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
                <a class="active navbar-brand"  href="home_user.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="product1.php">Products</a></li>
                    <li><a href="service1.php">Services</a></li>
                    <li><a href="req.php">Request</a></li>
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                   <li><a href="view_notifications.php">Notifications</a></li>

			

                     <li><form action="" method="post">
<input type="submit" name="logout" class = "btn btn-success" id="logout" value="logout(<?php echo $usrid1 ?>)"  /></form></li>
                </ul>
                
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</head>
<body style="background-image: url('regback.jpg');">
 <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2 style="align-items:center">
            View Notifications
        </h2>

        <table border="0" bordercolor="#FF0000" style="border-collapse: separate; border-spacing: 30px;" class='datatable' align="center">
            <tr bgcolor="#FFFFF" height="50px">
                <th>Notification Name</th>
                <th>Message</th>
               
<?php
		include("dbconnection.php");
            //show records
            $query = mysql_query("SELECT * FROM notice where userid='$usrid1'");
			
            $co=mysql_num_rows($query);
if($co>0){
        	while ($row = mysql_fetch_row($query)) {
				
		 	echo "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
            
			?>
        <?php    
            }
}
else{
	echo "<span class='message'>Currently no Notifications</span>";
	}
        ?>
</table>
        


</div>
</body>
</html>
