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


}