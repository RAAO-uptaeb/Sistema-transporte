<?php
	if ( $this->model->rutas->drop($param[0]) ) {
		$mensaje = 'Ruta eliminada';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>