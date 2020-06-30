<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Breeding extends Model {

	protected $table = 'breedings';
	public $timestamps = true;
	protected $fillable = array('name', 'nb_unicorn', 'unit_cost_HT', 'gender', 'company_id');
	protected $visible = array('name', 'nb_unicorn', 'unit_cost_HT', 'gender', 'company_id');

	public function companies()
	{
		return $this->belongsTo('App\Models\Company', 'company_id');
	}

}
