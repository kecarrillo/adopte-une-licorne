<?php

namespace App\Model;

class Breeding extends Eloquent {

	protected $table = 'breedings';
	public $timestamps = true;
	protected $fillable = array('name', 'nb_unicorn', 'unit_cost_HT', 'gender', 'company_id');
	protected $visible = array('name', 'nb_unicorn', 'unit_cost_HT', 'gender', 'company_id');

	public function companies()
	{
		return $this->belongsTo('App\Model\Company', 'company_id');
	}

}