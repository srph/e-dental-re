<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Core\Auth\EloquentUserTrait;
use Core\Auth\UserInterface;

class User extends Eloquent implements UserInterface {

	use EloquentUserTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	/**
	 * One-To-Many with the `Record` model
	 */
	public function records()
	{
		return $this->hasMany('Record');
	}

}