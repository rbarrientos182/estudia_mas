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

$programa = utf8_decode($_POST['programa']);
$descripcion = utf8_decode($_POST['descripcion']);

$consulta2 = "SELECT MAX(idprogramas) AS id  FROM programas";
$resultado = $db->consulta($consulta2);
$row = $db->fetch_assoc($resultado);


$id = $row['id'] + 1;
$consulta = "INSERT INTO programas (idprogramas, programas, descripcion, estatus) VALUES ($id,'$programa','$descripcion',1)";
$db->consulta($consulta);

header('Location: programas.php');
?> 