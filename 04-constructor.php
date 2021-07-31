<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Constructor</h1>
<div class='container'>
<?php 
/*
Problema:
Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente. Pasar los valores que cargaran los atributos mediante un constructor.
*/

class HeaderPage
{
	private $title;
	private $content;
	private $location;
	private $background;
	private $color;

	public function __construct($title,$content,$location,$background,$color)
	{
		$this->title = $title;
		$this->content = $content;
		$this->location = $location;
		$this->background = $background;
		$this->color = $color;
	}


	public function graph()
	{
		echo"<div class='box' style='text-align:$this->location;background-color:$this->background;color:$this->color'>";
		echo "<p><u>".$this->title."</u></p>";
		echo "<p>".$this->content."</p>";
		echo"</div>";
	}
}
$conten = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.";

$header1 = new HeaderPage('Curso de POO',$conten,'left','#8892BF','white');
$header1->graph();

$header2 = new HeaderPage('Curso de Testing',$conten,'center','#2B4697','white');
$header2->graph();

$header3 = new HeaderPage('Curso de Laravel',$conten,'right','#FF2D20','white');
$header3->graph();

?>

</div><!--container-->
</body>
</html>