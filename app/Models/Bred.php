<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bred extends Model {

	protected $table = 'breds';
	public $timestamps = true;
	protected $fillable = array(
		'date',
		'unicorn_id',
		'company_id'
	);
	protected $visible = array(
		'date',
		'unicorn_id',
		'company_id'
	);

	public function unicorns()
	{
		return $this->hasOne('App\Models\Unicorn', 'unicorn_id');
	}

	public function companies()
	{
		return $this->belongsTo(Company::class, 'company_id');
	}

}
