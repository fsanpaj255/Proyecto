<?php
 require_once '../auto/autocargador.php';
 $c = new Conexion();
 $conex = $c->conectabd();
 $rp = new repositorioParticipante($conex);
 
 $arrayParticipantes = $rp->getallParticipantes();
 var_dump($arrayParticipantes);
 //-----------------------------------------------
 foreach($arrayParticipantes as $key => $val) {
    print "$key->getid = $val <br>";
}


?>