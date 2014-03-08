<?php 
require_once("clases/class.SQLServer.php");
$db = new MySQL();

$id = $_POST['id'];
$tipo = $_POST['tipo'];

$consulta = "SELECT * FROM programas_has_universidad pu, programas pr WHERE pu.idprogramas = pr.idprogramas AND iduniversidad = ".$id." AND tipo = ".$tipo." AND pr.estatus = 1  ORDER BY programas";
$resultado = $db->consulta($consulta);
$row = $db->fetch_assoc($resultado);
$totalRow = $db->num_rows($resultado);
?>
<br /><br />
<select name="programaa" id="programaa" style="width:140PX;" onchange="asignarPrograma('programaa')">
	<option value="0"> Selecciona programa</option>
	<?php 
	if($totalRow>0)
	{
		do{
	?>
		<option value="<?php echo $row['idprogramas']?>"><?php echo utf8_encode($row['programas']);?></option>
    <?php 
		}while($row = $db->fetch_assoc($resultado));
	}
	else
	{
	?>
    	<option value="0"> No se encontraron programas</option>
    <?php 
	}
	?>
</select>