<?php
if (isset($_GET['menu'])) {
    if ($_GET['menu'] == "inicio") {
        require_once 'index.php';
    }
    if ($_GET['menu'] == "autentifica") {
        require_once './view/Login/autentifica.php';
    }
    if ($_GET['menu'] == "cerrarsesion") {
        require_once './view/Login/cerrarsesion.php';
     
    }
    if ($_GET['menu'] == "mantenimiento") {
        require_once './view/mantenimiento/mantenimiento.php';
     
    }
    if ($_GET['menu'] == "listadoparticipantes") {
        require_once './view/Mantenimiento/listadoparticipantes.php';
     
    }
    if ($_GET['menu'] == "listadovacunas") {
        require_once './view/Mantenimiento/listadovacunas.php';
     
    }

    

    
}

    
    //Añadir otras rutas
