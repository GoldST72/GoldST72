<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Descripcion");
$array_detalle = BDD::QUERY("select descripcion,id_materia from q_materia where estado = 'ACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Materia","Materia");
print DATATABLE::SCRIPTS_JS();