<?php

namespace App\Models;

use App\Filament\Resources\DepartmentResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;
    protected $fillable = ['full_name', 'department_id', 'isHead', 'image'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

}
