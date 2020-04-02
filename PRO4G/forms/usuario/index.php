<?php


require '../ambiente/ambiente.php';
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
$array_encabezado = array("Usuario","Correo","Nombre","Rol");
$array_detalle = BDD::QUERY("select usuario,correo,q_persona.nombres,q_rol.rol_nombre,id_usuario 
from q_usuario inner join q_persona on q_persona.id_persona = q_usuario.id_persona
inner join q_rol on q_rol.id_rol = q_usuario.rol_usuario where q_usuario.estado = 'ACTIVO'");
print DATATABLE::CONSULTA_INDEX($array_encabezado,$array_detalle,"Usuario","Usuario");
print DATATABLE::SCRIPTS_JS();