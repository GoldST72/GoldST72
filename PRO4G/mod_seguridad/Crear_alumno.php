<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../system/BDD.php');
//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Asignar Curso","return validar_usuario();");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_SELECT_ACTIVO();
$array = BDD::QUERY("select id_persona as id,concat(nombres,' ',apellidos) as nombres from q_persona");
print FORM::GENERAR_SELECT($array,"select","Persona");
$arraym = BDD::QUERY("select id_curso as id,concat(curso,' ',paralelo) as nombres from q_curso");
print FORM::GENERAR_SELECT($arraym,"select","Curso");
//ASI SE GENERAN SELECT


//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>