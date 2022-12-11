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
        require_once './view/Mantenimiento/concursos/listadoconcursos.php';
     
    }
    if ($_GET['menu'] == "concursosactivos") {
        require_once './view/Mantenimiento/concursos/concursosactivos.php';
     
    }
    if ($_GET['menu'] == "insertaconcursos") {
        require_once './view/Mantenimiento/concursos/insertarconcursos.php';
     
    }
    if ($_GET['menu'] == "eliminarconcurso") {
        require_once './view/Mantenimiento/concursos/eliminarconcursos.php';
     
    }
    if ($_GET['menu'] == "editarconcurso") {
        require_once './view/Mantenimiento/concursos/editarconcursos.php';
     
    }
    if ($_GET['menu'] == "listadomodos") {
        require_once './view/Mantenimiento/Modos/listadomodos.php';
     
    }
   
    if ($_GET['menu'] == "eliminamodos") {
        require_once './view/Mantenimiento/Modos/eliminarmodos.php';
     
    }
    if ($_GET['menu'] == "editarmodos") {
        require_once './view/Mantenimiento/Modos/editarmodos.php';
     
    }
    if ($_GET['menu'] == "procesaeditajemodo") {
        require_once './view/Mantenimiento/Modos/procesaeditajemodo.php';
     
    }
    if ($_GET['menu'] == "insertamodos") {
        require_once './view/Mantenimiento/Modos/insertamodos.php';
     
    }
    if ($_GET['menu'] == "procesareditar") {
        require_once './view/Mantenimiento/concursos/procesaeditaje.php';
     
    }

    if ($_GET['menu'] == "pruebas") {
        require_once './pruebas/pruebas.php';
     
    }
    if ($_GET['menu'] == "api") {
        require_once './api/bandas/ingresarbandas.php';
     
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
    
    if ($_GET['menu'] == "listarbandas") {
        require_once './view/Mantenimiento/Bandas/listarbandas.php';
     
    }
    if ($_GET['menu'] == "listarparticipantes") {
        require_once './view/Mantenimiento/Participantes/listarparticipantes.php';
     
    }
    

    
}else{
    require_once './view/Mantenimiento/concursos/concursosactivos.php';
   }

    
    //Añadir otras rutas
