<?php

namespace App\Models;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'desc',
        'image'        
    ];    
}
