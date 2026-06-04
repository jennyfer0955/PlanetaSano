<?php
	function url_for($script_path) { // devolver el url apartir de la carpeta de raiz
	  // add the leading '/' if not present
	  if($script_path[0] != '/') { // si el elemento que mandaron no tiene diagonal se la pondre
	    $script_path = "/" . $script_path;
	  }
	  return WWW_ROOT . $script_path;
	}

	function u($string="") { //función para codificar caracteres especiales en un URL con la función urlencode
		return urlencode($string);
	}

	function raw_u($string="") { //función para codificar caracteres especiales en un URL con la función rawurlencode
		return rawurlencode($string);
	}

	function h($string="") { //función para codificar parámetros de los superglobals para inclusión en HTML y prevenir ataques externos.
		return htmlspecialchars($string);
	}
	// ? se pasan parametros query parametros todo lo que esta despues de esto son parametros 
	//Un arreglo asociativo es que le mandas un nombre y un valor un id y un valor
	function obtener_renglones ($num_renglones) { // función para obtener el número de renglones a mostrar en el catálogo
		if ($num_renglones % 3 === 0){
			return $num_renglones / 3;
		} else {
			return round($num_renglones/3,0) + 1;
		}
	}
?>