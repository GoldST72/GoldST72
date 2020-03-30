<?php


class classExamen{
static public function INSERTAR_EXAMEN()
{


    $name_nombre = filter_input(INPUT_POST,"Nombre");
    $select = filter_input(INPUT_POST,"Materia");
    $array = array("nombre"=>$name_nombre,"materia"=>$select,"estado"=>"ACTIVO");

    $id = BDD::INSERTAR_DESDE_ARRAY("q_examen",$array);

    //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";










}




}