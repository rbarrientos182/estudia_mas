<?php 
if (!isset($_SESSION)) 
{
	session_start();
}

if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}
require_once("php/clases/class.SQLSErver.php");
$db = new SQLServer();
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Dashboard</title>
<!-- stylesheets -->
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/ui/jquery-ui-1.8.13.custom.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/elfinder.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/Sourcerer-1.2.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/chosen.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/uniform.default.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/data-table.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/fullcalendar.css" media="screen"/>
<link rel="stylesheet" href="css/colorpicker.css" type="text/css" media="screen"/>
<!-- Jquery -->
<script src="js/jquery-1.6.2.min.js"></script>
<script src="js/jquery-ui-1.8.16.custom.js"></script>
<script src="js/tiny_mce/jquery.tinymce.js"></script>
<script src="js/chosen.jquery.js"></script>
<script src="js/jquery.raty.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/jquery.cookie.js"></script>
<script src="js/fileuploader.js"></script>
<script src="js/fullcalendar.min.js"></script>
<script src="js/Sourcerer-1.2.js"></script>
<script src="js/jquery.tipTip.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="js/jquery.accordion.js"></script>
<script src="js/jquery.collapsible.js"></script>
<script src="js/jquery.treeview.js"></script>
<script src="js/elfinder.min.js"></script>
<!--[if lte IE 8]><script src="js/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/eye.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<script type="text/javascript" src="js/layout.js"></script>
<script type="text/javascript" src="js/jquery.notify.js"></script>
<script type="text/javascript" src="js/jquery.simplemodal.js"></script>
<script type="text/javascript" src="js/jquery.jBreadCrumb.1.1.js"></script>
<script type="text/javascript" src="js/iphone-style-checkboxes.js"></script>
<script src="js/custom.script.js"></script>
</head>
<body>
<div id="panel-right" class="panel-close">
	<span class="right-toggle" title="Shortcut">&nbsp;</span>
	<ul class="shortcut-panel">
		<li><a href="dashboard.php" title="Dashboard"><span class="shortcut-icon dboard-x-icon"></span></a></li>
		<li><a href="#" title="Form"><span class="shortcut-icon frm-x-element"></span></a></li>
		<li><a href="#" title="Chart"><span class="shortcut-icon chart-x-icon"></span></a></li>
		<li><a href="#" title="Table"><span class="shortcut-icon tbl-x-icon"></span></a></li>
		<li><a href="#" title="Gallery"><span class="shortcut-icon gal-x-icon"></span></a></li>
		<li><a href="#" title="Typography"><span class="shortcut-icon typo-x-icon"></span></a></li>
		<li><a href="#" title="UI Elements"><span class="shortcut-icon ui-x-elements"></span></a></li>
		<li><a href="#" title="Calendar"><span class="shortcut-icon calendar-x-icon"></span></a></li>
	</ul>
</div>
<div id="wrapper">
	<div id="header">
		<div id="logo" class="droptips">
			<a href="#" title="Admin Panel"><img src="images/logo.png" width="190" height="58" alt="Admin Panel"></a>
		</div>
		<div id="topbar">
			<!--<div class="search-box">
				<form action="#" method="post">
					<input name="searchtext" class="search-text" type="text">
					<input name="searchbtn" type="submit" class="search-button">
				</form>
			</div>
			<ul class="notify-button">
				<li class="notify-alert"><a href="#"><span class="new-alert">30</span></a></li>
				<li class="msg-alert"><a href="#"><span class="new-alert">65</span></a></li>
			</ul>-->
		</div>
		<div id="usermenu">
			<a href="#" class="admin-user"><span class="mnu-indicator"></span>Administrator<span class="user-icon"></span></a>
			<div class="sub-menu">
				<ul>
					<li><a href="usuarios.php"><span class="icon-block-black cog-b"></span>Configuración de la Cuenta</a></li>
					<!--<li><a href="#"><span class="icon-block-black info-about-b"></span>Help?</a></li>
					<li><a href="#"><span class="icon-block-black box-incoming-b"></span>Inbox</a></li>-->
					<li><a href="logout.php"><span class="icon-block-black locked-tw-b"></span>Salir</a></li>
				</ul>
				<div class="admin-thumb">
					<img src="images/user-thumb1.png" alt="user" width="50" height="50"><span><a href="#" class="p-edit">Edit&nbsp;Profile</a></span>
				</div>
			</div>
		</div>
	</div>
	<div id="shortcur-bar" class="column">
		<ul>
			<li><a href="dashboard.php"><span class="sc-icon dashboard"></span> Inicio </a></li>
			<!--<li><a href="#"><span class="sc-icon settings"></span> Settings </a></li>
			<li><a href="#"><span class="sc-icon satistics"></span> Statistics</a></li>-->
			<li><a href="usuarios.php"><span class="sc-icon userlist"></span> Usuarios </a></li>
			<!--<li><a href="#"><span class="sc-icon tasklist"></span> Task List </a></li>
			<li><a href="#"><span class="sc-icon content-c"></span> Content </a></li>
			<li><a href="#"><span class="sc-icon reports-c"></span> Reports </a></li>
			<li><a href="#"><span class="sc-icon medialibrary"></span> Media Library </a></li>-->
		</ul>
	</div>
	<div id="container">
		<div id="sidebar">
			<ul id="sidenav" class="menu collapsible">
				<li><a href="dashboard.php"><span class="nav-icon dboard-icon"></span> Inicio </a></li>
				<li><a href="#" class="active"><span class="nav-icon frm-element"></span> Administrador<span class="n-count">1</span><span class="active-nidicator">&nbsp;</span></a>
				<ul class="acitem">
					<li><a href="usuarios.php"><span class="list-icon">&nbsp;</span>Usuarios</a></li>
					<!--<li><a href="form-toplabel.html"><span class="list-icon">&nbsp;</span>Top Label Form</a></li>
					<li><a href="content-page-form.html"><span class="list-icon">&nbsp;</span>Post Form</a></li>-->
				</ul>
				</li>
                <li><a href="#" class="active"><span class="nav-icon frm-element"></span> Cliente <span class="n-count">4</span><span class="active-nidicator">&nbsp;</span></a>
				<ul class="acitem">
                	<li><a href="estados.php"><span class="list-icon">&nbsp;</span>Estados</a></li>
                    <li><a href="universidades.php"><span class="list-icon">&nbsp;</span>Universidades</a></li>
                    <li><a href="programas.php"><span class="list-icon">&nbsp;</span>Programas</a></li>
                    <li><a href="programas_universidades.php"><span class="list-icon">&nbsp;</span>Programas Universidades</a></li>
					<!--<li><a href="form-leftlabel.html"><span class="list-icon">&nbsp;</span> Left Label Form</a></li>
					<li><a href="form-toplabel.html"><span class="list-icon">&nbsp;</span>Top Label Form</a></li>
					<li><a href="content-page-form.html"><span class="list-icon">&nbsp;</span>Post Form</a></li>-->
				</ul>
				</li>
				<!--<li><a href="chart.html"><span class="nav-icon chart-icon"></span> Charts</a></li>
				<li><a href="tables.html"><span class="nav-icon tbl-icon"></span> Tables</a></li>
				<li><a href="gallery.html"><span class="nav-icon gal-icon"></span> Gallery</a></li>
				<li><a href="typography.html"><span class="nav-icon typo-icon"></span> Typography</a></li>
				<li><a href="user-interface-elements.html"><span class="nav-icon ui-elements"></span> All Interface Elements</a></li>
				<li><a href="calendar.html"><span class="nav-icon calendar-icon"></span> Calendar</a></li>
				<li><a href="editor.html"><span class="nav-icon editor-icon"></span> Editor</a></li>
				<li><a href="file-explorer.html"><span class="nav-icon file-exe"></span> File Explorer</a></li>
				<li><a href="all-widgets.html"><span class="nav-icon widget-icon"></span> All Widgets</a></li>
				<li><a href="404.html"><span class="nav-icon err-icon"></span> 404 Error Page</a></li>
				<li><a href="buttons-icons.html"><span class="nav-icon btns-icons"></span> All Buttons and Icons</a></li>
				<li><a href="invoice.html"><span class="nav-icon invoice-icon"></span> Invoice</a></li>-->
			</ul>
		</div>
		<div id="content">
			<div class="container_12">
				<div class="widget-panel grid_12">
					<div class="widget-top">
						<h4>Agregar Universidad</h4>
					</div>
					<div class="widget-content module">
						<div class="form-grid">
                        	<ul class="icons-labeled-less">
                        	  <li><a href="universidades.php" title=".cross-c"><span class="icon-block-color application-view-list-c"></span>Ir a Universidades</a></li></ul>
							<form method="post" name="form1" id="form1" class="topLabel" action="guardar_universidad.php">
								<ul>
                                	<li>
										<label class="fldTitle">Ciudad<abbr title="Required Field" class="require">*</abbr></label>
									    <div class ="fieldwrap">
                                        <?php $consulta = "SELECT idestado, estado FROM estado WHERE estatus = 1 ORDER BY estado";
											  $resultado = $db->consulta($consulta);
											  $row = $db->fetch_assoc($resultado);
										?>
											<select tabindex="11" id="idestado" name="idestado">
												<?php
												 	do{
												 ?>
                                                		<option value="<?php echo $row['idestado'];?>"><?php echo utf8_encode($row['estado']);?></option>		
												<?php 
													}while($row = $db->fetch_assoc($resultado));
												?>
											</select>
									  	</div>
									</li>
									<li>
									  <label class="fldTitle">Universidad<abbr title="Required Field" class="require">*</abbr></label>
									  <div class ="fieldwrap">
										<input id="nombre" name="nombre" class="large textips" title="This is a textbox" type="text" maxlength="255" tabindex="1" required/>
									</div>
									</li>
									<li class="buttons bottom-round noboder">
									<div class ="fieldwrap">
										<input name="" value="Limpiar Formulario" type="reset" class="submit-button"> <input name="" type="submit" value="Guardar" class="submit-button">
									</div>
									</li>
								</ul>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer-wrap">
	<div id="footer">
		<div class="footer-container">
			<div class="footer-nav">
				<!--<ul>
					<li><a href="fa_usuarios"><span class="footer-button new-user"></span>Nuevo Usuario<span class="user-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-order"></span>Nueva Orden <span class="task-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-task"></span>Nueva Tarea <span class="task-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button open-tickets"></span>Abrir Tickets <span class="ticket-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-comments "></span>Nuevos Comentarios <span class="zero-count">0</span></a></li>
				</ul>-->
			</div>
			<div class="copyright">
				 &copy; 2013 Ziown Admin Panel. All rights reserved
			</div>
		</div>
		<div id="goTop">
			<a href="#" class="tip-top" title="Go Top">Top</a>
		</div>
	</div>
</div>
</body>
</html>