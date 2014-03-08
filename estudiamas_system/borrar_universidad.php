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

$iduniversidad = $_GET['iduniversidad'];

echo $consulta = "DELETE FROM universidad WHERE iduniversidad = $iduniversidad";
$db->consulta($consulta);

header('Location: universidades.php');
?>