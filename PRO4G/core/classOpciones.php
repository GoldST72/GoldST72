<?php


class classOpciones
{
    static public function INSERTAR_OPCIONES(){
        $name_descripcion = filter_input(INPUT_POST,"Opcion");
        //trim
        $name_descripcion = trim( $name_descripcion);
        //strupper
        $name_descripcion = strtoupper($name_descripcion );
        $select = filter_input(INPUT_POST,"estado");
        $array = array("descripcion"=>$name_descripcion,"respuesta"=> $select,"estado"=>"ACTIVO");
        if(BDD::INSERTAR_DESDE_ARRAY("q_opciones",$array)) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }

    static public function UPDATE_OPCIONES()
    {
        $id = filter_input(INPUT_POST, "id");
        $name_opcion = filter_input(INPUT_POST, "Descripcion");

        $name_descripcion = filter_input(INPUT_POST, "Respuesta");

        $array = array("descripcion"=>$name_opcion,"respuesta"=> $name_descripcion,"estado"=>"ACTIVO");
        if(BDD::ACTUALIZAR_DESDE_ARRAY("q_opciones",$array,"id_opcion=$id")) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }
    static public function ELIMINAR_OPCIONES(){
        $id = filter_input(INPUT_POST,"id");
        $array = array("estado"=>"INACTIVO");
        if(BDD::ACTUALIZAR_DESDE_ARRAY("q_opciones",$array,"id_opcion = $id"))  classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }

}