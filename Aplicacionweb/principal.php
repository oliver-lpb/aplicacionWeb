<?php

require_once "configura/config.php";
require_once "controller/C_principal.php";

$control_prin = new ControlPrincipal();
$control_prin->control();

?>