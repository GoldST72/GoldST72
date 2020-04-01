<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_curso_examenes", "id_curso_e,examen_id,curso_id", "id_curso_e=$id");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classCursoExamen::UPDATE_CURSO_EXAMEN();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Usuario", "return validar_usuario();", "#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");

    $arrayp = BDD::QUERY("select id_examen as id ,nombre as nombres from q_examen");
    print FORM::GENERAR_SELECT($arrayp,"Examen","Examen",$datos['examen_id']);

    $arraym = BDD::QUERY("select id_curso as id,concat(curso,' ',paralelo) as nombres from q_curso");
    print FORM::GENERAR_SELECT($arraym,"Curso","Menu",$datos['curso_id']);

//ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Usuario");


//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
} else {
    print Ambiente::PAGINA_404();
}

