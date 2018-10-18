<!DOCTYPE html>
<?php 
include("dbconnection.php");
include("checksession.php");
?>
<html>
<head>
    <title>Upload Product</title>
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
   <form action="" method="post" enctype="multipart/form-data">
    Select Desing to upload:
    <input type="file" name="file" id="file">

    <input type="submit" value="Upload Design" name="submit">
</form>

</center>
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
<?php  
if(isset($_POST['submit']))
	{
if (file_exists("image/" . $_FILES["file"]["name"]))  
{  
echo $_FILES["file"]["name"] . " already exists. ";  
}  
else  
{  
move_uploaded_file($_FILES["file"]["tmp_name"],"image/" . $_FILES["file"]["name"]);  
echo "Stored in: " . "image/" . $_FILES["file"]["name"];  
}
}
 

?> 


<div class="col-md-4 col-lg-offset-3">
        <strong>&nbsp&nbsp&nbsp&nbsp&nbspUpload Product</strong>
        <div class="container" style="width:500px">
            <div class="jumbotron">
                <form id="register_form" action="#" method="POST" onsubmit="return validateform()" enctype="multipart/form-data" class="col-lg-offset-1">
                   
             <div class="row">
                        <label for="pid">Product ID:</label><br />
                        <input id="pid" class="input" name="pid" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="price">Price:</label><br />
                        <input id="price" class="input" name="price" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="cato">Categories</label><br />
                        <input id="cato" class="input" name="cato" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="im">Image Name</label><br />
                        <input id="im" class="input" name="im" type="text" value="" size="30" /><br />
<br />
                    </div>
                    <input id="submit_button" type="submit" value="Upload" name="submit_button"  class="btn btn-success"/>
                   <input id="btn0" type="submit" value="Remove Product" name="btn0"  class="btn btn-success"/>
                </form>
            </div>
        </div>
    </div>

    <?php
include("dbconnection.php");
if(isset($_POST['submit_button']))
{
    $nme=$_POST['pid'];         
    $emai=$_POST['price'];
    $pass=$_POST['cato'];
    $cpass=$_POST['im'];


if($nme==null||$emai==null||$pass==null||$cpass==null){ ?>
        <script type="text/javascript">
        alert("Please fill all fields");
        
        </script>
        <?php
}
$query=mysql_query("insert into product values('".$nme."','".$emai."','".$pass."','".$cpass."')");
$query1=mysql_query("insert into newarrive values('".$nme."','".$emai."','".$pass."','".$cpass."')");
}
if (isset($_POST['btn0'])) {
    header("location:delp.php");
}
        
?>

</body>
</html>
