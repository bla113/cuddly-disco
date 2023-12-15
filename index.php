<?php

require 'vendor/autoload.php';
require_once 'controladores/persona.controlador.php';
require_once 'modelos/persona.modelo.php';






Flight::route('/persona/@cedula', function($cedula){

   
   $identifiaccion = filter_var($cedula, FILTER_SANITIZE_NUMBER_INT);

    $respuesta= Persona::ctrMostrarPersonas($identifiaccion);

    if(count($respuesta)>1){

        Flight::set('flight.log_errors', true);
    }

   // print_r($respuesta)

    Flight::json($respuesta);

});



Flight::start();


?>