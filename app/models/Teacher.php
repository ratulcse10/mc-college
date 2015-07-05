<?php

class Teacher extends \Eloquent {
	protected $guarded = ['id'];
	protected $dates = ['joining_date'];
	protected $table = 'teacher_info';

	public function department()
	{
		return $this->belongsTo('Department', 'dept_id', 'id');

	}
	//protected $with = ['department'];
}