<?php 
if(!isset($_POST['enviarf']))
{
	header('Location: error.html');

}
else
{
	//require_once('phpmailer/class.phpmailer.php');
	
	//$mail = new PHPMailer();
		
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$comentario = $_POST['comentario'];
	
	
	/*$mensaje = '
	<html>
		<head>
			<title>Contacto Estudia+</title>
		</head>
		<body>
			<p>Estos son los datos del contacto:</p>
			<br />
			<p>Nombre del contacto: '.$nombre.'</p>
			<p>E-mail: '.$email.'</p>
			<p>Teléfono: '.$telefono.'</p>
			<p>Mensaje: '.$comentario.'</p>
		</body>
	</html>
	';*/
	/*$mensaje = eregi_replace("[\]",'',$mensaje);
	
	$mail->IsSMTP();
	
	try{
	$mail->Host = "estudiamas.com.mx";
	$mail->SMTPDebug = 2;
	
	//(for testing)
	$mail->SMTPAuth = true;
	$mail->SMTPKeepAlive = true;
	$mail->Host = "estudiamas.com.mx";
	$mail->Port = 587;	
	
	//server
	$mail->Username = "comunicate@estudiamas.com.mx";
	$mail->Password = "com9540n";
	
	$mail->SetFrom('roberto@some.mx', 'Roberto Barrientos');
	$mail->Subject = 'Contacto Estudia+';
	
	$mail->AltBody = "Para poder visualizar este email es necesario que tengas activo HTML!";
	$mail->MsgHTML($mensaje);
	$mail->Send();
	//echo "Message Sent OK<p></p>\n";
	
	
	}
	catch(phpmailerException $e){
		echo $e->errorMessage();
	}
	catch(Exception $e){
		echo $e->getMessage();
	}*/
	
	//destinatarios
	$para = 'roberto@some.mx';
	
	//subject
	$titulo = 'Contacto Estudia+';
	
	
	//mensaje
	$mensaje = '
	<html>
		<head>
			<title>Contacto Estudia+</title>
		</head>
		<body>
			<p>Estos son los datos del contacto:</p>
			<br />
			<p>Nombre del contacto: '.$nombre.'</p>
			<p>E-mail: '.$email.'</p>
			<p>Teléfono: '.$telefono.'</p>
			<p>Mensaje: '.$comentario.'</p>
		</body>
	</html>
	';
	
	// Para enviar un correo HTML mail, la cabecera Content-type debe fijarse
	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Cabeceras adicionales
	$cabeceras .= 'To: Karina Ortiz <karina@some.mx>'."\r\n";
	$cabeceras .= 'From: '.$nombre.' <'.$email.'>' . "\r\n";
    $cabeceras .= 'Cc: roberto@some.mx' . "\r\n";
	$cabeceras .= 'Bcc: barrientos.isc@gmail.com' . "\r\n";

	// Mail it
	mail($para, $titulo, $mensaje, $cabeceras);
	
	header('Location: index.php');
}

?>