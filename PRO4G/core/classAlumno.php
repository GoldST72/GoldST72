<?php


class classAlumno
{
    static public function INSERTAR_ALUMNO(){

        $nombre = filter_input(INPUT_POST,"nombres");
        $apellido = filter_input(INPUT_POST,"apellido");
        $cedula = filter_input(INPUT_POST,"cedula");
        $array = array("nombre"=>$nombre,"apellidos"=>$apellido
        ,"estado"=>"ACTIVO","cedula"=>$cedula);
            $id = BDD::INSERTAR_DESDE_ARRAY("q_alumno",$array);
            classCursoExamen::REDIRECCIONAR();
            //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
    }

    static public function UPDATE_ALUMNO(){
        $name_id = filter_input(INPUT_POST,"id");
        $select  = filter_input(INPUT_POST,"Persona");
        $select1 = filter_input(INPUT_POST,"Curso");
        $array = array("persona_id"=>$select,"curso_id"=>$select1,"estado"=>"ACTIVO");

            BDD::ACTUALIZAR_DESDE_ARRAY("q_alumno",$array,"id_alumno = $name_id" );
            classCursoExamen::REDIRECCIONAR();


            print "<script>alert('Actualizado sin problemas');</script>";

    }
    static public function ELIMINAR_ALUMNO()
    {
        $name_id = filter_input(INPUT_POST, "id");
        $array = array("estado" => "INACTIVO");

        BDD::ACTUALIZAR_DESDE_ARRAY("q_alumno", $array, "id_alumno = $name_id");
        classCursoExamen::REDIRECCIONAR();




    }
}