
<?php
require '../ambiente/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_preguntas", "pregunta as nombres", "id_pregunta=$id ");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classPregunta::ELIMINAR_PREGUNTA();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Pregunta");
//ASI SE GENERAN INPUTS

    print FORM::GENERAR_INPUT_USUARIO("id",$id,"","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("pregunta",$datos['nombres'],"","text","ESTAS SEGURO DE ELIMINARLO?",true);

    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Pregunta");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>
