<?php

class Persona{


    static public function ctrMostrarPersonas($cedula){

        $tabla='personas';

        $item='CEDULA';

        $valor=$cedula;

        $respuesta= ModeloPersona::mdlMostraPersona($tabla,$item,$valor);

        return $respuesta;

    }


}


?>