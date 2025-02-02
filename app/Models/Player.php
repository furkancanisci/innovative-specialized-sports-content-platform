<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = 'players';

    protected $fillable = [
        'team_id', 
        'first_name', 
        'last_name', 
        'birth_date', 
        'position', 
        'jersey_number'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
