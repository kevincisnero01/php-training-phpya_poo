<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio de POO</title>
</head>
<body>
	<h1>Sobreescribir Metodos-Operacion de matematica basica</h1>
	<?php 
		class Operation
		{
			protected $value1;
			protected $value2;
			protected $result;

			public function getValue1($v)
			{
				$this->value1 = $v;
			}

			public function getValue2($v)
			{
				$this->value2 = $v;
			}

			public function print()
			{
				echo $this->result;
			}
		}

		class Sum extends Operation
		{
			public function operate()
			{
				$this->result = $this->value1+$this->value2;
			}

			public function print()
			{
				echo "El resultado entre sumar $this->value1 y $this->value2 es :$this->result <br>";
			}
		}

		class Subtraction extends Operation
		{
			public function operate()
			{
				$this->result = $this->value1-$this->value2;
			}

			public function print()
			{
				echo "El resultado entre restar $this->value1 y $this->value2 es :$this->result <br>";
			}
		}

		class Division extends Operation
		{
			public function operate()
			{
				$this->result = $this->value1/$this->value2;
			}

			public function print()
			{
				echo "El resultado entre dividir $this->value1 y $this->value2 es :$this->result <br>";
			}
		}

		$v1 = 100;
		$v2 = 60;

		$sum1 = new Sum();
		$sum1->getValue1($v1);
		$sum1->getValue2($v2);
		$sum1->operate();
		$sum1->print();

		$sub1 = new Subtraction();
		$sub1->getValue1($v1);
		$sub1->getValue2($v2);
		$sub1->operate();
		$sub1->print();

		$div1 = new Division();
		$div1->getValue1($v1);
		$div1->getValue2($v2);
		$div1->operate();
		$div1->print();


	?>
</body>
</html>