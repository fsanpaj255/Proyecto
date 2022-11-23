<?php
function autocarga($clase){
    if (file_exists($_SERVER["DOCUMENT_ROOT"].'Proyecto/class/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'Proyecto/class/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'Proyecto/helpers/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'Proyecto/helpers/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'Proyecto/db/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'Proyecto/db/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'Proyecto/view/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'Proyecto/view/'.$clase.'.php';
    
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'Proyecto/pruebas/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'Proyecto/pruebas/'.$clase.'.php';
    }
}
spl_autoload_register("autocarga");
?>