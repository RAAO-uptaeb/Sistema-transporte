<?php
	if ( $this->model->talleres->drop($param[0]) ) {
		$mensaje = 'Taller eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>