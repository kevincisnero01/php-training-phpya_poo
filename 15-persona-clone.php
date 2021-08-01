<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio POO</title>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
<body>
<h1>Clone-Personas</h1>
<div class="container">
<?php
 
class Person {
  private $name;
  private $age;

  public function setData($name,$age)
  {
    $this->name=$name;
    $this->age=$age;
  }

  public function showData()
  {
    echo "$this->name - $this->age";
  }

}
$person1 = new Person();
echo"<b>Persona 1: </b>";
$person1->setData('Kevin',25);
$person1->showData();
echo"<li><b>el objeto original</b></li>";

echo"<b>Persona 2: </b>";
$person2 = $person1;
$person2->setData('Jose',30);
$person2->showData();
echo"<li><b>asignar persona1 a persona2</b></li>";

echo"<b>Persona 1: </b>";
$person1->showData();
echo"<li><b>modificado por persona2</b></li>";

echo"<b>Persona 3: </b>";
$person3 = clone($person1);
$person3->setData('Genesis',23);
$person3->showData();
echo"<li><b>clone de persona1 a persona3</b></li>";

echo"<b>Persona 1: </b>";
$person1->showData();
echo"<li><b>persona1 no se modifico por persona3</b></li>";

?>
</div>
</body>
</html>