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

$idusuario = $_GET['idusuario'];

$consulta = "DELETE FROM usuario WHERE idusuario = $idusuario";
$db->consulta($consulta);

header('Location: usuarios.php');
?>