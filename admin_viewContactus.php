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
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <h2 style="align-items:center">
            View Query Details
        </h2>

        <table border="0" bordercolor="#FF0000"  class='datatable' align="center" style="border-collapse: separate; border-spacing: 30px;">
            <tr bgcolor="#FFFFF" height="50px">
                <th>Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Message</th>
<?php
		include("dbconnection.php");
            //show records
            $query = mysql_query("SELECT * FROM enquiry");
			
            $co=mysql_num_rows($query);
if($co>0){
        	while ($row = mysql_fetch_row($query)) {
				
		 	echo "<tr><td>$row[0]</td><td>$row[2]</td><td>$row[1]</td><td>$row[3]</td></tr>";
			?>
        <?php    
            }
}
else{
	echo "<span class='message'>Currently no Results</span>";
	}
        ?>
</table>
        


</div>
</body>
</html>
