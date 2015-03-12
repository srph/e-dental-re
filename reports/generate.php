<?php

require __DIR__ . '/../config.php';
$middleware->run('admin');
// var_dump((new Record)->find(1)->created_at->diffForHumans());

$type = isset($_GET['type']) ? $_GET['type'] : 'records';
$download = isset($_GET['download']) ? $_GET['download'] : false;

ob_start();
require_once(__DIR__ . "/templates/{$type}.php");
$html = ob_get_clean();

$pdf->load_html($html);
$pdf->render();
$pdf->stream("report-{$type}.pdf", ['Attachment' => $download]);