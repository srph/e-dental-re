<?php
require __DIR__ . '/../../config.php';
$middleware->run('auth');

$schedule = new Schedule(['user_id' => $auth->user()->id, 'appointed_at' => date('Y-m-d', strtotime($_POST['date']))]);
$schedule->save();

header('Content-Type: application/json');
echo json_encode(['success' => true]);