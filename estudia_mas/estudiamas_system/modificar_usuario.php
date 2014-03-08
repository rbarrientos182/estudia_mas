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

$idusuario = $_POST['idusuario'];
$nombre = utf8_decode($_POST['nombre']);
$email = utf8_decode($_POST['email']);
$pass = utf8_decode($_POST['pass']);

$consulta = "UPDATE usuario SET nombre = '$nombre', email = '$email', password = '$pass'  WHERE idusuario = $idusuario";
$db->consulta($consulta);

header('Location: usuarios.php');
?> 