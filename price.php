<html>
<head>
<meta charset="utf-8"/>
<title>price</title>

</head>
<body>
<?php
$total=0;
for($i=1;$i<=12;$i++){
		$total +=$_POST["g".$i];
}
print("total price games : $total");

	
?>

</body>
</html>