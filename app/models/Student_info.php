<?php

class Student_info extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'student_info';

	public function session(){
		return $this->belongsTo('SessionData','session_id','id');
	}
}