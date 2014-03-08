<?php 
require_once("clases/class.DataBase1.php");
$db = new DataBase();

/*if($_POST['nombre']!='' && $_POST['apellidop']!='' && $_POST['apellidom']!='' && $_POST['fecha_nacimiento']!='' && $_POST['colonia']!='' && $_POST['cp']!='' 
	&& $_POST['telcasa']!='' && $_POST['correo']!='' && $_POST['numex']!='' && $_POST['tel_cel']!='')
{
*/

$usuario = $_SERVER['HTTP_USER_AGENT']; //Con esta leemos la info de su navegador

$nombre = utf8_decode($_POST['nombre']);//1

$apellidop = utf8_decode($_POST['apellidop']);//2

$apellidom = utf8_decode($_POST['apellidom']);//3

$calle = utf8_decode($_POST['calle']);//3

$genero = $_POST['genero'];//4

$fecha_nacimiento = $_POST['fecha_nacimiento'];

$colonia = utf8_decode($_POST['colonia']);//7

$municipio = utf8_decode($_POST['municipio']);//8º

$cp = $_POST['cp'];//9

$telcasa = $_POST['telcasa'];//10

$correo = $_POST['correo'];//11

$correo2 = $_POST['correo2'];//12

$estudios = $_POST['estudios'];//13

$numex = $_POST['numex'];//

$numin = $_POST['numin'];//

$estado = utf8_decode($_POST['estado']);//

$tel_trabajo = $_POST['tel_trabajo'];//

$tel_cel = $_POST['tel_cel'];//14

$estudiar = $_POST['tipo_estudios'];//15

$ciudad = $_POST['ciudad'];//16

$universidad = $_POST['universidad'];//16
//echo '<br>';
$programa = $_POST['programa'];//16
//echo '<br>';
$ciudadd = $_POST['ciudadd'];//17
//echo '<br>';
$universidadd = $_POST['universidadd'];//17
//echo '<br>';
$programaa = $_POST['programaa'];//17
//echo '<br>';
$medio = $_POST['medio'];//18

$sugerencia1 = utf8_decode($_POST['sugerencia1']);//19

$sugerencia2 = utf8_decode($_POST['sugerencia2']);//19
 
 
if($estudiar==0){
	$tipoEstudio = 'Licenciatura';
}

else if($estudiar==1){
	$tipoEstudio = utf8_decode('Maestría');
}

else if($estudiar == '2'){
	$tipoEstudio = 'Curso - Diplomado';
}

else if($estudiar=='3'){
	$tipoEstudio = 'Especialidad';
}

else{
	$tipoEstudio = utf8_decode('En Línea');
}




if($medio==0){
	$medio = 'Seleccionar';
}

else if($medio==1){
	$medio = 'Amigo';
}

else if($medio == '2'){
	$medio = 'Empresa';
}

else if($medio=='3'){
	$medio = 'Internet';
}

else if($medio=='4'){
	$medio = 'OCC';
}

else if($medio=='5'){
	$medio = utf8_decode('Promotor Estudia Más');	
}

else if($medio=='6'){
	$medio = 'Redes Sociales';
}

else if($medio=='7'){
	$medio = 'Universidad';
}

else{
	$medio = 'Otro';
}

$nom_programa = 'No solicito programa';
$nom_programa2 = 'No solicito programa';
$nom_ciudad = 'No solicito ciudad';
$nom_ciudad2 = 'No solicito ciudad';
$nom_universidad = 'No solicito universidad';
$nom_universidad2 = 'No solicito universidad';


if($programa!=0){
	$nom_programa = $db->obtenerNombrePrograma($programa);
}
if($ciudad!=0){
	$nom_ciudad = $db->obtenerNombreCiudad($ciudad);
}
if($universidad!=0){
	$nom_universidad = $db->obtenerNombreUniversidad($universidad);
}
if($programaa!=0){
	$nom_programa2 = $db->obtenerNombrePrograma($programaa);
}
if($ciudadd!=0){
	$nom_ciudad2 = $db->obtenerNombreCiudad($ciudadd);
}
if($ciudadd!=0){
	$universidadd = $db->obtenerNombreUniversidad($universidadd);
}

$es_movil="Es un dispositivo de escritorio"; //Aquí se declara la variable falso o verdadero XD
	
$usuarios_moviles = "Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC, EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt, Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10, Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser, UP.Link, WAP, webOS, Windows CE, hiptop,iPad, iPhone, iPod, portalmmm, Elaine/3.0, OPWV"; //En esta cadena podemos quitar o agregar navegadores de dispositivos moviles, te recomiendo que hagas un echo $_SERVER['HTTP_USER_AGENT']; en otra pagina de prueba y veas la info que arroja para que despues agregues el navegador que quieras detectar
 
$navegador_usuario = explode(',',$usuarios_moviles);
 
foreach($navegador_usuario AS $navegador){ //Este ciclo es el que se encarga de detectar el navegador y devolver un TRUE si encuentra la cadena
   if(eregi(trim($navegador),$usuario)){
         $es_movil=utf8_decode("ES un dipositivo móvil");
   }
}

$consulta = "INSERT INTO contacto (nombre,paterno,materno,calle,colonia,municipio,cp,tel,correo,correo_alternativo,genero,fecha_nacimiento,num_exterior,num_interior,estado,tel_trabajo,tel_celular,opcion1,opcion2,opcion3,medio,fecha_creacion,tipo_solicitud,dispositivo) 
                              	 VALUES('$nombre','$apellidop','$apellidom','$calle','$colonia','$municipio','$cp','$telcasa','$correo','$correo2','$genero','$fecha_nacimiento','$numex','$numin','$estado','$tel_trabajo','$tel_cel','$nom_ciudad'+' | '+'$nom_universidad'+' | '+'$nom_programa'+' | '+'$tipoEstudio','$nom_ciudad2'+' | '+'$nom_universidad2'+' | '+'$nom_programa2'+' | '+'$tipoEstudio','$sugerencia1'+' | '+'$sugerencia2','$medio',GETDATE(),'$tipoEstudio','$es_movil')";
$db->consulta($consulta);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Envio Correcto</title>
</head>

<body>
<center>
<img src="../imagenes/pantalla_gracias.png" width="1024" height="509" />
</center>
</body>
</html>
<?php 
/*}
else{
	header("Location: ../index.php?bandera='1'");
}*/
?>