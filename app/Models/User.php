<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password', 'role_id');
    protected $visible = array('name', 'role_id');

}