<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model {

	protected $table = 'contacts';
	public $timestamps = true;
	protected $fillable = array('email', 'phone', 'wording_address', 'town', 'zip_code', 'country', 'company_id', 'customer_id');
	protected $visible = array('email', 'phone', 'wording_address', 'town', 'zip_code', 'country', 'company_id', 'customer_id');

	public function customers()
	{
		return $this->belongsTo('App\Models\Customer', 'customer_id');
	}

	public function companies()
	{
		return $this->belongsTo(Company::class, 'company_id');
	}

}
