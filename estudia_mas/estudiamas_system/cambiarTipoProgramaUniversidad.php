<?php 
if(!isset($_SESSION))
{
	session_start ();
}

require_once('php/clases/class.Programas.php');
require_once('php/clases/class.SQLServer.php');

$pro = new Programas();
$db = new SQLServer();


$contador = $_POST['valor'];
$iprogramas = $_POST['valor2'];
$tipo = $_POST['tipo'];


$consulta = "SELECT programas FROM programas WHERE idprogramas = ".$iprogramas;
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);

$pro->cambiarTipoPrograma($contador,$iprogramas,$row['programas'],$tipo);
$pro->mostrarProgramas();
?>