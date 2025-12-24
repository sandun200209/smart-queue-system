<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    
    protected $fillable = [
        'token_number',
        'service_type',
        'status',
        'counter_number'
    ];
}