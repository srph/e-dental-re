<?php

/**
 * -----------------------------
 * Boot Authentication Abstraction
 * -----------------------------
 *
 */
$config = require __DIR__ . '/config/session.php';

$key = "login_{$config['key']}";
$provider = new Core\Auth\EloquentUserProvider($hasher, 'User');
$auth = new Core\Auth\Factory($provider, $session, $key);