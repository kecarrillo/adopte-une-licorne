<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model {

	protected $table = 'customers';
	public $timestamps = true;
	protected $fillable = array('firstname', 'lastname', 'company_id', 'companies_id', 'contact_id');
	protected $visible = array('firstname', 'lastname', 'company_id', 'companies_id', 'contact_id', 'bred_id');

	public function companies()
	{
		return $this->hasOne('App\Models\Company', 'company_id');
	}

	public function is_customer_of()
	{
		return $this->belongsToMany('App\Models\Company', 'companies_id');
	}

	public function contacts()
	{
		return $this->belongsTo('App\Models\Contact', 'contact_id');
	}

}
