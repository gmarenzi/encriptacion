<?php	
	include "mcript.php";
	if(isset($_POST["clave"]) && isset($_POST["dato"])){
		$clave = $_POST["clave"];
		$dato = $_POST["dato"];
		
		if ($_POST['boton'] == 'encriptar') {
			//Encripta información:
			$respuesta = $encriptar($dato, $clave);
			
			echo '<h2>Texto original</h3>' . '<h4>' . $dato . '</h4>';
			echo '<hr>';
			echo '<h2>Texto encriptado</h2>' . '<h4>' . $respuesta  . '</h4>';
			//echo '<hr>';
			//echo "<h2>IV generado</h3>" . '<h4>' . $getIV() . '</h4>' ;
		} else if ($_POST['boton'] == 'desencriptar') {
			//Desencripta información:
			$respuesta = $desencriptar($dato, $clave);			
			echo '<h2>Texto desencriptado</h2>'. '<h4>' . $respuesta . '</h4>';	

		} 
	}
	
	
?>