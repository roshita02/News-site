<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Foundation\Auth\User as LoginUser;
class User extends LoginUser
{
    protected $fillable=['name','email','image','password'];
}
