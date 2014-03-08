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

$iduniversidad = $_GET['iduniversidad'];


$consulta = "UPDATE universidad SET estatus = 0  WHERE iduniversidad = $iduniversidad";
$db->consulta($consulta);

header('Location: universidades.php');
?> 