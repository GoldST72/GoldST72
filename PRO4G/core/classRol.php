<?php


class classRol
{

    static public function INSERTAR_ROL()
    {


        $name_rol_nombre = filter_input(INPUT_POST,"Rol");

        $array = array("rol_nombre"=>$name_rol_nombre,"rol_estado"=>"ACTIVO");

        $id = BDD::INSERTAR_DESDE_ARRAY("q_rol",$array);
        print "<script>alert('Muy bien muchachon :)');</script>";

        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";










    }

}