<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Herencia-Operacion de matematica basica</h1>
<div class="container">
<?php  

class Operation
{
	protected  $value1;
	protected  $value2;
	protected  $result;

	public function getValue1($v)
	{
		$this->value1=$v;
	}

	public function getValue2($v)
	{
		$this->value2=$v;
	}

	public function print()
	{
		echo $this->result."<br>";
	}


}

class Sum extends Operation
{
	public function Operate()
	{
		$this->result = $this->value1+$this->value2;
	}
}

class Subtraction extends Operation
{
	public function Operate()
	{
		$this->result = $this->value1-$this->value2;
	}
}


$v1 = 10;
$v2 = 5;

$sum1 = new Sum();
$sum1->getValue1($v1);
$sum1->getValue2($v2);
$sum1->operate();
echo "El resultado de la suma entre $v1 y $v2 es:";
$sum1->print();

$sub1 = new Subtraction();
$sub1->getValue1($v1);
$sub1->getValue2($v2);
$sub1->operate();
echo "El resultado de la resta entre $v1 y $v2 es:";
$sub1->print();

?>
</div>
</body>
</html>