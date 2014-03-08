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
$nombre = utf8_decode($_POST['nombre']);



$consulta2 = "SELECT MAX(iduniversidad) AS id FROM universidad";
$resultado = $db->consulta($consulta2);
$row = $db->fetch_assoc($resultado);



$id = $row['id']+1;
$consulta = "INSERT INTO universidad (iduniversidad,idestado,nombre) VALUES (".$id.",$idestado,'$nombre')";
$db->consulta($consulta);

header('Location: universidades.php');
?> 