<?php
header('Content-Type: text/html; charset=UTF-8'); 
require('fpdf/fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,utf8_decode('¡Mi primera página pdf con FPDF ñ áéíóú!'));
$pdf->Output();
?>