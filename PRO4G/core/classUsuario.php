<?php


class classUsuario
{

    static public function INSERTAR_USUARIO()
    {
        $name_user = filter_input(INPUT_POST,"Usuario");
        $name_correo = filter_input(INPUT_POST,"Correo");
        $name_clave = filter_input(INPUT_POST,"Clave");
        $select = filter_input(INPUT_POST,"persona");
        $select1 = filter_input(INPUT_POST,"roles");
        $array = array("usuario"=>$name_user,"correo"=>$name_correo
        ,"clave"=>$name_clave,"id_persona"=>$select,"rol_usuario"=>$select1,"estado"=>"ACTIVO");
        $id = BDD::INSERTAR_DESDE_ARRAY("q_usuario",$array);
        print "<script>alert('Muy bien nuevo usuario $name_user');</script>";
        classCursoExamen::REDIRECCIONAR();
    }
    static public function ACTUALIZAR_USUARIO()
    {
        $id = filter_input(INPUT_POST,"id");

        $name_user = filter_input(INPUT_POST,"Usuario");
        $name_correo = filter_input(INPUT_POST,"Correo");
        $name_clave = filter_input(INPUT_POST,"Clave");
        $select = filter_input(INPUT_POST,"persona");
        $select1 = filter_input(INPUT_POST,"roles");
        $array = array("usuario"=>$name_user,"correo"=>$name_correo
        ,"clave"=>$name_clave,"id_persona"=>$select,"rol_usuario"=>$select1,"estado"=>"ACTIVO");
        $id = BDD::ACTUALIZAR_DESDE_ARRAY("q_usuario",$array,"id_usuario=$id");
        print "<script>alert('Muy bien nuevo usuario $name_user');</script>";
        classCursoExamen::REDIRECCIONAR();
    }
    static public function ELIMINAR_USUARIO()
    {
        $id = filter_input(INPUT_POST,"id");

        $array = array("estado"=>"INACTIVO");
        $id = BDD::ACTUALIZAR_DESDE_ARRAY("q_usuario",$array,"id_usuario=$id");
        print "<script>alert('Muy bien Actualizado usuario');</script>";
        classCursoExamen::REDIRECCIONAR();
    }
}