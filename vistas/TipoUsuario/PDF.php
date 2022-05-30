<?php
require("fpdf182/fpdf.php");    
class PDF extends FPDF{
    function Header(){
        $this->SetFont("Arial", "", 24);
        $this->Image("", 1, 1);
        $this->Cell(9);
        $this->Cell(10, 2, "Título del documento", 1, 0, 'C');
    }
}
$pdf = new PDF('P', 'cm','letter');
$pdf->SetAuthor("CableNaranja", true);
$pdf->SetTitle("Documento PDF de prueba", true);
$pdf->AddPage();
 ?>