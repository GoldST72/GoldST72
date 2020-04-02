<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre");
$array_detalle = BDD::QUERY("select rol_nombre, id_rol from q_rol where rol_estado = 'INACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"ROL","Rol");
print DATATABLE::SCRIPTS_JS();