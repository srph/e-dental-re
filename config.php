<?php

/**
 * -----------------------------
 * Require Composer Autoloader
 * -----------------------------
 *
 * We `require` composer's autoloader implementation
 *
 */

require __DIR__ . '/vendor/autoload.php';

/**
 * -----------------------------
 * Boot Application Foundation
 * -----------------------------
 *
 * Here, we boot up all app dependencies
 * such as Session, Hashing, Auth, Database, etc..
 *
 */

$dir = __DIR__ . '/Core/Foundation';
require "{$dir}/database.php";
require "{$dir}/session.php";
require "{$dir}/hashing.php";
require "{$dir}/auth.php";
require "{$dir}/middleware.php";
require "{$dir}/dompdf.php";

