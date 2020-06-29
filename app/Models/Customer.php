<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{

    protected $table = 'customers';
    public $timestamps = true;
    protected $fillable = array('firstname', 'lastname', 'company_id', 'address_id');
    protected $visible = array('firstname', 'lastname', 'company_id', 'address_id');

}