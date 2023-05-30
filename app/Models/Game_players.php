<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_players extends Model
{
    use HasFactory;
    protected $table = 'game_players';
    protected $primaryKey = 'GP_ID';
    public function games()
    {
        return $this->belongsTo(Game::class,'Game_ID');
    }
}
