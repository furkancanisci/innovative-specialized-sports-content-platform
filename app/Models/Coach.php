<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $table = 'coaches';

    protected $fillable = [
        'team_id', 
        'first_name', 
        'last_name', 
        'role'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
