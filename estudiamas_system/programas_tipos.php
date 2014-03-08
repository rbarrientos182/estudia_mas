<?php 
if (!isset($_SESSION)) 
{
	session_start();
}

if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}
require_once('php/clases/class.SQLServer.php');

$db = new SQLServer();

$iduniversidad = $_GET['iduniversidad'];


$consulta = "SELECT p.programas,
					p.idprogramas,
					phu.id,  
					CASE phu.estatus 
					WHEN '0' THEN 'Desactivo'
					WHEN '1' THEN 'Activo' END AS estatus_pr,
					CASE phu.online
					WHEN '0' THEN 'Offline'
					WHEN '1' THEN 'Online' END AS online_est,
					CASE phu.tipo
					WHEN '0' THEN 'Licenciatura' 
					WHEN '1' THEN 'Maestría'
					WHEN '2' THEN 'Curso / Diplomado'
					WHEN '3' THEN 'Especialidad'
					WHEN '4' THEN 'En Línea' END AS tipo_programa
					FROM programas_has_universidad phu, programas p WHERE phu.iduniversidad = $iduniversidad AND p.idprogramas = phu.idprogramas ORDER BY tipo_programa,p.programas";
$consulta2 = $consulta;
$resultado = $db->consulta($consulta);
$resultado2 = $db->consulta($consulta2);
$row = $db->fetch_assoc($resultado);
$row2 = $db->fetch_assoc($resultado2);
$numRow = $db->num_rows($resultado2);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Checkbox</title>
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
			<a href="#" class="admin-user"><span class="mnu-indicator"></span>Administrador<span class="user-icon"></span></a>
			<div class="sub-menu">
				<ul>
					<li><a href="usuarios.php"><span class="icon-block-black cog-b"></span>Configuración de la Cuenta</a></li>
					<!--<li><a href="#"><span class="icon-block-black info-about-b"></span>¿Ayuda?</a></li>
					<li><a href="#"><span class="icon-block-black box-incoming-b"></span>Inbox</a></li>-->
					<li><a href="logout.php"><span class="icon-block-black locked-tw-b"></span>Salir</a></li>
				</ul>
				<!--<div class="admin-thumb">
					<img src="images/user-thumb1.png" alt="user" width="50" height="50"><span><a href="#" class="p-edit">Edit&nbsp;Profile</a></span>
				</div>-->
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
				<li><a href="dashboard.php"><span class="nav-icon dboard-icon"></span> Inicio</a></li>
				<li><a href="#"><span class="nav-icon frm-element"></span> Administrador<span class="n-count">1</span></a>
				<ul class="acitem">
					<li><a href="usuarios.php"><span class="list-icon">&nbsp;</span>Usuarios</a></li>
					<!--<li><a href="form-toplabel.html"><span class="list-icon">&nbsp;</span>Top Label Form</a></li>
					<li><a href="content-page-form.html"><span class="list-icon">&nbsp;</span>Post Form</a></li>-->
				</ul>
				</li>
                <li><a href="#"><span class="nav-icon frm-element"></span>Cliente<span class="n-count">4</span></a>
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
				<li><a href="tables.html" class="active"><span class="nav-icon tbl-icon"></span> Tables<span class="active-nidicator">&nbsp;</span></a></li>
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
						<h4> Programas Estatus</h4>
					</div>
					<div class="widget-content module">
					  <table>
					  <thead>
                      	<tr>
					      <th colspan="4" align="right"> <ul class="icons-labeled-less">
					       <li><a href="programas_universidades.php" title=".cross-c"><span class="icon-block-color application-view-list-c"></span>Ir a Programas Universidades</a></li>
					        </ul>
				          </th>
				        </tr>
					    <tr>
					      <th width="52%" style="text-align:justify"><form method="post" name="form1" id="form1" action="agregar_programa_universidad.php" class="topLabel">
					        <table class="display data-grid">
					          <thead>
					            <tr>
					              <th colspan="4" style="text-align:left"> <?php 
								$consulta3 = "SELECT nombre FROM universidad WHERE iduniversidad = $iduniversidad";
								$resultado3 = $db->consulta($consulta3);
								$row3 = $db->fetch_assoc($resultado3);
								
								echo 'Universidad: '.utf8_encode($row3['nombre']);
								?>
				                  </th>
				                </tr>
					            <tr>
					              <th colspan="1" style="text-align:right">Agregar Carrera:</th>
					              <th  colspan="3" style="text-align:justify">
                                  <input type="hidden" name="iduniversidad" id="iduniversidad" value="<?php echo $iduniversidad?>">
                                   <select id="idprogramas" name="idprogramas" class="chzn-select">
					                <?php 
										$consulta4 = "SELECT idprogramas, programas FROM programas WHERE estatus = 1 ORDER BY programas";
										$resultado4 = $db->consulta($consulta4);
										$row4 = $db->fetch_assoc($resultado4);
										do{
									?>
                                    
					                <option value="<?php echo $row4['idprogramas']?>"><?php echo utf8_encode($row4['programas']);?></option>
					                <?php 
										}while($row4 = $db->fetch_assoc($resultado4));
									?>
					                </select>
					                <br>
					                <br>
					                <select id="combobox" name="tipo">
					                  <option value="0">Licenciatura</option>
					                  <option value="1">Maestría</option>
					                  <option value="2">Curso/Diplomado</option>
					                  <option value="4">En Línea</option>
				                    </select>
					                <input type="submit" name="bAgregar" id="bAgregar" value="Agregar Programa" class="submit-button">
				                  </th>
				                </tr>
					            <tr>
					              <th width="16%" class="center">Programa</th>
					              <th width="10%" class="center">Tipo</th>
					              <th width="22%" class="center">Estatus</th>
					              <th class="center">Acción</th>
				                </tr>
				              </thead>
					          <tbody>
					            <?php 
						do
						{
							$tipo = NULL;
							if($row['estatus_pr']=='Activo')
							{
								$tipo = 'label l-new';
							}
							else
							{
								$tipo = 'label l-suspend';
							}
						?>
					            <tr>
					              <td><?php echo utf8_encode($row['programas']);?></td>
					              <td><?php echo $row['tipo_programa'];?></td>
					              <td><span class="<?php echo $tipo; ?>"><?php echo $row['estatus_pr'];?></span></td>
					              <td><span><a class="action-icons c-edit" href="fm_programas_tipos.php?id=<?php echo $row['id']?>&iduniversidad=<?php echo $iduniversidad; ?>" title="Editar">Editar</a></span> <span><a class="action-icons c-delete" href="borrar_programas_tipos.php?id=<?php echo $row['id'];?>&iduniversidad=<?php echo $iduniversidad; ?>" title="Borrar">Borrar</a></span> <span><a class="action-icons c-approve" href="activar_des_programas_tipos.php?id=<?php echo $row['id'];?>&estatus=1&iduniversidad=<?php echo $iduniversidad;?>" title="Activar">Activar</a></span> <span><a class="action-icons c-suspend" href="activar_des_programas_tipos.php?id=<?php echo $row['id'];?>&estatus=0&iduniversidad=<?php echo $iduniversidad;?>"title="Desactivar">Desactivar</a></span></td>
				                </tr>
					            <?php 
						}while($row = $db->fetch_assoc($resultado));
						  ?>
				              </tbody>
					          <tfoot>
					            <tr>
					              <th class="center">Programa</th>
					              <th class="center">Tipo</th>
					              <th class="center">Estatus</th>
					              <th class="center">Acción</th>
				                </tr>
				              </tfoot>
				            </table>
					      </form></th>
				        </tr>
					  </thead>
					  </table>
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
					<li><a href="fa_usuarios.php"><span class="footer-button new-user"></span>Nuevo Usuario <span class="user-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-order"></span>New Order <span class="task-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-task"></span>New Task <span class="task-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button open-tickets"></span>Open Tickets <span class="ticket-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-comments "></span>New Comments <span class="zero-count">0</span></a></li>
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