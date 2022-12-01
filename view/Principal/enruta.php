<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "autentifica") {
        require_once './view/Login/autentifica.php';
    }
    if ($_GET['menu'] == "registrarse") {
        require_once './view/Login/registrarse.php';
    }

    if ($_GET['menu'] == "cerrarsesion") {
        require_once './view/Login/cerrarsesion.php';
     
    }
    if ($_GET['menu'] == "mantenimiento") {
        require_once './view/Mantenimiento/mantenimiento.php';
     
    }
    if ($_GET['menu'] == "listadoconcursos") {
        require_once './view/Mantenimiento/listadoconcursos.php';
     
    }
    if ($_GET['menu'] == "listadoparticipantesajax") {
        require_once './view/Mantenimiento/listadopartajax.php';
     
    }
    if ($_GET['menu'] == "concursosactivos") {
        require_once './view/Mantenimiento/concursosactivos.php';
     
    }
    if ($_GET['menu'] == "insertaconcursos") {
        require_once './view/Mantenimiento/insertarconcursos.php';
     
    }
    if ($_GET['menu'] == "eliminarconcurso") {
        require_once './view/Mantenimiento/eliminarconcursos.php';
     
    }
    if ($_GET['menu'] == "editarconcurso") {
        require_once './view/Mantenimiento/editarconcursos.php';
     
    }

    if ($_GET['menu'] == "pruebas") {
        require_once './pruebas/pruebas.php';
     
    }
    if ($_GET['menu'] == "api") {
        require_once './api/getparticipantes.php';
     
    }


    if ($_GET['menu'] == "logeo") {
        require_once './controllers/controladorLogin.php';
     
    }
    if ($_GET['menu'] == "register") {
        require_once './controllers/controladorRegistrar.php';
     
    }

    if ($_GET['menu'] == "salir") {
        require_once './view/Login/cerrarsesion.php';
     
    }

    if ($_GET['menu'] == "pantallainfo") {
        require_once './view/Mantenimiento/pantallainfo.php';
     
    }

    

    
}else{
    require_once './view/Mantenimiento/concursosactivos.php';
   }

    
    //Añadir otras rutas
