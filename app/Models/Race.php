<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;

    protected $fillable = [
      'name', 'description', 'exemple_surname'
    ];

    public function subRace() {
        return $this->hasOne(Subrace::class);
    }
}
