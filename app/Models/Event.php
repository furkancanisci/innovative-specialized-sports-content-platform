<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $fillable = [
        'club_id', 
        'title', 
        'description', 
        'event_date', 
        'location'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
