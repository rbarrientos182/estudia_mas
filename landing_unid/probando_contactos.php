<?php 
require_once('php/clases/class.SQLServer.php');
$db = new MySQL();

$consulta = "SELECT * FROM contacto ORDER BY fecha_creacion DESC";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);
$num = $db->num_rows($resultado);

echo 'total de registros '.$num.'<br>';


do{
		echo $row['nombre'].'-'.$row['paterno'].'-'.$row['materno'].'-'.$row['paterno'].'-'.$row['calle'].'-'.$row['colonia'].'-'.$row['municipio'].'-'.$row['cp'].'-'.$row['tel'].'-'.$row['correo'].'-'.$row['correo_alternativo'].'-'.$row['genero'].'-'.$row['fecha_nacimiento'].'-'.$row['num_exterior'].'-'.$row['num_interior'].'-'.$row['tel_trabajo'].'-'.$row['tel_celular'].'-'.$row['opcion1'].'-'.$row['opcion2'].'-'.$row['opcion3'].'-'.$row['medio'].'-'.$row['fecha_creacion'].'-'.$row['tipo_solicitud'];
		echo '<br>';
}while($row = $db->fetch_assoc($resultado));
?>