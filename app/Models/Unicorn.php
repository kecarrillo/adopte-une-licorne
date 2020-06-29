<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Unicorn extends Model 
{

    protected $table = 'unicorns';
    public $timestamps = true;
    protected $fillable = array('age', 'name', 'mating_season', 'date_start_mating_season', 'nb_mating', 'breeder_id', 'unit_cost_HT');
    protected $visible = array('age', 'name', 'mating_season', 'date_start_mating_season', 'nb_mating', 'breeder_id', 'unit_cost_HT');

}