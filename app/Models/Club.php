<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'label',
        'logo',
        'coordinator',
        'field_of_interest',
        'founded_at'
    ];
}
