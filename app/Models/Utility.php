<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utility extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    public function characters() {
        return $this->belongsToMany(Character::class);
    }
}
