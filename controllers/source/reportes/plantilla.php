<?php

$libreria = 'fpdf/fpdf.php';

include ($libreria);

class PDF extends FPDF {

	function Header(){
		$this->setY(0);
		$this->setX(0);
		$this->SetFont('Helvetica','B',20);//Tipo de letra, negrita, tamaño
		$this->setFillColor(50,50,50);
		$this->SetTextColor(255,255,255);
		$this->Cell($this->GetPageWidth(),20,'Reporte',0,0,'C', TRUE);
		$this->Image(constant('URL').'/public/img/1.1.jpg', 0,0,50);
		$this->Image(constant('URL').'/public/img/UPTAEB.png', $this->GetPageWidth() - 25 ,0,23,19);
		$this->Ln(10);
	}
}

?>
