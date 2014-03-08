<?php 
if(!isset($_SESSION))
{
	session_start ();
}

require_once('php/clases/class.Programas.php');
require_once('php/clases/class.SQLSErver.php');

$pro = new Programas();
$db = new SQLServer();


$iprogramas = $_POST['valor'];


$consulta = "SELECT programas FROM programas WHERE idprogramas = $iprogramas";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);



$pro->agregarProgramas($iprogramas,$row['programas']);
$pro->mostrarProgramas();
?>