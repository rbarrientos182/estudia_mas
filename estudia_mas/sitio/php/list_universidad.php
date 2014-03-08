<?php 
require_once("clases/class.SQLServer.php");
$db = new SQLServer();

$id = $_POST['id'];
$tipo = $_POST['tipo'];

$consulta = "SELECT u.iduniversidad, u.nombre FROM programas_has_universidad pu, universidad u WHERE pu.iduniversidad = u.iduniversidad AND u.idestado = ".$id." AND pu.tipo = ".$tipo."  AND pu.estatus = 1 GROUP BY u.iduniversidad,u.nombre ORDER BY u.nombre";
$resultado = $db->consulta($consulta);


$arr = array();

while($obj = $db->fetch_object($resultado)){
	$arr[] = array('iduniversidad'=> $obj->iduniversidad,
					'nombre' => utf8_encode($obj->nombre)); 
}

echo ''.json_encode($arr).'';
?>