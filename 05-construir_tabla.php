<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Construir Tabla</h1>
<div class="container">
<?php
/*
Problema:
Confeccionar una clase Tabla que permita indicarle en el constructor la cantidad de filas y columnas. 
Definir otra responsabilidad que podamos cargar un dato en una determinada fila y columna 
además de definir su color de fuente y fondo. 
Finalmente debe mostrar los datos en una tabla HTML.
*/
class Table
{
	private $countColumn;
	private $countRow;
	private $background;
	private $color;
	private $text_align;
	private $width;
	private $heigh;

	private $load_content = array();
	private $load_bg = array();
	private $load_color = array();

	public function __construct($row,$col,$bg,$color,$text_align,$width,$height)
	{
		$this->countRow = $row;
		$this->countColumn = $col;
		$this->background = $bg;
		$this->color = $color;
		$this->text_align = $text_align;
		$this->width = $width;
		$this->height = $height;
	}

	private function tableStart()
	{
		echo"<table border='1' style='text-align: $this->text_align;width: $this->width;height: $this->height'>";
	}

	private function tableEnd()
	{
		echo"</table>";
	}

	public function load($row,$column,$background,$color,$content)
	{	
		$this->load_bg[$row][$column] = $background;
		$this->load_color[$row][$column] = $color;
		$this->load_content[$row][$column] = $content;
	}

	private function show($row,$column)
	{
		/*Verificar si estan vacios*/
		$background = isset($this->load_bg[$row][$column]) ? $this->load_bg[$row][$column] : 'white';
		$color = isset($this->load_color[$row][$column]) ? $this->load_color[$row][$column] : 'black';
		$content = isset($this->load_content[$row][$column]) ? $this->load_content[$row][$column] : 'x';

		echo'<td style="background-color:'.$background.';color:'.$color.'">';
		echo $content;
		echo'</td>';
	}

	public function graph()
	{
		$this->tableStart();
		for($i = 1 ; $i <= $this->countRow; $i++)
		{
			echo"<tr>";
			for($j = 1 ; $j <= $this->countColumn; $j++)
			{
				$this->show($i,$j);
			}
			echo"</tr>";
		} 
		$this->tableEnd();
	}
}  

$table1 = new Table(3,3,'#d2d2d2','black','center','300px','300px');
$table1->load(1,1,'white','#000','Arriba');
$table1->load(2,2,'red','white','Centro');
$table1->load(3,3,'white','#000','Abajo');
$table1->graph();

?>
</div>
</body>
</html>