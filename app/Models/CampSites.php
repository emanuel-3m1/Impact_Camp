<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CampZones;

class CampSites extends Model
{
    use HasFactory;

    public function campzone()
    {
        return $this->belongsTo(CampZones::class); //this creates a relationship with CampZone (is the child)
    }
}
