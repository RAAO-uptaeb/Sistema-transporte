<?php

	ob_start();

		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 100);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$talleres = $this->model->talleres->get();

		//MODELOS
		$pdf->Cell(200, 10,  'TALLERES',2, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño

		$pdf->Cell(10, 10,  'ID',1, 0,'C', 0);
		$pdf->Cell(30, 10, 'RIF',1, 0,'C', 0);
		$pdf->Cell(45, 10, 'Nombre',1, 0,'C', 0);
		$pdf->Cell(115, 10, 'Direccion',1, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','',10);//Tipo de letra, negrita, tamaño
		foreach ($talleres as $row) {

			$pdf->Cell(10,10, $row->getId(), 1, 0,'C', 0);
			$pdf->Cell(30,10, $row->getRif(), 1, 0,'C', 0);
			$pdf->Cell(45,10, $row->getNombre(), 1, 0,'C', 0);
			$pdf->Cell(115,10, $row->getDireccion(), 1, 0,'C', 0);
		    $pdf->Ln(10);//salto de linea

		}

		//$pdf->AddPage();
		$pdf->Output();
		ob_end_flush();
?>