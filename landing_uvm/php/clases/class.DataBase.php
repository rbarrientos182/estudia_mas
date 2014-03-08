<?php 
require_once("class.MySQL.php");

class DataBase extends MySQL
{
	public function obtenerNombreCiudad($idciudad)
	{
		$consulta = "SELECT estado FROM estado WHERE idestado = ".$idciudad;
		$resultado = $this->consulta($consulta);
		$row = $this->fetch_assoc($resultado);
		
		return $row['estado'];
	
	}
	
	public function obtenerNombreUniversidad($iduniversidad)
	{
		$consulta = "SELECT nombre FROM universidad WHERE iduniversidad = ".$iduniversidad;
		$resultado = $this->consulta($consulta);
		$row = $this->fetch_assoc($resultado);
		
		return $row['nombre'];
	
	}
	
	public function obtenerNombrePrograma($idprogramas)
	{
		$consulta = "SELECT programa FROM programas WHERE idprogramas = ".$idprogramas;
		$resultado = $this->consulta($consulta);
		$row = $this->fetch_assoc($resultado);
		
		return $row['programa'];
	
	}
	
}
?>