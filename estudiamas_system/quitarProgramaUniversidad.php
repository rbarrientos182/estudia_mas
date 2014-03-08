<?php 
if(!isset($_SESSION))
{
	session_start ();
}

require_once('php/clases/class.Programas.php');

$pro = new Programas();

$iprogramas = $_POST['valor'];


$pro->quitarProgramas($iprogramas);
$pro->mostrarProgramas();
?>