<?php
require ('../template/ambiente.php');
require ('../mod_seguridad/FORM.php');
require ('../system/BDD.php');
//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Registrar Usuario","return validar_usuario();");
//ASI SE GENERAN INPUTS

print FORM::GENERAR_INPUT_USUARIO("Usuario","","Ingrese su usuario","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Correo","","Ingrese su correo electronico","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Clave","","Ingrese su contraseña","password","form-control py-4");
print FORM::GENERAR_SELECT_ACTIVO();

$array = BDD::QUERY("select id_persona as id,concat(nombres,' ',apellidos) as nombres from q_persona");
print FORM::GENERAR_SELECT($array,"select","Persona");
$arrayp = BDD::QUERY("select id_rol as id ,rol_nombre as nombres from q_rol");
print FORM::GENERAR_SELECT($arrayp,"select","Roles");
//ASI SE GENERAN SELECT


//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>