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

$idestado = $_GET['idestado'];

$consulta = "DELETE FROM estado WHERE idestado = $idestado";
$db->consulta($consulta);

header('Location: estados.php');
?>