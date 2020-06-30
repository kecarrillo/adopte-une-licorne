<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bred extends Model {

	protected $table = 'breds';
	public $timestamps = true;
	protected $fillable = array('date', 'unicorn_id', 'customer_id');
	protected $visible = array('date', 'unicorn_id', 'customer_id');

	public function unicorns()
	{
		return $this->hasOne('App\Models\Unicorn', 'unicorn_id');
	}

	public function customers()
	{
		return $this->belongsTo('App\Models\Customer', 'customer_id');
	}

}
