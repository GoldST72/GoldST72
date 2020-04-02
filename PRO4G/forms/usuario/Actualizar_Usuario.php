<?php

require '../ambiente/ambiente.php';

$id = $_GET['id'];

$datos = BDD::CONSULTAR("q_usuario", "usuario,correo,clave,id_persona,rol_usuario", "id_usuario=$id");
print Ambiente::ENCABEZADO();
if ($datos) {
    if (isset($_POST['boton_submit']))  classUsuario::ACTUALIZAR_USUARIO();


//Y ESTAS LAS ABREN (OBLIGATORIAS)
    print Ambiente::ENCABEZADO();
    print Ambiente::ABRIR_BODY('bg-primary');


    print FORM::FORMULARIO_USUARIO("POST", "Actualizar Usuario");
    print FORM::GENERAR_INPUT_USUARIO("id",$id,"","hidden","");

//ASI SE GENERAN INPUTS
    print FORM::GENERAR_INPUT_USUARIO("Usuario",$datos['usuario'],"Ingrese su usuario","text","Usuario");
    print FORM::GENERAR_INPUT_USUARIO("Correo",$datos['correo'],"Ingrese su correo electronico","text","Correo");
    print FORM::GENERAR_INPUT_USUARIO("Clave",$datos['clave'],"Ingrese su contraseña","password","Clave");


    $array = BDD::QUERY("select id_persona as id,concat(nombres,' ',apellidos) as nombres from q_persona");
    print FORM::GENERAR_SELECT($array,"persona","Persona",$datos['id_persona']);
    $arrayp = BDD::QUERY("select id_rol as id ,rol_nombre as nombres from q_rol");
    print FORM::GENERAR_SELECT($arrayp,"roles","Roles",$datos['rol_usuario']);
//ASI SE GENERAN SELECT


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

