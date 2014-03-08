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

$id = $_POST['id'];
$iduniversidad = $_POST['iduniversidad'];

$tipo = $_POST['tipo'];
$online = 0;

if($tipo==4)
{
	$online = 1;
}

$estatus = $_POST['estatus'];
$consulta = "UPDATE programas_has_universidad SET tipo = $tipo, online = $online, estatus = $estatus WHERE id = $id";
$db->consulta($consulta);

header('Location: programas_tipos.php?iduniversidad='.$iduniversidad);
?>