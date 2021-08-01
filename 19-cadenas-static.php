<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio POO</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Static-Funciones de manejo de cadenas</h1>
<div class="container">
<?php
class Text
{
	public static function uppercase($text)
	{
		return strtoupper($text);
	}

	public static function lowercase($text)
	{
		return strtolower($text);
	}

	public static function length($text)
	{
		return strlen($text);
	}
}

$text = "Hola mundo coders ";
echo "<b>Texto Original:</b> $text <br>";
echo "<b>Logitud:</b> ".text::length($text);
echo"<br>";
echo "<b>Mayuscula:</b> ".text::uppercase($text);
echo"<br>";
echo "<b>Minuscula:</b> ".text::lowercase($text);
echo"<br>";
?>
</div>
</body>
</html>