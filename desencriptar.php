<?php	
	include "mcript.php";
	
	if($_POST["clave"] != null && $_POST["dato"] != null){
		$clave = $_POST["clave"];
		$dato_encriptado = $_POST["dato"];
			
		//Desencripta información:
		$dato_desencriptado = $desencriptar($dato_encriptado, $clave);
		
		echo '<b>Dato desencriptado</b>' . '<br>' . $dato_desencriptado . '<br>';	
		
	}else{
		echo 'no';
	}
	
	
?>