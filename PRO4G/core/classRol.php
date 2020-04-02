<?php


class classRol
{

    static public function INSERTAR_ROL()
    {
        $name_rol_nombre = filter_input(INPUT_POST,"Rol");
        $array = array("rol_nombre"=>$name_rol_nombre,"rol_estado"=>"ACTIVO");
        $id = BDD::INSERTAR_DESDE_ARRAY("q_rol",$array);
        print "<script>alert('Muy bien muchachon :)');</script>";
        classCursoExamen::REDIRECCIONAR();
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
    }
    static public function ACTUALIZAR_ROL()
    {
        $id = filter_input(INPUT_POST,"id");
        $name_rol_nombre = filter_input(INPUT_POST,"rol");
        $array = array("rol_nombre"=>$name_rol_nombre,"rol_estado"=>"ACTIVO");
        $id = BDD::ACTUALIZAR_DESDE_ARRAY("q_rol",$array,"id_rol=$id");
        print "<script>alert('Muy bien muchachon :)');</script>";
        classCursoExamen::REDIRECCIONAR();
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
    }
    static public function ELIMINAR_ROL()
    {
        $id = filter_input(INPUT_POST,"id");
        $array = array("rol_estado"=>"INACTIVO");
        $id = BDD::ACTUALIZAR_DESDE_ARRAY("q_rol",$array,"id_rol=$id");
        print "<script>alert('Muy bien muchachon :)');</script>";
        classCursoExamen::REDIRECCIONAR();
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
    }

}