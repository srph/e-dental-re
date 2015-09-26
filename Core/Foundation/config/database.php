<?php

/**
 * -----------------------------
 * Database Configurations
 * -----------------------------
 *
 * Most default database configurations
 * are placed here.
 *
 */

return array(

	/**
	 * -----------------------------
	 * Default Database Connection
	 * -----------------------------
	 *
	 */	

	'default'	=> 'eloquent',

	/**
	 * -----------------------------
	 * Database Connections
	 * -----------------------------
	 *
	 * Most default database connections
	 *
	 */

	'connections'	=> array(
		'eloquent'	=> array(
		    'driver'    => 'mysql',
		    'host'      => '127.0.0.1',
		    'database'  => 'edms',
		    'username'  => 'root',
		    'password'  => '',
		    'charset'   => 'utf8',
		    'collation' => 'utf8_unicode_ci',
		    'prefix'    => ''
		)
	)
);