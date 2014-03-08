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

$iduniversidad = $_POST['iduniversidad'];
$idestado = $_POST['idestado'];
$nombre = utf8_decode($_POST['nombre']);

$consulta = "UPDATE universidad SET idestado = '$idestado', nombre = '$nombre' WHERE iduniversidad = $iduniversidad";
$db->consulta($consulta);

header('Location: universidades.php');
?> 