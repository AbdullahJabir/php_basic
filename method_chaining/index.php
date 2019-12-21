
<?php

spl_autoload_register(function($class){
		include("$class.php");
	});
 $add= new PHP;
echo "Result " .$add->getvalue(3,4)->result();

?>