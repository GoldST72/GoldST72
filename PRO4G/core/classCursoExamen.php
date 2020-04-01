<?php


class classCursoExamen
{

    static public function INSERTAR_CURSO_EXAMEN(){

        $select = filter_input(INPUT_POST,"Examen");
        $select1 = filter_input(INPUT_POST,"Curso");
        $array = array("examen_id"=>$select,"curso_id"=>$select1);

        $id = BDD::INSERTAR_DESDE_ARRAY("q_curso_examenes",$array);

        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";

    }

        static public function UPDATE_CURSO_EXAMEN(){


            $name_id = filter_input(INPUT_POST,"id");
            $select = filter_input(INPUT_POST,"Examen");
            $select1 = filter_input(INPUT_POST,"Curso");

            $array = array("examen_id"=>$select,"curso_id"=>$select1);
            if(true){
                BDD::ACTUALIZAR_DESDE_ARRAY("q_curso_examenes",$array,"id_curso_e = $name_id" );
            }else{
                print "<script>alert('Actualizado sin problemas');</script>";
            }
        }
    static public function ELIMINAR_CURSO_EXAMEN(){
        $name_id = filter_input(INPUT_POST,"id");
        $select = filter_input(INPUT_POST,"Examen");
        $select1 = filter_input(INPUT_POST,"Curso");

        $array = array("examen_id"=>$select,"curso_id"=>$select1);
        if(true){
            BDD::ELIMINAR_DATOS("q_curso_examenes","id_curso_e = $name_id" );
        }else{
            print "<script>alert('Eliminado sin problemas');</script>";
        }


}

}