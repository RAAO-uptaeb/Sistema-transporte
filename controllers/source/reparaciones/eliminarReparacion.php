<?php
	if ( $this->model->reparaciones->drop($param[0]) ) {
		$mensaje = 'Reparacion eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>