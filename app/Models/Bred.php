<?php

namespace App\Model;

class Bred extends Eloquent {

	protected $table = 'breds';
	public $timestamps = true;
	protected $fillable = array('date', 'unicorn_id', 'customer_id');
	protected $visible = array('date', 'unicorn_id', 'customer_id');

	public function unicorns()
	{
		return $this->hasOne('App\Model\Unicorn', 'unicorn_id');
	}

	public function customers()
	{
		return $this->belongsTo('App\Model\Customer', 'customer_id');
	}

}