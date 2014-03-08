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

$idprogramas = $_POST['idprogramas'];
$programa = utf8_decode($_POST['programa']);
$descripcion = utf8_decode($_POST['descripcion']);

$consulta = "UPDATE programas SET programas = '$programa', descripcion = '$descripcion' WHERE idprogramas = $idprogramas";
$db->consulta($consulta);

header('Location: programas.php');
?> 