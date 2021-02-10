<?php
	if ( $this->model->usuarios->drop($param[0]) ) {
		$mensaje = 'Usuario Eliminado';
	} else {
		$mensaje = 'Ha ocurrido un Error';

	}

	echo $mensaje;
?>