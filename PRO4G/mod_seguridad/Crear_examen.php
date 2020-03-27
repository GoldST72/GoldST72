<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../system/BDD.php');
//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Registrar Datos","return validar_usuario();");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_INPUT_USUARIO("Nombre","","Ingrese nombre de examen","text","form-control py-4");
print FORM::GENERAR_SELECT_ACTIVO();

//ASI SE GENERAN SELECT
$array = BDD::QUERY("select id_materia as id,descripcion as nombres from q_materia");
print FORM::GENERAR_SELECT($array,"select","Materia");

//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>