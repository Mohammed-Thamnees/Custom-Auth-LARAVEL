<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class number extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'number1',
        'number2'
    ];
}
