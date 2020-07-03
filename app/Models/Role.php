<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {

	protected $table = 'roles';
	public $timestamps = true;
	protected $fillable = array('name');
	protected $visible = array('name');

	public function users()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

}
