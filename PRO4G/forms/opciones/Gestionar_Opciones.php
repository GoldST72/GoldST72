<?php
require '../ambiente/ambiente.php';
if(isset($_POST['boton_submit']))  classOpciones::INSERTAR_OPCIONES();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Registrar Datos","return validar_usuario();");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");

print FORM::GENERAR_INPUT_USUARIO("Descripcion","","Ingrese su descripcion","text","Descripcion");
$array[] = array("id"=>1,"nombres"=>"Verdadero");
$array[] = array("id"=>2,"nombres"=>"Falso");
print FORM::GENERAR_SELECT($array,"Respuesta","Respuesta");
//ASI SE GENERAN SELECT


//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>