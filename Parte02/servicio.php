<?php
        // Incluir la Clase 
        require_once('metodo.php');
 
        // Crear servidor de Soap
        $server = new SoapServer(
                null, // No utilizar WSDL
                array('uri' => 'urn:webservices') // Se debe especificar el URI
        );
 
        // Asignar la Clase
        $server->setClass('Empleado');
 
        // Atender los llamados al webservice
        $server->handle();
?>