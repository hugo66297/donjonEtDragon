<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spell extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'spell_tag');
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'spell_category');
    }
}
