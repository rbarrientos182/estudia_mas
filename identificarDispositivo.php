<?php
 
   $es_movil=FALSE; //Aquí se declara la variable falso o verdadero XD
   $usuario = $_SERVER['HTTP_USER_AGENT']; //Con esta leemos la info de su navegador
 
   $usuarios_moviles = "Android, AvantGo, Blackberry, Blazer, Cellphone, Danger, DoCoMo, EPOC, EudoraWeb, Handspring, HTC, Kyocera, LG, MMEF20, MMP, MOT-V, Mot, Motorola, NetFront, Newt, Nokia, Opera Mini, Palm, Palm, PalmOS, PlayStation Portable, ProxiNet, Proxinet, SHARP-TQ-GX10, Samsung, Small, Smartphone, SonyEricsson, SonyEricsson, Symbian, SymbianOS, TS21i-10, UP.Browser, UP.Link, WAP, webOS, Windows CE, hiptop, iPhone, iPod, portalmmm, Elaine/3.0, OPWV"; //En esta cadena podemos quitar o agregar navegadores de dispositivos moviles, te recomiendo que hagas un echo $_SERVER['HTTP_USER_AGENT']; en otra pagina de prueba y veas la info que arroja para que despues agregues el navegador que quieras detectar
 
   $navegador_usuario = explode(',',$usuarios_moviles);
 
   foreach($navegador_usuario AS $navegador){ //Este ciclo es el que se encarga de detectar el navegador y devolver un TRUE si encuentra la cadena
      if(eregi(trim($navegador),$usuario)){
         $es_movil=TRUE;
      }
   }
 
   if($es_movil==TRUE){
      header('Location:http://Aquí va la URL de tu web movil');
   }
   else{
      header('Location:http://Aquí va la URL de tu web normal');
   }
 
?>