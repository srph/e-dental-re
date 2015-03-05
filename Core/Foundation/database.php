<?php

/**
 * -----------------------------
 * Boot Database Configurations
 * -----------------------------
 *
 * Here, we boot up Eloquent.
 *
 */

$capsule = new Illuminate\Database\Capsule\Manager;

$db = require(__DIR__ . '/config/database.php');
$connection = $db['connections'][$db['default']];

$capsule->addConnection($connection);
$capsule->bootEloquent();