<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subrace extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
      'name', 'description', 'is_after', 'race_id'
    ];

    public function race(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Race::class);
    }
    public function character(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function fullName(): string {
        return $this->is_after
            ? "{$this->race->name} {$this->name}"
            : "{$this->name} {$this->race->name}";
    }
}
