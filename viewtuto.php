<!DOCTYPE html>
<html>
<head>
    <title></title>
	<meta charset="utf-8" />
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
                <a class="navbar-brand" href="home_admin.php">Home</a>
            </div>
           <ul class="nav navbar-nav navbar-right">
 <li><a href="index.php">Logout</a></li>
                </ul>
           </div>
    </nav>
</head>
<body>
    <?php

include("dbconnection.php");
$query=mysql_query("select * from request ");
while ($row = mysql_fetch_row($query)) {?>


    <style type="text/css">
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;
    background-color:#E3E3E3;
}

.card:hover {
    box-shadow: 40px 40px 40px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
}
</style>


<div style="float: left;margin-left: 20px;">
<div class="card">
  <div class="container"><?php

    echo "USERNAME:$row[0]<br/><br/>";
     echo "TITLE:$row[1]<br/><br/>";
     echo "CONTACT:$row[2]<br/><br/>";
     echo "DISCRIPTION:$row[3]<br/><br/>";
     $x="userproduct/".$row[4];
  echo'<img src="'.$x.'" > '; 
     ?>
    
  </div>
</div>
</div>
<?php

     
  }



?>
</body>
</html>
