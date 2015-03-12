<?php

/**
 * -----------------------------
 * Boot DOMPDF
 * -----------------------------
 *
 * Disable DOMPDF's internal autoloader since we are using Composer
 *
 */

define('DOMPDF_ENABLE_AUTOLOAD', false);
define('DOMPDF_CHROOT', '/');
define('DOMPDF_ENABLE_PHP', true);
// $_dompdf_debug = true;

/**
 * -----------------------------
 * DOMPDF Default Configuration
 * -----------------------------
 *
 */

require_once __DIR__ .'/../../vendor/dompdf/dompdf/dompdf_config.inc.php';

/**
 * -----------------------------
 * DOMPDF Instance
 * -----------------------------
 *
 */
$pdf = new DOMPDF;
