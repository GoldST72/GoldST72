<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_preguntas inner join q_examen on q_preguntas.id_examen = q_examen.id_examen inner join q_opciones on q_preguntas.id_opcion = q_opciones.id_opcion
", "q_preguntas.pregunta, q_examen.id_examen,q_examen.nombre,q_preguntas.anexo,q_opciones.id_opcion,q_opciones.descripcion", "id_pregunta=$id");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classPregunta::ACTUALIZAR_PREGUNTA();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Usuario");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id",$id,"","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("Pregunta",$datos['pregunta'],"Ingrese su pregunta","text","form-control py-4");


//ASI SE GENERAN SELECT
    $arrayx = BDD::QUERY("select id_examen as id,nombre as nombres from q_examen");
    print FORM::GENERAR_SELECT($arrayx,"Examen","Examen",$datos['id_examen']);
    print FORM::GENERAR_INPUT_USUARIO("Anexo",$datos['anexo'],"Ingrese su Anexo","text","Anexo","","");
    $arrayu = BDD::QUERY("select id_opcion as id,descripcion as nombres from q_opciones");
    print FORM::GENERAR_SELECT($arrayu,"Opcion","Opciones disponibles",$datos['id_opcion']);

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

