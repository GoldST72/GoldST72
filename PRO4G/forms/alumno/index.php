<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Persona","Curso");
$array_detalle = BDD::QUERY("select concat(p.nombres,' ',p.apellidos) as nombre,c.curso,a.id_alumno from q_alumno as a 
inner join q_persona as p on p.id_persona = a.persona_id
inner join q_curso as c on c.id_curso = a.curso_id where a.estado = 'ACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Alumno","Alumno");
print DATATABLE::SCRIPTS_JS();