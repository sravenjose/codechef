<?php
include("dbconnection.php");
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>DELETE Product</title>
  
  
  
      <link rel="stylesheet" href="delform.css">

  
</head>

<body style="background-image: url('regback.jpg');">
  <div class="container">  
  <form id="contact" action="" method="post">
    <h2>REMOVE Product</h2><br/>
    <fieldset>
      <input placeholder="Product Id" type="text" name="n1" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Confirm Product Id" type="text" name="n2" tabindex="1" required autofocus>
    </fieldset>
    
    <fieldset>
      <button name="n4" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
<?php
include("dbconnection.php");
$a=filter_input(INPUT_POST, 'n1');
$b=filter_input(INPUT_POST, 'n2');
if (isset($_POST['n4'])) {
  if($a==$b){
  

$con1=mysql_query("delete from product where proid='$a'");
$con2=mysql_query("delete from newarrive where proid='$a'");
}
}



?>

</div>
  
  </div>
<div style="position: absolute;top: 55%;left: 45%;">
<a href="uploadfile.php"><button  style="background-color:#f4511e;color: white;width: 150px;height: 50px;text-align: center;cursor: pointer; ">BACK</button></a>
</div>
</body>
</html>
