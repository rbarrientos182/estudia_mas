<?php 
require_once("php/clases/class.SQLServer.php");
$db = new MySQL();

$programa = NULL;
$universidad = NULL;
$ciudad = NULL;
$opcion = 0;

if(isset($_POST['lciudad'])){
	//echo 'lciudad';
	$programa = $_POST['lprograma'];
	$universidad = $_POST['luniversidad'];
	$ciudad = $_POST['lciudad'];
	$opcion = $_POST['lopcion'];
}
elseif(isset($_POST['lciudad2'])){
	//echo 'lciudad2';
	$programa = $_POST['lprograma2'];
	$universidad = $_POST['luniversidad2'];
	$ciudad = $_POST['lciudad2'];
	$opcion = $_POST['lopcion2'];
}

elseif(isset($_POST['lciudad3'])){
	//echo 'lciudad3';
	$programa = $_POST['lprograma3'];
	$universidad = $_POST['luniversidad3'];
	$ciudad = $_POST['lciudad3'];
	$opcion = $_POST['lopcion3'];
}

elseif(isset($_POST['lciudad4'])){
	//echo 'lciudad4';
	$programa = $_POST['lprograma4'];
	$universidad = $_POST['luniversidad4'];
	$ciudad = $_POST['lciudad4'];
	$opcion = $_POST['lopcion4'];
}
elseif(isset($_POST['ciudad'])){
	//echo 'ciudad';
	$programa = $_POST['programa'];
	$universidad = $_POST['universidad'];
	$ciudad = $_POST['ciudad'];
	if($_POST['opcion']!=""){
		$opcion = $_POST['opcion'];
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estudia Más</title>


<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

<!-- The 1140px Grid - http://cssgrid.net/ -->
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />

<!-- Your styles -->
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

<!-- Mi estilo -->
<link rel="stylesheet" href="css/estilo.css" type="text/css" media="screen" />

<!-- Theme Jquery UI -->
<link rel="stylesheet" href="css/jquery-ui-1.10.1.css" />

<!-- Validate theme -->
<link rel="stylesheet" href="css/validationEngine.jquery.css" />
<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->

<?php

if(isset($_GET['bandera'])){ 
	
	echo '<script type="text/javascript"> alert("Tienes que llenar los campos obligatarios para proceder con tu registro");</script>';

}
?>
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>

<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css'>


<!-- PERZONALIZACION DE LAS LISTAS//////////////////////// -->
    
<link rel="stylesheet" href="css/sample.css" />
<script src="js/jquery/jquery-1.8.2.min.js"></script>
<!-- Validate form -->
<script src="js/jquery/languages/jquery.validationEngine-es.js" type="text/javascript" charset="utf-8">
</script>
<script src="js/jquery/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
</script>
<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#registro").validationEngine();
		});

		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
</script>	

<!-- Jquery UI -->
<script src="js/jquery/jquery-ui-1.10.1.custom.js"></script>
<script>
  $(function() {
    $( "#fecha_nacimiento").datepicker({changeMonth: true,
      changeYear: true});
  });
</script>
<!-- <msdropdown> -->
<link rel="stylesheet" type="text/css" href="css/msdropdown/dd.css" />
<script src="js/msdropdown/jquery.dd.min.js"></script>
<!-- </msdropdown> -->

<!-- //PERZONALIZACION DE LAS LISTAS//////////////////////////// -->
<script type="text/javascript">

function cargarListCiudad(){
	
	var opc = $("input[name='tipo_estudios']:checked").val(); 
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
			  $('#ciudadd').empty();
			  $('#universidad').empty();
			  $('#universidadd').empty();
			  $('#programa').empty();
			  $('#programaa').empty();
			  //alert(datos);
			  var dataJson = eval(datos);
			  
			   $('#ciudad').append('<option value="">Seleccionar Ciudad</option>');
			   $('#ciudadd').append('<option value="">Seleccionar Ciudad</option>'); 
			   $('#universidad').append('<option value="">Seleccionar Universidad</option>');
			   $('#universidadd').append('<option value="">Seleccionar Universidad</option>'); 
			   $('#programa').append('<option value="">Seleccionar Programa</option>');
			   $('#programaa').append('<option value="">Seleccionar Programa</option>'); 
			  for(var i in dataJson){
				  //alert(dataJson[i].idestado + " _ " + dataJson[i].estado);
				  $('#ciudad').append('<option value="'+dataJson[i].idestado+'">'+dataJson[i].estado+'</option>');  
				  $('#ciudadd').append('<option value="'+dataJson[i].idestado+'">'+dataJson[i].estado+'</option>');  
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


function cargarListUni(lciudad,luniversidad,lprograma,tipo)
{
	//alert("la ciudad es: "+lciudad+" universidad: "+luniversidad+" tipo: "+tipo);
  var tipo = $("input[name='tipo_estudios']:checked").val(); 
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
			  $('#'+lprograma).append('<option value="">Seleccionar programa</option>'); 
			  
			  var dataJson = eval(datos);
			  
			   $('#'+luniversidad).append('<option value="">Seleccionar universidad</option>'); 
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
  var tipo = $("input[name='tipo_estudios']:checked").val();
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
			  
			   $('#'+lprograma).append('<option value="">Seleccionar programa</option>'); 
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

function asignarPrograma(programa)
{
	var valor = $('#'+programa).val();
	$('#'+programa+'h').val(valor);
}

function validarNum(campo){
	
	//alert('entro a validarNumer con el campo '+campo);
	
	var expresionRegular = /^[0-9]+$/;
	var cadena = $('#'+campo).val();
	var errorMessage = 'numero invalido';
	
	//alert(cadena);
	
	if (expresionRegular.test(cadena)) {
       return
    } else {
        //alert(errorMessage);
		cadena = cadena.substring(0,cadena.length-1);
		//alert(cadena);
        $('#'+campo).val(cadena);
		campo.focus();
    } 
}
</script>  
  
<script type="text/javascript">
function verifica()
{
  var medio = document.getElementById( 'medio' );
  
  if( medio.options[ medio.selectedIndex ].value > 2)
  {
    especificar.disabled = false;
  }
  else
  {
    especificar.disabled = true;
  }
}  
</script>



<script>
    function setupLabel() {
        if ($('.label_check input').length) {
            $('.label_check').each(function(){ 
                $(this).removeClass('c_on');
            });
            $('.label_check input:checked').each(function(){ 
                $(this).parent('label').addClass('c_on');
            });                
        };
        if ($('.label_radio input').length) {
            $('.label_radio').each(function(){ 
                $(this).removeClass('r_on');
            });
            $('.label_radio input:checked').each(function(){ 
                $(this).parent('label').addClass('r_on');
            });
        };
    };
    $(document).ready(function(){
        $('body').addClass('has-js');
        $('.label_check, .label_radio').click(function(){
            setupLabel();
        });
        setupLabel(); 
    });
    
    
    $(document).ready(function(){	
    
        if (!$.browser.opera) {
    
            $('select.select').each(function(){
                var title = $(this).attr('title');
                if( $('option:selected', this).val() != ''  ) title = $('option:selected',this).text();
                $(this)
                    .css({'z-index':10,'opacity':0,'-khtml-appearance':'none'})
                    .after('<span class="select">' + title + '</span>')
                    .change(function(){
                        val = $('option:selected',this).text();
                        $(this).next().text(val);
                        })
            });
    
        };
    		
    });
    
</script>
<style>
.has-js .label_check,
.has-js .label_radio { padding-left: 22px; padding-right:30px;}
.has-js .label_radio { background: url(imagenes/radio-off.png) no-repeat; }
.has-js label.r_on { background: url(imagenes/radio-on.png) no-repeat; }
.has-js .label_check input,
.has-js .label_radio input { position: absolute; left: -9999px; }
</style>



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

<body>

<form id="registro" action="php/guardarContacto.php" class="formular" method="post" >

	<header>
		<div class="container">
			<div class="row">
				<div class="twelvecol"> <img src="imagenes/header.png" style="width: 100%;"/> </div>
			</div>
		
		</div>
	</header>


	<div class="container">
		<div class="row" style="background: url(imagenes/bg_content.png);">
		
			<div style="clear:both; padding:30px;"></div>
			<div class="onecol"></div>
			
			<div class="tencol">
			
			 	<table>
			 		<tr>
			 			<td colspan="3" style="padding-bottom: 20px;"><div class="datospersonales"> DATOS PERSONALES</div></td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Nombre(s):</label></td>
			 			<td><input name="nombre" id="nombre" type="text" size="40" maxlength="100" class="validate[required] text-input"  placeholder="Nombre(s)"/>
                        	<input name="valor" id="valor" type="hidden" value="guardar"/>
                        </td>
			 			<td style="padding-left: 100px;">
			 				<label> <strong class="obligatorio">*</strong> Genero: </label>
			 				&nbsp;&nbsp;&nbsp;
			 				<label class="label_radio">
			 				<input name="genero" id="genero" type="radio" value="mujer" checked="checked"/> F </label>
			 				&nbsp;&nbsp;&nbsp; 
			 				<label class="label_radio">
			 				<input name="genero" id="genero" type="radio"  value="hombre" /> M </label> 
			 			</td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Apellido Paterno: </label></td>
			 			<td><input name="apellidop" id="apellidop" type="text" size="40" maxlength="100" class="validate[required] text-input"   placeholder="Apellido Paterno"/></td>
			 			<td style="padding-left: 100px;">
			 				<label> <strong class="obligatorio">*</strong> Nacionalidad: </label>
			 				<input name="nacionalidad" id="nacionalidad" type="text" maxlength="70" size="40" class="validate[required] text-input"  placeholder="Nacionalidad" value="Mexicana" readonly="readonly"/>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Apellido Materno: </label></td>
			 			<td><input name="apellidom" id="apellidom" type="text" size="40" maxlength="100" class="validate[required] text-input"  placeholder="Apellido Materno" /></td>
			 			<td style="padding-left: 100px;">
			 				<label> <strong class="obligatorio">*</strong> Fecha de nacimiento: </label>
			 				<input type="text" id="fecha_nacimiento" name="fecha_nacimiento" class="validate[required] text-input" readonly="readonly"/> 
			 			</td>
			 		</tr>
			 		<tr style="height: 50px;"></tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Calle: </label></td>
			 			<td><input name="calle" id="calle" type="text" size="40" maxlength="100" class="validate[required] text-input"  placeholder="Calle"/></td>
			 			<td style="padding-left: 100px;">
			 				<label><strong class="obligatorio">*</strong> No. Exterior: </label>
			 				 <input name="numex" id="numex" type="text" class="validate[required] text-input" maxlength="70" value="" size="10"  />
			 				 
			 				<label> No. Interior: </label>
			 				 <input name="numin" id="numin" type="text" maxlength="70" value="" size="10" />
			 			</td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Colonia: </label></td>
			 			<td><input name="colonia" id="colonia" type="text" size="40" maxlength="70" class="validate[required] text-input"   placeholder="Colonia"/></td>
			 			<td>&nbsp;</td>
			 		</tr>
			 		<tr>
			 			<td><label>Municipio o Delegación: </label></td>
			 			<td><input name="municipio" id="municipio" type="text" maxlength="70" size="40" placeholder="Municipio o Delegación"/></td>
			 			<td style="padding-left: 100px;">
			 				<label><strong class="obligatorio">*</strong> Estado: </label>
			 				<select id="estado" name="estado" style="width:120px" class="validate[required]">
			 					<option value="">Seleccionar</option>
			 					<option value="Aguascalientes">Aguascalientes</option>	
			 					<option value="Baja California Norte">Baja California Norte</option>	
			 					<option value="Baja California Sur">Baja California Sur</option>	
			 					<option value="Campeche">Campeche</option>	
			 					<option value="Coahuila">Coahuila</option>	
			 					<option value="Chiapas">Chiapas</option>	
			 					<option value="Chihuahua">Chihuahua</option>	
			 					<option value="Durango">Durango</option>	
			 					<option value="Estado de México">Estado de México</option>	
			 					<option value="Guanajuato">Guanajuato</option>	
			 					<option value="Guerrero">Guerrero</option>	
			 					<option value="Hidalgo">Hidalgo</option>	
			 					<option value="Jalisco">Jalisco</option>	
			 					<option value="Michoacán">Michoacán</option>	
			 					<option value="Morelos">Morelos</option>	
			 					<option value="México, D.F.">México, D.F.</option>	
			 					<option value="Nayarit">Nayarit</option>	
			 					<option value="Nuevo León">Nuevo León</option>	
			 					<option value="Oaxaca">Oaxaca</option>	
			 					<option value="Puebla">Puebla</option>	
			 					<option value="Querétaro">Querétaro</option>	
			 					<option value="Quintana Roo">Quintana Roo</option>	
			 					<option value="San Luis Potosí">San Luis Potosí</option>	
			 					<option value="Sinaloa">Sinaloa</option>	
			 					<option value="Sonora">Sonora</option>	
			 					<option value="Tabasco">Tabasco</option>	
			 					<option value="Tamaulipas">Tamaulipas</option>	
			 					<option value="Tlaxcala">Tlaxcala</option>	
			 					<option value="Veracruz">Veracruz</option>	
			 					<option value="Yucatán">Yucatán</option>	
			 					<option value="Zacatecas">Zacatecas</option>	
			 				</select>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">* </strong>C.P.: </label></td>
			 			<td><input name="cp" id="cp" type="text" size="40" maxlength="5" onkeyup="validarNum('cp')" class="validate[required,minSize[5]] text-input"  placeholder="C.P."/></td>
			 			<td>&nbsp;</td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Tel. Casa: </label></td>
			 			<td><input name="telcasa" id="telcasa" type="tel" size="40"  maxlength="10" onkeyup="validarNum('telcasa')" class="validate[required,minSize[10]] text-input" placeholder="Tel. Casa"/>
			 				<br />
			 				<span style="font-size: 12px; float: right;">Incluir LADA</span>
			 			</td>
			 			<td style="padding-left: 100px;">
			 				<label> Tel. trabajo: </label>
			 				<input type="tel" id="tel_trabajo" name="tel_trabajo"   placeholder="Teléfono de trabajo" onkeyup="validarNum('tel_trabajo')" class="validate[minSize[10]] text-input" maxlength="10" style="width: 70%;"/>
			 				<br />
			 				<span style="font-size: 12px; float: right;">Incluir LADA</span>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td><label><strong class="obligatorio">*</strong> Correo electrónico: </label></td>
			 			<td><input name="correo" id="correo" type="text" size="40" maxlength="70" class="validate[required,custom[email]] text-input"  placeholder="Correo electrónico"/></td>
			 			<td style="padding-left: 100px;">
			 				<label><strong class="obligatorio">*</strong> Tel. celular: </label>
			 				<input type="tel" id="tel_cel" name="tel_cel"  placeholder="Teléfono celular" onkeyup="validarNum('tel_cel')" class="validate[required,minSize[10]] text-input" maxlength="10" style="width: 70%;"/>
			 				<br />
			 				<span style="font-size: 12px; float: right;">Incluir LADA</span>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td><label> Correo electrónico alternativo: </label></td>
			 			<td><input name="correo2" id="correo2" type="text" size="40" maxlength="70" class="validate[custom[email]] text-input" placeholder="Correo electrónico alternativo"/><br /></td>
			 			<td>&nbsp;</td>
			 		</tr>
			 		<tr>
			 			<td colspan="2">
			 				<div style="padding: 10px;"></div>
			 				<select id="estudios" name="estudios">
			 				   <option value="estudios">¿Cuáles son tus últimos estudios?</option>
			 				   <option value="prepa">Preparatoria/Bachillerato</option>
			 				   <option value="licenciatura">Licenciatura</option>
			 				   <option value="maestria">Maestría</option>
			 				</select>
			 			</td>
			 			<td>&nbsp;</td>
			 		</tr>
			 		
			 		<tr style="height: 80px;"></tr>
			 		<tr>
			 			<td colspan="3"><div class="datospersonales">ESTUDIOS</div></td>
			 		</tr>
			 		<tr>
			 			<td colspan="3" style="padding-top: 30px; padding-bottom: 10px;"><label> ¿Que quieres estudiar?  </label></td>
			 		</tr>
			 		<tr>
			 			<td colspan="3">
				 			<label>
				 			  <input type="radio" name="tipo_estudios" value="0" id="tipo_estudios_0" onChange="cargarListCiudad()" <?php if($opcion=='0'){ echo 'checked="checked"'; } ?> />
				 			  Licenciatura</label>
				 			<label>
				 			  <input type="radio" name="tipo_estudios" value="1" id="tipo_estudios_1" onChange="cargarListCiudad()" <?php if($opcion=='1'){ echo 'checked="checked"'; } ?>/>
				 			  Maestría</label>
				 			<label>
				 			  <input type="radio" name="tipo_estudios" value="2" id="tipo_estudios_2" onChange="cargarListCiudad()" <?php if($opcion=='2'){ echo 'checked="checked"'; } ?>/>
				 			  Curso / Diplomado</label>
				 			<!--<label>
				 			  <input type="radio" name="tipo_estudios" value="3" id="tipo_estudios_3" onChange="cargarListCiudad()" <?php if($opcion=='3'){ echo 'checked="checked"'; } ?>/>
				 			  Especialidad</label>
				 			<br />-->
				 			<label>
				 			  <input type="radio" name="tipo_estudios" value="4" id="tipo_estudios_4" onChange="cargarListCiudad()" <?php if($opcion=='4'){ echo 'checked="checked"'; } ?>/>
				 			  Programa en Línea</label>
			 			  </td>
			 		</tr>
			 		
			 		<?php 
			 		 $consulta = "SELECT estado.estado, estado.idestado FROM estado INNER JOIN universidad ON estado.idestado = universidad.idestado
			 					   INNER JOIN programas_has_universidad ON universidad.iduniversidad = programas_has_universidad.iduniversidad
			 					   WHERE estado.estatus = 1 AND universidad.estatus = 1 AND programas_has_universidad.estatus = 1 AND tipo = ".$opcion." GROUP BY estado.idestado, estado.estado ORDER BY estado.estado";
			 		 $consulta2 = $consulta;
			 		 
			 		 $resultado = $db->consulta($consulta);
			 		 
			 		 $row = $db->fetch_assoc($resultado);
			 		 
			 		 //do{
			 			// echo $row['idestado'].'-'.$row['estado'];
			 		 //}while($row = $db->fetch_assoc($resultado));
			 		 
			 		 $resultado2 = $db->consulta($consulta2);
			 		  
			 		 $row2 = $db->fetch_assoc($resultado2);
			 		?> 
			 		<tr>
			 			<td colspan="3" style="padding-top: 30px; padding-bottom: 10px;"><label> Opción 1 </label></td>
			 		</tr>
			 		
			 		<tr>
			 			<td>
			 				<select style="width:140PX;" name="ciudad" id="ciudad" onchange="cargarListUni('ciudad','universidad','programa','tipo_estudios')" class="validate[required]">
			 				    <option value="">Seleccionar ciudad</option>
			 				    <?php 
			 					do{?>
			 				    <option value="<?php echo $row['idestado']?>" <?php if($row['idestado']==$ciudad){ echo 'selected="selected"'; }?>><?php  echo utf8_encode($row['estado']);?></option>
			 					<?php 
			 					}while($row = $db->fetch_assoc($resultado));
			 					?>
			 				</select>
			 			</td>
			 			<td>
			 				<?php 
			 				if($universidad!=NULL)
			 				{
			 					$consulta3 = "SELECT u.iduniversidad, u.nombre FROM programas_has_universidad pu, universidad u WHERE pu.iduniversidad = u.iduniversidad AND u.idestado = ".$ciudad." AND pu.tipo = ".$opcion."  AND pu.estatus = 1 GROUP BY u.iduniversidad,u.nombre ORDER BY u.nombre";
			 					$resultado3 = $db->consulta($consulta3);
			 					$row3 = $db->fetch_assoc($resultado3);
			 				}
			 				?>
			 				<select name="universidad" id="universidad" style="width:160px" onchange="cargarListPro('universidad','programa','tipo_estudios')" class="validate[required]">
			 					<option value="">Seleccionar universidad</option>
			 				    <?php
			 					if($universidad!=NULL)
			 					{
			 						do{
			 					?>
			 				    	<option value="<?php echo $row3['iduniversidad']; ?>" <?php if($row3['iduniversidad']==$universidad){ echo 'selected="selected"'; }?>><?php echo utf8_encode($row3['nombre']); ?></option>
			 				    <?php
			 						}while($row3 = $db->fetch_assoc($resultado3));
			 					}
			 					 ?>
			 				</select>
			 			</td>
			 			<td>
			 				<?php
			 				if($programa!=NULL)
			 				{
			 					$consulta4 = "SELECT pr.idprogramas, pr.programas FROM programas_has_universidad pu, programas pr WHERE pu.idprogramas = pr.idprogramas AND iduniversidad = ".$universidad." AND tipo = ".$opcion."  AND pr.estatus = 1 ORDER BY programas";
			 					$resultado4 = $db->consulta($consulta4);
			 					$row4 = $db->fetch_assoc($resultado4);
			 				}
			 				?>
			 				<select name="programa" id="programa" class="validate[required]">
			 					<option value="">Seleccionar programa</option>
			 				    <?php
			 					if($programa!=NULL)
			 					{ 
			 						do{
			 					?>
			 				    	<option value="<?php echo $row4['idprogramas'];?>" <?php if($row4['idprogramas']==$programa){ echo 'selected="selected"'; }?>><?php echo utf8_encode($row4['programas']);?></option>
			 				    <?php 
			 						}while($row4 = $db->fetch_assoc($resultado4));
			 					}?>
			 				</select>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td colspan="3" style="padding-top: 30px; padding-bottom: 10px;"><label> Opción 2 </label></td>
			 		</tr>
			 		<tr>
			 			<td>
			 				<select name="ciudadd" id="ciudadd" onchange="cargarListUni('ciudadd','universidadd','programaa','tipo_estudios')" class="validate[required]">
			 					<option value="">Seleccionar ciudad</option>
			 				    <?php
			 					do{?>
			 				    <option value="<?php echo $row2['idestado']?>"><?php  echo utf8_encode($row2['estado']);?></option>
			 					<?php 
			 					}while( $row2 = $db->fetch_assoc($resultado2));
			 					?>
			 				</select>
			 			</td>
			 			<td>
			 				<select name="universidadd" id="universidadd" style="width:160px" onchange="cargarListPro('universidadd','programaa','tipo_estudios')" class="validate[required]">
			 				  <option value="">Seleccionar universidad</option>
			 				</select>
			 			</td>
			 			<td>
			 				<select name="programaa" id="programaa" class="validate[required]">
			 				  <option value="">Seleccionar programa</option>
			 				</select>
			 			</td>
			 		</tr>
			 		<tr>
			 			<td colspan="3" style="padding-top: 30px; padding-bottom: 10px;"><label> Opción 3 </label></td>
			 		</tr>
			 		<tr>
			 			<td colspan="3">
			 				<label>Sugerencias: </label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="sugerencia1" maxlength="400" name="sugerencia1" placeholder="Universidad"/> y <input type="text" id="sugerencia2" maxlength="400" name="sugerencia2" placeholder="Programa"/>
			 			</td>
			 		</tr>
			 	</table>
				<div style="padding:30px;"></div>
			</div>
		</div>
	</div>



	<footer>
		<div class="container">
			<div class="row foter"> 
				<div style="padding:30px;"></div>
				<div class="onecol"></div>
				
				<div class="tencol">	

					<label> Medios por los que se entero de esta convocatoria </label><br />
					<select id="medio" name="medio"  onchange="verifica();">
					  <option value="0">Seleccionar</option>
					  <option value="1">Amigo</option>
					  <option value="3">Empresa</option>
					  <option value="4">Internet</option>
					  <option value="2">OCC</option>
					  <option value="5">Promotor Estudia Más</option>
					  <option value="6">Redes Sociales</option>
					  <option value="7">Universidad</option>
					  <option value="8">Otro</option>
					</select>
					
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<label>especificar: </label> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input name="especificar" type="text" disabled="disabled" id="especificar" />
					
					<input style="float: right; margin-right: 100px;" type="image" src="imagenes/btn_enviar.png"/>  

				</div>
			</div>
		</div>  
	</footer>




</form>

</body>
</html>
