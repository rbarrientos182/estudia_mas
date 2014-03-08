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

$idusuario = $_GET['idusuario'];


$consulta = "UPDATE usuario SET estatus = 0  WHERE idusuario = $idusuario";
$db->consulta($consulta);

header('Location: usuarios.php');
?> 