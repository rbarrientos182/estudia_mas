<?php 
class MySQL
{  
     private $conexion = null;
     	 
	 //funcion de coneccion con la base de datos
	 public function MySQL()
	 {  
	 	if(!isset($this->conexion))
		{  
		   $this->conexion = mssql_connect("72.249.55.107\SQLEXPRESS","esmaslp","esmas*PHP");  
			@mysql_select_db("EstudiaMas_LP",$this->conexion);
		}  
		
		if(!$this->conexion)
	    {
			//esto es lo magico.
		   throw new Exception('No Funciona la conexcion. El Error es el siguiente: '.mssql_get_last_message());
		}
	}  
	
	//funcion de consulta con la base. parametro el query
	public function consulta($consulta)
	{  
		$resultado = @mssql_query($consulta,$this->conexion); 
		 
		if(!$resultado)
		{  
			throw new Exception('No Funciona la Consulta. El Error es el siguiente: '.mssql_get_last_message());
		} else
		{
				return $resultado; 
		}
	}		
	
	//funcion para la cracion de los array. paramentro el resultado de la consulta	  
	public function fetch_array($consulta)
	{   
		return @mssql_fetch_array($consulta);  
		
	}  
				  
	public function fetch_row($consulta)
	{   
		return @mssql_fetch_row($consulta);  
	}    
				  
	public function mysqlresult($consulta,$numero,$letra)
	{
		return @mssql_result($consulta,$numero,$letra);
	}
				  
	public function fetch_assoc($consulta)
	{   
		return @mssql_fetch_assoc($consulta);  
	}  
	
	public function fetch_object($consulta){
		return @mssql_fetch_object($consulta);
	
	}
	
	
	//funcion para obtener el todal de filas consultadas. parametro  resultado de la consulta
	public function num_rows($consulta)
	{   
		return @mssql_num_rows($consulta);  
	}
	
	
	//funcion que obtiene el ultimo id que fue ingrsado
	/*public function id_ultimo()
	{
		return @mysql_insert_id();  
	}  */
	//preparando la base para insercion de datos
	public function begin()
    {
    	@mssql_query("BEGIN");
    }
         
	public function commit()
    {
    	@mssql_query("COMMIT");
    }
			  
	public function rollback()
    {
    	@mssql_query("ROLLBACK");
    }
			 
	public function liberar($q)
    {   
    	@mssql_free_result($q); 
    }
}
?>