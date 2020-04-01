<?php


class classOpciones
{
    static public function INSERTAR_OPCIONES(){

        $name_descripcion = filter_input(INPUT_POST,"Opcion");

        //trim
        $name_descripcion = trim( $name_descripcion);
        //strupper

        $name_descripcion = strtoupper($name_descripcion );


        $select = filter_input(INPUT_POST,"vf");



        $array = array("descripcion"=>$name_descripcion,"respuesta"=> $select,"estado"=>"ACTIVO");

        if(BDD::INSERTAR_DESDE_ARRAY("q_opciones",$array)) true;
        else print "<script>alert('Error al guardar');</script>";
    }

    static public function UPDATE_OPCIONES(){
        $name_descripcion = filter_input(INPUT_POST,"Opcion");

        //trim
        $name_descripcion = trim( $name_descripcion);
        //strupper

        $name_descripcion = strtoupper($name_descripcion );


        $select = filter_input(INPUT_POST,"vf");



        $array = array("descripcion"=>$name_descripcion,"respuesta"=> $select,"estado"=>"ACTIVO");

        if(BDD::INSERTAR_DESDE_ARRAY("q_opciones",$array)) true;
        else print "<script>alert('Error al guardar');</script>";

    }
    static public function ELIMINAR_OPCIONES(){
        $name_descripcion = filter_input(INPUT_POST,"Opcion");

        //trim
        $name_descripcion = trim( $name_descripcion);
        //strupper

        $name_descripcion = strtoupper($name_descripcion );


        $select = filter_input(INPUT_POST,"vf");



        $array = array("descripcion"=>$name_descripcion,"respuesta"=> $select,"estado"=>"ACTIVO");

        if(BDD::INSERTAR_DESDE_ARRAY("q_opciones",$array)) true;
        else print "<script>alert('Error al guardar');</script>";






    }


}