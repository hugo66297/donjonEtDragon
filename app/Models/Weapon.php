<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
      'name', 'atk_bonus', 'damage_type', 'sub_info'
    ];

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
