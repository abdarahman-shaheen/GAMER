<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <title>Gaming</title>
  </head>
<body>
<?php

$email=$_POST["email"];
$pass=$_POST["password"];
$x=mysqli_connect("localhost","root","12345678","signup");


	$q="select * from user where email='$email' and password='$pass'";
		$t=mysqli_query($x,"$q");


mysqli_close($x);

$rows=mysqli_num_rows($t);
	 if($rows>0)
header("location:../home page.html");
else
	print("user name and password incorrect");

?>
</body>


</html>