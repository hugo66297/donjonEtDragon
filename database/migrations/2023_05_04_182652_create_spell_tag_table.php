<?php

use App\Models\Spell;
use App\Models\SpellTag;
use App\Models\Tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spell_tag', function (Blueprint $table) {
            $table->primary(['spell_id', 'tag_id']);
            $table->foreignIdFor(Spell::class)->constrained();
            $table->foreignIdFor(Tag::class)->constrained();
        });
        SpellTag::insert([
            'spell_id' => 1,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 2,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 2,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 3,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 4,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 5,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 5,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 6,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 7,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 8,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 9,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 10,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 11,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 11,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 12,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 13,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 14,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 15,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 15,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 16,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 17,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 18,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 18,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 19,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 19,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 19,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 19,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 20,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 21,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 22,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 22,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 23,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 23,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 23,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 24,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 25,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 26,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 27,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 27,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 28,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 29,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 29,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 30,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 31,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 32,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 33,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 33,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 34,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 34,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 34,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 35,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 36,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 36,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 36,
            'tag_id' => 12
        ]);
        SpellTag::insert([
            'spell_id' => 37,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 38,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 38,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 39,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 39,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 40,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 41,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 41,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 41,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 41,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 42,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 43,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 43,
            'tag_id' => 9
        ]);
        SpellTag::insert([
            'spell_id' => 44,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 44,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 45,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 45,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 46,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 47,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 47,
            'tag_id' => 9
        ]);
        SpellTag::insert([
            'spell_id' => 48,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 49,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 49,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 49,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 50,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 51,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 52,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 52,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 53,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 54,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 55,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 55,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 55,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 56,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 56,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 57,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 58,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 59,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 60,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 61,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 61,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 61,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 61,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 62,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 62,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 62,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 63,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 63,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 63,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 63,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 64,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 64,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 64,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 64,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 65,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 65,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 65,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 65,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 65,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 66,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 66,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 66,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 66,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 67,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 67,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 67,
            'tag_id' => 13
        ]);
        SpellTag::insert([
            'spell_id' => 68,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 68,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 68,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 69,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 69,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 70,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 70,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 71,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 72,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 73,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 73,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 73,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 74,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 75,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 76,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 77,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 77,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 78,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 79,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 80,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 81,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 82,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 82,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 83,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 84,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 85,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 85,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 85,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 86,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 87,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 87,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 87,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 87,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 88,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 89,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 90,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 91,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 92,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 93,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 94,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 94,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 95,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 96,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 97,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 98,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 99,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 99,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 100,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 101,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 102,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 102,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 102,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 103,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 104,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 104,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 105,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 106,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 106,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 107,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 107,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 108,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 109,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 110,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 110,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 111,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 112,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 113,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 114,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 115,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 116,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 117,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 118,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 119,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 120,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
        SpellTag::insert([
            'spell_id' => 0,
            'tag_id' => 0
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spell_tags');
    }
};
