<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Schedule extends Eloquent {

	/**
	 * Fields fillable by the Model
	 */
	protected $fillable = ['user_id', 'appointed_at'];

	public function user()
	{
		return $this->belongsTo('User');
	}
	
}