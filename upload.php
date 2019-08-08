<?php

$id= $_POST['id'];
echo "el ID del libro es $id";


	// Configuraci�n
	$folder = "imagenproducto/"; // Carpeta a la que queremos subir los archivos
	$maxlimit = 3500000; // M�ximo l�mite de tama�o (en bits), menos de 1mb
	$allowed_ext = "jpg,png,gif,webp,jpeg"; // Extensiones permitidas (usar una coma para separarlas)
	$overwrite = "yes"; // Permitir sobreescritura? (yes/no)

	$match = ""; 
	$filesize = $_FILES['userfile']['size']; // toma el tama�o del archivo
	$filename = strtolower($_FILES['userfile']['name']); // toma el nombre del archivo y lo pasa a min�sculas


	if(!$filename || $filename==""){ // mira si no se ha seleccionado ning�n archivo
	   $error = "- Ning�n archivo selecccionado para subir.<br>";
	}elseif(file_exists($folder.$filename) && $overwrite=="no"){ // comprueba si el archivo existe ya
	   $error = "- El archivo <b>$filename</b> ya existe<br>";
	}

	// comprobar tama�o de archivo
	if($filesize < 1){ // el archivo est� vac�o
	   $error .= "- Archivo vac�o.<br>";
	}elseif($filesize > $maxlimit){ // el archivo supera el m�ximo
	   $error .= "- Este archivo supera el m�ximo tama�o permitido.<br>";
	}

	$file_ext = preg_split("/\./",$filename); 
	$allowed_ext = preg_split("/\,/",$allowed_ext); // verifica extension
	foreach($allowed_ext as $ext){
	   if($ext==$file_ext[1]) $match = "1"; // Permite el archivo
	}

	if(!$match){
	   $error = "- Este tipo de archivo no est&aacute; permitido: $filename<br>";
	}

	if(isset($error)==true){
	   print "Se ha producido el siguiente error al subir el archivo:<br> $error"; // Muestra los errores
	}else{

		// Aca le cambio el nombre al archivo
		// ID.EXT
		$nombre = $id . "." . $file_ext[1];

	   if(move_uploaded_file($_FILES['userfile']['tmp_name'], $folder.$nombre)){ // Finalmente sube el archivo
		  print "<b>$nombre</b> se ha subido correctamente!"; 

		//   0. Actualizar base de datos
		include("conexion.php");

		// 1. Crear la query
		$update = "UPDATE kits_imprimibles
		SET imagen = '$nombre'
		WHERE  id_producto = $id";

		// 2. Ejecutarla
		$update_ej = mysqli_query(
			$conexion,
			$update
		);

		// 3. Preguntar si funcionó
		if ($update_ej === true) {
			echo "Yay! Registro actualizado";
			}
			else {
				echo ":( Error, ver $update";
			}


	   }else{
		  print "Error! Puede que el tama�o supere el m�ximo permitido por el servidor. Int�ntelo de nuevo."; // Otro error
	   }
	}

?>