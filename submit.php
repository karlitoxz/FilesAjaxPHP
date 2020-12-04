<?php 

class controladorFormularios{

	//Formulario p08opcion--------------------------------------------------------------------------------
		static public function ctrFormP08(){
			$comentariosP08 = $_POST['comentariosP08'];
			//print_r($_POST);
    		//print_r($_FILES);

			if (isset($_POST['comentariosP08'])) {
				echo (' Comentario: ');
				echo($_POST['comentariosP08']);
			}
			if (isset($_FILES['filesP08'])) {
				echo (' FILE: ');
				var_dump($_FILES['filesP08']);
				
				$cantidadArchivos = count($_FILES["filesP08"]["name"]);
				echo ('Cantidad de archivos: ');
				echo $cantidadArchivos;
		//Guardar los archivos---------------------------------------------:		
			foreach ($_FILES["filesP08"]['name'] as $key => $name) {
		
				if($_FILES["filesP08"]["name"][$key]) {
					$filename = $_FILES["filesP08"]["name"][$key]; //Obtenemos el nombre original del archivo
					$source = $_FILES["filesP08"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
					
					$directorio = 'docs/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
					
					//Validamos si la ruta de destino existe, en caso de no existir la creamos
					if(!file_exists($directorio)){
						mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
					}
					
					$dir=opendir($directorio); //Abrimos el directorio de destino
					$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
					
					//Movemos y validamos que el archivo se haya cargado correctamente
					//El primer campo es el origen y el segundo el destino
					if(move_uploaded_file($source, $target_path)) {	
						echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
						} else {	
						echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
					}
					closedir($dir); //Cerramos el directorio de destino
				}
		
			}
		//Guardar los archivos---------------------------------------------:
				
			}
		}
	//Formulario p08opcion--------------------------------------------------------------------------------

}

//AutoLoad Ajax-----------------------------------------------------
if(isset($_POST['form']) && $_POST['form'] == 'ctrFormP08'){
	$resp =  controladorFormularios::ctrFormP08();
return $resp;
}

//AutoLoad Ajax-----------------------------------------------------
?>