<?php
require '../ambiente/ambiente.php';
if(isset($_POST['boton_submit']))  classPregunta::INSERTAR_PREGUNTA();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Registrar Datos","return validar_usuario();");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_INPUT_USUARIO("Pregunta","","Ingrese su pregunta","text","form-control py-4");


//ASI SE GENERAN SELECT
$arrayx = BDD::QUERY("select id_examen as id,nombre as nombres from q_examen");
print FORM::GENERAR_SELECT($arrayx,"Examen","Examen");
print FORM::GENERAR_INPUT_USUARIO("Anexo","","Ingrese su Anexo","text","Anexo","","");
$arrayu = BDD::QUERY("select id_opcion as id,descripcion as nombres from q_opciones");
print FORM::GENERAR_SELECT($arrayu,"Opcion","Opciones disponibles");

//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>