<?php

include 'models/plantilla.php';
require 'conexion.php';//no es esto pero no se cual es la que se pone

$query="SELECT...//aqui obtiene los datos que van al pdf";

$pdf=new PDF();
$pdf->AliasPages();//esta funcion reconoce a {nb} y reconozca las pg del doc
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(90, 10,  'idmodelo',1, 0,'c', 0);
$pdf->Cell(90, 10, 'estatus',1, 0,'c', 0);
$pdf->Cell(90, 10, 'codigo parte',1, 1,'c', 0);//esta hace un salto de linea para ir al contenido

$pdf->SetFont('Arial', 'B', 15);

while($row=$resultado->fetch_assoc()){
	$pdf->Cell(90, 10,  'idmodelo',1, 0,'c');
	$pdf->Cell(90, 10, 'estatus',1, 0,'c');
	$pdf->Cell(90, 10, 'codigo parte',1, 1,'c');
}

$pdf->Output('F','Reporte_modelos.pdf');
?>
