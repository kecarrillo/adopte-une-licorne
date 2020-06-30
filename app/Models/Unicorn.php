<?php

namespace App\Model;

class Unicorn extends Eloquent {

	protected $table = 'unicorns';
	public $timestamps = true;
	protected $fillable = array('age', 'name', 'mating_season', 'date_start_mating_season', 'nb_mating', 'company_id', 'unit_cost_HT');
	protected $visible = array('age', 'name', 'mating_season', 'date_start_mating_season', 'nb_mating', 'company_id', 'unit_cost_HT');

	public function companies()
	{
		return $this->belongsTo('App\Model\Company', 'company_id');
	}

}