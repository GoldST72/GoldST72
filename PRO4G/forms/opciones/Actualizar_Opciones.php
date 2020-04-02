<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_opciones", "descripcion,respuesta", "id_opcion=$id");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classOpciones::UPDATE_OPCIONES();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Opcion");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("Descripcion",$datos['descripcion'],"Ingrese su descripcion","text","Descripcion");
    $array[] = array("id"=>1,"nombres"=>"Verdadero");
    $array[] = array("id"=>2,"nombres"=>"Falso");
    print FORM::GENERAR_SELECT($array,"Respuesta","Respuesta",$datos['respuesta']);
//ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Opcion");


//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
} else {
    print Ambiente::PAGINA_404();
}

