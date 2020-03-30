<?php
require('../template/ambiente.php');
require('../core/FORM.php');
require('../core/BDD.php');
require ('../core/classCursoExamen.php.');
if(isset($_POST['boton_submit']))  classCursoExamen::INSERTAR_CURSO_EXAMEN();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
print Ambiente::ENCABEZADO();
print Ambiente::ABRIR_BODY('bg-primary');
print FORM::FORMULARIO_USUARIO("POST","Designar Examen","return validar_usuario();");
//ASI SE GENERAN INPUTS
$arrayp = BDD::QUERY("select id_examen as id ,nombre as nombres from q_examen");
print FORM::GENERAR_SELECT($arrayp,"Examen","Examen");

$arraym = BDD::QUERY("select id_curso as id,concat(curso,' ',paralelo) as nombres from q_curso");
print FORM::GENERAR_SELECT($arraym,"Curso","Menu");





//ASI SE GENERAN SELECT



//ASI SE GENERAN SELECT


//ASI SE GENERAN BUTTONS
print FORM::GENERAR_BUTTON_SUBMIT("Registrar Datos");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
print FORM::CERRAR_FORMULARIO();
print FORM::OBTENER_FOOTER_HTML();
print Ambiente::OBTENER_ETIQUETAS_HEAD();
print Ambiente::SCRIPTS_VALIDATOS();
?>