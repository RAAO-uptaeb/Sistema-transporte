<?php
	if ( $this->model->choferes->drop($param[0]) ) {
		$mensaje = 'Chofer Eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>