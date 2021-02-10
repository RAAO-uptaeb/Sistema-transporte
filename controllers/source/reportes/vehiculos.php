<?php

	ob_start();

		require 'plantilla.php';
		$pdf = new PDF();
		$pdf->AddPage();
		$pdf->SetLeftMargin($pdf->GetPageWidth() / 2 - 63);
		$pdf->SetFont('Helvetica','B',15);//Tipo de letra, negrita, tamaño
		$pdf->Ln(10);//salto de linea

		$vehiculos = $this->model->vehiculos->get();

		//MODELOS
		$pdf->Cell(130, 10,  'VEHICULOS REGISTRADOS',2, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','B',12);//Tipo de letra, negrita, tamaño

		$pdf->Cell(10, 10,  'ID',1, 0,'C', 0);
		$pdf->Cell(25, 10, 'Placa',1, 0,'C', 0);
		$pdf->Cell(40, 10, 'Modelo',1, 0,'C', 0);
		$pdf->Cell(50, 10, 'Funcionamiento',1, 0,'C', 0);
		$pdf->Ln(10);

		$pdf->SetFont('Arial','',10);//Tipo de letra, negrita, tamaño
		foreach ($vehiculos as $row) {

			$pdf->Cell(10,10, $row->getId(), 1, 0,'C', 0);
			$pdf->Cell(25,10, $row->getPlaca(), 1, 0,'C', 0);
			$pdf->Cell(40,10, $row->getModelo(), 1, 0,'C', 0);
			$pdf->Cell(50,10, $row->getFuncionamiento(), 1, 0,'C', 0);
		    $pdf->Ln(10);//salto de linea

		}

		//$pdf->AddPage();
		$pdf->Output();
		ob_end_flush();
?>