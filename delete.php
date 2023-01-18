<!DOCTYPE html>
<html>  
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Gaming</title>
  </head>
<body>
<?php


$email=$_POST["demail"];
$pass=$_POST["password"];
if($x=mysql_connect("localhost","root","12345678"))

if(mysql_select_db("signup",$x))

$q="delete from user where email='$email' and password='$pass'";
if(mysql_query("$q",$x))
	print("user is delete");
else
	print("please again");

if(mysql_close($x))

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