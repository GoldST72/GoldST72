<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_alumno", "id_alumno,estado,persona_id,curso_id", "id_alumno=$id and estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classAlumno::UPDATE_ALUMNO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Usuario", "return validar_usuario();", "#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");

    $array = BDD::QUERY("select id_persona as id,concat(nombres,' ',apellidos) as nombres from q_persona");
    print FORM::GENERAR_SELECT($array,"Persona","Persona");
    $arraym = BDD::QUERY("select id_curso as id,concat(curso,' ',paralelo) as nombres from q_curso");
    print FORM::GENERAR_SELECT($arraym,"Curso","Curso");
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

