<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Alinear Titulos</h1>
<div class='container'>
<?php 
/*
Problema:
Confeccionar una clase CabeceraPagina que permita mostrar un título, indicarle si queremos que aparezca centrado, a derecha o izquierda, además permitir definir el color de fondo y de la fuente.
*/

class HeaderPage
{
	private $title;
	private $location;
	private $background;
	private $color;

	public function initialize($title,$location,$background,$color)
	{
		$this->title = $title;
		$this->location = $location;
		$this->background = $background;
		$this->color = $color;
	}


	public function graph()
	{
		echo"<div class='box' style='text-align:$this->location;background-color:$this->background;color:$this->color'>";
		echo $this->title;
		echo"</div>";
	}
}

$header1 = new HeaderPage();
$header1->initialize('Curso de POO','left','#8892BF','white');
$header1->graph();

$header2 = new HeaderPage();
$header2->initialize('Curso de Testing','center','#2B4697','white');
$header2->graph();

$header3 = new HeaderPage();
$header3->initialize('Curso de Laravel','right','#FF2D20','white');
$header3->graph();

?>
</div><!--container-->
</body>
</html>