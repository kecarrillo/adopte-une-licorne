<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Breeding extends Model 
{

    protected $table = 'breedings';
    public $timestamps = true;
    protected $fillable = array('name', 'nb_unicorn', 'unit_cost_HT', 'gender', 'owner_id');
    protected $visible = array('name', 'nb_unicorn', 'unit_cost_HT', 'gender', 'owner_id');

}