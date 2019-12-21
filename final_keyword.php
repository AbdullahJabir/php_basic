<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
class person{
	public $name;
	protected $age;
	public function __construct($age,$name)
	{
		$this->name=$name;
		$this->age=$age;
	}
	public final  function display()
	{
		echo "Person name is $this->name and Age is {$this->age}";
	}
}

/*entexds from super class named by person*/
class Admin extends person{
	public $level="Administrator";
	public function display()
	{
		echo "Person name is $this->name and Age is {$this->age} and level is $this->level <br>";
	}

}

$new= New person("Gazi","20");

$new->display();
echo "<br>";
$name="gazi";
$age="20";
$add=New Admin($age,$name);

$add->display();
echo "<br>";
$add->display();


?>
</body>
</html>