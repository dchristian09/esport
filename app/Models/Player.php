<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $table = "player";
    protected $fillable = ['player_code', 'player_name', 'nickname', 'game', 'teams'];

    public function team(){
        return $this->belongsTo(Team::class, 'teams', 'team_code');
    }
}
