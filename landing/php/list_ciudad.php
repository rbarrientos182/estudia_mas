<?php 
require_once("clases/class.SQLServer.php");
$db = new MySQL();

$tipo = $_POST['tipo'];

$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
									INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
									WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = ".$tipo." GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
$resultado = $db->consulta($consulta);


$arr = array();

while($obj = $db->fetch_object($resultado)){
	$arr[] = array('idestado'=> $obj->idestado,
					'estado' => utf8_encode($obj->estado)); 
}

echo ''.json_encode($arr).'';
?>