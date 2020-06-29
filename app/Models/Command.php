<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Command extends Model 
{

    protected $table = 'commands';
    public $timestamps = true;
    protected $fillable = array('unicorn_id', 'customer_id', 'quantity');
    protected $visible = array('unicorn_id', 'customer_id', 'quantity');

}