<?php
	if ( $this->model->vehiculos->drop($param[0]) ) {
		$mensaje = 'vehiculo Eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>