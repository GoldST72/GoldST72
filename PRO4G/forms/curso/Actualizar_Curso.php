<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_curso", "id_curso,curso,descripcion,paralelo,estado", "id_curso=$id and estado = 'ACTIVO'" );
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classCurso::UPDATE_CURSO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Curso");
//ASI SE GENERAN INPUTS

    print FORM::GENERAR_INPUT_USUARIO("id",$datos['id_curso'],"","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Curso",$datos['curso'],"Ingrese su cedula","text","Curso");
    print FORM::GENERAR_INPUT_USUARIO("Descripcion",$datos['descripcion'],"Ingrese su nombre","text","Descripcion");
    print FORM::GENERAR_INPUT_USUARIO("Paralelo",$datos['paralelo'],"Ingrese su apellido","text","Paralelo");


//ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Cursos");


//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
} else {
    print Ambiente::PAGINA_404();
}

