<?php
class MySQL
{  
     private $conexion = null;
     	 
	 //funcion de coneccion con la base de datos
	 public function MySQL()
	 {  
	 	if(!isset($this->conexion))
		{  
		   $this->conexion = mysql_connect("localhost","do_something","do_something");  
			@mysql_select_db("do_something",$this->conexion);
		}  
		
		if(!$this->conexion)
	    {
			//esto es lo magico.
		   throw new Exception('No Funciona la conexcion. El Error es el siguiente: '.mysql_error());
		}
	}  
	
	//funcion de consulta con la base. parametro el query
	public function consulta($consulta)
	{  
		$resultado = @mysql_query($consulta,$this->conexion); 
		 
		if(!$resultado)
		{  
			throw new Exception('No Funciona la Consulta. El Error es el siguiente: '.mysql_error());
		} else
		{
				return $resultado; 
		}
	}		
	
	//funcion para la cracion de los array. paramentro el resultado de la consulta	  
	public function fetch_array($consulta)
	{   
		return @mysql_fetch_array($consulta);  
		
	}  
				  
	public function fetch_row($consulta)
	{   
		return @mysql_fetch_row($consulta);  
	}    
				  
	public function mysqlresult($consulta,$numero,$letra)
	{
		return @mysql_result($consulta,$numero,$letra);
	}
				  
	public function fetch_assoc($consulta)
	{   
		return @mysql_fetch_assoc($consulta);  
	}  
	
	//funcion para obtener el todal de filas consultadas. parametro  resultado de la consulta
	public function num_rows($consulta)
	{   
		return @mysql_num_rows($consulta);  
	}
	
	
	//funcion que obtiene el ultimo id que fue ingrsado
	public function id_ultimo()
	{
		return @mysql_insert_id();  
	}  
	//preparando la base para insercion de datos
	public function begin()
    {
    	@mysql_query("BEGIN");
    }
         
	public function commit()
    {
    	@mysql_query("COMMIT");
    }
			  
	public function rollback()
    {
    	@mysql_query("ROLLBACK");
    }
			 
	public function liberar($q)
    {   
    	@mysql_free_result($q); 
    }
}
?>