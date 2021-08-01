<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Funcion Clone-Persona</h1>
	<div class="container">
		<?php

		class Person
		{
			private $name;
			private $age;

			public function __construct($name,$age)
			{
				$this->name = $name;
				$this->age = $age;
			}

			public function print()
			{
				echo"<b>Persona</b>: $this->name <b>Edad</b>: $this->age <br>";
			}

			public function __clone(){
				$this->name = 'Avatar';
				$this->age =  '1000 (Modificado por clonacion)';
				//die('No esta permitido la clonacion'); //Si queremos evitar la clonacion
			}
		}


		$person1 = new Person('Mari',30);
		$person1->print();
		$person2 = clone($person1);
		$person2->print();


		?>
	</div>
</body>
</html>