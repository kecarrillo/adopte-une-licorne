<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model 
{

    protected $table = 'addresses';
    public $timestamps = true;
    protected $fillable = array('zip_code', 'town', 'wording');
    protected $visible = array('zip_code', 'town', 'wording');

}