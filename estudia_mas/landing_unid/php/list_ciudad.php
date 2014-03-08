<?php 
require_once("clases/class.SQLServer.php");
$db = new MySQL();

$tipo = $_POST['tipo'];

//en la parte de la consulta AND u.iduniversidad IN (id1,id2,id3,....idn) es donde van todos los ids de las universidades que correspondan a lo que se quiere filtrar en este caso son todas las de universidad UNID

$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
									INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
									WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = ".$tipo." AND universidad.iduniversidad IN (9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98) GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
$resultado = $db->consulta($consulta);


$arr = array();

while($obj = $db->fetch_object($resultado)){
	$arr[] = array('idestado'=> $obj->idestado,
					'estado' => utf8_encode($obj->estado)); 
}

echo ''.json_encode($arr).'';
?>