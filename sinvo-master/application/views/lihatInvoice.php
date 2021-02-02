<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$html = $this->load->view('pdf/pdfinvoice', [], true);
$mpdf->WriteHTML($html);
$mpdf->Output('Invoice.pdf', \Mpdf\Output\Destination::INLINE);
