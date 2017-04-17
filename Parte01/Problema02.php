<!doctype html>
<html>
 <head>
  <title>Problema 02</title>
 </head>
 <body> 
 <span>
	<b>Problema 02</b></br>
	Usando PHP, crear una clase llamada CompleteRange que tenga un método
llamado build el cual tome un parámetro de colección de números enteros
positivos (1,2,3, ...n). El algoritmo debe completar si faltan números en la
colección en el rango dado. Finalmente devolver la colección completa</br>
	Indicaciones
<ul>
<li>Crear la solución en un solo archivo llamado CompleteRange .php</li>
<li>El método build devuelve la salida del algoritmo</li>
<li>Considerar el parámetro de colecciones con números enteros positivos
ordenados de manera ascendente. Ejemplo [4, 6, 7 ,10]</li>
</ul>
Ejemplos:
<ul>
<li>entrada : [1, 2, 4, 5] salida : [1, 2, 3 , 4, 5]</li>
<li>entrada : [2, 4, 9] salida : [2, 3 , 4, 5, 6, 7, 8 , 9]</li>
<li>entrada : [55, 58, 60] salida : [55, 56, 57, 58, 59, 60]</li>
</ul></br>
Texto de Prueba: [55, 58, 60]</br>
 </span>
 
 <?php 
 class CompleteRange{
	function build($Cadena){
		$Cadena=trim($Cadena);
		$Arreglo = explode(",",$Cadena);	
		$Longitud = count($Arreglo);

		for($i=0; $i<$Longitud; $i++) {
			$Elemento=$Arreglo[$i];
			$CadenaInicio=$CadenaInicio.$Elemento.",";
			
			$Elemento=str_replace("[","",$Elemento);
			$Elemento=str_replace("(","",$Elemento);
			
			if(is_numeric($Elemento)) {
				$Inicio=$Elemento;
				break;
			}
		}
				
		if ($Inicio!=""){
			for($i = $Longitud-1; $i>=0; $i--){
				$Elemento=$Arreglo[$i];
				$CadenaFin=$Elemento.",".$CadenaFin;
				
				$Elemento=str_replace("]","",$Elemento);
				$Elemento=str_replace(")","",$Elemento);
				
				if(is_numeric($Elemento)) {
					$Fin=$Elemento;
					break;
				}
			}
			
			if ($CadenaFin!=""){
				$CadenaFin=substr($CadenaFin,0,strlen($CadenaFin)-1);
			}
			
			for($i = $Inicio+1; $i < $Fin; $i++){
				$CadenaFaltante=$CadenaFaltante.$i.",";
			}
		}
		else{
			$CadenaInicio=substr($CadenaInicio,0,strlen($CadenaInicio)-1);
		}
		
		$Cadena=$CadenaInicio.$CadenaFaltante.$CadenaFin;
		
		return $Cadena;
	}
 }
 //Probamos la función
 $Clase=new CompleteRange();
 echo "Resultado: ".$Clase->build('[55,58,60]'); 
 ?>
 </body>
</html>