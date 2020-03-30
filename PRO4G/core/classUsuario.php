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
        $array = array("usuario"=>$name_user,"correo"=>$name_correo,"clave"=>$name_clave,"id_persona"=>$select,"rol_usuario"=>$select1,"estado"=>"ACTIVO");

        $id = BDD::INSERTAR_DESDE_ARRAY("q_usuario",$array);

        print "<script>alert('Muy bien nuevo usuario $name_user');</script>";










    }



}