<?php 
require_once('class.Sesion.php');

class Programas {
	
	private $nombreSesion = 'programasUni';
	private $sesion;
	
	
	
	
	function __construct()
	{
		$this->sesion = new Sesion();	
	
	}
	
	public function mostrarProgramas (){
		?>
        <table>
						<thead>
						<tr>
						  <th colspan="4" align="right">
                          </th>
						  </tr>
						<tr>
							<th>Programa</th>
							<th>
								 Tipo
							</th>
							<!--<th>
								 Estatus
							</th>-->
							<th>
								 Acción
							</th>
						</tr>
						</thead>
                        
						<tbody>
                        <?php 
							if(isset($_SESSION[$this->nombreSesion]))
							{  
								foreach($_SESSION[$this->nombreSesion] as $k  => $v)
								{  
						?>
						<tr>
                          <td><input name="id-<?php echo $k;?>" type="hidden" id="id-<?php echo $k;?>" value="<?php echo $v[0];?>"/><?php echo utf8_encode($v[1]);?></td>
                          <td>
                          	<select id="tipo-<?php echo $k;?>" name="tipo-<?php echo $k;?>" onchange="cambiarEstatus('<?php echo 'tipo-'.$k?>','<?php echo $k;?>','<?php echo $v[0];?>','d_programasUni')">
                            	<option value="0" <?php if($v[2]=='0'){ echo 'selected';} ?>>Licenciatura</option>
                                <option value="1"<?php if($v[2]=='1'){ echo 'selected';} ?>>Maestría</option>
                                <option value="2"<?php if($v[2]=='2'){ echo 'selected';} ?>>Curso/Diplomado</option>
                                <option value="4"<?php if($v[2]=='4'){ echo 'selected';} ?>>En Línea</option>
                            </select>
                          </td>
                          <!--<td class="center"></td>-->
                          <td class="center">
                          	<a class="action-icons c-delete"  onclick="borrarPrograma('idprogramas','d_programasUni','<?php echo $k?>','<?php echo utf8_encode($v[0]);?>')" title="Borrar">Borrar</a>
                          </tr>
                         <?php 
						 	
								}
							}
							else{
						 ?> 
                         	<tr colspan="3">
                            	<td>
                                	No hay ningún registro
                                </td>
                            </tr>
                         <?php 
								}
						 ?>
						</tbody>
						
                        <tfoot>
						<tr>
							<th>Programa</th>
							<th>Tipo</th>
							<!--<th>Estatus</th>-->
							<th>Acción</th>
						</tr>
						</tfoot>
						</table>
	
	<?php	
	
	}
	/*** Fin de mostrarProgramas ***/
	
	
	public function agregarProgramas($idprogramas,$programa)
	{
	
		if($idprogramas)
		{ 
		   if(!isset($_SESSION[$this->nombreSesion]))
		   {  
			  $contador = 0;
			  $this->sesion->crearSesion($this->nombreSesion,NULL);
			  $_SESSION[$this->nombreSesion][$contador] = array($idprogramas, $programa, 0);
		   }
		   else
		   {  
		   		$contador = count($_SESSION[$this->nombreSesion]);
			
				$_SESSION[$this->nombreSesion][$contador] = array($idprogramas,$programa, 0);
				  
		   }  
		}
		
		
	}
	/*** Fin de agregarProgramas ***/
	
	
	public function quitarProgramas($contador)
	 {
		  if (isset($_SESSION[$this->nombreSesion]))
		  {
				foreach($_SESSION[$this->nombreSesion] as $k => $v)
				{ 
				  if (isset($contador))
				   {
				        unset ($_SESSION[$this->nombreSesion][$contador]);
				   }
				   
				}
		  } 
		  
	 }
	 /*** Fin de quitarProgramas ***/
	 
	 public function cambiarTipoPrograma($contador,$idprogramas,$nombre,$tipo){
		 		 	 
		  if (isset($_SESSION[$this->nombreSesion]))
		  {
				foreach($_SESSION[$this->nombreSesion] as $k => $v)
				{ 
				  if (isset($contador))
				   {
					    $_SESSION[$this->nombreSesion][$contador] = array($idprogramas,$nombre, $tipo);
				   }				   
				}
		  } 	 
	} /*** Fin de cambiarTipoPrograma ***/
	
	public function getNombreSesion(){
		
			return $this->nombreSesion;
	}/*** Getter para el cambiarTipoPrograma**/
	
}
?>