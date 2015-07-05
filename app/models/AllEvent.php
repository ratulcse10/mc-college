<?php

class AllEvent extends \Eloquent {
	protected $table = 'events';
	protected $dates = ['event_date'];


	protected $guarded = ['id'];
	//protected $with = ['user'];
	public function user(){
		return $this->belongsTo('User','user_id','id');
	}
}