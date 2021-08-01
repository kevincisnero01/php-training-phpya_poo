<!DOCTYPE html>
<html>
<head>
	<meta charset='utf8'>
	<title>Ejercicio POO</title>
</head>
<body>
<h1>Herencia 5-Empleados y Salario</h1>
<?php 
/*
Plantear una clase abstracta Trabajador. 
-Definir como atributo su nombre y sueldo. 
-Declarar un método abstracto: calcularSueldo. 
-Definir otro método para imprimir el nombre y su sueldo.

Plantear una subclase Empleado. 
-Definir el atributo $horasTrabajadas, $valorHora. 
-Para calcular el sueldo tener en cuenta que se le paga 3.50 la hora.

Plantear una clase Gerente que herede de la clase Trabajador. 
-Para calcular el sueldo tener en cuenta que se le abona un 10% de las utilidades de la empresa.
*/

abstract class Employee //Trabajador
{
	private $name;
	protected $salary;
	

	public function __construct($name)
	{	
		$this->name = $name;
	}

	public function print()
	{
		echo"<b>Nombre:</b> $this->name<br>";
		echo"<b>Salario:</b> $this->salary USD<br>";
	}

	public abstract function calculateSalary();
}

class Worker extends Employee// Obrero o Empleado
{
	protected $hoursWorked;
	protected $valueHour;

	public function __construct($name,$hoursWorked, $valueHour)
	{	
		parent::__construct($name);
		$this->hoursWorked = $hoursWorked;
		$this->valueHour = $valueHour;
	}

	public function calculateSalary()
	{
		$this->salary = $this->hoursWorked * $this->valueHour;
	}

}

class Manager extends Employee
{
	private $utilities;

	public function __construct($name,$uti)
	{	
		parent::__construct($name);
		$this->utilities = $uti;
	}

	public function calculateSalary()
	{
		$this->salary = $this->utilities*0.10;
	}
}
/**/

$person1 = new Worker('Carlos Acosta',40,3.50);
$person1->calculateSalary();
$person1->print();
echo "<br>";

$manag1 = new Manager('Kevin Cisnero',10000);
$manag1->calculateSalary();
$manag1->print();

?>
</body>
</html>