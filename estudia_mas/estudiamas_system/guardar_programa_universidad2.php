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

$consulta = "SELECT MAX(id) AS idkey FROM programas_has_universidad";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);

$id = $row['idkey'];
//echo '<br>';
for($x=0;$x<count($idprogramas);$x++)
{
	$id++;
	$consulta2 = "INSERT INTO [dbo].[programas_has_universidad] ([idprogramas],[id],[iduniversidad]) VALUES (".$idprogramas[$x].", $id, $iduniversidad)";
	$db->consulta($consulta2);
	//echo '<br>';
}
header('Location: programas_universidades.php');
?> 