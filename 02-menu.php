<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
</head>
<body>
<?php
/*
Problema:
Confeccionar una clase Menu. Permitir añadir la cantidad de opciones que necesitemos. Mostrar el menú en forma horizontal o vertical (según que método llamemos.
*/

class Menu
{
	private $link = array();
	private $title = array();

	public function loadOption($link,$title)
	{
		$this->link[] = $link;
		$this->title[] = $title;
	}

	public function showMenu()
	{
		for($i = 0; $i<count($this->link); $i++)
		{
			echo "<li><a href='".$this->link[$i]."'>".$this->title[$i]."</a></li>";
		}
	}
}

$menu1 = new Menu();
$menu1->loadOption("wwww.google.com","google");
$menu1->loadOption("wwww.twitter.com","twitter");
$menu1->loadOption("wwww.instagram.com","instagram");

$menu1->showMenu();

?>
</body>
</html>