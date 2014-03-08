<?php 
require_once('php/clases/class.SQLServer.php');

$db = new SQLServer();
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" dir="ltr" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" dir="ltr" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" dir="ltr" lang="en-US"> <!--<![endif]-->
<head>
<meta charset="UTF-8" />
<title>Estudia MAS</title>

<script language="javascript" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.address-1.4.min.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery-ui-1.8.16.custom.min.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.pagination.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.paginationPlus.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.goofyScroller.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.goofyBackground.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.disappearingTextInput.js"></script>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/xylem.js"></script> 
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/velvetFoundation.js"></script> 
<script type="text/javascript">

function cargarListUni(lciudad,luniversidad,lprograma,tipo)
{	
  //alert("la ciudad es: "+lciudad+" universidad: "+luniversidad+" tipo: "+tipo);
  var id = $("#"+lciudad).val();
  //alert("el tipo de programa es "+id);
  
  if(id!=0)
  {
	  var cadena = "id="+id+"&tipo="+tipo;
	  $.ajax({
		  type:'POST',
		  url:"php/list_universidad.php",
		  data:cadena,
		  async: true,
		  success:function(datos){
			  
			  $('#'+luniversidad).empty()
			  $('#'+lprograma).empty()
			  //alert(datos);
			  $('#'+lprograma).append('<option value="0">Seleccionar programa</option>'); 
			  
			  var dataJson = eval(datos);
			  
			   $('#'+luniversidad).append('<option value="0">Seleccionar universidad</option>'); 
			  for(var i in dataJson){
				  //alert(dataJson[i].iduniversidad + " _ " + dataJson[i].nombre);
				  $('#'+luniversidad).append('<option value="'+dataJson[i].iduniversidad+'">'+dataJson[i].nombre+'</option>');  
			  }
			  //$("#"+div).html(msj);
		  },
		  error:function(obj, error, objError){
			  alert("error"+error);
			  console.log(error);
		  }
		  });
  }
}


function cargarListPro(luniversidad,lprograma,tipo)
{	
  //alert("la ciudad es: "+lciudad+" universidad: "+luniversidad+" tipo: "+tipo);
  var id = $("#"+luniversidad).val();
  //alert("el tipo de programa es "+id);
  
  if(id!=0)
  {
	  var cadena = "id="+id+"&tipo="+tipo;
	  $.ajax({
		  type:'POST',
		  url:"php/list_programa.php",
		  data:cadena,
		  async: true,
		  success:function(datos){
			  
			  $('#'+lprograma).empty()
			  //alert(datos);
			  var dataJson = eval(datos);
			  
			   $('#'+lprograma).append('<option value="0">Seleccionar programa</option>'); 
			  for(var i in dataJson){
				  //alert(dataJson[i].iduniversidad + " _ " + dataJson[i].nombre);
				  $('#'+lprograma).append('<option value="'+dataJson[i].idprogramas+'">'+dataJson[i].programas+'</option>');  
			  }
			  //$("#"+div).html(msj);
		  },
		  error:function(obj, error, objError){
			  alert("error"+error);
			  console.log(error);
		  }
		  });
  }

}

function cargarListCiudad(){
	var opc = $('#opcion').val();
	//alert(opc);
	if(opc!="")
  	{
	  var cadena = "tipo="+opc;
	  $.ajax({
		  type:'POST',
		  url:"php/list_ciudad.php",
		  data:cadena,
		  async: true,
		  success:function(datos){
			  
			  $('#ciudad').empty();
			  //alert(datos);
			  var dataJson = eval(datos);
			  
			   $('#ciudad').append('<option value="">Seleccionar ciudad</option>'); 
			  for(var i in dataJson){
				  //alert(dataJson[i].iduniversidad + " _ " + dataJson[i].nombre);
				  $('#ciudad').append('<option value="'+dataJson[i].idestado+'">'+dataJson[i].estado+'</option>');  
			  }
			  //$("#"+div).html(msj);
		  },
		  error:function(obj, error, objError){
			  alert("error "+error);
			  console.log(error);
		  }
		  });
  	}
}

function cargarListUniversidad(){
	var opc = $('#opcion').val();
	var ciudad = $('#ciudad').val();
	
	//alert('opcion es: '+opc+' ciudad es: '+ciudad);
	
	if(ciudad!="")
	{
		var cadena = "tipo="+opc+"&id="+ciudad;
		//alert(cadena);
		$.ajax({
			type:'POST',
			url:"php/list_universidad.php",
			data:cadena,
			async:true,
			success:function(datos){
				
					$('#universidad').empty();
					
					var dataJson = eval(datos);
					
					$('#universidad').append('<option value="">Seleccionar universidad</option>');
					for(var i in dataJson){
						
						$('#universidad').append('<option value="'+dataJson[i].iduniversidad+'">'+dataJson[i].nombre+'</option>');
					}
				
				},
			error:function(obj, error, objError){
					alert("error "+error);
					console.log(error);
				}
			});
	}
}

function cargarListProgramas(){
	
	var opc = $("#opcion").val();
	var id = $("#universidad").val();
	
	//alert("el tipo de programa es "+opc+" y la universidad es: "+id);
	
	if(id!="")
	{
		var cadena = "id="+id+"&tipo="+opc;
		$.ajax({
			type:'POST',
			url:"php/list_programa.php",
			data:cadena,
			async: true,
			success:function(datos){
				
				$('#programa').empty()
				//alert(datos);
				var dataJson = eval(datos);
				
				$('#programa').append('<option value="0">Seleccionar programa</option>'); 
				for(var i in dataJson){
				//alert(dataJson[i].iduniversidad + " _ " + dataJson[i].nombre);
				$('#programa').append('<option value="'+dataJson[i].idprogramas+'">'+dataJson[i].programas+'</option>');  
			}
			//$("#"+div).html(msj);
			},
			error:function(obj, error, objError){
				alert("error"+error);
				console.log(error);
			}
		});
	}
}
</script>  

<link rel="stylesheet" href="wp-content/themes/Velvet/css/site.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="wp-content/themes/Velvet/css/gravity-forms.css" type="text/css" media="screen, projection" />
<link rel="stylesheet" href="wp-content/themes/Velvet/js/pagination.css" type="text/css" media="screen, projection" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>


<link rel='stylesheet' id='xd_gfr_stylesheet-css'  href='http://nationallgbtmuseum.org?xd_action=xd_gfr_css&#038;ver=0.1' type='text/css' media='all' />
<script type='text/javascript' src='wp-includes/js/l10n.js?ver=20101110'></script>
<script type='text/javascript' src='wp-includes/js/jquery/jquery.js?ver=1.6.1'></script>
<script type='text/javascript' src='wp-content/plugins/gravityforms/js/conditional_logic.js?ver=1.6.1'></script>
<script type='text/javascript' src='wp-content/plugins/gravityforms/js/jquery.json-1.3.js?ver=1.6.1'></script>
<script type='text/javascript' src='wp-content/plugins/gravityforms/js/gravityforms.js?ver=1.6.1'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.js?ver=20090102'></script>



<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39049120-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>


<body class="home page page-id-103 page-template page-template-page-main-php">



<ul id="navigation">
    <li class="acerca" style="margin-bottom: 5px;"><a href="http://estudiamas.com.mx/landing" target="_blank"><img src="wp-content/themes/Velvet/images/solicitud.gif" alt="" style="padding-right: 10px;" height="50"/><span style="position: relative; top: -17px;">Solicitud en línea</span></a></li>
    <li class="login"><a href="http://www.estudiamas.com.mx/appTest/Cuenta.html" target="_blank"><img src="wp-content/themes/Velvet/images/btn_login.jpg" alt="" style="padding-right: 10px;" height="50"/><span style="position: relative; top: -17px;">Iniciar sesión</span></a></li>
</ul>

<script type="text/javascript">
    $(function() {
        $('#navigation a').stop().animate({'marginLeft':'138px'},1000);

        $('#navigation > li').hover(
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'-1px'},200);
            },
            function () {
                $('a',$(this)).stop().animate({'marginLeft':'138px'},200);
            }
        );
    });
</script>



<div id="container">
	<div id="mainNavContainer">
    	<!-- NAV ARROWS -->
    	<div id="navRevealArrows">
        	<div id="navRevealArrowGuts">
        		<div class="navArrow" id="redArrow"><img src="wp-content/themes/Velvet/images/navArrowRed.png" height="40" width="80" /></div>
            	<div class="navArrow" id="maroonArrow"><img src="wp-content/themes/Velvet/images/navArrowMaroon.png" height="40" width="80" /></div>
            	<div class="navArrow" id="blueArrow"><img src="wp-content/themes/Velvet/images/navArrowBlue.png" height="40" width="80" /></div>
            	<div class="navArrow" id="greenArrow"><img src="wp-content/themes/Velvet/images/navArrowGreen.png" height="40" width="80" /></div>
            	<div class="navArrow" id="orangeArrow"><img src="wp-content/themes/Velvet/images/navArrowOrange.png" height="40" width="80" /></div>
            </div>
        </div>
        <!-- NAV BUTTONS -->
    	<div id="navButtons">
            <div id="nav">
            	<div id="navButtonGuts">
                	<a class="manNavBtn" rel="address:quienes_somos/como_aplico">¿QUIÉNES SOMOS?</a> &nbsp; <a class="manNavBtn" rel="address:porque_estudiamas">¿POR QUÉ ESTUDIA MÁS?</a> &nbsp; <a class="manNavBtn" rel="address:programas">PROGRAMAS</a> &nbsp; <a class="manNavBtn" rel="address:testimoniales">TESTIMONIALES</a> &nbsp; <a class="manNavBtn" rel="address:contacto">CONTACTO</a>&nbsp; <a class="manNavBtn" href="http://estudiamas.com.mx/landing" target="_blank">SOLICITUD EN LÍNEA</a>
                </div>
            </div>
            <div id="shareBtns">
                <a href="http://www.facebook.com/pages/Estudia_M%C3%A1s/175923749171493?ref=ts&fref=ts" target="_blank"><img src="wp-content/themes/Velvet/images/logo_face.png" /></a>
                <a href="http://twitter.com/Estudia_Mas" target="_blank"><img src="wp-content/themes/Velvet/images/logo_twitter.png" /></a>
                <a style="cursor: pointer;" rel="address:contacto"><img src="wp-content/themes/Velvet/images/logo_mail.png" /></a>
            </div>
        </div>
    </div>

    <!-- left column is the master -->
    <div id="leftColumn">
    
    	<!-- HOME -->
<div class="content_panel scrollable red_theme" id="l_home" data-color="red" style="background-image:url(wp-content/files_mf/homeside351.jpg);" >
	<div class="innerContentPositioner">
    	<div class="innerContent innerContentBubble">
        </div>
    </div>
</div>        
        <!-- WHO WE ARE -->
        	
<div class="content_panel scrollable maroon_theme" id="l_quienes_somos" data-color="red">
	<div class="innerContentPositioner">
    	<div class="innerContent innerContentText">
        	<div class="sectionTitle maroon" >
            	<!--<h1>About Us</h1>
                <div class="sectionTitleLogo"><img src=" wp-content/themes/Velvet/images/velvetLogo.jpg" height="37" width="115" alt="Velvet Foundation" /></div>-->
                
                <img src="wp-content/themes/Velvet/images/quienes_somos.png" alt="" style="padding-bottom: 3%;"/>
                                
                <p>En México existen millones de jóvenes que quieren seguir estudiando pero que por temas económicos no pueden acceder a los estudios que desean. En 2012 surge Estudia Más como la mejor alternativa para apoyar a miles de jóvenes a que continúen su formación académica con planes de pagos ajustados a sus posibilidades.	</p>
                                
                <div style="background: url(wp-content/themes/Velvet/images/linea_gris.png) no-repeat; width: 100%; height: 3px; margin: 5% 0;"></div>
                
                
                <h2 style="padding: 2% 0;">Nuestra Misión</h2>
                
                <p>Invertir en personas íntegras y responsables que necesiten  de un apoyo económico para estudiar licenciaturas, maestrías, cursos y diplomados, a través del desarrollo de mecanismos innovadores de financiamiento que permitan a más jóvenes alcanzar niveles de preparación de excelencia, acceder a mejores oportunidades laborales y ser agentes de cambio en su entorno social. </p>
                                
                <div style="background: url(wp-content/themes/Velvet/images/linea_gris.png) no-repeat; width: 100%; height: 3px; margin: 5% 0;"></div>
                                
                <h2 style="padding: 2% 0;">Nuestra Visión</h2>
                                
                <p>Ser líderes del crédito educativo con visión social en México.</p>
                                
                <div style="background: url(wp-content/themes/Velvet/images/linea_gris.png) no-repeat; width: 100%; height: 3px; margin: 5% 0;"></div>
                                
                <h2 style="padding: 2% 0;">Valores</h2>
                                
                <ul>
                	<li>Honestidad</li>
                	<li style="color: #E71848;"> | </li>
                	<li>Innovación</li>
                	<li style="color: #E71848;"> | </li>
                	<li>Sencillez</li>
                	<li style="color: #E71848;"> | </li>
                	<li>Eficiencia</li>
                	<li style="color: #E71848;"> | </li>
                	<li>Transparencia</li>
                </ul>                
                
            </div>

    	</div><!--innerContent innerContentText-->
	</div><!--innerContentPositioner-->
</div><!--content_panel scrollable maroon_theme-->


    
      <!-- MUSEUM PLAN -->
      
<!--<div class="content_panel scrollable green_theme" id="l_porque_estudiamas" data-color="green"> </div>  -->
<div class="content_panel scrollable green_theme" id="l_porque_estudiamas" data-color="red">
	<div class="innerContentPositioner">
		<div class="innerContent innerContentText" id="programas_content_holder">
	    	<div class="sectionTitle marron" >
	            <img src="wp-content/themes/Velvet/images/porq_estudiamas.png" alt="" />
	            
	            <div style="margin: 50px 0px;">
	            	<img src="wp-content/themes/Velvet/images/doble_flecha.png" alt="" /> 
		            <p>PAGAMOS el 100% de las <br />COLEGIATURAS e inscripciones.</p>
	            </div>
	            <div style="margin-left: 100px; margin-bottom: 50px;">
	            	<img src="wp-content/themes/Velvet/images/doble_flecha.png" alt="" /> 
	                <p>Las COLEGIATURAS se <br /> CONGELAN desde el <br /> momento de la firma del <br /> contrato.</p>
	            </div>
	            <div>
	            	<img src="wp-content/themes/Velvet/images/doble_flecha.png" alt="" /> 
	                <p>Ajustamos el plan de pagos <br /> de acuerdo a tus <br /> posibilidades.</p>
	            </div>
	            
	        </div>
			
		</div><!--innerContent innerContentText-->
	</div><!--innerContentPositioner-->
</div>
        	     
        <!-- CORE EXHIBIT -->
        	
<div class="content_panel scrollable green_theme" id="l_programas" data-color="red">
	<div class="innerContentPositioner">
    	<div class="innerContent innerContentText" id="programas_content_holder">
    	
    		<img src="wp-content/themes/Velvet/images/nuetros_programas.png" alt="" />
    		<div style="padding: 1%;"></div>
    	
        	<div class="sectionTitle uppercase green" >
                <h1 style="font-size: 28px; line-height: 28px;">LICENCIATURAS</h1>
            </div>
            
			<div id="whoWeAre_content"  style="display:none;">
			    <div class="contentSections"></div>
			    <div class="pagination"></div>
			    
			    <div class="hiddenContent" style="display:none; width: 100%;">
			    	<div class="contentSection">
			    		
			    		<img style="position: relative; top: -10px;" src="wp-content/themes/Velvet/images/linea_rosa.png" alt="" /> 
			    		
			    		<div style="padding: 3%;"></div>
			    	
			    		<div style="position: relative; top: -20px;">
			    			<img src="wp-content/themes/Velvet/images/1.png" alt="" /> 
			    		    <p style="position: relative; top: -30px; left: 30px;">Solicitud en línea</p>
			    		    <img style="position: relative; top: -30px; left: 50px; width: 20%;" src="wp-content/themes/Velvet/images/paso1.png" alt="" /> 
			    		</div>
			    		<div style="position: relative; top: -120px; margin-left: 240px;">
			    			<img src="wp-content/themes/Velvet/images/2.png" alt="" /> 
			    		    <p style="position: relative; top: -40px; left: 30px;">Correo electrónico<br />ENVÍO DE DOCUMENTACIÓN</p>
			    		    <img style="position: relative; top: -50px;left: 80px; width: 20%;" src="wp-content/themes/Velvet/images/paso2.png" alt="" /> 
			    		</div>
			    		<div style="position: relative; top: -170px;">
			    			<img src="wp-content/themes/Velvet/images/3.png" alt="" /> 
			    		    <p style="position: relative; top: -40px; left: 30px;">Correo electrónico<br />CITA PARA ENTREVISTA</p>
			    		    <img style="position: relative; top: -50px;left: 80px; width: 7%;" src="wp-content/themes/Velvet/images/paso3.png" alt="" /> 
			    		</div>
			    		<div style="position: relative; top: -290px; margin-left: 240px;">
			    			<img src="wp-content/themes/Velvet/images/4.png" alt="" /> 
			    		    <p style="position: relative; top: -40px; left: 30px;">ENTREVISTA<br />(personal o telefónica)</p>
			    		    <img style="position: relative; top: -50px;left: 60px; width: 20%;" src="wp-content/themes/Velvet/images/paso4.png" alt="" /> 
			    		</div>
			    		<div style="position: relative; top: -330px;">
			    			<img src="wp-content/themes/Velvet/images/5.png" alt="" /> 
			    		    <p style="position: relative; top: -40px; left: 30px;">EVALUACIÓN<br />de candidatos</p>
			    		    <img style="position: relative; top: -50px;left: 60px; width: 7%;" src="wp-content/themes/Velvet/images/paso5.png" alt="" /> 
			    		</div>
			    		<div style="position: relative; top: -460px; margin-left: 240px;">
			    			<img src="wp-content/themes/Velvet/images/6.png" alt="" /> 
			    		    <p style="position: relative; top: -40px; left: 30px;">NOTIFICACIÓN<br />a candidatos</p>
			    		    <img style="position: relative; top: -80px;left: 110px; width: 20%;" src="wp-content/themes/Velvet/images/paso6.png" alt="" /> 
			    		</div>
			    		<div style="position: relative; top: -510px; left: 100px;">
			    			<img src="wp-content/themes/Velvet/images/7.png" alt="" /> 
			    		    <p style="position: relative; top: -30px; left: 30px;">FIRMA DE CONTRATO</p>
			    		    <img style="position: relative; top: -60px;left: 160px; width: 8%;" src="wp-content/themes/Velvet/images/paso7.png" alt="" />
			    		</div>
					</div>                    
			    </div>
			</div>
			
			<div id="requisitos_content" style="display:none;">
			    <div class="contentSections"></div>
			    <div class="pagination"></div>
			    
			    <div class="hiddenContent" style="display:none;">
			        <div class="contentSection">
			        
				        <img style="position: relative; top: -10px;" src="wp-content/themes/Velvet/images/linea_rosa.png" alt="" /> 
				        
				        <div style="padding: 10px;"></div>
				        
				        <div style="position: relative; top: -10px;">
				        	<img src="wp-content/themes/Velvet/images/1.png" alt="" /> 
				            <p style="position: relative; top: -30px; left: 30px;">Ser Mexicano</p>
				        </div>
				        <div style="position: relative; top: -20px;">
				        	<img src="wp-content/themes/Velvet/images/2.png" alt="" /> 
				            <p style="position: relative; top: -40px; left: 30px;">Ser mayor de edad (en caso que no lo sea puede firmar uno de los padres, y al cumplir los 18 años se hace el cambio al beneficiado).</p>
				        </div>
				        <div style="position: relative; top: -50px;">
				        	<img src="wp-content/themes/Velvet/images/3.png" alt="" /> 
				            <p style="position: relative; top: -40px; left: 30px;">Tener el bachillerato o preparatoria terminada (en caso de aplicar para Licenciaturas, Cursos o Diplomados).</p>
				        </div>
				        <div style="position: relative; top: -80px;">
				        	<img src="wp-content/themes/Velvet/images/4.png" alt="" /> 
				            <p style="position: relative; top: -30px; left: 30px;">Tener la licenciatura terminada (en caso de aplicar para Maestrías).</p>
				        </div>
					</div>
				</div>
			</div>
            
            <div id="being_us_content"  style="display:none;">
                <div class="contentSections"></div>
                <div class="pagination"></div>
                
                <div class="hiddenContent" style="display:none;">
                   <div class="contentSection">                 
                   		<p class="moreSpaceBottom">
                   			<p>Estudia Más sabe  lo importante que es brindar educación de alta calidad y que a su vez se adapte a tus posibilidades. En Estudia Más tenemos convenios en las mejores universidades del país.  Revisa los programas aquí y elige tu mejor opción.</p>
                            	<form action="http://estudiamas.com.mx/landing/index.php" method="post">
                                	<p>
	                            	<select style="width:140PX;" name="lciudad" id="lciudad" onchange="cargarListUni('lciudad','luniversidad','lprograma','0')">
	                            	<option value="0">Seleccionar ciudad</option>
	                            	<?php 
										$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
										INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
										WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = 0 GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
	   									$resultado = $db->consulta($consulta);
	   									$row = $db->fetch_assoc($resultado);
	                            		do{?>
	                            	<option value="<?php echo $row['idestado']?>"><?php  echo utf8_encode($row['estado']);?></option>
	                            	<?php 
	                            		}while($row = $db->fetch_assoc($resultado));
	                            	?>
	                        		</select>
                                    <input type="hidden" id="lopcion" name="lopcion" value="0">
                          			</p>
                          	
                          			<p>
									<select name="luniversidad" id="luniversidad" onchange="cargarListPro('luniversidad','lprograma','0')">
										<option value="0">Seleccionar universidad</option>
									</select>
									</p>
							
									<p>
	                            	<select name="lprograma" id="lprograma">
	                            		<option value="0">Seleccionar programa</option>
	                            	</select>
                            		</p>
                                    <input type="submit" id="b_aplicar" name="enviar">
                                    <!--<div id="becas_careras" class="subnav" style="float: right; top: -75px;">
                            		<a href="http://estudiamas.com.mx/landing" class="b_aplicar"><div id="d_aplicar"></div></a>
                            		</div>-->
                            	</form>
                            	
							</p>
					</div><!--contentSection-->
				</div><!--hiddenContent-->
            </div><!--being_us_content-->
                               
            <div id="being_family_content"  style="display:none;">
                <div class="contentSections"></div>
                <div class="pagination"></div>
                
                <div class="hiddenContent" style="display:none;">
                     <div class="contentSection">
                     	<p class="moreSpaceBottom">
                     		<p>¿Te interesa continuar con tu desarrollo profesional? Si quieres estudiar tu maestría esta sección va dirigida a ti. Estudia Más cuenta con una amplia oferta académica a nivel nacional e internacional. Consulta las opciones  aquí.</p>
                     		<form action="http://estudiamas.com.mx/landing/index.php" method="post">
                                <p>
	                            <select style="width:140PX;" name="lciudad2" id="lciudad2" onchange="cargarListUni('lciudad2','luniversidad2','lprograma2','1')">
	                            	<option value="0">Seleccionar ciudad</option>
	                            	<?php 
										$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
										INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
										WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = 1 GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
	   									$resultado = $db->consulta($consulta);
	   									$row = $db->fetch_assoc($resultado);
	                            		do{?>
	                            	<option value="<?php echo $row['idestado']?>"><?php  echo utf8_encode($row['estado']);?></option>
	                            	<?php 
	                            		}while($row = $db->fetch_assoc($resultado));
	                            	?>
	                        	</select>
                                <input type="hidden" id="lopcion2" name="lopcion2" value="1">
                            	</p>
                            	<p>
	                            <select name="luniversidad2" id="luniversidad2" onchange="cargarListPro('luniversidad2','lprograma2','1')">
									<option value="0">Seleccionar universidad</option>
								</select>
								</p>
								<p>
	                            <select name="lprograma2" id="lprograma2">
	                            	<option value="0">Seleccionar programa</option>
	                            </select>
                            	</p>
                                <input type="submit" id="b_aplicar" name="enviar">
                            	<!--<div id="becas_careras" class="subnav" style="float: right; top: -75px;">
                            	 	<a href="http://estudiamas.com.mx/landing" class="b_aplicar"><div id="d_aplicar"></div></a>
                            	</div>-->
								</p>
                            </form>
                     </div>
				</div><!--hiddenContent-->
			</div><!--being_family_content-->
              
            <div id="being_me_in_america_content" style="display:none;">
                <div class="contentSections"></div>
                <div class="pagination"></div>
                
                <div class="hiddenContent" style="display:none;">
                    <div class="contentSection">
                    	<p class="moreSpaceBottom">
                    		<p>¡Para ser competitivo es importante seguir preparándote! Estudia Más te ofrece programas especializados y de corta duración en las mejores universidades de México.  Consulta los diferentes cursos y diplomados aquí.</p>
                    		<form action="http://estudiamas.com.mx/landing/index.php" method="post">
                    			<p>
								<select style="width:140PX;" name="lciudad3" id="lciudad3" onchange="cargarListUni('lciudad3','luniversidad3','lprograma3','2')">
	                            	<option value="0">Seleccionar ciudad</option>
	                            	<?php 
										$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
										INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
										WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = 2 GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
	   									$resultado = $db->consulta($consulta);
	   									$row = $db->fetch_assoc($resultado);
	                            		do{?>
	                            	<option value="<?php echo $row['idestado']?>"><?php  echo utf8_encode($row['estado']);?></option>
	                            	<?php 
	                            		}while($row = $db->fetch_assoc($resultado));
	                            	?>
	                        	</select>
                                <input type="hidden" id="lopcion3" name="lopcion3" value="2">
                            	</p>
                            	<p>
	                            <select name="luniversidad3" id="luniversidad3" onchange="cargarListPro('luniversidad3','lprograma3','2')">
									<option value="0">Seleccionar universidad</option>
								</select>
								</p>
								<p>
	                            <select name="lprograma3" id="lprograma3">
	                            	<option value="0">Seleccionar programa</option>
	                            </select>
                            	</p>
                                <input type="submit" id="b_aplicar" name="enviar">
                            	<!--<div id="becas_careras" class="subnav" style="float: right; top: -75px;">
                            		<a href="http://estudiamas.com.mx/landing" class="b_aplicar"><div id="d_aplicar"></div></a>
                            	</div>-->
                        		</p>
                            </form>
					</div>
				</div><!--hiddenContent-->
			</div><!--being_me_in_america_content-->
          	
            
            <div id="being_me_content" style="display:none;">
                <div class="contentSections"></div>
                <div class="pagination"></div>
                
                <div class="hiddenContent" style="display:none;">
                    <div class="contentSection">
                    	<p class="moreSpaceBottom">
                    		<p>Estudia Más siempre está brindando opciones adecuadas a las necesidades actuales. Por esta razón, ofrecemos un modelo de educación virtual para aquellas personas que buscan combinar el estudio con su vida personal y profesional.</p>
                    		<form action="http://estudiamas.com.mx/landing/index.php" method="post">
                    			<p>
	 							<select style="width:140PX;" name="lciudad4" id="lciudad4"  onchange="cargarListUni('lciudad4','luniversidad4','lprograma4','4')">
	                            	<option value="0">Seleccionar ciudad</option>
	                            	<?php 
										$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
										INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
										WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = 4 GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
	   									$resultado = $db->consulta($consulta);
	   									$row = $db->fetch_assoc($resultado);
	                            		do{?>
	                            	<option value="<?php echo $row['idestado']?>"><?php  echo utf8_encode($row['estado']);?></option>
	                            	<?php 
	                            		}while($row = $db->fetch_assoc($resultado));
	                            	?>
	                        	</select>
                                <input type="hidden" id="lopcion4" name="lopcion4" value="4">
                        		</p> 
                            	<p>
	                            <select name="luniversidad4" id="luniversidad4" onchange="cargarListPro('luniversidad4','lprograma4','4')">
									<option value="0">Seleccionar universidad</option>
								</select>
								</p>
								<p>
	                            <select name="lprograma4" id="lprograma4">
	                            	<option value="0">Seleccionar programa</option>
	                            </select>
                            	</p>
                                <input type="submit" id="b_aplicar" name="enviar">
                            	<!--<div id="becas_careras" class="subnav" style="float: right; top: -75px;">
                            	 	<a href="http://estudiamas.com.mx/landing" class="b_aplicar"><div id="d_aplicar"></div></a>
                            	</div>-->
								</p>
                            </form>
					</div>
				</div><!--hiddenContent-->
			</div><!--being_me_content-->
             
            <div id="contemplateion_zone_content" style="display:none;">
                <div class="contentSections"></div>
                <div class="pagination"></div>
                
                <div class="hiddenContent" style="display:none;">
                    <div class="contentSection">
                    	<p class="moreSpaceBottom">
                    		<iframe src="tabs.html" frameborder="no" style="width: 540px; height: 500px; position: relative; top: -50px; left: -70px;" scrolling="no"></iframe>
                    		
                    		<!--<p>UNIVERSIDAD DEL VALLE DE MÉXICO (UVM)</p>
                    		
                    		<ul>
	                    		<li>Paga el 65% de tu carrera y Estudia Más te complementa con el 35% restante.*</li>
	                    		<li>Plazo de pago: 36 meses de estudio + 36 meses después de estudiar.</li>
	                    		<li>Tu última mensualidad se congela y es la que continuarás pagando una vez que termines de estudiar.</li>
	                    		<li>La tasa de interés va de un 12% al 18% anual aproximadamente (dependerá del número de materias, tiempo de estudio, etc.).</li>
	                    		<li>No hay penalizaciones por pagos anticipados.</li>
	                    		<li>Existen descuentos por pagos puntuales aplicables al periodo de pago después
	                    		de estudiar.</li>
                    		</ul>
                    		<br /><br /><br /><br />
                    		<p style="font-size: 12px;">*Aplica para carga normal de materias. Si deseas llevar una carga de materias diferente o variable, podemos analizar tu caso y realizarte un plan de pagos a tu medida.</p>
                    		<p style="font-size: 12px;">**El financiamiento de Estudia Más aplica para inscripciones y colegiaturas.</p>-->
                    	</p>
                           <!-- <select style="width:140PX;" name="ciudad" id="ciudad" onchange="cargarList('ciudad','universidad1','list_universidad.php','1','<?php echo $nombre;?>')">
                            <option value="0">Seleccionar ciudad</option>
                            <?php 
								$consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
								INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
								WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 2 AND tipo = 4 GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
   								$resultado = $db->consulta($consulta);
   								$row = $db->fetch_assoc($resultado);
                            	do{?>
                            <option value="<?php echo $row['idestado']?>"><?php  echo utf8_encode($row['estado']);?></option>
                            <?php 
                            	}while($row = $db->fetch_assoc($resultado));
                            ?>
                        	</select>
						</p>-->
					</div><!--contentSection-->
				</div><!--hiddenContent-->
			</div><!--contemplateion_zone_content-->
			
			
			<div id="becas_careras" class="subnav">
				 <a id="who_quienes_somos" class="contentButton selected b_becas" data-content="como_aplico" data-bg="r_quienes_somos"><div id="d_becas"></div></a> &nbsp; 
				 <a id="who_why_were_doing_this" class="contentButton b_carreras" data-content="requisitos" data-bg="r_quienes_somos"><div id="d_carreras" style="position: relative; float: right; top: -41px;"></div></a>
			</div>
			
		</div><!--innerContent innerContentText-->
		
		<div style="position: absolute; bottom: 5%; background: #fff; width: 100%; text-align: center;">
			<table style="margin: 0 auto;">
				<tr style="vertical-align: middle; text-align: center;">
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.unid.edu.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-1.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.universidad-interglobal.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-2.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.uvmnet.edu/" target="_blank"><img src="wp-content/themes/Velvet/images/l-3.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.sistemaieu.edu.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-4.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.fh-offenburg.de/" target="_blank"><img src="wp-content/themes/Velvet/images/l-5.png" alt="" /></a></td>
				</tr>
				<tr style="vertical-align: middle; text-align: center;">
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.uspceu.com/" target="_blank"><img src="wp-content/themes/Velvet/images/l-6.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.ufv.es/" target="_blank"><img src="wp-content/themes/Velvet/images/l-7.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.udlonline.net/" target="_blank"><img src="wp-content/themes/Velvet/images/l-8.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.anahuac.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-9.png" alt="" /></a></td>
					<td style="vertical-align: middle; width: 20%;"><a href="http://www.tecvirtual.itesm.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-10.png" alt="" /></a></td>
				</tr>
			</table>
		</div>
		
	</div><!--innerContentPositioner-->
	
	

	
</div><!--content_panel scrollable maroon_theme-->
        	
        	                   
        <!-- BLOG -->
        	
<div class="content_panel scrollable blue_theme" id="l_blog" data-color="red" style="display:none;">
          
</div>
  
           
        <!-- testimoniales -->
<div class="content_panel orange_theme" id="l_testimoniales" data-color="red">
	<div class="innerContentPositioner">
		
<!--			<img src="wp-content/themes/Velvet/images/testimoniales.png" alt="" />                 -->
		
			<img style="float: right; width: 100%;" src="wp-content/themes/Velvet/images/r_collage.png" alt="" />           
		
		
	</div><!--innerContentPositioner-->
</div><!--content_panel scrollable maroon_theme-->
 
        
        <!-- CONTACT US -->
<div class="content_panel scrollable blue_theme" id="l_contacto" data-color="red">
	<div class="innerContentPositioner">
    	<div class="innerContent innerContentBlog">
    	
    		<img src="wp-content/themes/Velvet/images/contacto.png" alt="" />            
    	    
    	    <div style="padding: 5%;"></div>
    	    
    	    <div style="float: left; width: 50%;">
	    	    <form method="post" action="enviaContacto.php">
		    	    <p>
		    	    	<input type="text" name="nombre" placeholder="Nombre: " value="" style="width: 90%;" required/>
		    	    </p>
		    	    
		    	    <p>
		    	    	<input type="email" name="email" placeholder="Email: " value="" style="width: 90%;" required/>
		    	    </p>
		    	    
		    	    <p>
		    	    	<input type="text" name="telefono" placeholder="Teléfono: " value="" style="width: 90%;" required/>
		    	    </p>
		    	    
		    	    <p>
		    	    	<textarea name="comentario" placeholder="Comentario:" rows="6" style="width: 90%;" required></textarea>
		    	    </p>
		    	    <p>
		    	    	<input type="submit" class="enviar" name="enviarf" value="" style="position: relative; float: right; right: 20px;"/>
		    	    </p>
	    	    </form>  
    	    </div>
    	    
    	    <div style="float: right; width: 50%;">
<!--    	    	<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.mx/maps?f=q&amp;source=s_q&amp;hl=es-419&amp;geocode=&amp;q=Av.+Industrializaci%C3%B3n+No.1,+Col.+%C3%81lamos+2a.+secci%C3%B3n.+Santiago+de+Quer%C3%A9taro,+Qro.+&amp;aq=&amp;sll=20.614423,-100.403436&amp;sspn=0.219154,0.361519&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Industrializaci%C3%B3n+1,+Alamos+2a+Secci%C3%B3n,+Santiago+de+Quer%C3%A9taro,+Quer%C3%A9taro+de+Arteaga&amp;t=m&amp;z=14&amp;ll=20.60401,-100.378773&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com.mx/maps?f=q&amp;source=embed&amp;hl=es-419&amp;geocode=&amp;q=Av.+Industrializaci%C3%B3n+No.1,+Col.+%C3%81lamos+2a.+secci%C3%B3n.+Santiago+de+Quer%C3%A9taro,+Qro.+&amp;aq=&amp;sll=20.614423,-100.403436&amp;sspn=0.219154,0.361519&amp;ie=UTF8&amp;hq=&amp;hnear=Av+Industrializaci%C3%B3n+1,+Alamos+2a+Secci%C3%B3n,+Santiago+de+Quer%C3%A9taro,+Quer%C3%A9taro+de+Arteaga&amp;t=m&amp;z=14&amp;ll=20.60401,-100.378773" style="color:#0000FF;text-align:left" target="_blank">Ver mapa más grande</a></small>-->
    	    	
    	    	
    	    	<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?t=m&amp;msa=0&amp;msid=217293075100927698808.0004d75dd65514bec802b&amp;source=embed&amp;ie=UTF8&amp;ll=20.604608,-100.378763&amp;spn=0.013718,0.022573&amp;output=embed"></iframe><br /><small style="color:#404040;">Ver <a href="https://maps.google.com/maps/ms?t=m&amp;msa=0&amp;msid=217293075100927698808.0004d75dd65514bec802b&amp;source=embed&amp;ie=UTF8&amp;ll=20.604608,-100.374763&amp;spn=0.013718,0.022573" style="color:#e04242;text-align:left" target="_blank">Estudia+</a> en un mapa ampliado</small>
    	    </div>
    	    
    	    <div style="clear: both; padding: 5%;"></div>
    	    
    	    <div style="float: left; width: 50%; color: #404040;">
				<p style="color: #E71848;">LLÁMANOS:</p>
				<p>Desde Querétaro: 245 08 08</p>
				<p>Del Interior de la Republica: 01 800 841 0669</p>
				<br />
				<p style="color: #E71848;">ESCRÍBENOS A: </p>
				<p>comunicate@estudiamas.com.mx</p>
    	    </div>
    	    
    	    <div style="float: right; width: 50%; color: #404040;">
    	    	<br />
				<p>Cualquier duda que tengas háznola saber estamos para servirte aquí y en nuestras redes sociales</p>
    	    </div>
    	    
    	    <div style="clear: both;"></div>
  	    

    	</div>
    	
    	<div style="background: #800024; color: #fff; position: absolute; bottom: 0px; padding: 20px 10px; width: 100%;">
    		<p>VISÍTANOS EN:</p>
    		<p>Av. Industrialización No.1 bis, Col. Álamos 2a. sección. Santiago de Querétaro, Qro. C.P. 76160 México.</p>
    	</div>  
    	
	</div>
</div>
       	
    </div>
    <!-- scrolls opposite -->
    <div id="rightColumn">
    
    	<!-- CONTACT US -->
<div class="content_panel blue_theme" id="r_contacto" data-color="red">
	<div class="innerContentPositioner" style="border-left: 3px solid #ddd;">
		<div class="innerContent innerContentBlog">
					
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=484057371630628";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
			<div class="fb-like-box" data-href="https://www.facebook.com/pages/Estudia_M%C3%A1s/175923749171493?ref=ts&amp;fref=ts" data-width="495" data-height="250" data-show-faces="true" data-stream="true" data-header="false"></div>
			
			<div style="padding: 20px;"></div>
			
			<div style="width: 495px;">
				<a class="twitter-timeline" href="https://twitter.com/Estudia_Mas" data-widget-id="308606472001036289">Tweets por @Estudia_Mas</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
		</div>
	</div>
</div>        
     
        
<div class="content_panel orange_theme" id="r_testimoniales" data-color="red">
	<div class="innerContentPositioner">
    	
    	<img style="width: 100%;" src="wp-content/themes/Velvet/images/l_collage.png" alt="" />     <!-- position: relative; top: 70px;-->
    	
	</div>
</div>


         
        <!-- BLOG -->
        	<span clear="both" />
<div class="content_panel blue_theme" id="r_blog" data-color="red" style="display:none;">
	<div class="innerContentPositioner">
    	<div class="innerContent innerContentBlog">
            
            <div class="subnav" style="left: -70px;">
                 <a class="contentButton selected" data-content="blog" id="mostRecent"><b>&gt; Most Recent</b></a> &nbsp; <a class="contentButton" data-content="blog_categories" id="blog_categoreisBtn" onmouseover="$('#catmenu').show();" onmouseout="$('#catmenu').hide();" onclick="$('#catmenu').show();"><b>&gt; Categories</b></a>
                         <div id="catmenu" onmouseover="$('#catmenu').show();" onmouseout="$('#catmenu').hide();">
                              <ul>
                                   <li><a onclick="$('#thecategorycontent').load('/ajax/?cat=11', onCatLoad );" id="Collections" title="View all posts in Collections">Collections</a></li> <li><a onclick="$('#thecategorycontent').load('/ajax/?cat=12', onCatLoad );" id="Foundation-testimoniales" title="View all posts in Foundation testimoniales">Foundation testimoniales</a></li> <li><a onclick="$('#thecategorycontent').load('/ajax/?cat=8', onCatLoad );" id="Guest-Entry" title="View all posts in Guest Entry">Guest Entry</a></li>                               </ul>
                         </div>
            </div>
            
		</div>
	</div>
</div>
  
        	
        <!-- CORE EXHIBIT -->
        	<!-- THE CORE EXHIBIT -->
<div class="content_panel green_theme" id="r_programas" data-color="red">
	<div class="innerContentPositioner contentSection">
	
<!--		<div style="padding: 5%;"></div>-->
	
    	<div class="innerContent innerContentExhibit">
        	<img src="wp-content/themes/Velvet/images/coreExhibitSide.png" height="454" width="450" />
            <div id="core_exhibit_clicker_holder">
                <div id="beingUsclicker" class="coreExhibitClicker" data-content="being_us_content" ></div>
                <div id="beingFamilyClicker" class="coreExhibitClicker" data-content="being_family_content" ></div>
                <div id="beingMeInAmericaClicker" class="coreExhibitClicker" data-content="being_me_in_america_content" ></div>
                <div id="beingMeClicker" class="coreExhibitClicker" data-content="being_me_content" ></div>
                <div id="contemplationZoneClicker" class="coreExhibitClicker" data-content="contemplateion_zone_content" ></div>
            </div>
        </div>
        
<!--        <div style="padding: 4%;"></div>-->

        
	</div>


	<div style="position: absolute; bottom: 5%; background: #fff; width: 100%; text-align: center;">
		<table style="margin: 0 auto;">
			<tr style="vertical-align: middle; text-align: center;">
				<td style="vertical-align: middle; width: 20%;"><a href="http://www.ucq.edu.mx/uc/" target="_blank"><img src="wp-content/themes/Velvet/images/l-11.png" alt="" /></a></td>
				<td colspan="2" style="vertical-align: middle; width: 20%;"><a href="http://www.itam.mx/en/index.php" target="_blank"><img src="wp-content/themes/Velvet/images/l-12.png" alt="" /></a></td>
				<td style="vertical-align: middle; width: 20%;"><a href="http://www.millerheiman.com/highered/" target="_blank"><img src="wp-content/themes/Velvet/images/l-13.png" alt="" /></a></td>
				<td style="vertical-align: middle; width: 20%;"><a href="http://www.anahuaccancun.edu.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-14.png" alt="" /></a></td>
			</tr>
			<tr style="vertical-align: middle; text-align: center;">
				<td style="vertical-align: middle; width: 20%;"><a href="http://www.ieb.es/" target="_blank"><img src="wp-content/themes/Velvet/images/l-15.png" alt="" /></a></td>
				<td style="vertical-align: middle; width: 20%;"><a href="http://www.eude.es/" target="_blank"><img src="wp-content/themes/Velvet/images/l-16.png" alt="" /></a></td>
				<td style="vertical-align: middle; width: 20%;"><a href="http://leansixsigmainstitute.org/" target="_blank"><img src="wp-content/themes/Velvet/images/l-17.png" alt="" /></a></td>
				<td style="vertical-align: middle; width: 20%;"><a href="http://www.anahuacqro.edu.mx/" target="_blank"><img src="wp-content/themes/Velvet/images/l-18.png" alt="" /></a></td>
				<td></td>
			</tr>
		</table>
	</div>

</div>  

             
        <!-- MUSEUM PLAN -->
<div class="content_panel scrollable maroon_theme" id="r_porque_estudiamas" data-color="red">
	<div class="innerContentPositioner">
    	<div class="innerContent innerContentText" style="margin-top: 7%;">
            
            <div style="margin-top: -30px; margin-left: 200px;">
            	<img style="margin-left: -60px;" src="wp-content/themes/Velvet/images/5_razones.png" alt="" /> 
                <p style="font-size: 30px; line-height: 32px;margin-top: -40px;">RAZONES PARA<br />ESTUDIAR CON E+</p>
            </div>
            
            <div style="padding: 4%;"></div>
            
            <div style="margin-top: -10%; position: relative; left: 20px;">
            	<img src="wp-content/themes/Velvet/images/no_1.png" alt="" /> 
                <p>No pedimos garantías hipotecarias.</p>
            </div>
            <div style="margin-left: 100px; margin-top: -10%;">
            	<img src="wp-content/themes/Velvet/images/no_2.png" alt="" /> 
                <p>La cantidad máxima que pagarás<br />en la mayoría de nuestros programas<br />sólo será el costo de la colegiatura<br />a precio de hoy.</p>
            </div>
            <div style="margin-top: -10%; position: relative; left: 20px;">
            	<img src="wp-content/themes/Velvet/images/no_3.png" alt="" /> 
                <p>Contrato personalizado, de acuerdo<br />a tus posibilidades de pago.</p>
            </div>
            <div style="margin-left: 100px; margin-top: -10%;">
            	<img src="wp-content/themes/Velvet/images/no_4.png" alt="" /> 
                <p>Pagos fijos mensuales mientras estudias</p>
                <p>Al finalizar tus estudios, te comprometes<br />a pagar un porcentaje fijo de tu sueldo<br />bruto o un pago mínimo mensual (lo<br />que te resulte mayor) por un<br />determinado número de meses.</p>
            </div>
            <div style="margin-top: -10%; position: relative; left: 20px;">
            	<img src="wp-content/themes/Velvet/images/no_5.png" alt="" /> 
                <p>Todos los términos del financiamiento se acuerdan<br />desde el día de la firma del contrato.</p>
            </div>
            
    	</div>
	</div>
</div> 

 
         
        <!-- WHO WE ARE -->
<div class="content_panel maroon_theme" id="r_quienes_somos" data-color="red">
	<div class="innerContentPositioner">
	
	
	</div>
</div>        
        <!-- HOME -->
        	
<div class="content_panel red_theme" id="r_home" data-color="red">
	<div class="two_thirds_height full_width" id="homeTop">
    	<div class="full_height half_width">
        	<div id="quienes_somos_btn" class="half_height full_width">
            	<div id="quienes_somos_btn_guts">
            		<h1 style="font-size:20pt; line-height: 25px;"><a rel="address:porque_estudiamas">¿POR QUÉ ME<br />CONVIENE ELEGIR<br />UN PROGRAMA<br />EN ESTUDIA+?</a></h1>          		
                </div>
            </div>
            <div id="make_a_donation_btn" class="half_height full_width">
            	<div id="make_a_donation_btn_guts">
            		<h1><a rel="address:quienes_somos/como_aplico">CONOCE +<br />SOBRE <br />NOSOTROS</a></h1>
                </div>
            </div>
        </div>
        <div id="here_i_am_btn" class="full_height half_width">
        	<div id="here_i_am_btn_content_positioner">
            	<div id="here_i_am_btn_content">
                    <h1><a rel="address:programas"></a>NUESTROS<br />PROGRAMAS</h1>
                    <form action="http://estudiamas.com.mx/landing/index.php" method="post">
                        <select id="opcion" name="opcion" onChange="cargarListCiudad()">
                            <option value="">¿Que quieres estudiar?</option>
                            <option value="0">Licenciatura</option>
                            <option value="1">Maestría</option>
                            <option value="2">Curso / Diplomado</option>
                            <option value="4">Programas en Línea</option>
                        </select>
                        <select id="ciudad" name="ciudad" onChange="cargarListUniversidad()">
                            <option value="">Seleccionar ciudad</option>
                        </select>
                        <select id="universidad" name="universidad" onChange="cargarListProgramas()">
                            <option value="">Seleccionar universidad</option>
                        </select>
                        <select id="programa" name="programa">
                            <option value="">Seleccionar programa</option>
                        </select>
                        <input type="submit" id="b_aplicar" name="enviar">
                         <!--<div id="becas_careras" class="subnav">
                    	 	<a href="http://estudiamas.com.mx/landing" class="b_aplicar"><div id="d_aplicar"></div></a>
                   		 </div>-->
                    </form>
            	</div>
            </div>
        </div>
    </div>
    <div class="one_third_height full_width" id="homeBottom">
    	<div id="homeBottom_positioner">
            <div id="homeBottom_content">
            	<h1><a rel="address:testimoniales">TESTIMONIALES</a></h1>
            	<br /><br />
            	<div style="float: left; width: 33%;">
            		<p>" Estudio mi maestría en el Tec y sólo pago $4,000 mensuales "</p>
            	</div>
            	<div style="float: left; width: 33%; border-left: 1px solid #fff; border-right: 1px solid #fff; margin-right: -15px; padding-left: 10px;">
            		<p>" … es el financiamiento con menos requisitos y además me respondieron en una semana! "</p>
            	</div>
            	<div style="float: right; width: 33%; margin-right: -15px; padding-left: 10px;">
            		<p>" Puedo estudiar mi carrera pagando desde $1,500 al mes "</p>
            	</div>
            	
            </div>
        </div>
    </div>
</div>        
    </div>

</div>
<script language="javascript" type="text/javascript" src="wp-content/themes/Velvet/js/jquery.placeholder.js"></script>
<script>
 $(function() {
  // Invoke the plugin
  $('input, textarea').placeholder();
 });
</script>
</body>
</html>
