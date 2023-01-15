<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    // One-to-one relationships
    public function goal() {
        return $this->hasOne(Goal::class);
    }
    public function race() {
        return $this->hasOne(Race::class);
    }
    public function alignment() {
        return $this->hasOne(Alignment::class);
    }
    public function background() {
        return $this->hasOne(Background::class);
    }
    public function category() {
        return $this->hasOne(Category::class);
    }

    // Many-to-many relationships
    public function adventures() {
        return $this->belongsToMany(Adventure::class);
    }
    public function abilities() {
        return $this->belongsToMany(Ability::class);
    }
    public function coins() {
        return $this->belongsToMany(Coin::class);
    }
    public function personalities() {
        return $this->belongsToMany(Personality::class);
    }
    public function features() {
        return $this->belongsToMany(Feature::class);
    }
    public function attacks() {
        return $this->belongsToMany(Attack::class);
    }
    public function weapons() {
        return $this->belongsToMany(Weapon::class);
    }
    public function utilities() {
        return $this->belongsToMany(Utility::class);
    }
}
