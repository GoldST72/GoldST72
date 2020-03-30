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

        if(BDD::INSERTAR_DESDE_ARRAY("q_materia",$array)) true;
        else print "<script>alert('Error al guardar');</script>";
    }



}