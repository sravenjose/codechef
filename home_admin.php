<?php 
include("dbconnection.php");
include("checksession.php");
?>
<!DOCTYPE html>
<html>
<head>
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <title>Admin Home</title>
    <meta charset="utf-8" />
<img src="logo1.jpg" style="width:100px;height:100px;"align="left">
    <div id="header">
        <h1 align="middle">DAY & NIGHT COLOURS</h1>
        <h3 align="middle">D&N</h3>
    </div>
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
                <a class="navbar-brand" href="home_admin.php">Home</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Logout</a></li>
            </ul>

        </div>
    </nav>
</head>
<body>
     <div class="container" >
        <div class="jumbotron"> 
            <h2 style="text-align:center;font:oblique;font-size:xx-large"> ADMIN PAGE</h2>
            <a href="banner.php" style="text-align: center">Change Banner</a>
            <a href="changepass1.php" style="text-align: center">Change Password</a>
        </div>
       </div>

   

    <div class="col-lg-4">
        <div class="jumbotron">
            <a href="admin_viewContactus.php"><h4 style="text-align:center">VIEW QUERIES</h4></a>
            <br />
            <div>
                
                   <center> <img src="questions.jpg" height="150" width="150" /></center>
                
                    <br />    
        
                    
                
            </div>

        </div>
    </div>

    <div class="col-lg-4">
        <div class="jumbotron">
            <a href="noticeboard.php"><h4 style="text-align:center">PUBLISH NOTIFICATION </h4></a>
            <br/ >
            <div >
                    
                 <center>   <img src="notification.png" width="150" height="150" /> </center>
                
               <br /> 

                    
               
            </div>    
        </div>
    </div>
    <div class="col-lg-4">
        <div class="jumbotron">
            <a href="onlineusers.php"><h4 style="text-align:center">VIEW USERS</h4></a>
            <br />
            <div >
                
                <center>    <img src="users.png" height="150" width="150" />  </center>
                
                <br />
                   
                
            </div>

        </div>
    </div>

    <div class="col-lg-4">
        <div class="jumbotron">
            <a href="vieworders.php"><h4 style="text-align:center">View Product Orders</h4></a>
          <br />
            <div >
                
                <center>    <img src="order.jpg" height="150" width="150" />  </center>
                
                <br />
                   
                
            </div>

        </div>
    </div>

    <div class="col-lg-4">
        <div class="jumbotron">
            <a href="viewtuto.php"><h4 style="text-align:center">View Requests</h4></a>
<br />
            <div >
                
                <center>    <img src="request.jpg" height="150" width="150" />  </center>
                
                <br />
                   
                
            </div>

        </div>
    </div>

    <div class="col-lg-4">
        <div class="jumbotron">
            <a href="uploadfile.php"><h4 style="text-align:center">Upload Product</h4></a>
            <br />
            <div >
                
                <center>    <img src="upload.png" height="150" width="150" />  </center>
                
                <br />
                   
                
            </div>

        </div>
    </div>

 <div class="col-lg-4">
        <div class="jumbotron">
            <a href="mord.php"><h4 style="text-align:center">Mobile Orders</h4></a>
            <br />
            <div >
                
                <center>    <img src="upload.png" height="150" width="150" />  </center>
                
                <br />
                   
                
            </div>

        </div>
    </div>

    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</body>
</html>

