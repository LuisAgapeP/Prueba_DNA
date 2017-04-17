<!doctype html>
<html>
 <head>
  <title>Problema 01</title>
 </head>
 <body> 
  <form id="frmDetalle" action="Empleados.php" method="post">
	<span>Datos del Empleado</span>
	<p>
	<INPUT TYPE="submit" value="Retornar" name="btnRetornar">
</form>
 <?php 
 if ($_GET['Id']!==""){
	$Filtro=$_GET['Id'];
}
echo "<p>".$_POST['txtEmail'];
echo "<p>".$_GET['txtEmail'];
 
$data = file_get_contents("employees.json");
$Empleados = json_decode($data, true);

if ($Filtro!=""){
	foreach ($Empleados as $Empleado) {
		if ($Empleado[id]==$Filtro){
			echo "Nombre: ".$Empleado[name]."<p>";
			echo "Email: ".$Empleado[email]."<p>";
			echo "Fono: ".$Empleado[phone]."<p>";
			echo "Dirección: ".$Empleado[address]."<p>";
			echo "Cargo: ".$Empleado[position]."<p>";
			echo "Salario: ".$Empleado[salary]."<p>";
			echo "Habilidades: ";
			foreach ($Empleado[skills] as $Skill) {
				echo $Skill[skill]."<br>";
			}			
			break;
		} 
	}
}
else{
	echo "Código no encontrado";
}   
 ?>
</body>
</html>