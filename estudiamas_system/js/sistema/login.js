// JavaScript Document

$(document).ready(
	function ()
	{
		
		levantamosusuarioclave();
		//delete localStorage.nombre;
		$("#btn_ingresar").click(guardarusuarioyclave);		
	}
);


function guardarusuarioyclave()
{
	//alert("hola mundo");
	var bandera = 0;
	var usuario = $("#usuario").val();
	var clave = $("#clave").val();
	
	if($("#check_guardar").is(':checked')) 
	{
		    
		   localStorage.v_usuairo_sisventas = usuario;
		   localStorage.v_clave_sisventas = clave;
		   
            
     } 
	 else 
	 {  
          delete localStorage.v_usuairo_sisventas;
		  delete localStorage.v_clave_sisventas;
     } 
	 
	 loguearse(usuario,clave) 
}


function levantamosusuarioclave()
{
	
	if(localStorage.v_usuairo_sisventas)
	{
		$("#usuario").val(localStorage.v_usuairo_sisventas);
		$("#clave").val(localStorage.v_clave_sisventas);
		$("#check_guardar").attr('checked', true);
	}
	
}


function loguearse(usuario,clave)
{
	//alert("usuario: "+usuario+" claves: "+clave)
	$.ajax({
		type: "POST",
		data: "usuario="+usuario+"&clave="+clave,
		url:"loguearse.php",
		success: function(datos){
			//alert(datos);
			if(datos==0)
			{
				$("#d_aviso").removeClass("notification-wrap success");
				$("#d_aviso").addClass("notification-wrap failuer");
				$("#d_aviso").html('<span class="icon-failure">Fallo:</span> Oops lo sentimos.<p>Asegurese que su usuario y/o contrase&ntilde;a sean correctas.</p>');
				//$("#d_aviso").show(500);
				$("#d_aviso").slideDown(1000);
				 setTimeout(function(){
				$("#d_aviso").slideUp(2000);
				 },3000);
			}
			else
			{
				$("#d_aviso").removeClass("notification-wrap failuer");
				$("#d_aviso").addClass("notification-wrap success");
				$("#d_aviso").html('<span class="icon-success">&Eacute;xito:</span>Bienvenido<p>Iniciando Sesi&oacute;n</p>');
				//$("#d_aviso").show(500);
				$("#d_aviso").slideDown(1000);
				 setTimeout(function(){
				 	$("#d_aviso").slideUp(2000);
				  		setTimeout(function(){
							window.location.href = "dashboard.php"
				  		},3000);
				 },3000);
			}
	   	},
		error: function(objeto, quepaso, otroobj){
            //alert("Estas viendo esto por que fallé");
            alert("Pasó lo siguiente: "+quepaso+" "+otroobj);
        },
        });
}

function agregarProgramasUni(nombre,div){
	
	var valor = $('#'+nombre).val();
	
	$.ajax({
		type: "POST",
		data: "valor="+valor,
		url:"agregarProgramaUniversidad.php",
		success: function(datos){	
		$("#"+div).html(datos);
	   	},
		error: function(objeto, quepaso, otroobj){
            //alert("Estas viendo esto por que fallé");
            alert("Pasó lo siguiente: "+quepaso+" "+otroobj);
        },
        });

}

function eliminarCamposSelect(nombre,valor){

	$("#"+nombre).find("option[value='"+valor+"']").remove();

}

function borrarPrograma(campo,div,valor,nombre){
	
	//alert("el valor es: "+valor+" y el nombre es: "+nombre);
	
	$.ajax({
		type: "POST",
		data: "valor="+valor,
		url:"quitarProgramaUniversidad.php",
		success: function(datos){	
		$("#"+div).html(datos);
	   	},
		error: function(objeto, quepaso, otroobj){
            //alert("Estas viendo esto por que fallé");
            alert("Pasó lo siguiente: "+quepaso+" "+otroobj);
        },
        });
}

function agregarCamposSelect(campo,valor,nombre){
	
	
	//alert(campo+" "+valor+" "+nombre);
	$('#'+campo).append('<option value="'+valor+'" selected="selected">'+nombre+'</option>');  

}


function cambiarEstatus(campo,valor,valor2,div){

	//alert('el campo es '+campo+' y el valor es: '+valor)
	
	var tipo = $('#'+campo).val();
	
	//alert('el tipo es: '+tipo);
	
	$.ajax({
		type: "POST",
		data: "tipo="+tipo+"&valor="+valor+"&valor2="+valor2,
		url:"cambiarTipoProgramaUniversidad.php",
		success: function(datos){	
		$("#"+div).html(datos);
	   	},
		error: function(objeto, quepaso, otroobj){
            //alert("Estas viendo esto por que fallé");
            alert("Pasó lo siguiente: "+quepaso+" "+otroobj);
        },
        });
	
}
function borrarSesion(){

	//alert("borrarSesion");
}

