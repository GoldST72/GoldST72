<?php
require '../ambiente/ambiente.php';
if(isset($_POST['boton_submit']))  classMateria::INSERTAR_MATERIA();



//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Materias");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_INPUT_USUARIO("descripcion","","Ingrese la descripcion","text","Descripcion");

print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>