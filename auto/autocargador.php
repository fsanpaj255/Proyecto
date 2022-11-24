<?php
function autocarga($clase){
    if (file_exists($_SERVER["DOCUMENT_ROOT"].'class/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'class/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'helpers/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'helpers/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'db/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'db/'.$clase.'.php';
    }else if(file_exists($_SERVER["DOCUMENT_ROOT"].'view/'.$clase.'.php')){
        include $_SERVER["DOCUMENT_ROOT"].'view/'.$clase.'.php';
    }
}
spl_autoload_register("autocarga");
?>