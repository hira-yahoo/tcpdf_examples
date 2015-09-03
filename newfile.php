<?php
require_once('tcpdf/tcpdf.php');

// $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true);

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

/* 1ページ目を準備します */
$pdf->AddPage();

$pdf->SetFont('cid0jp', '', 40);

/* 枠付で文字列を出力します */
// $pdf->Cell(0,12,"Hello !!!",1,1,'C');
$pdf->Cell(0, 12, "やっほ～★", 1, 1, 'C');

/* PDF を出力します */
$pdf->Output("sample.pdf", "I");

