<?php
	if ( $this->model->mantenimientos->drop($param[0]) ) {
		$mensaje = 'Mantenimiento eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>