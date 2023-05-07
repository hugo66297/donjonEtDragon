<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subrace extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;

    protected $fillable = [
      'name', 'description', 'is_after', 'race_id'
    ];

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function fullName(): string {
        return $this->is_after
            ? "{$this->race->name} {$this->name}"
            : "{$this->name} {$this->race->name}";
    }
}
