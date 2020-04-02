<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Pregunta","Examen","Anexo","Opcion");
$array_detalle = BDD::QUERY("select q_preguntas.pregunta,q_examen.nombre,q_preguntas.anexo,q_opciones.descripcion,q_preguntas.id_pregunta
from q_preguntas inner join q_examen on q_preguntas.id_examen = q_examen.id_examen 
inner join q_opciones on q_preguntas.id_opcion = q_opciones.id_opcion");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Pregunta","Pregunta");
print DATATABLE::SCRIPTS_JS();