<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Announce extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'slug', 'body', 'status', 'announce_type', 'isFeatured', 'meta_keywords', 'make_first', 'views_count'];
    public $timestamps = false;
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

        $thumbnailPaths = [
            'avis' => $this->isFeatured ? 'featured.png' : 'announce.png',
            'avis-via' => 'via.png',
            'emploi' => 'emploi.png',
            'parcours' => 'parcours.png',
            'pv' => 'pv.png',
        ];

        $type = $this->announce_type;
        $image_path = isset($thumbnailPaths[$type]) ? url('storage/media/' . $thumbnailPaths[$type]) : url('storage/media/default.png');

        return $image_path;
    }


    public function formatDateTime()
    {
        return Carbon::parse($this->updated_at)->format('d M y | H:i');
    }

    public static function boot()
    {
        parent::boot();

        static::updating(function (Announce $announce) {
            // Update updated_at only if specific conditions are met
            if ($announce->isDirty(['title', 'body']) && $announce->make_first) {
                $announce->updated_at = now();
            }
        });
    }
}
