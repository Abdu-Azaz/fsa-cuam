<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'department_id', 'filiere', 'description','diploma_type', 'pdf_file'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}