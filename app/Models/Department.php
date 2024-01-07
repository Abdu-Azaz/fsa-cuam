<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'slug', 'image'];

    public function professors():HasMany    
    {
        return $this->hasMany(Professor::class);
    }

    public function programmes():HasMany    
    {
        return $this->hasMany(Programme::class);
    }
}       
