<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
    public function spells()
    {
        return $this->belongsToMany(Spell::class, 'category_spell');
    }
}
