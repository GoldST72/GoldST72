<?php


class classPersona
{
    static public function INSERTAR_PERSONA(){
        $name_nombre = filter_input(INPUT_POST,"Nombres");
        $name_apellido = filter_input(INPUT_POST,"Apellido");
        $name_cedula = filter_input(INPUT_POST,"Cedula");
        $name_foto = filter_input(INPUT_POST,"Foto");
        //trim
        $name_nombre = trim($name_nombre);
        $name_apellido = trim( $name_apellido);
        $name_cedula = trim($name_cedula);
        $name_foto = trim($name_foto);
        //strupper
        $name_nombre = strtoupper($name_nombre);
        $name_apellido = strtoupper($name_apellido );
        $name_cedula = strtoupper($name_cedula);
        $name_foto = strtoupper($name_foto);

        $array = array("nombres"=>$name_nombre,"apellidos"=>$name_apellido,"cedula"=>$name_cedula,"foto"=>$name_foto,"estado"=>"ACTIVO");

        if(BDD::INSERTAR_DESDE_ARRAY("q_persona",$array)) true;
        else print "<script>alert('Error al guardar');</script>";
    }





}