<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',        
        'message'        
    ];    
}
