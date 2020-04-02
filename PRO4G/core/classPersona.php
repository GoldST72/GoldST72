<?php


class classPersona
{
    static public function INSERTAR_PERSONA(){
        $nombre = filter_input(INPUT_POST,"nombres");
        $apellido = filter_input(INPUT_POST,"apellido");
        $cedula = filter_input(INPUT_POST,"cedula");


        $array = array("nombre"=>$nombre,"apellidos"=>$apellido
        ,"estado"=>"ACTIVO","cedula"=>$cedula);
        //trim
        if(BDD::INSERTAR_DESDE_ARRAY("q_persona",$array)) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }
    static public function ACTUALIZAR_PERSONA(){
        $id = filter_input(INPUT_POST,"id");
        $nombre = filter_input(INPUT_POST,"nombres");
        $apellido = filter_input(INPUT_POST,"apellidos");
        $cedula = filter_input(INPUT_POST,"cedula");


        $array = array("nombres"=>$nombre,"apellidos"=>$apellido
        ,"estado"=>"ACTIVO","cedula"=>$cedula);
        //trim
        if(BDD::ACTUALIZAR_DESDE_ARRAY("q_persona",$array,"id_persona=$id")) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }
    static public function ELIMINAR_PERSONA(){
        $id = filter_input(INPUT_POST,"id");
        $nombre = filter_input(INPUT_POST,"nombres");
        $apellido = filter_input(INPUT_POST,"apellido");
        $cedula = filter_input(INPUT_POST,"cedula");


        $array = array("estado"=>"INACTIVO");
        //trim
        if(BDD::ACTUALIZAR_DESDE_ARRAY("q_persona",$array,"id_persona=$id")) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }





}