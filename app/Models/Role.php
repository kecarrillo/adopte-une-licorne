<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model 
{

    protected $table = 'roles';
    public $timestamps = true;
    protected $fillable = array('name');
    protected $visible = array('name');

}