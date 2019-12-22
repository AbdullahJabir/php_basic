<?php 
class person{
	public $name="Abdullah Jabir";
	Public $age="18";
	public $skill="Web Developer";

	private $email="gazi@gmail.com";
	protected $password="12345";

	function iterator(){
		foreach ($this as $key => $value) {
			echo "<pre>";
			echo "$key => $value";
			echo "</pre>";
		}
	}
}
?>