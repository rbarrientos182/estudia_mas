<?php 
require_once("clases/class.SQLServer.php");
$db = new MySQL();

$id = $_POST['id'];
$tipo = $_POST['tipo'];

$consulta = "SELECT pr.idprogramas, pr.programas FROM programas_has_universidad pu, programas pr WHERE pu.idprogramas = pr.idprogramas AND iduniversidad = ".$id." AND tipo = ".$tipo."  AND pr.estatus = 1 ORDER BY programas";
$resultado = $db->consulta($consulta);


$arr = array();

while($obj = $db->fetch_object($resultado)){
	$arr[] = array('idprogramas'=> $obj->idprogramas,
					'programas' => utf8_encode($obj->programas)); 
}

echo ''.json_encode($arr).'';
?>