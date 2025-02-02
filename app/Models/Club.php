<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $table = 'clubs';

    protected $fillable = [
        'name', 
        'city', 
        'country', 
        'establishment_date', 
        'stadium'
    ];

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function ad()
    {
        return $this->hasMany(Ad::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
