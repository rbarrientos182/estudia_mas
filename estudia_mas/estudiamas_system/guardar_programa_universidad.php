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
$idprogramas = $_SESSION['programasUni'];


$consulta = "SELECT MAX(id) AS idkey FROM programas_has_universidad";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);

$id = $row['idkey'];

//echo '<br>';

foreach($_SESSION['programasUni'] as $k  => $v)
{
	$id++;
	$consulta2 = "INSERT INTO [dbo].[programas_has_universidad] ([idprogramas],[id],[iduniversidad],tipo) VALUES (".$v[0].", $id, $iduniversidad,".$v[2].")";
	//echo '<br>';
	$db->consulta($consulta2);

}

unset ($_SESSION['programasUni']);							
header('Location: programas_universidades.php');
?> 