<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Nombre","Materia");
$array_detalle = BDD::QUERY("select nombre, q_materia.descripcion,id_examen from q_examen inner join q_materia on q_materia.id_materia = q_examen.materia
where q_examen.estado = 'ACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Examen","Examen");
print DATATABLE::SCRIPTS_JS();