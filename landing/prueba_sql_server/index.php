<?php
$server = '72.249.55.107\SQLEXPRESS';

// Connect to MSSQL
$conexion = mssql_connect($server, 'esmaslp', 'esmas*PHP');

if (!$conexion) {
    die('Something went wrong while connecting to MSSQL');
}
else{
	
	mssql_select_db("EstudiaMas_LP");
	$sql = mssql_query("SELECT * FROM estado", $conexion); 
	while ($row = mssql_fetch_array($sql)) { 
	   $counter++; 
	   $nom = $row["estado"]; 
	   echo ("$counter estado: $nom\n"); 
	} 
	mssql_close($conexion);
}
?> 