<?php

namespace App\Model;

class Company extends Eloquent {

	protected $table = 'companies';
	public $timestamps = true;
	protected $fillable = array('is_breeder', 'company_name', 'legal_status', 'customer_id', 'clientele_id', 'entity_id', 'unicorn_id', 'breeding_id');
	protected $visible = array('company_name', 'legal_status', 'customer_id', 'clientele_id', 'entity_id', 'bred_id', 'unicorn_id', 'breeding_id');

	public function customers()
	{
		return $this->belongsTo('App\Model\Customer', 'customer_id');
	}

	public function has_customers()
	{
		return $this->hasMany('App\Model\Customer', 'clientele_id');
	}

	public function entities()
	{
		return $this->belongsTo('App\Model\Entity', 'entity_id');
	}

	public function unicorns()
	{
		return $this->hasMany('App\Model\Unicorn', 'unicorn_id');
	}

	public function breedings()
	{
		return $this->hasMany('App\Model\Breeding', 'breeding_id');
	}

}