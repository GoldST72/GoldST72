<?php
require '../ambiente/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_alumno inner join q_persona on q_persona.id_persona = q_alumno.persona_id ", "id_alumno,q_alumno.estado,q_persona.nombres,curso_id", "id_alumno=$id and q_alumno.estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classAlumno::ELIMINAR_ALUMNO();

//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST","Eliminar Usuario","","#");
//ASI SE GENERAN INPUTS

    print FORM::FORMULARIO_USUARIO("POST", "Eliminar Usuario", "return validar_usuario();", "#");
//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("persona",$datos['nombres'],"","text","ESTAS SEGURO DE ELIMINARLO?",true);

    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Eliminar Usuario");

//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
}else{
    print Ambiente::PAGINA_404();
}


?>
