<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
        'home_club_id', 
        'away_club_id', 
        'game_date', 
        'stadium', 
        'score'
    ];

    public function homeClub()
    {
        return $this->belongsTo(Club::class, 'home_club_id');
    }

    public function awayClub()
    {
        return $this->belongsTo(Club::class, 'away_club_id');
    }

    public function gameStatistics()
    {
        return $this->hasMany(GameStatistic::class);
    }
}
