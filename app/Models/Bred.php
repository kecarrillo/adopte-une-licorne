<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Bred extends Model 
{

    protected $table = 'breds';
    public $timestamps = true;
    protected $fillable = array('date', 'breeding_id', 'customer_id');
    protected $visible = array('date', 'breeding_id', 'customer_id');

}