<?php
ob_start();
include("../View/template.php");
include("../Model/Select.php");
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->Ln();
$pdf->SetFont('Times', '', 12);
$pdf->Cell(20, 10, 'ID', 1, 0, 'C');
$pdf->Cell(45, 10, 'NOMBRE', 1, 0, 'C');
$pdf->Cell(45, 10, 'APELLIDO', 1, 0, 'C');
$pdf->Ln();
while ($std = $res->fetch_assoc()) {
    $pdf->SetFont('Times', '', 12);
    $pdf->Cell(20, 10, $std['id'], 1, 0, 'C');
    $pdf->Cell(45, 10, $std['nombre'], 1, 0, 'C');
    $pdf->Cell(45, 10, $std['apellido'], 1, 0, 'C');
    $pdf->Ln();
}
$pdf->Output('I', 'Report.pdf');
ob_end_flush();
?>