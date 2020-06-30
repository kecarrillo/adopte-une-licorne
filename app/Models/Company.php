<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $table = 'companies';
	public $timestamps = true;
	protected $fillable = array(
	    'is_breeder',
        'company_name',
        'legal_status',
        'customer_id',
        'entity_id',
        'unicorn_id',
        'breeding_id'
    );
	protected $visible = array(
	    'company_name',
        'legal_status',
        'customer_id',
        'entity_id',
        'bred_id',
        'unicorn_id',
        'breeding_id'
    );


	public function customers()
	{
		return $this->hasMany('App\Model\Customer', 'customer_id');
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
