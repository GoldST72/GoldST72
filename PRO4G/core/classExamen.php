<?php


class classExamen
{

    static public function INSERTAR_EXAMEN(){
        $name_nombre = filter_input(INPUT_POST,"Nombre");
        $select = filter_input(INPUT_POST,"Materia");
        $array = array("nombre"=>$name_nombre,"materia"=>$select,"estado"=>"ACTIVO");
       
        $id = BDD::INSERTAR_DESDE_ARRAY("q_examen",$array);
        classCursoExamen::REDIRECCIONAR();
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";

    }

 static public function UPDATE_EXAMEN(){
        $name_id = filter_input(INPUT_POST,"id");

        $name_nombre = filter_input(INPUT_POST,"Nombre");
        $select = filter_input(INPUT_POST,"Materia");
        $array = array("nombre"=>$name_nombre,"materia"=>$select,"estado"=>"ACTIVO");
        

          BDD::ACTUALIZAR_DESDE_ARRAY("q_examen",$array,"id_examen = $name_id" );
        
            print "<script>alert('Actualizado sin problemas');</script>";
     classCursoExamen::REDIRECCIONAR();


 }
    static public function ELIMINAR_EXAMEN(){
      $name_id = filter_input(INPUT_POST,"id");

        $array = array("estado"=>"INACTIVO");

          BDD::ACTUALIZAR_DESDE_ARRAY("q_examen",$array,"id_examen = $name_id" );
        classCursoExamen::REDIRECCIONAR();

    }
}