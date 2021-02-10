<?php

	require 'libs/classes/choferes.class.php';
	require 'libs/classes/mantenimientos.class.php';
	require 'libs/classes/reparaciones.class.php';
	require 'libs/classes/talleres.class.php';
	require 'libs/classes/rutas.class.php';
	require 'libs/classes/vehiculos.class.php';


	require 'source/choferes/CRUD.php';
	require 'source/mantenimientos/CRUD.php';
	require 'source/reparaciones/CRUD.php';
	require 'source/talleres/CRUD.php';
	require 'source/rutas/CRUD.php';
	require 'source/vehiculos/CRUD.php';

  class ReportesModel extends Model {

  	public $choferes;
  	public $mantenimientos;
  	public $reparaciones;
  	public $talleres;
  	public $rutas;
  	public $vehiculos;



    function __construct() {
        parent::__construct();

        $this->choferes = new choferesCRUD();
        $this->mantenimientos = new mantenimientosCRUD();
        $this->reparaciones = new reparacionesCRUD();
        $this->talleres = new talleresCRUD();
        $this->rutas = new rutasCRUD();
        $this->vehiculos = new vehiculosCRUD();
    }
  }
?>