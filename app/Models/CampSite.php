<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CampZone;

class CampSite extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'campsites';
    }

    public function campzone()
    {
        return $this->belongsTo(CampZone::class); //this creates a relationship with CampZone (is the child)
    }
}
