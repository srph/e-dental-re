<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Schedule extends Eloquent {

	/**
	 * Fields fillable by the Model
	 */
	protected $fillable = ['user_id', 'appointed_at'];

	/**
	 * All `attributes` to be converted to Date instance
	 */
	public function getDates()
	{
		return ['appointed_at'];
	}

	/**
	 * Many-to-One, `User`
	 *
	 * @return User
	 */
	public function user()
	{
		return $this->belongsTo('User');
	}
	
}