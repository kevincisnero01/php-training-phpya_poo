<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio POO</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<h1>Instanceof-Total de Salarios de Gerentes y Empleados</h1>
<div class="container">
<?php

abstract class Working
{
  private $name;
  private $salary;

  public function __construct($name,$salary)
  {
    $this->name = $name;
    $this->salary = $salary;
  }

  public function returnSalary()
  {
    return $this->salary; 
  }


}

class Employee extends Working
{

}

class Manager extends Working
{

}

$vector[] = new Manager('Vaneska',1000);
$vector[] = new Employee('Maria',300);
$vector[] = new Manager('Kevin',1000);
$vector[] = new Employee('Angel',300);
$vector[] = new Manager('Yheisson',1000);
$vector[] = new Employee('Manuel',500);
$vector[] = new Employee('Victor',300);
$vector[] = new Employee('Eduardo',300);
$vector[] = new Manager('Genesis',1000);

$countEmployee = 0;
$totalEmployee = 0;

$countManager = 0;
$totalManager = 0;

for ($i=0; $i < count($vector); $i++) { 
  if($vector[$i] instanceof Employee){
    $countEmployee++;
    $totalEmployee = $totalEmployee+$vector[$i]->returnSalary();
  }elseif($vector[$i] instanceof Manager){
    $countManager++;
    $totalManager = $totalManager+$vector[$i]->returnSalary();
  }
}

echo "<br>Gerentes[$countManager] Total Salario:".$totalManager;
echo "<br>Empleados[$countEmployee] Total Salario:".$totalEmployee;

?>
</div>
</body>
</html>