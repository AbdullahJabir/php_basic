
<?php
class PHP{
	
public function getvalue($x)
{
	foreach ($x as $value) {
		echo "$value[0]<br>";
		echo "result ".$value[1]*$value[2];
	}
}
}

/*spl_autoload_register(function($class){
		include("$class.php");
	});*/
 $add= new PHP;
 $nums=array(
 	array("Number 1",10,20),
 	array("Number2",20,20)
 );
 $add->getvalue($nums);

?>