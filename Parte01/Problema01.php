<!doctype html>
<html>
 <head>
  <title>Problema 01</title>
 </head>
 <body> 
 <span>
	<b>Problema 01</b></br>
	Usando PHP, crear una clase llamada ChangeString que tenga un método llamado build el cual tome un parámetro string que debe ser modificado por el siguiente algoritmo.</br>
	Reemplazar cada letra de la cadena con la letra siguiente en el alfabeto. Por ejemplo reemplazar a por b ó c por d . Finalmente devolver la cadena.
	Indicaciones
<ul>
<li>Crear la solución en un solo archivo llamado ChangeString.php</li>
<li>El método build devuelve la salida del algoritmo</li>
<li>Considerar el siguiente abecedario : a, b, c, d, e, f, g, h, i, j, k, l, m, n, ñ, o, p, q, r,s, t, u, v, w, x, y, z.</li>
</ul>
Ejemplos:
<ul>
<li>entrada : "123 abcd*3" salida : "123 bcde *3"</li>
<li>entrada : "**Casa 52" salida : "** Dbtb 52"</li>
<li>entrada : "**Casa 52Z" salida : "** Dbtb 52 A "</li>
</ul></br>
Texto de Prueba: **Casa 52</br>
 </span>
 
 <?php 
 class ChangeString{
	function build($Cadena){
		$NuevaCadena='';
		$Cadena=trim($Cadena); 
		$Longitud = strlen($Cadena); 
				
		for($i = 0; $i < $Longitud; $i++){
			
			//Obtiene el valor del caracter a evaluar
			$Letra=substr($Cadena, $i, 1);			
			
			//Obtiene el valor ascci del caracter
			$Codigo=ord($Letra);
			
			// Verifica el valor de caratcter para incrementar el valor ascii
			if (($Codigo>=65 and $Codigo<=90) or ($Codigo>=97 and $Codigo<=122)) {
				switch($Codigo){
					case 90:
						$Letra=chr(65);
						break;
					case 122:
						$Letra=chr(97);
						break;
					default:
						$Letra=chr($Codigo+1);
				}
			}			
			$NuevaCadena=$NuevaCadena.$Letra;
		}		
		return $NuevaCadena;
	}
 } 
 // Prueba de la función 
 $Clase=new ChangeString();
 echo "Resultado: ".$Clase->build('**Casa 52'); 
 ?>
 </body>
</html>