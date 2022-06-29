<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CampZones extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'nickname',
    ];

    public function campsites()
    {
        return $this->hasMany(CampSites::class,'campsite_id');  //this creates a relationship with CampSites (is the parent)
    }
}
