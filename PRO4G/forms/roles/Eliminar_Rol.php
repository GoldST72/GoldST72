
<?php
require '../ambiente/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_rol", "rol_nombre as nombres", "id_rol=$id and rol_estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classRol::ELIMINAR_ROL();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Rol");
//ASI SE GENERAN INPUTS

    print FORM::GENERAR_INPUT_USUARIO("id",$id,"","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("pregunta",$datos['nombres'],"","text","ESTAS SEGURO DE ELIMINARLO?",true);

    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar ROL");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>
