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
$iduniversidad = $_GET['iduniversidad'];

$consulta = "DELETE FROM programas_has_universidad WHERE id = $id";
$db->consulta($consulta);

header('Location: estados.php');
header('Location: programas_tipos.php?iduniversidad='.$iduniversidad);
?>