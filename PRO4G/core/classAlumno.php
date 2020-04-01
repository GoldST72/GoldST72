<?php


class classAlumno
{
    static public function INSERTAR_ALUMNO(){

        $select = filter_input(INPUT_POST,"Persona");
        $select1 = filter_input(INPUT_POST,"Curso");
        $array = array("persona_id"=>$select,"curso_id"=>$select1,"estado"=>"ACTIVO");

            $id = BDD::INSERTAR_DESDE_ARRAY("q_alumno",$array);

            //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
    }

    static public function UPDATE_ALUMNO(){
        $name_id = filter_input(INPUT_POST,"id");
        $select  = filter_input(INPUT_POST,"Persona");
        $select1 = filter_input(INPUT_POST,"Curso");
        $array = array("persona_id"=>$select,"curso_id"=>$select1,"estado"=>"ACTIVO");
        if(true){
            BDD::ACTUALIZAR_DESDE_ARRAY("q_alumno",$array,"id_alumno = $name_id" );
        }else{
            print "<script>alert('Actualizado sin problemas');</script>";
        }
    }
    static public function ELIMINAR_ALUMNO(){
      $name_id = filter_input(INPUT_POST,"id");
        $select  = filter_input(INPUT_POST,"Persona");
        $select1 = filter_input(INPUT_POST,"Curso");
        $array = array("persona_id"=>$select,"curso_id"=>$select1,"estado"=>"INACTIVO");
        if(true){
            BDD::ELIMINAR_DATOS("q_alumno","id_alumno = $name_id" );
        }else{
    print "<script>alert('Eliminado sin problemas');</script>";
}
}










    }