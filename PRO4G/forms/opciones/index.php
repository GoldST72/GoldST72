<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Descipcion","Estado Respuesta");
$array_detalle = BDD::QUERY("select descripcion,respuesta,id_opcion from q_opciones where estado = 'ACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Opciones","Opciones");
print DATATABLE::SCRIPTS_JS();