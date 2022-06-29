<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CampZone extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'title',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = 'campzones';
    }

    public function campsites()
    {
        return $this->hasMany(CampSite::class, 'campzone_id');  //this creates a relationship with CampSite (is the parent)
    }
}
