<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function level(){
        return $this->belongsTo(Level::class);
    }
}
