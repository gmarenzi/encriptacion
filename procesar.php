<?php	
	include "mcript.php";
	
	if($_POST["clave"] != null && $_POST["dato"] != null){
		$clave = $_POST["clave"];
		$dato = $_POST["dato"];
		
		//*** Como usar las funciones para encriptar y desencriptar.		
		//Encripta información:
		$dato_encriptado = $encriptar($dato, $clave);
		
		//Desencripta información:
		$dato_desencriptado = $desencriptar($dato_encriptado, $clave);
		
		echo '<b>Dato desencriptado</b>' . '<br>' . $dato_desencriptado . '<br>';
		echo '<hr>';
		echo '<b>Dato encriptado</b>' . '<br>' . $dato_encriptado . '<br>';
		echo '<hr>';
		echo "<b>IV generado</b>" . '<br>' . $getIV();
		
	}else{
		echo 'no';
	}
	
	
?>