<?php

class SessionData extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'sessions';

	public function students(){
		return $this->hasMany('Student_info','session_id','id');
	}
}