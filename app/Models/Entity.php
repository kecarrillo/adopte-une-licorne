<?php

namespace App\Model;

class Entity extends Eloquent {

	protected $table = 'entities';
	public $timestamps = true;
	protected $fillable = array('email', 'phone', 'wording_address', 'town', 'zip_code', 'country', 'company_id', 'customer_id');
	protected $visible = array('email', 'phone', 'wording_address', 'town', 'zip_code', 'country', 'company_id', 'customer_id');

	public function customers()
	{
		return $this->hasMany('App\Model\Customer', 'customer_id');
	}

	public function companies()
	{
		return $this->hasMany('App\Model\Company', 'company_id');
	}

}