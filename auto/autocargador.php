<?php
function autocarga($clase){
    if (file_exists($_SERVER["DOCUMENT_ROOT"].'/class/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'/class/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'/helpers/'.$helpers.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'/helpers/'.$helpers.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'/db/'.$basededatos.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'/db/'.$basededatos.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'/view/'.$vista.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'/view/'.$vista.'.php';
    }
}
spl_autoload('autocargador');





?>