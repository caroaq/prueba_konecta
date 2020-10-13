<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = ['id','doc', 'name', 'email', 'password', 'adress','role'];
}
