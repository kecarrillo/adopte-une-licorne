<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model {

	protected $table = 'commands';
	public $timestamps = true;
	protected $visible = array(
		'breeding_id',
		'quantity'
	);

	public function breedings()
	{
		return $this->hasOne('App\Models\Breeding', 'breeding_id');
	}

}
