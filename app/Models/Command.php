<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Command extends Model {

	protected $table = 'commands';
	public $timestamps = true;
	protected $fillable = array('breeding_id', 'customer_id', 'quantity');
	protected $visible = array('breeding_id', 'customer_id', 'quantity');

	public function customers()
	{
		return $this->belongsTo('App\Model\Customer', 'customer_id');
	}

	public function breedings()
	{
		return $this->hasOne('App\Model\Breeding', 'breeding_id');
	}

}
