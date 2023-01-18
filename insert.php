<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Gaming</title>
  </head>
<body>
<?php

$name=$_POST["fname"];
$email=$_POST["email"];
$pass=$_POST["password"];
if($x=mysqli_connect("localhost","root","12345678","signup"))


$r="select * from user where name='$name' and email='$email' and password='$pass'"; 

if($t=mysqli_query($x,"$r"))


$rows=mysqli_num_rows($t);
	 if($rows>0)
print("please enter defferent name or email");
else
	$q="insert into user(name,email,password) values('$name','$email','$pass')";
if(mysqli_query($x,"$q"))
header("location:../signin.html");
mysql_close($x);
?>
</body>


</html>