<?php


class classCurso
{
    static public function INSERTAR_CURSO(){
        $name_curso = filter_input(INPUT_POST,"Curso");
        $name_descripcion = filter_input(INPUT_POST,"Descripcion");
        $name_paralelo = filter_input(INPUT_POST,"Paralelo");
        //trim
        $name_curso = trim($name_curso);
        $name_descripcion = trim( $name_descripcion);
        $name_paralelo = trim($name_paralelo);
        //strupper
        $name_curso = strtoupper($name_curso);
        $name_descripcion = strtoupper($name_descripcion );
        $name_paralelo = strtoupper($name_paralelo);

        $array = array("curso"=>$name_curso,"descripcion"=>$name_descripcion,"paralelo"=>$name_paralelo,"estado"=>"ACTIVO");
         echo "curso:$name_curso,descripcion:$name_descripcion,paralelo:$name_paralelo";
        if(BDD::INSERTAR_DESDE_ARRAY("q_curso",$array)) true;
        else print "<script>alert('Error al guardar');</script>";
    }





}