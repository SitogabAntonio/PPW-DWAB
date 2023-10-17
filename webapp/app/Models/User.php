<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = 'users';
    public $primaryKey = 'email';
    public $incrementing = true;
    public $timestamp =false;
}
