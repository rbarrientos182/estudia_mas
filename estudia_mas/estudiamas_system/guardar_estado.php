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

$estado = utf8_decode($_POST['estado']);

$consulta = "SELECT MAX(idestado) AS id FROM estado";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);

$idestado = $row['id'] + 1;

$consulta2 = "INSERT INTO estado (idestado,estado) VALUES ($idestado,'$estado')";
$db->consulta($consulta2);

header('Location: estados.php');
?> 