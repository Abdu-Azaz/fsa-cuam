<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;
    protected $fillable = ['label','department_id', 'professor_id', 'diploma', 'description', 'pdf_file'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
// Coordinator
    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }
}