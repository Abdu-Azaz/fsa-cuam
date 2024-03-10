<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Announce extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'body', 'status', 'announce_type', 'isFeatured','meta_keywords','make_first'];

    public function announceUpdatedSince()
    {
        return  Carbon::parse($this->updated_at)->diffForHumans();
    }

    
    public function isUpdated(): bool
    {
        return $this->updated_at > $this->created_at;
        // return $this->isDirty();

    }
    public function determineAnnounceThumbnail()
    {
        $type = $this->announce_type;

        switch ($type) {
            case 'avis':
                $image_path =  url('storage/media/announce.png');
                break;
            case 'emploi':
                $image_path =  url('storage/media/emploi.png');
                break;
            case 'parcours':
                $image_path =  url('storage/media/parcours.png');
                break;
            case 'pv':
                $image_path =  url('storage/media/pv.png');
                break;
                
        }
        return $image_path;
    }


    public function formatDateTime()
    {
        return Carbon::parse($this->updated_at)->format('d M y | H:i');
    }
}
