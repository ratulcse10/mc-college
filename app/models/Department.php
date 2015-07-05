<?php

class Department extends \Eloquent {
	protected $guarded = ['id'];
	protected $table = 'departments';
	protected $with = ['teachers'];
	public static function rules($id = 0, $merge = [])
	{
		return array_merge(
					[
								'name' => 'required|unique:departments'. ($id ? ",id,$id" : '')
					],
					$merge);
	}

	public function teachers(){
		return $this->hasMany('Teacher','dept_id','id');
	}
	

}