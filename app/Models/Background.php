<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
      'name', 'description'
    ];

    public function characters() {
        return $this->hasMany(Character::class);
    }
}
