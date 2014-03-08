<?php 
if (!isset($_SESSION)) 
{
	session_start();
}

if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}
require_once('php/clases/class.SQLSErver.php');

$db = new SQLSErver();

$idprogramas = $_GET['idprogramas'];

$consulta = "UPDATE programas SET estatus = 0  WHERE idprogramas = $idprogramas";
$db->consulta($consulta);

header('Location: programas.php');
?> 