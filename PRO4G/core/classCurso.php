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
        if(BDD::INSERTAR_DESDE_ARRAY("q_curso",$array)) classCursoExamen::REDIRECCIONAR();
        else print "<script>alert('Error al guardar');</script>";
    }


    static public function UPDATE_CURSO(){
        $name_id = filter_input(INPUT_POST,"id");
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
            BDD::ACTUALIZAR_DESDE_ARRAY("q_curso",$array,"id_curso = $name_id" );
            print "<script>alert('Actualizado sin problemas');</script>";
            classCursoExamen::REDIRECCIONAR();
    }
    static public function ELIMINAR_CURSO_EXAMEN(){
        $name_id = filter_input(INPUT_POST,"id");
        $array = array("estado"=>"INACTIVO");

            BDD::ACTUALIZAR_DESDE_ARRAY("q_curso",$array,"id_curso = $name_id" );

            print "<script>alert('Eliminado sin problemas');</script>";
        classCursoExamen::REDIRECCIONAR();



    }








}