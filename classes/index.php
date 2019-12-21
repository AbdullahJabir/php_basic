
<?php

/*include("PHP.php"); 
include("JAVA.php");*/
/*using __autoload method*/
/*function __autoload($class){
	include("$class.php");
}*/
spl_autoload_register(function($class){
		include("$class.php");
	});
 $add= new PHP;
 $a=new JAVA;

?>