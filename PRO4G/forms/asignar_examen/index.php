<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Curso","Descripcion","Pararelo");
$array_detalle = BDD::QUERY("select curso,descripcion,paralelo,id_curso from q_curso;");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Curso","Curso");
print DATATABLE::SCRIPTS_JS();