<?php
require __DIR__ . '/../../config.php';
$middleware->run('admin');

$schedule = new Schedule(['user_id' => $_POST['id'], 'appointed_at' => date('Y-m-d', strtotime($_POST['date']))]);
$schedule->save();

header('Content-Type: application/json');
echo json_encode(['success' => true, 'data' => $schedule->toArray()]);