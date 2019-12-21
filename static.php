<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

	class ClassNAme{
		static $a=10;
		const B=20;
	}

	echo ClassNAme::$a;
	echo "<br>";
	echo ClassNAme::B;
	ClassNAme::$a=20;
	echo "<br>";
	/*ClassNAme::B=30;*//*many not change const values*/
	echo ClassNAme::$a;
?>
</body>
</html>