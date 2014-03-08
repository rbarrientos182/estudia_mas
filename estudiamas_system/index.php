<?php 
if (!isset($_SESSION)) 
{
	session_start();
}

if(isset($_SESSION['usuario']))
{
	header('Location: dashboard.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Sistema Administrativo</title>
<!-- stylesheets -->
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/ui/jquery-ui-1.8.13.custom.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/uniform.default.css" type="text/css" media="screen"/>
<!--<link rel="stylesheet" href="css/jquery.noty.css" type="text/css" media="screen"/>-->
<!-- Jquery -->
<script src="js/jquery-1.6.2.min.js"></script>
<script src="js/jquery-ui-1.8.16.custom.js"></script>
<script src="js/sistema/login.js"></script>
</head>
<body>
<div id="login-wrapper">
  <div id="d_aviso" style="display:none">
  </div>
  <div id="login-header" class="top-round">
		<div class="login-left">
			<span class="icon-wrap-lb-less"><span class="icon-block-black key-tw-b"></span>Area Administrativa</span>
	  </div>
		<div class="login-right">
			<a href="#" title="Admin Panel"><img src="images/logo-login.png" width="142" height="58" alt="Admin Panel"></a>
		</div>
	</div>
	<div class="login-box bottom-round">
		<form  method="POST">
			<ul>
				<li>
				  <label>Usuario</label>
                  <input name="usuario" type="text" placeholder="Nombre del usuario" class="login-text-box" id="usuario">
                </li>
				
                <li>
				  <label>Clave</label>
                  <input name="clave" type="password" placeholder="Clave" class="login-text-box usr" id="clave">
               </li>
				
                <li>
                  <label>&nbsp;</label>
                  <input name="btn_ingresar" type="button" class="submit-button-login" id="btn_ingresar" value="Ingresar">
                  <input name="" type="Submit" class="submit-button-login pass" value="Cancelar">
                </li>
				
                <li>
                <label>&nbsp;</label>
                   <span class="rem-check">
                     <input name="check_guardar" type="checkbox" id="check_guardar">
				   </span>
                   <span class="rem-text">
                      Recuerdame
                   </span>
                </li>
			</ul>
		</form>
	</div>
</div>
<div id="footer-wrap">
	<div id="footer">
		<div class="login-footer-container">
			 &copy; 2013 Sistema Administrativo. Todos los derechos reservados
		</div>
	</div>
</div>
</body>
</html>