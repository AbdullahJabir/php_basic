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
	const NAME = "Abdullah JAbir Al GAzi";
	public function __construct($age,$name)
	{
		$this->name=$name;
		$this->age=$age;
	}
	public function personName()
	{
		echo "Person name is $this->name and Age is {$this->age}";
	}
	public function name()
	{
		echo person::NAME;
	}
}

$new= New person("Gazi","20");

$new->personName();
echo "<br>";
$new->name();


?>
</body>
</html>