<?php 
if(!isset($_POST['enviarf']))
{
	header('Location: error.html');

}
else
{
	
	
	//incluimos la libreria nusoap dentro de nuestro archivo
	require_once('lib/nusoap.php');
	
	//creamos la instancia al cliente
	$client = new nusoap_client('http://estudiamas.com.mx/wservicetest/Service.asmx?wsdl',true);

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$comentario = $_POST['comentario'];
	
	/*$nombre = "Roberto Alfonso Barrientos Balbuena";
	$email = "roberto@some.mx";
	$telefono = "4424361112";
	$comentario = "Esto es una prueba con nusoap";	*/
	
	
	
	
	
	$mensaje = "
	<html>
		<head>
			<title>Contacto Estudia+</title>
		</head>
		<body>
			<p>Estos son los datos del contacto:</p>
			<br />
			<p>Nombre del contacto: ".$nombre."</p>
			<p>E-mail: ".$email."</p>
			<p>Teléfono: ".$telefono."</p>
			<p>Mensaje: ".$comentario."</p>
		</body>
	</html>
	";
	
		
	//checamos para un posible error
	$err = $client->getError();
	
	if($err){
		//mostramos el error
		echo '<h2> Constructor error </h2><pre>'.$err.'</pre>';
			
	}
	
	$parametros = array("emailTO"=>"comunicate@estudiamas.com.mx","emailCCP"=>"roberto@some.mx","Asunto"=>"Contacto Estudia+","Mensaje"=>$mensaje,"isHTML"=>true);
	
	/*$result = */$client->call('SendSimpleMail',$parametros);
	
	/*if($client->fault){
		echo '<h2>Fault</h2><pre>';
		print_r($result);
		echo '</pre>';
	} 
	else{
		// Check for errors
		$err = $client->getError();
		if($err){
			// Display the error
			echo '<h2>Error</h2><pre>'.$err.'</pre>';
		} 
		else{
			// Display the result
			echo '<h2>Result</h2><pre>';
			print_r($result);
			echo '</pre>';
		}
	}
	
	echo '<h2>Request</h2>';
	echo '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
	echo '<h2>Response</h2>';
	echo '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';
	// Display the debug messages
	echo '<h2>Debug</h2>';
	echo '<pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';*/
	
	header('Location: index.php');
	
	
}
?>