<?php

require_once "configura/config.php";
require_once "controller/C_inscripcion.php";

$control_ins = new ControlInscripcion();
$control_ins->control_insc();

?> 