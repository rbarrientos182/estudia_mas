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

$idestado = $_POST['idestado'];
$estado = utf8_decode($_POST['estado']);

$consulta = "UPDATE estado SET estado = '$estado' WHERE idestado = $idestado";
$db->consulta($consulta);

header('Location: estados.php');
?> 