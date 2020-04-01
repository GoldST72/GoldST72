
<?php
require '../ambiente/ambiente.php';
$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_curso_examenes inner join q_examen on q_examen.id_examen = q_curso.examenes.examen_id ", "id_curso_e,q_curso_examenes.i,q_persona.nombres,curso_id", "id_alumno=$id and q_alumno.estado = 'ACTIVO'");
print Ambiente::ENCABEZADO();
if($datos){
    if(isset($_POST['boton_submit']))  classCursoExamen::ELIMINAR_CURSO_EXAMEN();

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
