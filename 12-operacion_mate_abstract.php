<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Herencia 4-Clase y metodo Abstract</h1>
<div class="container">
<?php

abstract class Operation
{
	protected $value1;
	protected $value2;
	protected $result;

	public function __construct($v1,$v2)
	{
		$this->value1 = $v1;
		$this->value2 = $v2;
	}

	public function print()
	{
		echo $this->result;
	}

	public abstract function Operate();
}

class Sum extends Operation
{
	private $title;

	public function __construct($title,$v1,$v2)
	{
		$this->title = $title;
		parent::__construct($v1,$v2);
	}

	public function Operate()
	{	
		echo $this->title;
		echo "entre $this->value1 + $this->value2 es :";
		$this->result = $this->value1+$this->value2;
	}


}
$v1 = 2000;
$v2 = 800;

$sum1 = new Sum("La suma de valores ",$v1,$v2);
$sum1->operate();
$sum1->print();




?>
</div>
</body>
</html>