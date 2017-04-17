<?php
 
    // Clase que implementa los servicios
    class Empleado{
	/* Metodo a utilizar como servicio que devuelve una tabla con los empleados  cuyo salarios se enceuntre en el rango mínimo y máximo ingresado por el usuario
	*/
	public function filtrarSalario($Minimo,$Maximo){
		$data = file_get_contents("employees.json");
		$Empleados = json_decode($data, true);
		$cadena= "<table><tr><th>Name</th><th>email</th><th>position</th><th>salary</th>";
		foreach ($Empleados as $Empleado) {
			$Salario=preg_replace("/([^0-9\\.])/i", "", $Empleado[salary]);
			if ($Salario>=$Minimo and $Salario<=$Maximo){
				$cadena= $cadena."<tr><td>".$Empleado[name]."</td>";
				$cadena=$cadena."<td>".$Empleado[email]."</td>";
				$cadena=$cadena."<td>".$Empleado[position]."</td>";
				$cadena=$cadena."<td>".$Empleado[salary]."</td></tr>";
			} 
		}
		$cadena=$cadena."</tr></table>";
		
		return $cadena;
	}
}
?>