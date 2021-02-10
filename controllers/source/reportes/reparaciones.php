<?php

	ob_start();

		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 100);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$reparaciones = $this->model->reparaciones->get();

		//MODELOS
		$pdf->Cell(200, 10,  'REPARACIONES',2, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño

		$pdf->Cell(10, 10,  'ID',1, 0,'C', 0);
		$pdf->Cell(35, 10, 'Taller',1, 0,'C', 0);
		$pdf->Cell(20, 10, 'Placa',1, 0,'C', 0);
		$pdf->Cell(30, 10, 'Costo',1, 0,'C', 0);
		$pdf->Cell(25, 10, 'Fecha',1, 0,'C', 0);
		$pdf->Cell(80, 10, 'Detalle',1, 0,'C', 0);

		$pdf->Ln(10);

		$pdf->SetFont('Arial','',10);//Tipo de letra, negrita, tamaño
		foreach ($reparaciones as $row) {

			$pdf->Cell(10,10, $row->getId(), 1, 0,'C', 0);
			$pdf->Cell(35,10, $row->getNombre(), 1, 0,'C', 0);
			$pdf->Cell(20,10, $row->getPlaca(), 1, 0,'C', 0);
			$pdf->Cell(30,10, $row->getCosto(), 1, 0,'C', 0);
			$pdf->Cell(25,10, $row->getFecha(), 1, 0,'C', 0);
			$pdf->Cell(80,10, $row->getDescripcion(), 1, 0,'C', 0);
		    $pdf->Ln(10);//salto de linea

		}

		//$pdf->AddPage();
		$pdf->Output();
		ob_end_flush();
?>