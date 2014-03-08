<?php 
if (!isset($_SESSION)) 
{
	session_start();
}

if(!isset($_SESSION['usuario']))
{
	header('Location: index.php');
}
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
		<li><a href="#" title="Formulario"><span class="shortcut-icon frm-x-element"></span></a></li>
		<li><a href="#" title="Gráfica"><span class="shortcut-icon chart-x-icon"></span></a></li>
		<li><a href="#" title="Tabla"><span class="shortcut-icon tbl-x-icon"></span></a></li>
		<li><a href="#" title="Galería"><span class="shortcut-icon gal-x-icon"></span></a></li>
		<li><a href="#" title="Tipografía"><span class="shortcut-icon typo-x-icon"></span></a></li>
		<li><a href="#" title="Elementos UI"><span class="shortcut-icon ui-x-elements"></span></a></li>
		<li><a href="#" title="Calendario"><span class="shortcut-icon calendar-x-icon"></span></a></li>
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
			</div>-->
			<!--<ul class="notify-button">
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
					<img src="images/user-thumb1.png" alt="user" width="50" height="50"><span><a href="#" class="p-edit">Editar Perfil</a></span>
				</div>-->
			</div>
		</div>
	</div>
	<div id="shortcur-bar">
		<ul>
			<li><a href="dashboard.php"><span class="sc-icon dashboard"></span> Inicio </a></li>
			<!--<li><a href="#"><span class="sc-icon settings"></span> Configuración </a></li>
			<li><a href="#"><span class="sc-icon satistics"></span> Estadística</a></li>-->
			<li><a href="usuarios.php"><span class="sc-icon userlist"></span> Usuarios </a></li>
			<!--<li><a href="#"><span class="sc-icon tasklist"></span> Tareas </a></li>
			<li><a href="#"><span class="sc-icon content-c"></span> Contenido </a></li>
			<li><a href="#"><span class="sc-icon reports-c"></span> Reportes </a></li>
			<li><a href="#"><span class="sc-icon medialibrary"></span> Multimedia </a></li>-->
		</ul>
	</div>
	<div id="container">
		<div id="sidebar">
			<ul id="sidenav" class="menu collapsible">
				<li><a href="dashboard.php" class="active"><span class="nav-icon dboard-icon"></span>Inicio<span class="active-nidicator">&nbsp;</span></a></li>
				<li><a href="#"><span class="nav-icon frm-element"></span>Administrador<span class="n-count">1</span></a>
				<ul class="acitem">
					<li><a href="usuarios.php"><span class="list-icon">&nbsp;</span>Usuarios</a></li>
					<!--<li><a href="form-toplabel.html"><span class="list-icon">&nbsp;</span>Top Label Form</a></li>
					<li><a href="content-page-form.html"><span class="list-icon">&nbsp;</span>Post Form</a></li>-->
				</ul>
				</li>
                <li><a href="#"><span class="nav-icon frm-element"></span>Catálogos<span class="n-count">4</span></a>
				<ul class="acitem">
					<li><a href="estados.php"><span class="list-icon">&nbsp;</span>Estados</a></li>
                    <li><a href="universidades.php"><span class="list-icon">&nbsp;</span>Universidades</a></li>
                    <li><a href="programas.php"><span class="list-icon">&nbsp;</span>Programas</a></li>
                     <li><a href="programas_universidades.php"><span class="list-icon">&nbsp;</span>Programas Universidades</a></li>
                    <!--<li><a href="form-.html"><span class="list-icon">&nbsp;</span> Left Label Form</a></li>
					<li><a href="form-toplabel.html"><span class="list-icon">&nbsp;</span>Top Label Form</a></li>
					<li><a href="content-page-form.html"><span class="list-icon">&nbsp;</span>Post Form</a></li>-->
				</ul>
				</li>
				<!--<li><a href="chart.html"><span class="nav-icon chart-icon"></span>Cliente</a></li>
				<li><a href="tables.html"><span class="nav-icon tbl-icon"></span> Tablas</a></li>
				<li><a href="gallery.html"><span class="nav-icon gal-icon"></span> Galería</a></li>
				<li><a href="typography.html"><span class="nav-icon typo-icon"></span> Tipografía</a></li>
				<li><a href="user-interface-elements.html"><span class="nav-icon ui-elements"></span> Todos los elementos de la interfaz</a></li>
				<li><a href="calendar.html"><span class="nav-icon calendar-icon"></span> Calendario</a></li>
				<li><a href="editor.html"><span class="nav-icon editor-icon"></span> Editor</a></li>
				<li><a href="file-explorer.html"><span class="nav-icon file-exe"></span> Explorador de Archivos</a></li>
				<li><a href="all-widgets.html"><span class="nav-icon widget-icon"></span> Widgets</a></li>
				<li><a href="404.html"><span class="nav-icon err-icon"></span> 404 Error Page</a></li>
				<li><a href="buttons-icons.html"><span class="nav-icon btns-icons"></span> Botones e Iconos </a></li>
				<li><a href="invoice.html"><span class="nav-icon invoice-icon"></span> Factura</a></li>-->
			</ul>
			<!--<ul id="accordion-nav">
				<li><a class="head" href="#">Administrador</a>
				<ul>
					<li><a href="#">Electric<span class="current-indicator"></span></a></li>
					<li><a href="#">Acoustic<span class="current-indicator"></span></a></li>
					<li><a href="#">Amps<span class="current-indicator"></span></a></li>
					<li><a href="#">Effects A<span class="current-indicator"></span></a></li>
					<li><a href="#">Effects B<span class="current-indicator"></span></a></li>
					<li><a href="#">Effects C<span class="current-indicator"></span></a></li>
					<li><a href="#">Effects D<span class="current-indicator"></span></a></li>
					<li><a href="#">Accessories<span class="current-indicator"></span></a></li>
				</ul>
				</li>
				<li><a class="head" href="#">Bass</a>
				<ul>
					<li><a href="#">Electric</a></li>
					<li><a href="#">Acoustic</a></li>
					<li><a href="#">Amps</a></li>
					<li><a href="#">Effects</a></li>
					<li><a href="#">Accessories</a></li>
				</ul>
				</li>
				<li><a class="head" href="#">Drums</a>
				<ul>
					<li><a href="#">Acoustic Drums</a></li>
					<li><a href="#">Electronic Drums</a></li>
					<li><a href="#">Cymbals</a></li>
					<li><a href="#">Hardware</a></li>
					<li><a href="#">Accessories</a></li>
				</ul>
				</li>
			</ul>-->
			<!--<div id="sidetree">
				<div class="treeheader">
					 Tree View
				</div>
				<div id="sidetreecontrol">
					<a href="?#">Collapse All</a> | <a href="?#">Expand All</a>
				</div>
				<ul class="treeview" id="tree">
					<li class="expandable">
					<div class="hitarea expandable-hitarea">
					</div>
					<a href="#">Home</a>
					<ul style="display:none;">
						<li><a href="#">Airdrie eNewsletters </a></li>
						<li><a href="#">Airdrie Directories</a></li>
						<li><a href="#">Airdrie Life Video</a></li>
						<li><a href="#">Airdrie News</a></li>
						<li><a href="#">Airdrie Quick Links</a></li>
						<li><a href="#" target="_blank">Airdrie Weather</a></li>
						<li><a href="#">Careers</a> | <a href="#">Contact Us</a> | <a href="#">Site Map</a> | <a href="#">Links</a></li>
						<li class="last"><a href="#">Special Notices</a></li>
					</ul>
					</li>
					<li class="expandable">
					<div class="hitarea expandable-hitarea">
					</div>
					<span>City Services</span>
					<ul style="display: none;">
						<li class="expandable">
						<div class="hitarea expandable-hitarea">
						</div>
						<a href="#">Assessment</a>
						<ul style="display: none;">
							<li><a href="#">Assessment FAQs</a></li>
							<li><a href="#">2007 Property Assessment Notices</a></li>
							<li><a href="#" target="_blank">CREB</a></li>
							<li><a href="#">Non-Residential Assessment / Tax Comparisons</a></li>
							<li><a href="#">How to File a Complaint</a></li>
							<li class="last"><a href="#">Supplementary Assessment and Tax</a></li>
						</ul>
						</li>
						<li class="expandable">
						<div class="hitarea expandable-hitarea">
						</div>
						<a href="#">Building &amp; Development </a>
						<ul style="display: none;">
							<li class="expandable">
							<div class="hitarea expandable-hitarea">
							</div>
							<a href="#">Building Inspections</a>
							<ul style="display: none;">
								<li><a href="#">Builder Forums</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Contractor Notices</a></li>
								<li class="last"><a href="#">Inspector Guidelines</a></li>
							</ul>
							</li>
							<li class="last"><a href="#">Services</a></li>
						</ul>
						</li>
						<li class="last"><a href="#">Services</a></li>
					</ul>
					</li>
					<li class="last"><a href="#">Online Services</a></li>
				</ul>
			</div>-->
		</div>
		<!--<div id="content">
			<div class="container_12">
				<div class="widget-panel grid_12">
					<div class="widget-top">
						<h4>Chart</h4>
					</div>
					<div class="widget-content module">
						<div id="placeholder" class="main-graph">
						</div>
					</div>
				</div>
				<div class="grid_6">
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Recent Post</h4>
							<span class="w-count"><a href="#" title="View All">13</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block">
								<ul class="recent-post">
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="article-post">
										<span class="user-info"> By: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a><span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-publish" href="#">Publish</a></span>
										</p>
									</div>
									</li>
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="article-post">
										<span class="user-info"> By: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a><span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-publish" href="#">Publish</a></span>
										</p>
									</div>
									</li>
									<li class="noboder">
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="article-post">
										<span class="user-info"> By: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a><span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-publish" href="#">Publish</a></span>
										</p>
									</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Site Statistics</h4>
							<span class="w-count"><a href="#" title="View All">154 visited</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block tbl-default">
								<table>
								<thead>
								<tr>
									<th>
										 Description
									</th>
									<th>
										 Count
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 New Visitors
									</td>
									<td class="stat-count">
										<b>100</b>
									</td>
								</tr>
								<tr>
									<td>
										 Unique Visitors
									</td>
									<td class="stat-count">
										<b>120</b>
									</td>
								</tr>
								<tr>
									<td>
										 Today's Earnig
									</td>
									<td class="stat-count">
										<b>$2,450</b>
									</td>
								</tr>
								<tr>
									<td class="noboderB">
										 New Visit
									</td>
									<td class="noboderB stat-count">
										<b>96.23%</b>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Recent Users</h4>
							<span class="w-count"><a href="#" title="View All">150</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block">
								<ul class="recent-user">
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="users-list">
										<span>Name: <i><a href="#">Jhon Doe</a></i></span><span>IP: 186.125.47.1</span><span>User Type: Unpaid, <i>Package Name:</i><b>Basic</b></span>
									</div>
									<span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-approve" href="#">Approve</a></span></li>
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="users-list">
										<span>Name: <i><a href="#">Jhon Peter</a></i></span><span>IP: 186.125.47.102 Date: 1st Jan 2012</span><span>User Type: Paid, <i>Package Name:</i><b>Silver</b></span>
									</div>
									<span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-approve" href="#">Approve</a></span></li>
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="users-list">
										<span>Name: <i><a href="#">Zara Zarin</a></i></span><span>IP: 194.132.12.1 Date: 13th Jan 2012</span><span>User Type: Paid, <i>Package Name:</i><b>Gold</b></span>
									</div>
									<span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-approve" href="#">Approve</a></span></li>
									<li class="noboder">
									<div class="user-thumb">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="users-list">
										<span>Name: <i><a href="#">Saima Khan</a></i></span><span>IP: 194.132.12.1 Date: 13th Jan 2012</span><span>User Type: Paid, <i>Package Name:</i><b>Platinum</b></span>
									</div>
									<span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-approve" href="#">Approve</a></span></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-content module">
							<div class="tabBlock">
								<div class="widget-top">
									<ul class="mytabs">
										<li><a href="#tab1">Active Tab</a></li>
										<li><a href="#tab2">Tab2</a></li>
										<li><a href="#tab3">Tab3</a></li>
										<li><a href="#tab4">Tab4</a></li>
									</ul>
								</div>
								<div class="mytabContainer">
									<div id="tab1" class="tab-block">
										<div class="tab-content">
											<h5>Lorem ipsum dolor sit amet</h5>
											<p>
												 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non mauris quis odio imperdiet elementum. Curabitur sollicitudin ligula eget nisl convallis righthoncus. Aenean iaculis nulla in velit malesuada nec venenatis elit lacinia. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
											</p>
										</div>
									</div>
									<div id="tab2" class="tab-block">
										<div class="tab-content">
											<h5>Donec cursus fermentum mi vel tempus</h5>
											<p>
												 Donec cursus fermentum mi vel tempus. Integer id dapibus ligula. Nulla facilisi. Quisque molestie dignissim tellus quis euismod. Nulla facilisi. Etiam ligula enim, hendrerit ac imperdiet egestas, laoreet nec velit. Aliquam imperdiet mollis diam, vel sollicitudin nisl ornare ut. Maecenas sed justo quis lectus vulputate vehicula id vitae justo.
											</p>
										</div>
									</div>
									<div id="tab3" class="tab-block">
										<div class="tab-content">
											<h5>Vestibulum dui lorem</h5>
											<p>
												 Vestibulum dui lorem, convallis at condimentum et, feugiat ac sapien. Phasellus leo orci, feugiat eget rhoncus in, porta vitae nisl. Ut erat velit, pretium eget porta id, convallis nec eros. Morbi gravida gravida mi non tincidunt. Aliquam iaculis, nisi eu vestibulum fringilla, velit metus fermentum justo, et scelerisque sem ligula eget arcu.
											</p>
										</div>
									</div>
									<div id="tab4" class="tab-block">
										<div class="tab-content">
											<h5>Mauris est turpis, mollis</h5>
											<p>
												 Mauris est turpis, mollis molestie luctus eu, faucibus sit amet nisl. Nullam ultrices elementum lectus, id porttitor urna scelerisque a. Nullam accumsan pulvinar fermentum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam ut nulla eu est laoreet aliquet id a orci.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="grid_6">
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Recent Comments</h4>
							<span class="w-count"><a href="#" title="View All">10</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block">
								<ul class="recent-comments">
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb.png" width="40" height="40" alt="User">
									</div>
									<div class="comments">
										<span class="user-info"> User: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a><span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-publish" href="#">Publish</a></span>
										</p>
									</div>
									</li>
									<li>
									<div class="user-thumb">
										<img src="images/user-thumb.png" width="40" height="40" alt="User">
									</div>
									<div class="comments">
										<span class="user-info"> User: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a><span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-publish" href="#">Publish</a></span>
										</p>
									</div>
									</li>
									<li class="noboder">
									<div class="user-thumb">
										<img src="images/user-thumb.png" width="40" height="40" alt="User">
									</div>
									<div class="comments">
										<span class="user-info"> User: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra...</a><span><a class="p-edit" href="#">Edit</a></span><span><a class="p-del" href="#">Delete</a></span><span><a class="p-publish" href="#">Publish</a></span>
										</p>
									</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Order List</h4>
							<span class="w-count"><a href="#" title="View All">20</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block tbl-default">
								<table>
								<thead>
								<tr>
									<th>
										 Order ID
									</th>
									<th>
										 Titile
									</th>
									<th>
										 Status
									</th>
									<th>
										 Amount
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 #36542
									</td>
									<td>
										 Gold Pack
									</td>
									<td>
										<span class="label l-pending">Pending</span>
									</td>
									<td>
										 $50/m
									</td>
								</tr>
								<tr>
									<td>
										 #38544
									</td>
									<td>
										 Silver Pack
									</td>
									<td>
										<span class="label l-success">Success</span>
									</td>
									<td>
										 $20/m
									</td>
								</tr>
								<tr>
									<td class="noboderB">
										 #39542
									</td>
									<td class="noboderB">
										 Platinum Pack
									</td>
									<td class="noboderB">
										<span class="label l-pending">Pending</span>
									</td>
									<td class="noboderB">
										 $80/m
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Support Tickets</h4>
							<span class="w-count"><a href="#" title="View All">18</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block">
								<ul class="recent-comments">
									<li>
									<div class="user-thumb-r">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="tickets">
										<span class="user-info"> User: kjaman on IP: 192.118.1.1 <b>ID #12467RS</b></span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra... </a><span class="pending"> Pending</span><span><a class="p-reply" href="#">Reply</a></span><span><a class="p-solve" href="#">Resolve</a></span>
										</p>
									</div>
									</li>
									<li>
									<div class="user-thumb-r">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="tickets">
										<span class="user-info"> User: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra... </a><span class="pending"> Pending</span><span><a class="p-reply" href="#">Reply</a></span><span><a class="p-solve" href="#">Resolve</a></span>
										</p>
									</div>
									</li>
									<li class="noboder">
									<div class="user-thumb-r">
										<img src="images/user-thumb1.png" width="40" height="40" alt="User">
									</div>
									<div class="tickets">
										<span class="user-info"> User: kjaman on IP: 192.118.1.1 </span>
										<p>
											<a href="#">Vivamus sed auctor nibh congue, ligula vitae tempus pharetra... </a><span class="pending"> Pending</span><span><a class="p-reply" href="#">Reply</a></span><span><a class="p-solve" href="#">Resolve</a></span>
										</p>
									</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-top">
							<h4>Task List</h4>
							<span class="w-count"><a href="#" title="View All">25</a></span>
						</div>
						<div class="widget-content module">
							<div class="content-block tbl-default">
								<table>
								<thead>
								<tr>
									<th>
										 ID
									</th>
									<th>
										 Title
									</th>
									<th>
										 Priority
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 #32
									</td>
									<td>
										<b>Vivamus sed auctor nibh congue, ligula</b>
									</td>
									<td>
										<span class="pending">High</span>
									</td>
								</tr>
								<tr>
									<td>
										 #38
									</td>
									<td>
										<b>Proin porttitor bibendum placerat.</b>
									</td>
									<td>
										<span class="confirmed">Medium</span>
									</td>
								</tr>
								<tr>
									<td class="noboderB">
										 #39
									</td>
									<td class="noboderB">
										<b>Lorem ipsum dolor sit amet.</b>
									</td>
									<td class="noboderB low">
										 Low
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-content module">
							<div class="accordion-basic" id="list-accordion">
								<a class="title">There is one obvious advantage:</a>
								<div>
									<p>
										 Ut interdum justo quis mauris malesuada rutrum. Curabitur enim augue, eleifend ac vehicula eget, elementum nec mauris. Aenean aliquam mi turpis.
									</p>
								</div>
								<a class="title">Now that you've got...</a>
								<div>
									<p>
										 Donec cursus fermentum mi vel tempus. Integer id dapibus ligula. Nulla facilisi. Quisque molestie dignissim tellus quis euismod. Nulla facilisi.
									</p>
								</div>
								<a class="title">Rent one bear, ...</a>
								<div>
									<p>
										 Mauris est turpis, <a href="#">mollis molestie</a> luctus eu, faucibus sit amet nisl. Nullam ultrices elementum lectus, id porttitor urna scelerisque a. Nullam accumsan pulvinar fermentum.
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="widget-panel">
						<div class="widget-top collapse-bar">
							<h4>Collapsible Widget</h4>
						</div>
						<div class="widget-content module">
							<div class="content-block tbl-default">
								<table>
								<thead>
								<tr>
									<th>
										 ID
									</th>
									<th>
										 Title
									</th>
									<th>
										 Priority
									</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td>
										 #32
									</td>
									<td>
										 Vivamus sed auctor nibh congue
									</td>
									<td>
										<span class="label l-high">High</span>
									</td>
								</tr>
								<tr>
									<td>
										 #38
									</td>
									<td>
										 Proin porttitor bibendum placerat.
									</td>
									<td>
										<span class="label l-medium">Medium</span>
									</td>
								</tr>
								<tr>
									<td class="noboderB">
										 #39
									</td>
									<td class="noboderB">
										 Lorem ipsum dolor sit amet.
									</td>
									<td class="noboderB low">
										<span class="label l-low">Low</span>
									</td>
								</tr>
								</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="clear">
				</div>
				<div class="grid_12">
					<div class="widget-panel">
						<div class="widget-top">
							<h4>User Table</h4>
						</div>
						<div class="widget-content module">
							<table class="display data-grid">
							<thead>
							<tr>
								<th>
									 User Name
								</th>
								<th>
									 Name
								</th>
								<th>
									 Address
								</th>
								<th>
									 Email
								</th>
								<th>
									 Thumb
								</th>
								<th>
									 Status
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
							<tr>
								<td>
									<a href="#">Jhon</a>
								</td>
								<td>
									<a href="#">Jhon Doe</a>
								</td>
								<td>
									 Address Line
								</td>
								<td class="center">
									 jhon@hostname.com
								</td>
								<td class="center">
									<div class="user-thumb">
										<a href="#"><img height="40" width="40" alt="User" src="images/user-thumb1.png"></a>
									</div>
								</td>
								<td class="center">
									<span class="label l-new">New</span><span><a class="action-icons c-pending" href="#" title="Pending">Pending</a></span>
								</td>
								<td class="center">
									<span><a class="action-icons c-edit" href="#" title="Edit">Edit</a></span><span><a class="action-icons c-delete" href="#" title="delete">Delete</a></span><span><a class="action-icons c-approve" href="#" title="Approve">Approve</a></span><span><a class="action-icons c-suspend" href="#" title="Suspend">Suspend</a></span>
								</td>
							</tr>
							<tr>
								<td>
									<a href="#">Jaman</a>
								</td>
								<td>
									<a href="#">Ui Jaman</a>
								</td>
								<td>
									 Address Line
								</td>
								<td class="center">
									 jaman@hostname.com
								</td>
								<td class="center">
									<div class="user-thumb">
										<a href="#"><img height="40" width="40" alt="User" src="images/user-thumb1.png"></a>
									</div>
								</td>
								<td class="center">
									<span class="label l-suspend">Suspend</span>
								</td>
								<td class="center">
									<span><a class="action-icons c-edit" href="#" title="Edit">Edit</a></span><span><a class="action-icons c-delete" href="#" title="delete">Delete</a></span><span><a class="action-icons c-approve" href="#" title="Approve">Approve</a></span><span><a class="action-icons c-suspend" href="#" title="Suspend">Suspend</a></span>
								</td>
							</tr>
							</tbody>
							<tfoot>
							<tr>
								<th>
									 User Name
								</th>
								<th>
									 Name
								</th>
								<th>
									 Address
								</th>
								<th>
									 Email
								</th>
								<th>
									 Thumb
								</th>
								<th>
									 Status
								</th>
								<th>
									 Action
								</th>
							</tr>
							</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>-->
	</div>
</div>
<div id="footer-wrap">
	<div id="footer">
		<div class="footer-container">
			<div class="footer-nav">
				<!--<ul>
					<li><a href="fa_usuarios.php"><span class="footer-button new-user"></span>Nuevo Usuario <span class="user-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-order"></span>Nueva Orden <span class="task-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-task"></span>Nueva Tarea <span class="task-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button open-tickets"></span>Abrir Tickets <span class="ticket-counter">30</span></a></li>
					<li><a href="#"><span class="footer-button new-comments "></span>Nuevos Comentarios <span class="zero-count">0</span></a></li>
				</ul>-->
			</div>
			<div class="copyright">
				 &copy; 2012 Ziown Admin Panel. All rights reserved
			</div>
		</div>
		<div id="goTop">
			<a href="#" class="tip-top" title="Go Top">Top</a>
		</div>
	</div>
</div>
</body>
</html>