<?php
session_start();
if(!$_SESSION['usuario']){
    header('location: ../login/form_login.php');
}else{
    require '../../core/classUsuario.php';
    require '../../core/classLogin.php';
    require '../../core/classMenu.php';
    require '../../core/classAlumno.php';
    require '../../core/classCurso.php';
    require '../../core/classCursoExamen.php';
    require '../../core/classExamen.php';
    require '../../core/classMateria.php';
    require '../../core/classOpciones.php';
    require '../../core/classPersona.php';
    require '../../core/classPregunta.php';
    require '../../core/classDATATABLE.php';
    require '../../core/classRol.php';
    require '../../core/ambiente.php';
    require '../../core/BDD.php';
    require '../../core/FORM.php';
}


?>