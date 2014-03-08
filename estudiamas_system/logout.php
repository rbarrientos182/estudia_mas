<?php
require_once("php/clases/class.Sesion.php");
$se= new Sesion();

$se->terminarSesion();
header("location: index.php");
?>