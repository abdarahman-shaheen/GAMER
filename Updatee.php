<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Gaming</title>
  </head>
<body>
<?php


$email=$_POST["email"];
$pass=$_POST["password"];
$npass=$_POST["newpassword"];
if($x=mysqli_connect("localhost","root","12345678","signup"))

$r="select * from user where  email='$email' and password='$pass'"; 

if($t=mysqli_query($x,"$r"))
	print("wees");


$rows=mysqli_num_rows($t);
	 if($rows>0)
			$q="update user set password='$npass'where email='$email' and password='$pass'";
	if(mysqli_query($x,"$q"))
print("yes");		
else
	print("please enter defferent name or email");

mysqli_close($x);

/*
while($a=mysql_fetch_row($r))
{

foreach($a as $v)
print("$v");

}
*/
?>
</body>


</html>