<?php 
require_once("clases/class.SQLServer.php");
$db = new MySQL();

$id = $_POST['id'];
$tipo = $_POST['tipo'];

//en la parte de la consulta AND u.iduniversidad IN (id1,id2,id3,....idn) es donde van todos los ids de las universidades que correspondan a lo que se quiere filtrar en este caso son todas las de universidad UVM

$consulta = "SELECT u.iduniversidad, u.nombre FROM programas_has_universidad pu, universidad u WHERE pu.iduniversidad = u.iduniversidad AND u.idestado = ".$id." AND pu.tipo = ".$tipo."  AND pu.estatus = 1 AND u.iduniversidad IN (61,62,63) GROUP BY u.iduniversidad,u.nombre ORDER BY u.nombre";
$resultado = $db->consulta($consulta);


$arr = array();

while($obj = $db->fetch_object($resultado)){
	$arr[] = array('iduniversidad'=> $obj->iduniversidad,
					'nombre' => utf8_encode($obj->nombre)); 
}

echo ''.json_encode($arr).'';
?>