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
Confeccionar una clase Empleado, definir como atributos su nombre y sueldo.
Definir un método inicializar que lleguen como dato el nombre y sueldo. Plantear un segundo método que imprima el nombre y un mensaje si debe o no pagar impuestos (si el sueldo supera a 3000 paga impuestos)
*/

class Employee
{
	private $name;
	private $salary;

	public function inicializador($name,$salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}

	public function pagaImpuesto()
	{
		if($this->salary>3000)
			echo "El empleado <b>$this->name</b>, tiene un sueldo de <b>$this->salary USD</b>, por lo tanto <b><u>Si debe pagar impuestos</u></b><br>";
		else
			echo "El empleado <b>$this->name</b>, tiene un sueldo de <b>$this->salary USD</b>, por lo tanto <b><u>No debe pagar impuestos</u></b><br>";
	}
}


$emp1 = new Employee();
$emp1->inicializador('Juan',3500);
$emp1->pagaImpuesto();

$emp2 = new Employee();
$emp2->inicializador('Genesis',1500);
$emp2->pagaImpuesto();
?>
</body>
</html>