<?php
include("dbconnection.php");
include("checksession.php");
$x2=$_SESSION['userid'];
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>CHANGE PASSWORD</title>
  
  
  
      <link rel="stylesheet" href="delform.css">

  
</head>

<body style="background-color:grey;">
  <div class="container">  
  <form id="contact" action="" method="post">
    <h2>CHANGE PASSWORD</h2><br/>
    <fieldset>
      <input placeholder="Current Password" type="text" name="n1" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="New Password" type="text" name="n2" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Confirm Password" type="text" name="n3" tabindex="3" required>
    </fieldset>
    
    <fieldset>
      <button name="n4" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
<?php
include("dbconnection.php");

$a=filter_input(INPUT_POST, 'n1');
$b=filter_input(INPUT_POST, 'n2');
$c=filter_input(INPUT_POST, 'n3');
if (isset($_POST['n4'])) {
   $w=mysql_query("select * from login where  userid='$x2'");
   $res=mysql_fetch_row($w);
   $t=$res[2];
    if ($t==$a) {
      
    

  if ($b==$c) {
    $q=mysql_query("update login set password='".$b."' where userid='$x2'");

  }
  }
}



?>

</div>
  
  </div>
<div style="position: absolute;top: 75%;left: 45%;">
<a href="home_user.php"><button  style="background-color:#f4511e;color: white;width: 150px;height: 50px;text-align: center;cursor: pointer; ">BACK</button></a>
</div>
</body>
</html>
