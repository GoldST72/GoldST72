<?php


class classPermisosMenu
{


    static public function INSERTAR_PERMISOS_MENU(){

        $select = filter_input(INPUT_POST,"rol_id");
        $select1 = filter_input(INPUT_POST,"menu_id");
        $array = array("rol_id"=>$select,"menu_id"=>$select1);

        $id = BDD::INSERTAR_DESDE_ARRAY("q_permiso_menu",$array);

        //print "<script>alert('Deben coincidir la clave con su confirmacion clave');</script>";










    }





}