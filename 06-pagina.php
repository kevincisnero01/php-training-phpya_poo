<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio POO</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<div class="container">
	<?php  
	/*
	El Problema:
	Una página web es común que contenga una cabecera, un cuerpo y un pié de página. Estas tres secciones podemos perfectamente identificarlas como clases. También podemos identificar otra clase pagina. Ahora bien como podemos relacionar estas cuatro clases (pagina, cabecera, cuerpo, pie), como podemos imaginar la cabecera, cuerpo y pie son partes de la pagina. Luego podemos plantear una clase pagina que contenga tres atributos de tipo objeto.
	*/
/**/
	class Header
	{
		private $content;

		public function __construct($content)
		{
			$this->content = $content;
		}

		public function graph()
		{
			echo"<h1 style='text-align:center'> $this->content </h1>";
		}
	}

	class Body
	{
		private $lines = array();

		public function insertLines($content)
		{
			$this->lines[] = $content;
		}

		public function graph()
		{
			for ($i=0; $i < count($this->lines); $i++) { 
				echo "<p>".$this->lines[$i]."</p>";
			}
		}
	}

	class Footer
	{
		private $content;

		public function __construct($content)
		{
			$this->content = $content;
		}

		public function graph()
		{
			echo"<h5 style='text-align:center'> $this->content </h5>";
		}
	}

	class Page
	{
		private $header;
		private $body;
		private $footer;

		public function __construct($contentH,$contentF)
		{
			$this->header = new Header($contentH);
			$this->footer =  new Footer($contentF);
			$this->body =  new Body();
		}

		public function insertPage($text)
		{
			$this->body->insertLines($text); 
		}

		public function graph()
		{
			$this->header->graph();
			$this->body->graph();
			$this->footer->graph();
		}
	}

	/*Texto de prueba*/
	$contentHeader = "Este es el titulo del header";
	$contentFooter = "Este es el titulo del footer";
	$contentBody= "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

	$page1 = new Page($contentHeader,$contentFooter);
	$page1->insertPage($contentBody);
	$page1->insertPage($contentBody);
	$page1->insertPage($contentBody);
	$page1->graph();
	?>
</div><!--container-->

</body>
</html>