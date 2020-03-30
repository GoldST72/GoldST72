<?php
require('../template/ambiente.php');
require('../core/FORM.php');
require('../core/BDD.php');
require ('../core/classMateria.php.');
if(isset($_POST['boton_submit']))  classMateria::INSERTAR_MATERIA();



//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Materias","return validar_usuario();");
//ASI SE GENERAN INPUTS
print FORM::GENERAR_INPUT_USUARIO("Materia","","Ingrese la materia","text","form-control py-4");


//ASI SE GENERAN SELECT
//$array[] = BDD::QUERY("select q_materia.id_materia as id,q_materia.estado as nombre from q_materia");
//print FORM::GENERAR_SELECT($array,"select","Materia");
//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>