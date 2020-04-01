<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Examen","Curso");
$array_detalle = BDD::QUERY("select ex.nombre,concat(a.curso,' ',a.paralelo) as nombres,id_curso_e from q_curso_examenes as e
inner join q_curso as a on e.curso_id = a.id_curso
inner join q_examen as ex on ex.id_examen = e.examen_id ");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Asignar","Asignar");
print DATATABLE::SCRIPTS_JS();