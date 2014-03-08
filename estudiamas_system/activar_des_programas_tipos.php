<?php 
if (!isset($_SESSION)) 
{
	session_start();
}

if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}

require_once('php/clases/class.SQLServer.php');
$db = new SQLServer();

$id = $_GET['id'];
$estatus = $_GET['estatus'];
$iduniversidad = $_GET['iduniversidad'];

$consulta = "UPDATE programas_has_universidad SET estatus = $estatus WHERE id = $id";
$db->consulta($consulta);

header('Location: programas_tipos.php?iduniversidad='.$iduniversidad);
?>