<?php
require('vendor/autoload.php');
use Dompdf\Dompdf;

$another = $_GET['text'];

$dompdf = new Dompdf();
$dompdf -> load_html($another);
$dompdf -> set_paper('A4', 'potrait');
$dompdf -> render();
$dompdf -> stream('result.pdf');
?>