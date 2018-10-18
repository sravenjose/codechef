<!DOCTYPE html>
<?php 
include("dbconnection.php");
include("checksession.php");
?>
<html>
<head>
    <title>Upload Banner</title>
	<meta charset="utf-8" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <title>Banner</title>
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
           
           </div>
    </nav>
    <body>
<center>
   <form action="" method="post" enctype="multipart/form-data">
    Select Desing to upload:
    <input type="file" name="file" id="file">

    <input type="submit" value="Upload Banner" name="submit">
</form>

</center>
    <script src="scripts/jquery-1.9.1.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
<?php  
if(isset($_POST['submit']))
	{
if (file_exists("banner/" . $_FILES["file"]["name"]))  
{  
echo $_FILES["file"]["name"] . " already exists. ";  
}  
else  
{  
move_uploaded_file($_FILES["file"]["tmp_name"],"banner/" . $_FILES["file"]["name"]);  
echo "Stored in: " . "banner/" . $_FILES["file"]["name"];  
}
}
 

?> 

</body>
</html>
