<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unicorn extends Model {

	protected $table = 'unicorns';
	public $timestamps = true;
	protected $fillable = array(
		'age',
		'name',
		'mating_season',
		'date_start_mating_season',
		'nb_mating',
		'company_id',
		'unit_cost_HT'
	);
	protected $visible = array(
		'age',
	 	'name',
	  	'mating_season',
	   	'date_start_mating_season',
		'nb_mating', 'company_id',
		'unit_cost_HT'
	);

	public function companies()
	{
		return $this->belongsTo(Company::class, 'company_id');
	}

}
