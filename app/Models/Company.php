<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Company extends Model 
{

    protected $table = 'companies';
    public $timestamps = true;
    protected $fillable = array('is_breeder', 'company_name', 'legal_status', 'address_id');
    protected $visible = array('company_name', 'legal_status', 'address_id');

}