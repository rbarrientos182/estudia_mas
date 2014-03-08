<?php 
if (!isset($_SESSION)) 
{
	session_start();
}
require_once('php/clases/class.SQLServer.php');
$sqlserver = new SQLServer();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$consulta = "SELECT * FROM usuario WHERE [user] = '$usuario' AND password = '$clave' AND estatus = 1";
$result = $sqlserver->consulta($consulta);
$numRow = $sqlserver->num_rows($result);

if($numRow>0)
{
	   $_SESSION['usuario'] = $usuario;
	   //header("Location: dashboard.php?bandera=1");
	   echo 1;
	   
	   
}
else
{
	   //header("Location: index.php");
	   echo 0;
}
?>