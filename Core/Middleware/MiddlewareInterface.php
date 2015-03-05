<?php namespace Core\Middleware;

interface MiddlewareInterface {

	/**
	 * The middleware handle (closure) to be executed
	 *
	 * @return void
	 */
	public function handle();
	
}