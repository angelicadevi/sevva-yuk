<?php

namespace App;

/**
 * Remove 'use Illuminate\Database\Eloquent\Model;'
 */
//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $fillable = 
    ['email', 'password'];
