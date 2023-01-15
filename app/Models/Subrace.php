<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subrace extends Model
{
    use HasFactory;

    public function race() {
        return $this->belongsTo(Race::class);
    }
}
