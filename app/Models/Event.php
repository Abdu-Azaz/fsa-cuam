<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = ['title', 'slug', 'body','event_cover','datetime','location'];

    public function addedOn()
    {
        return Carbon::parse($this->created_at)->format('d F Y / H:i');
    }

    public function formatDateTime()
    {
        return Carbon::parse($this->datetime)->format('d F Y | H:i');
    }
}
