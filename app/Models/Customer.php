<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = 'customers';
	public $timestamps = true;
	protected $fillable = array('firstname', 'lastname', 'company_id', 'companies_id', 'entity_id');
	protected $visible = array('firstname', 'lastname', 'company_id', 'companies_id', 'entity_id', 'bred_id');

	public function companies()
	{
		return $this->hasOne('App\Model\Company', 'company_id');
	}

	public function is_customer_of()
	{
		return $this->belongsToMany('App\Model\Company', 'companies_id');
	}

	public function entities()
	{
		return $this->belongsTo('App\Model\Entity', 'entity_id');
	}

}
