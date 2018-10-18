<!DOCTYPE html>
<html>
<head>
    <title>Notice Board</title>
	<meta charset="utf-8" />
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
<center>
    <div class="col-lg-10">

        <div class="row">
<form id="contact_form" action="#" method="POST" onsubmit="return validateform()" enctype="multipart/form-data" class="col-lg-offset-1">
<div class="row">
                        <label for="uid">TO:</label><br />
                        <input id="uid" class="input" name="uid" type="email" placeholder="Userid" value="" size="30" /><br />
                    </div>            
<div class="row">
                        <label for="name">Notification Name:</label><br />
                        <input id="name" class="input" name="name" type="text" value="" size="30" /><br />
                    </div>            
<label for="message">Message:</label><br />
            <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
        

   <center>     <input id="submit_button" type="submit" value="Send" name="submit_button" class="btn btn-success" />  </center>
    </div>
</div>
</form>
</center>
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <?php
    include("dbconnection.php");
    if(isset($_POST['submit_button']))
    {
        $uid=$_POST['uid'];
   $name=$_POST['name'];
    $msg=$_POST['message'];
    $query=mysql_query("insert into notice values('".$uid."','".$name."','".$msg."')");

    	if($query)
    		{
			if($uid!=null||$name!=null&&$msg!=null){
    ?>
    <script type="text/javascript">
		alert("Notification sent successfully");

    </script>
    <?php
	}
else
{
echo "please fill all fields";
}

}
    
    else
    {
    echo "error";}}
    

    ?>

</body>
</html>
