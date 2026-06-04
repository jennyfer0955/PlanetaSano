<?php

	/* Asignación de rutas de archivos a CONSTANTES EN PHP
	// __FILE__  regresa la ruta actual de éste archivo, donde vive este archivo
	// dirname() regresa la ruta del directorio padre del parámetro
	*/
	define("PRIVATE_PATH", dirname(__FILE__)); //se obtiene el nombre del directorio en donde existe el archivo initialize.php
	define("PROJECT_PATH", dirname(PRIVATE_PATH)); //se obtiene el nombre del directorio del proyecto
	define("PUBLIC_PATH", PROJECT_PATH . "/public"); //se obtiene la ruta del directorio public
	define("SHARED_PATH", PRIVATE_PATH . "/shared"); //se obtiene la ruta del direio private

	/* Asignar la el URL del directorio raíz a una constante PHP Assign the root URL to a PHP constant
	// * No se requiere incluir el nombre de dominio
	// * Se utiliza el mismo documento raíz que el del servidor web local
	// * Se puede encontrar todo lo que está dentro del directorio "/public"
	*/
	$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
	$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
	define("WWW_ROOT", $doc_root);

	require_once("functions.php"); 
	/*Traen codigo que ya esta creado
	include-one lo traen solo una vez
	require y inlcude lo trae varias veces, require si no existe el codigo marca error debe existir si o si el error
	include se puede seguir ejecutando aunque no exista el codigo*/

?>