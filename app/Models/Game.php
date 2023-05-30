<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $table = 'game';
    protected $primaryKey = 'Game_ID';
    public function game_players()
    {
        return $this->hasMany(Game_players::class,'Game_ID');
    }
}
