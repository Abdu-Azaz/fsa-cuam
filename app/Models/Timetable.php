<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    use HasFactory;
    protected $fillable = [
        'major_id',
        'semester',
        'session',
        'file',
        'type'
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function isUpdated():bool
    {
        return $this->updated_at > $this->created_at;
    }
    public function when()
    {
        return Carbon::parse($this->updated_at)->format('d-m-Y H:i');
    }
}
