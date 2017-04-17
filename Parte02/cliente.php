<?php
	// Crear el cliente suministrado la ruta del servicio
	// Utilizar el uri
	$client = new SoapClient(null,
			array(
					'location' => 'http://localhost/Parte02/servicio.php',
					'uri' => 'urn:webservices',
			));

	// Llamar el metodo como si fuera del cliente
	echo "Clientes con salarios entre 1000 y 2000 <p>";
	echo $client->filtrarSalario(1000,2000);
?>