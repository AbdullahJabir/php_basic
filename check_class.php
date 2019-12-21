<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="text-align: center;margin-top: 90px;background-color: green;font-size: 30px">
	<?php 

		class student{
			public function describe()
			{
				echo "Alhamdulillah, Done<br>";
			}
			public function __get($value){
				echo "$value can not Find<br>";
			}

			public function __set($value,$age)
			{
				echo "We set $value->$age<br>";
			}
		}

		/*$add=new student();
		$add->describe();
		$add->Hasan;
		$add->age=20;*/
		if(class_exists("dstudent")){
			$add=new student();
		echo "OK,We found this class";

		}
		else
		{
			echo "Sorry";
		}
	?>

</body>
</html>