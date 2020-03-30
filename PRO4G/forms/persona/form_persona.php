<?php
require('../template/ambiente.php');
require('../core/FORM.php');
require('../core/BDD.php');
require ('../core/classPersona.php.');
if(isset($_POST['boton_submit']))  classPersona::INSERTAR_PERSONA();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Registrar Datos","return validar_usuario();");
//ASI SE GENERAN INPUTS

print FORM::GENERAR_INPUT_USUARIO("Nombres","","Ingrese sus nombres","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Apellido","","Ingrese su apellido","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Cedula","","Ingrese su cedula","text","form-control py-4");
print FORM::GENERAR_INPUT_USUARIO("Foto","","Ingrese su foto","text","form-control py-4");
//ASI SE GENERAN SELECT
//$array[] = BDD::QUERY("select q_persona.id_persona,concat(q_persona.nombre,' ',q_persona.apellido) as nombres from q_usuario 
//inner join q_persona on q_usuario.idpersona = q_persona.id_persona");
//print FORM::GENERAR_SELECT($array,"select","Persona");
//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>