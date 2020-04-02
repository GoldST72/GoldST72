<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombres","Apellidos","Cedula");
$array_detalle = BDD::QUERY("select nombres,apellidos,cedula,id_persona from q_persona where estado = 'ACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Persona","Persona");
print DATATABLE::SCRIPTS_JS();