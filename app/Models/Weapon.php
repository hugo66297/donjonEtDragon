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

    public static function getWeaponIdByInfos(string $infos) {
        $explodeData = explode(' | ', $infos);
        return Weapon::query()
            ->where('name', $explodeData[0])
            ->where('atk_bonus', $explodeData[1])
            ->where('damage_type', $explodeData[2])
            ->first()
            ->getKey();
    }
}
