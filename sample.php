<?php
require_once ('PDFMerger.php');
use PDFMerger\PDFMerger;
$pdf = new PDFMerger;
$pdf->addPDF('samplepdfs/dummy.pdf');
$pdf->addPDF('samplepdfs/dummy.pdf');
$pdf->merge('samplepdfs','merged.pdf');