<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
interface school{
	public function mySchool();
}
interface college{
	public function myCollege();
}

class Student implements school,college{
	public function __construct()
	{
		$this->mySchool();
		$this->myCollege();
	}
	public function mySchool(){
		echo "Rangpur Govt College<br>";
	}

	public function myCollege()
	{
		echo "Rangpur Govt. High<br>";
	}
}

$a=New Student();

?>
</body>
</html>