<?php
require __DIR__ . '/../../config.php';
$middleware->run('auth');

$schedule = (new Schedule)->find($_POST['id']);
$schedule->delete();

header('Content-Type: application/json');
echo json_encode(['success' => true]);