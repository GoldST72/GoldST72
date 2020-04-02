<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_examen", "id_examen,nombre,materia", "id_examen=$id and estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classExamen::UPDATE_EXAMEN();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Examen");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");
    print FORM::GENERAR_INPUT_USUARIO("Nombre",$datos['nombre'],"","text","Nombre");

    $array = BDD::QUERY("select id_materia as id,descripcion as nombres from q_materia");
    print FORM::GENERAR_SELECT($array,"Materia","Materia",$datos['materia']);


//ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Examen");


//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
} else {
    print Ambiente::PAGINA_404();
}

