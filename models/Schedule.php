<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Schedule extends Eloquent {

	public function user()
	{
		return $this->belongsTo('User');
	}
	
}