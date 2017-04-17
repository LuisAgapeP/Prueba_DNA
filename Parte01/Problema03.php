<!doctype html>
<html>
 <head>
  <title>Problema 03</title>
 </head>
 <body>
 <span>
	<b>Problema 03</b></br>
	Usando PHP, crear una clase llamada ClearPar que tenga un método llamado
build que reciba como parámetro una cadena formada sólo por paréntesis
( ()()()()(()))))())((() ). El algoritmo debe eliminar todos los paréntesis que no tienen pareja.Finalmente devolver la nueva cadena.</br>
	Indicaciones
<ul>
<li>Crear la solución en un solo archivo llamado ClearPar.php</li>
<li>El método build devuelve la salida del algoritmo</li>
<li>Considerar solamente cadenas formadas de paréntesis</li>
</ul>
Ejemplos:
<ul>
<li>entrada : "()())()" salida : "()()()"</li>
<li>entrada : "()(()" salida : "()()"</li>
<li>entrada : ")(" salida : "</li>
<li>entrada : "((()" salida : "()"</li>
</ul></br>
Texto de Prueba: ((()</br>
 </span>
 
 <?php 
 class ClearPar{
	function build($Cadena){
		$NuevaCadena='';
		$Cadena=trim($Cadena);
		$Longitud = strlen($Cadena);
		$pos=0;

		do{
			$Cadena=substr($Cadena,$pos,strlen($Cadena)-$pos);
			$pos=strpos($Cadena,"(");
			if ($pos===false){
				break;
			}
			else{
				$Cadena=substr($Cadena,$pos+1,strlen($Cadena)-$pos);
				
				$pos=strpos($Cadena,")");
				if ($pos===false){
					break;
				}
				else{
					$NuevaCadena=$NuevaCadena.'()';
				}
			}
		} while ($pos <= $Longitud);
		
		return $NuevaCadena;
	}
 } 
 //Probamos la función
 $Clase=new ClearPar();
 echo "Resultado: ".$Clase->build('((()'); 
 ?>
 </body>
</html>