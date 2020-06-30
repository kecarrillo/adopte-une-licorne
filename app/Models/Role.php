<?php

namespace App\Model;

class Role extends Eloquent {

	protected $table = 'roles';
	public $timestamps = true;
	protected $fillable = array('name');
	protected $visible = array('name');

	public function roles()
	{
		return $this->belongsToMany('User', 'roles');
	}

}