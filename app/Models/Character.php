<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory, HasUuids;
    public $timestamps = false;

    protected $fillable = [
        'category_id',
        'background_id',
        'subrace_id',
        'alignment_id',
        'goal_id',
        'passive_wisdom',
        'proficiency_bonus',
        'armor_class',
        'initiative',
        'speed',
        'maximum_hp',
        'hit_dice',
        'personality_traits',
        'ideals',
        'bonds',
        'flaws',
        'character_past',
        'equipment'
    ];

    // One-to-one relationships
    public function goal() {
        return $this->belongsTo(Goal::class);
    }

    // Belongs to relationships
    public function subrace() {
        return $this->belongsTo(Subrace::class);
    }
    public function alignment() {
        return $this->belongsTo(Alignment::class);
    }
    public function background() {
        return $this->belongsTo(Background::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }

    // Many-to-many relationships
    public function adventures() {
        return $this->belongsToMany(Adventure::class);
    }
    public function coins() {
        return $this->belongsToMany(Coin::class)
            ->withPivot('quantity');
    }
    public function features() {
        return $this->belongsToMany(Feature::class);
    }
    public function attacks() {
        return $this->belongsToMany(Attack::class)
            ->withPivot('other_description');
    }
    public function weapons() {
        return $this->belongsToMany(Weapon::class);
    }
    public function utilities() {
        return $this->belongsToMany(Utility::class)
            ->withPivot('description');
    }

    // Many-to-many polymorphic relationships
    public function abilities() {
        return $this->morphedByMany(Ability::class, 'charactable')
            ->withPivot('ability_value', 'other_modifier_ability');
    }
    public function skills() {
        return $this->morphedByMany(Skill::class, 'charactable')
            ->withPivot('is_proficient', 'other_modifier_skill');
    }
    public function savingThrows() {
        return $this->morphedByMany(SavingThrow::class, 'charactable')
            ->withPivot('is_proficient', 'other_modifier_throw');
    }
}
