<?php


class Menu
{
    public static function MENU_POR_DEFECTO()
    {

        $html = "";
        $html .= " <div id=\"layoutSidenav\">
        <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-light\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                           
                            <div class=\"sb-sidenav-menu-heading\">Modulos</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" 
                                data-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Mantenimiento
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" 
                                        data-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Mantenimiento
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\"  onclick=\"src_iframe('../usuario/');\">Gestionar Usuario</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../persona/');\">Generar Persona</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../roles/');\">Generar Roles</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../pregunta/');\">Generar Preguntas</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../opciones/');\">Generar Opciones</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../materia/');\">Generar Materia</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../examen/');\">Generar Examen</a>
                                            <a class=\"nav-link\" onclick=\"src_iframe('../alumno/');\">Generar Alumno</a>   
                                            <a class=\"nav-link\" onclick=\"src_iframe('../curso/');\">Generar Curso</a>                                         
                                            <a class=\"nav-link\" onclick=\"src_iframe('../asignar_examen/');\">Asignar Cusos Examenes</a>                                         

                                         </nav>
                                    </div>
                                </nav>
                            </div>
                             
                            
                        </div>
                        
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Usuario Logeado : ".$_SESSION['usuario']." en </div>
                       Sistema Academico v1.0
                    </div>
                </nav>
            </div>
        ";
        return $html;
    }




}
