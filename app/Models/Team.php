<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $primaryKey = 'team_code';
    protected $keyType = 'string';
    protected $table = "team";
    protected $fillable = ['team_code', 'team_name', 'founder', 'motto'];

    public function player()
    {
        return $this->hasMany(Player::class, 'teams', 'team_code');
    }
}
