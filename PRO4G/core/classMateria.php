<?php


class classMateria
{

    static public function INSERTAR_MATERIA(){

    $name_descripcion = filter_input(INPUT_POST,"Materia");
    //trim
    $name_descripcion = trim( $name_descripcion);
    //strupper
    $name_descripcion = strtoupper($name_descripcion );


    $array = array("descripcion"=>$name_descripcion,"estado"=>"ACTIVO");

    if(BDD::INSERTAR_DESDE_ARRAY("q_materia",$array)) classCursoExamen::REDIRECCIONAR();
    else print "<script>alert('Error al guardar');</script>";
}
    static public function ACTUALIZAR_MATERIA(){
        $name_id = filter_input(INPUT_POST,"id");

        $name_descripcion = filter_input(INPUT_POST,"Descripcion");
        //trim
        $name_descripcion = trim( $name_descripcion);
        //strupper
        $name_descripcion = strtoupper($name_descripcion );


        $array = array("descripcion"=>$name_descripcion,"estado"=>"ACTIVO");

        if(BDD::ACTUALIZAR_DESDE_ARRAY("q_materia",$array,"id_materia=$name_id")) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }
    static public function ELIMINAR_MATERIA(){
        $name_id = filter_input(INPUT_POST,"id");
        $array = array("estado"=>"INACTIVO");

        if(BDD::ACTUALIZAR_DESDE_ARRAY("q_materia",$array,"id_materia=$name_id"))  classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }



}