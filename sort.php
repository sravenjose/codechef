<!DOCTYPE html>
<html>
<head>
	<title>SORT</title>
</head>
<body style="background-image: url('regback.jpg');">
<div align="center" >
<form method="POST" action="" >
<label style="color: white;"><h3>Category</h3><select style="width: 30%;" id="i1" name="i1" >
    <option hidden=""></option>
	<option>graphics</option>
	<option>flex</option>
	<option>vinyl</option>
	<option>sticker</option>
	<option>number</option>
	<option>key</option>
	<option>brass</option>
	<option>broucher</option>
	<option>form</option>

</select></label>
<br/><br/>

<button id="s1" name="s1" style="width: 15%;">SORT</button>
<br/><br/>
<a href="product.php">BACK</a>
</form>
</div>



</body>
<?php
include("dbconnection.php");
include("checksession.php");

if (isset($_POST['s1'])) {
	# code...
$x=$_POST['i1'];
$query=mysql_query("select * from product where cato='$x' order by price  ");
while ($row=mysql_fetch_row($query)) {

 ?>
<link href="card.css" rel="stylesheet" />
<div class="card" style="float: left;margin-left: 10%;background-color: black;color: white;margin-top: 10%;">
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
</html>