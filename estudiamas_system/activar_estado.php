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

$idestado = $_GET['idestado'];

$consulta = "UPDATE estado SET estatus = 1  WHERE idestado = $idestado";
$db->consulta($consulta);

header('Location: estados.php');
?> 