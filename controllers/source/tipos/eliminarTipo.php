<?php
	if ( $this->model->tipos->drop($param[0]) ) {
		$mensaje = 'Tipo de mantenimiento eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>