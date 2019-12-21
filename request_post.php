<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
	User name:
	<input type="text" name="name"><br>
	<input type="submit" name="submit">
	
</form>
<?php 
/*if($_SERVER['REQUEST_METHOD']=="POST")*/
if(isset($_POST['submit']))
{
	/*$name=$_REQUEST['name'];*/
	$name=$_POST['name'];
	if(empty($name))
		echo "Field is empty";
	else
		echo "Alhamdulillah $name";
}
?>
</body>
</html>