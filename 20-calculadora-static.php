<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio POO</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Static-Calculadora Fija</h1>
<div class="container">
<?php
class Calculator
{

	public static function sum($v1,$v2)
	{
		return $v1+$v2;
	}

	public static function subtract($v1,$v2)
	{
		return $v1-$v2;
	}

	public static function divide($v1,$v2)
	{
		return $v1/$v2;
	}

	public static function multiply($v1,$v2)
	{
		return $v1*$v2;
	}
}
$v1 = 5;
$v2 = 3;

echo "<b>Valor1:</b> $v1 <b>Valor2:</b> $v2 <br>";
echo "<b>Sumar:</b> ".calculator::sum($v1,$v2);
echo"<br>";
echo "<b>Restar:</b> ".calculator::subtract($v1,$v2);
echo"<br>";
echo "<b>Dividir:</b> ".calculator::divide($v1,$v2);
echo"<br>";
echo "<b>Multiplicar:</b> ".calculator::multiply($v1,$v2);
echo"<br>";
?>
</div>
</body>
</html>