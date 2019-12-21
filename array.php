<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
/*$x=array(4,5,6,7,8);
$len=count($x);
echo $len;
for($i=0;$i<$len;$i++)
{
	echo "$x[$i] <br>";
}*/


$x=array("Name "=>"25",
	"karim"=>"10",
	"Rahim"=>"29"


);

foreach($x as $key=>$value)
{
	echo "key = ".$key." Value = $value <br>";
}
?>

</body>
</html>