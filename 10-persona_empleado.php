<!DOCTYPE html>
<html>
<head>
	<meta charset='utf8'>
	<title>Ejercicio POO</title>
</head>
<body>
<h1>Herencia 2-Persona y Salario</h1>
<?php 
/*
Problema:
Confeccionar una clase Persona que tenga como atributos el nombre y la edad. Definir como responsabilidades un método que cargue los datos personales y otro que los imprima.

Plantear una segunda clase Empleado que herede de la clase Persona. Añadir un atributo sueldo y los métodos de cargar el sueldo e imprimir todos los datos del empleado (sobreescribir el método imprimir de la clase Persona).

Definir un objeto de la clase Persona y llamar a sus métodos. También crear un objeto de la clase Empleado y llamar a sus métodos.
*/

class Person
{
	protected $name;
	protected $age;

	public function getData($name,$age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function print()
	{
		echo "Datos: $this->name, $this->age";
	}
}

class Employee extends Person
{
	private $salary;

	public function getSalary($salary)
	{
		$this->salary = $salary;
	}

	public function print()
	{
		echo "<br><b>Empleado:</b>";
		echo"<ul>";
		echo"<li>Nombre: $this->name </li>";
		echo"<li>Edad: $this->age </li>";
		echo"<li>Salario: $this->salary </li>";
		echo"</ul>";
	}
}


$person1 = new Employee();
$person1->getData('Kevin',26);
$person1->getSalary('1000 USD');
$person1->print();

$person2 = new Employee();
$person2->getData('Vaneska',27);
$person2->getSalary('350 USD');
$person2->print();
?>
</body>
</html>