<?php


class classPregunta
{
    static public function INSERTAR_PREGUNTA()
    {
        $name_pregunta = filter_input(INPUT_POST,"Pregunta");
        $select = filter_input(INPUT_POST,"Examen");
        $name_anexo = filter_input(INPUT_POST,"Anexo");
        $select1 = filter_input(INPUT_POST,"Opcion");
        $array = array("pregunta"=>$name_pregunta,"id_examen"=>$select,"anexo"=>$name_anexo,"id_opcion"=>$select1);
        $id = BDD::INSERTAR_DESDE_ARRAY("q_preguntas",$array);
        print "<script>alert('Eres guapo');</script>";
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
        classCursoExamen::REDIRECCIONAR();
    }
    static public function ACTUALIZAR_PREGUNTA()
    {
        $id = filter_input(INPUT_POST,"id");
        $name_pregunta = filter_input(INPUT_POST,"Pregunta");
        $select = filter_input(INPUT_POST,"Examen");
        $name_anexo = filter_input(INPUT_POST,"Anexo");
        $select1 = filter_input(INPUT_POST,"Opcion");
        $array = array("pregunta"=>$name_pregunta,"id_examen"=>$select,"anexo"=>$name_anexo,"id_opcion"=>$select1);
        $id = BDD::INSERTAR_DESDE_ARRAY("q_preguntas",$array,"id_pregunta=$id");
        print "<script>alert('Eres guapo');</script>";
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
        classCursoExamen::REDIRECCIONAR();
    }
    static public function ELIMINAR_PREGUNTA()
    {
        $id = filter_input(INPUT_POST,"id");
        $name_pregunta = filter_input(INPUT_POST,"Pregunta");
        $select = filter_input(INPUT_POST,"Examen");
        $name_anexo = filter_input(INPUT_POST,"Anexo");
        $select1 = filter_input(INPUT_POST,"Opcion");
        $array = array("pregunta"=>$name_pregunta,"id_examen"=>$select,"anexo"=>$name_anexo,"id_opcion"=>$select1);
        $id = BDD::ELIMINAR_DATOS("q_preguntas","id_pregunta=$id");
        print "<script>alert('Eres guapo');</script>";
        classCursoExamen::REDIRECCIONAR();
        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";
    }


}