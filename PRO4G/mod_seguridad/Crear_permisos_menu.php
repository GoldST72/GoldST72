<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../system/BDD.php');
//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Registrar Datos","return validar_usuario();");
//ASI SE GENERAN INPUTS
$arrayp = BDD::QUERY("select id_rol as id ,rol_nombre as nombres from q_rol");
print FORM::GENERAR_SELECT($arrayp,"select","Roles");

$arraym = BDD::QUERY("select id_menu as id,nombre as nombres from q_menu");
print FORM::GENERAR_SELECT($arraym,"select","Menu");




//ASI SE GENERAN SELECT


//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>