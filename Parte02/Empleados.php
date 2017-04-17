<!doctype html>
<html>
 <head>
  <title>Problema 01</title>
 </head>
 <body> 
  <form id="frmEmpleado" action="" method="post">
	<span>Buscar por Email: </span>
	<INPUT type="text" name="txtEmail" value="<?php echo $_POST['txtEmail']; ?>">
	<INPUT TYPE="submit" value="Buscar" name="btnBuscar">
	<p>
</form>
 <?php 
$data = file_get_contents("employees.json");
$Empleados = json_decode($data, true);

if ($_POST['txtEmail']!==""){
	$Filtro=$_POST['txtEmail'];
}

echo "<table><tr><th>Name</th><th>email</th><th>position</th><th>salary</th><th></th>";
foreach ($Empleados as $Empleado) {
	if ($Filtro!=""){
		$Valor = strstr($Empleado[email], $Filtro); 
		if ($Valor!=""){
			echo "<tr><td>";
			//echo '<input type="hidden" name="hidId" value="'.$Empleado[id].'"/>';
			echo $Empleado[name]."</td>";
			echo "<td>".$Empleado[email]."</td>";
			echo "<td>".$Empleado[position]."</td>";
			echo "<td>".$Empleado[salary]."</td>";
			echo '<td><a href="Detalle.php?Id='.$Empleado[id].'">Detalle</a></td>';
			echo "</tr>";
		}
	}
	else{
		echo "<tr><td>";
		//echo '<input type="hidden" name="hidId" id="hidId" value="'.$Empleado[id].'"/>';
		echo $Empleado[name]."</td>";
		echo "<td>".$Empleado[email]."</td>";
		echo "<td>".$Empleado[position]."</td>";
		echo "<td>".$Empleado[salary]."</td>";
		echo '<td><a href="Detalle.php?Id='.$Empleado[id].'">Detalle</a></td>';
		echo "</tr>";
	}   
}
echo "</tr></table>";
 ?>
</body>
</html>