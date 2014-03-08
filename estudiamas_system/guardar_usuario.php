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

$nombre = utf8_decode($_POST['nombre']);
$email = utf8_decode($_POST['email']);
$user = utf8_decode($_POST['user']);
$pass = utf8_decode($_POST['pass']);

$consulta = "INSERT INTO usuario ([user],password,nombre,email,estatus) VALUES ('$user','$pass','$nombre','$email',1)";
$db->consulta($consulta);

header('Location: usuarios.php');
?> 