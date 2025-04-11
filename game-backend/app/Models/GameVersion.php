<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GameVersion extends Model
{
    use SoftDeletes;

    protected $fillable = ['game_id','user_id', 'version', 'storage_path'];

    public function version(){
        return $this->hasMany(Game::class);
    }
}
