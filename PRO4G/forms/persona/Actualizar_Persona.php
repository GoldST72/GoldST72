<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_persona", "nombres,apellidos,cedula", "id_persona=$id");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classPersona::ACTUALIZAR_PERSONA();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Persona");
    print FORM::GENERAR_INPUT_USUARIO("id","$id","","hidden","");

    print FORM::GENERAR_INPUT_USUARIO("nombres",$datos['nombres'],"Ingrese sus nombres","text","");
    print FORM::GENERAR_INPUT_USUARIO("apellidos",$datos['apellidos'],"Ingrese su apellido","text","");
    print FORM::GENERAR_INPUT_USUARIO("cedula",$datos['cedula'],"Ingrese su cedula","text","");
//ASI SE GENERAN SELECT
//ASI SE GENERAN BUTTONS
    print FORM::GENERAR_BUTTON_SUBMIT_ELIMINAR("Actualizar Persona");


//ESTAS ETIQUETAS CIERRAN EL FORMULARIO  (OBLIGATORIAS)
    print FORM::CERRAR_FORMULARIO();
    print FORM::OBTENER_FOOTER_HTML();

    print Ambiente::OBTENER_LOS_SCRIPTS();
    print Ambiente::SCRIPTS_VALIDATOS();
} else {
    print Ambiente::PAGINA_404();
}

