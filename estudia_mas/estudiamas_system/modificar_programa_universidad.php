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

/*$consulta2 = "DELETE FROM programas_has_universidad WHERE iduniversidad = $iduniversidad";
$db->consulta($consulta2);*/

for($x=0;$x<count($idprogramas);$x++)
{
	$id++;
	$consulta2 = "SELECT * FROM programas_has_universidad WHERE idprogramas = ".$idprogramas[$x]." AND iduniversidad = ".$iduniversidad;
	//echo '<br>';
	$resultado2 = $db->consulta($consulta2);
	$numRow = $db->fetch_row($resultado2);
	if($numRow==0)
	{
		$consulta3 = "INSERT INTO [dbo].[programas_has_universidad] ([idprogramas],[id],[iduniversidad]) VALUES (".$idprogramas[$x].", $id, $iduniversidad)";
		$db->consulta($consulta3);
	}
}
header('Location: programas_universidades.php');
?> 