<?php 
require_once("clases/class.SQLServer.php");
$db = new MySQL();

$id = $_POST['id'];
$tipo = $_POST['tipo'];
$nombre = $_POST['nombre'];

if($nombre==NULL)
{
	$consulta = "SELECT * FROM universidad WHERE idestado = ".$id." AND estatus = 1 ORDER BY nombre";
	$resultado = $db->consulta($consulta);
	$row = $db->fetch_assoc($resultado);
}
else
{
	$consulta = "SELECT * FROM universidad WHERE idestado = ".$id." AND estatus = 1 AND nombre LIKE ('%".$nombre."%') ORDER BY nombre";
	$resultado = $db->consulta($consulta);
	$row = $db->fetch_assoc($resultado);
}
?>
<br /><br />
<select name="universidadd" id="universidadd" style="width:140PX;" onchange="cargarList2('universidadd','programa2','list_programa2.php','0')">
	<option value="0">Selecciona Universidad</option>
	<?php 
	do{
	?>
	<option value="<?php echo $row['iduniversidad']?>"><?php echo utf8_encode($row['nombre']);?></option>
    <?php 
	}while($row = $db->fetch_assoc($resultado));
	?>
</select>