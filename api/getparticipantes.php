<?php
require_once("../auto/autocargador.php");

$participantes=repositorioParticipante::getallParticipantes();
echo json_encode($participantes);