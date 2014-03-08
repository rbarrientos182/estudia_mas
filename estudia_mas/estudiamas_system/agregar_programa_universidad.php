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
$idprogramas = $_POST['idprogramas'];
$tipo = $_POST['tipo'];

$consulta = "SELECT MAX(id) AS idkey FROM programas_has_universidad";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);

$id = $row['idkey'];

$id++;

$consulta2 = "INSERT INTO [dbo].[programas_has_universidad] ([idprogramas],[id],[iduniversidad],tipo) VALUES ($idprogramas, $id, $iduniversidad,$tipo)";
//echo '<br>';
$db->consulta($consulta2);

header('Location: programas_tipos.php?iduniversidad='.$iduniversidad);
?>