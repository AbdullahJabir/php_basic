<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class person{
	public $name;
	public $age;
	public function __construct($age,$name)
	{
		$this->name=$name;
		$this->age=$age;
	}
	public function personName()
	{
		echo "Person name is $this->name and Age is {$this->age}";
	}
}

$new= New person("Gazi","20");

$new->personName();


?>
</body>
</html>