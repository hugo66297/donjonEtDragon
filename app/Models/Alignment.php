<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alignment extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function character() {
        return $this->belongsTo(Character::class);
    }
}
