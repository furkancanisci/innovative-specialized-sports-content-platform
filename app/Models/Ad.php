<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $table = 'ad';

    protected $fillable = [
        'club_id', 
        'title', 
        'content', 
        'start_date', 
        'end_date'
    ];

    public function club()
    {
        return $this->belongsTo(Club::class);
    }
}
