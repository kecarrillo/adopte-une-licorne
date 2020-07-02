<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model {

	protected $table = 'companies';
	public $timestamps = true;
	protected $fillable = array(
	    'name',
        'company_name',
        'legal_status',
        'contact_id',
        'customer_id',
        'unicorn_id',
        'breeding_id'
    );
	protected $visible = array(
	    'name',
	    'company_name',
        'legal_status',
        'customer_id',
        'bred_id',
        'unicorn_id',
        'contact_id',
        'breeding_id'
    );


	public function customers()
	{
		return $this->hasMany('App\Models\Customer', 'customer_id');
	}

	public function contacts()
	{
		return $this->hasOne(Contact::class, 'id');
	}

	public function unicorns()
	{
		return $this->hasMany('App\Models\Unicorn', 'unicorn_id');
	}

	public function breedings()
	{
		return $this->hasMany('App\Models\Breeding', 'breeding_id');
	}

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }

}
