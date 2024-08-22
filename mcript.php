<?php
	//Metodo de encriptación
	$method = 'aes-256-cbc';
	// Puedes generar una diferente usando la funcion $getIV()
	$getIV = function () use ($method) {
		return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
	 };
	 
	$iv = base64_decode("mtSJa8EdOK3HbbcC27EyeQ==");
	 /*
	 Encripta el contenido de la variable, enviada como parametro.
	  */
	 $encriptar = function ($valor, $clave) use ($method, $iv) {
		return openssl_encrypt ($valor, $method, $clave, false, $iv);
	 };
	 /*
	 Desencripta el texto recibido
	 */
	 $desencriptar = function ($valor, $clave) use ($method, $iv) {
		$encrypted_data = base64_decode($valor);
		return openssl_decrypt($valor, $method, $clave, false, $iv);
	 };
	 /*
	 Genera un valor para IV
	 */
	 $getIV = function () use ($method) {
		return base64_encode(openssl_random_pseudo_bytes(openssl_cipher_iv_length($method)));
	 };
 
 ?>