<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$html = $this->load->view('pdf/pdfexpense', [], true);
$mpdf->WriteHTML($html);
$mpdf->Output('expense.pdf', \Mpdf\Output\Destination::INLINE);
