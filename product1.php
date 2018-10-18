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
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <title>Products</title>
    <style type="text/css">
<!--
.style1 {font-size: 15pt}
-->
    </style>
<img src="logo1.jpg" style="width:100px;height:100px;"align="left">
    <div id="header">

        <h1 align="middle">DAY & NIGHT COLOURS</h1>
        <h3 align="middle">D&N</h3>
    </div>
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
                <a class="navbar-brand" href="home_user.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">Products</a></li>
                    <li><a href="service1.php">Services</a></li>
                    <li><a href="req.php">Request</a></li>
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
<div >
    <h2 style="margin-left: 10%" >NEW ARRIVALS</h2>
<?php
include("dbconnection.php");
$i=0;
$ry1=mysql_query("select * from newarrive");
while($row4=mysql_fetch_row($ry1))
{
	$i=$i+1;
}


$query1=mysql_query("select * from newarrive");
$u=1;$v1=$i-2;$v2=$i-1;$v3=$i;
while ($row1=mysql_fetch_row($query1)) {
  if($u==$v1||$u==$v2||$u==$v3)
  {
 ?>
<link href="card.css" rel="stylesheet" />
<div class="card" style="float: left;margin-left: 5%;background-color: black;color: white;margin-top: 2%;width: 14.85%">
  <?php 
  $x="image/".$row1[3];
  echo'<img src="'.$x.'" > ';?>
  <div class="container">

        <?php echo"<h5><b>Product ID:$row1[0]</b></h5>"; ?>
 <?php  echo"<p> Price:$row1[1]</p>";?>
 
        

        </div>
    </div>
<?php
   
   }
   $u=$u+1; 
}




?>

</div>



<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   <div align="middle" style="align-content: left;">
<form method="POST" action="" >
<br/><br/><br/><br/>
<label ><h3>Category</h3></label>
<select style="width: 30%;" id="i1" name="i1" >
    <option hidden ></option>
    <option>graphics</option>
    <option>flex</option>
    <option>vinyl</option>
    <option>sticker</option>
    <option>number</option>
    <option>key</option>
    <option>brass</option>
    <option>broucher</option>
    <option>form</option>

</select>
<br/><br/>

<button id="s1" name="s1" style="width: 15%;">SEARCH</button>
<br/><br/>

</form>
</div>
<?php
include("dbconnection.php");


if (isset($_POST['s1'])) {
    # code...
$x=$_POST['i1'];
$query=mysql_query("select * from product where cato='$x' order by price  ");
while ($row=mysql_fetch_row($query)) {

 ?>
<link href="card.css" rel="stylesheet" />
<div class="card" style="float: left;margin-left: 10%;background-color: black;color: white;margin-top: 10%;width: 14.80%;">
  <?php 
  $x="image/".$row[3];
  echo'<img src="'.$x.'" > ';?>
  <div class="container">

        <?php echo"<h4><b>Product ID:$row[0]</b></h4>"; ?>
 <?php  echo"<p> Price:$row[1]</p>";?>
        

        </div>
    </div>
<?php
    
}

}


?>
<div style="position: absolute;top: 30%;left: 62%;">
        
            <h4 style="text-align:center;color: white;">Place Order for products </h4>
            <br />

           <form id="order_form" action="#" method="POST" onSubmit="return validateform()" enctype="multipart/form-data" >
                    <div class="row">
                        <label for="name" style="color: white;">Product ID</label><br />
                        <input id="product" class="input" name="name" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="qty" style="color: white;">Quantity:</label><br />
                        <input id="qty" class="input" name="qty" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="address" style="color: white;">Address :</label><br />
                        <input id="address" class="input" name="address" type="text" value="" size="30" /><br />
                    </div>
                    <div class="row">
                        <label for="phno" style="color: white;">Mobile Number:</label><br />
                        <input id="number" class="input" name="number" type="number" value"" size="30"/><br />
<br/>
                    </div>
                    <input id="submit_button" type="submit" value="Place Order" name="submit_button"  class="btn btn-success"/>
          </form>
        
    </div>
    <?php
include("dbconnection.php");
if(isset($_POST['submit_button']))
{
    $product=$_POST['name'];         
    $qty=$_POST['qty'];
    $no=$_POST['number'];
    $address=$_POST['address'];
$user=$_SESSION['userid'];  

if($product==null||$qty==null||$no==null||$address==null)
{
?>
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
    
    $query=mysql_query("insert into book(product,qty,user,address,phno)values('".$product."','".$qty."','".$user."','".$no."','".$address."')");
    
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


            <script src="scripts/jquery-1.9.1.min.js"></script>
            <script src="scripts/bootstrap.min.js"></script>
</body>
</html>
