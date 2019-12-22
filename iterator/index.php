<?php 
spl_autoload_register(function($class){
	include("$class.php");
});
$add=new person();
$add->iterator();
echo "<b>Outside of the class</b>";

foreach ($add as $key => $value) {
	echo "<pre>";
	echo "$key => $value";
	echo "</pre>";
}
?>