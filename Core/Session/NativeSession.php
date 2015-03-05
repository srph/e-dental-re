<?php namespace Core\Session;

class NativeSession implements SessionInterface {

	/**
	 * @var $_SESSION
	 */
	protected $bag;

	/**
	 * Class constructor. Calls `session_start`
	 * when instantiated.
	 */
	public function __construct()
	{
		\session_start();

		$this->bag = & $_SESSION;
	}

	/**
	 * Gets everything in the Session Bag
	 *
	 * @return array ($_SESSION)
	 */
	public function all()
	{
		return $this->bag;
	}

	/**
	 * Get the value of a certain key
	 *
	 * @param string $key Offset in the session bag
	 * @return mixed
	 */
	public function get($key)
	{
		return $this->has($key)
			? $this->bag[$key]
			: null;
	}

	/**
	 * Sets the value of a certain key
	 *
	 * @param string $key Session key
	 * @param mixed $value Value of the session key
	 * @return NativeSession ($this) For method chaining
	 */
	public function put($key, $value)
	{
		$this->bag[$key] = $value;

		return $this;
	}

	/**
	 * Removes a certain key
	 *
	 * @param mixed(string|array) $key Offset(s) / key(s) in the bag to unset.
	 * @return NativeSession ($this) For method chaining
	 */
	public function forget($key)
	{
		// We can iterate through keys instead if an array was passed
		// and then remove each
		if ( is_array($key) )
		{
			foreach($key as $offset)
			{
				unset($this->bag[$key]);
			}
		}
		else
		{
			unset($this->bag[$key]);
		}


		return $this;
	}

	/**
	 * Clear the bag
	 *
	 * @return void
	 */
	public function clear()
	{
		$this->bag = array();
	}

	/**
	 * Checks the existence of the key
	 *
	 * @param $key Offset / key in the bag to check
	 * @return boolean
	 */
	public function has($key)
	{
		return array_key_exists($key, $this->bag);
	}

}