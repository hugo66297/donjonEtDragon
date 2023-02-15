<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'name', 'description'
    ];

    public function character() {
        return $this>$this->belongsTo(Character::class);
    }
}
