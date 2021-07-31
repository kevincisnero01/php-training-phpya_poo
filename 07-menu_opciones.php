<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio POO</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
  <h1>Menu con opciones de tipo objetos</h1>
<div class="container">
<?php 
/*
El problema:
-Plantearemos una clase Opcion y otra clase Menu. 
-La clase Opcion definirá como atributos el titulo, enlace y color de fondo, los métodos a implementar serán el constructor y el graficar.
-Por otro lado la clase Menu administrará un array de objetos de la clase Opcion e implementará un métodos para insertar objetos de la clase Menu y otro para graficar. Al constructor de la clase Menu se le indicará si queremos el menú en forma 'horizontal' o 'vertical'.
*/ 
class Option
{
  private $title;
  private $link;
  private $background; 
  private $color;

  public function __construct($ti,$li,$bg,$c)
  {
    $this->title = $ti;
    $this->link = $li;
    $this->background = $bg;
    $this->color = $c;
  }

  public function graph()
  {
    echo '<a href="'.$this->link.'" style="background-color:'.$this->background.';color:'.$this->color.'">'.$this->title.'</a>';
  }
}

class Menu
{
  private $option = array();
  private $address;

  public function __construct($address)
  {
    $this->address = $address;
  }

  public function insert($opc)
  {
    $this->option[] = $opc;
  }

  public function graph()
  {
    if(strtolower($this->address) == 'horizontal')
    {
      for ($i=0; $i < count($this->option) ; $i++) { 
        $this->option[$i]->graph();
      }
    }
    elseif(strtolower($this->address) == 'vertical')
    {
      for ($i=0; $i < count($this->option) ; $i++) { 
        $this->option[$i]->graph();
        echo"<br>";
      }
    }else{
      echo"Las opciones permitidas son: 'horizontal' o 'vertical'";
    }
  }
}

$menu1 = new Menu('horizontal');

$option1 = new Option('google','www.google.com','#68BCFF','white');
$option2 = new Option('instagram','www.instagram.com','#7C7EFF','white');
$option3 = new Option('twitter','www.twitter.com','#1E74FF','white');

$menu1->insert($option1);
$menu1->insert($option2);
$menu1->insert($option3);

$menu1->graph();
?>

</div>
</body>
</html>