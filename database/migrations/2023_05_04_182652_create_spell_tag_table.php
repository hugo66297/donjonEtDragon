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
            'spell_id' => 121,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 122,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 122,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 122,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 123,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 123,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 124,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 124,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 125,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 125,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 126,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 127,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 127,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 128,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 129,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 130,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 130,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 131,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 131,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 132,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 132,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 132,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 9
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 133,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 134,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 135,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 135,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 135,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 136,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 136,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 137,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 138,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 138,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 139,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 139,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 139,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 140,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 141,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 141,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 141,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 141,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 141,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 142,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 142,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 142,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 143,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 143,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 144,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 145,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 146,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 146,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 147,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 147,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 148,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 148,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 149,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 149,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 150,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 151,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 151,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 152,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 152,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 153,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 153,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 153,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 154,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 154,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 155,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 155,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 155,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 156,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 156,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 157,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 157,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 158,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 158,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 158,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 159,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 160,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 160,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 161,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 162,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 162,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 163,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 164,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 164,
            'tag_id' => 13
        ]);
        SpellTag::insert([
            'spell_id' => 165,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 165,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 165,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 166,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 167,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 167,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 167,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 168,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 169,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 170,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 171,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 172,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 172,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 173,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 174,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 174,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 174,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 175,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 176,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 177,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 178,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 179,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 179,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 180,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 181,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 182,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 183,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 184,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 184,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 185,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 186,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 187,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 188,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 189,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 190,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 191,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 191,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 192,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 192,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 192,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 193,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 194,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 195,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 196,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 196,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 197,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 197,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 198,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 198,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 199,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 199,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 200,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 201,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 201,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 202,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 202,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 203,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 204,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 204,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 205,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 206,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 207,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 208,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 209,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 209,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 210,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 211,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 212,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 213,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 214,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 215,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 216,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 216,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 217,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 218,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 219,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 220,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 221,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 221,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 221,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 221,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 222,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 222,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 223,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 223,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 224,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 224,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 224,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 225,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 226,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 227,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 228,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 229,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 230,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 231,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 231,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 231,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 232,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 233,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 234,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 235,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 236,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 237,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 238,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 239,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 239,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 239,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 240,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 241,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 242,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 243,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 244,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 245,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 246,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 247,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 247,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 247,
            'tag_id' => 8
        ]);
        SpellTag::insert([
            'spell_id' => 248,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 248,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 248,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 249,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 250,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 250,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 250,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 251,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 252,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 252,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 252,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 9
        ]);
        SpellTag::insert([
            'spell_id' => 253,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 254,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 254,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 254,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 255,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 256,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 257,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 257,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 257,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 258,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 259,
            'tag_id' => 12
        ]);
        SpellTag::insert([
            'spell_id' => 260,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 260,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 260,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 261,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 261,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 262,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 262,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 262,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 262,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 262,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 262,
            'tag_id' => 13
        ]);
        SpellTag::insert([
            'spell_id' => 263,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 263,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 264,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 264,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 264,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 265,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 266,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 267,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 268,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 269,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 270,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 271,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 271,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 272,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 272,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 273,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 273,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 273,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 274,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 274,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 275,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 276,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 277,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 278,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 279,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 280,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 281,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 281,
            'tag_id' => 5
        ]);
        SpellTag::insert([
            'spell_id' => 282,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 283,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 284,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 285,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 286,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 286,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 287,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 288,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 288,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 289,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 290,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 291,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 292,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 293,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 293,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 294,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 294,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 294,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 295,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 295,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 295,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 296,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 296,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 296,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 297,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 297,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 297,
            'tag_id' => 9
        ]);
        SpellTag::insert([
            'spell_id' => 298,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 299,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 300,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 301,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 302,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 302,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 303,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 303,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 304,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 305,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 306,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 307,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 308,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 309,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 310,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 311,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 311,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 311,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 311,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 312,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 312,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 313,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 313,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 314,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 315,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 316,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 316,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 317,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 318,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 318,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 319,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 319,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 319,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 320,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 321,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 322,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 323,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 323,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 324,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 324,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 324,
            'tag_id' => 10
        ]);
        SpellTag::insert([
            'spell_id' => 325,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 326,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 326,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 327,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 327,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 327,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 328,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 329,
            'tag_id' => 17
        ]);
        SpellTag::insert([
            'spell_id' => 330,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 330,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 331,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 331,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 332,
            'tag_id' => 23
        ]);
        SpellTag::insert([
            'spell_id' => 333,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 333,
            'tag_id' => 22
        ]);
        SpellTag::insert([
            'spell_id' => 334,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 335,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 336,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 336,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 337,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 337,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 337,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 337,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 338,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 338,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 13
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 339,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 340,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 341,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 341,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 341,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 342,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 342,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 342,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 342,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 343,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 344,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 345,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 345,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 346,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 347,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 347,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 348,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 348,
            'tag_id' => 4
        ]);
        SpellTag::insert([
            'spell_id' => 349,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 349,
            'tag_id' => 6
        ]);
        SpellTag::insert([
            'spell_id' => 350,
            'tag_id' => 20
        ]);
        SpellTag::insert([
            'spell_id' => 351,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 351,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 351,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 351,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 352,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 352,
            'tag_id' => 2
        ]);
        SpellTag::insert([
            'spell_id' => 353,
            'tag_id' => 16
        ]);
        SpellTag::insert([
            'spell_id' => 353,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 353,
            'tag_id' => 13
        ]);
        SpellTag::insert([
            'spell_id' => 353,
            'tag_id' => 11
        ]);
        SpellTag::insert([
            'spell_id' => 353,
            'tag_id' => 7
        ]);
        SpellTag::insert([
            'spell_id' => 354,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 354,
            'tag_id' => 13
        ]);
        SpellTag::insert([
            'spell_id' => 355,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 355,
            'tag_id' => 18
        ]);
        SpellTag::insert([
            'spell_id' => 356,
            'tag_id' => 19
        ]);
        SpellTag::insert([
            'spell_id' => 357,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 358,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 359,
            'tag_id' => 15
        ]);
        SpellTag::insert([
            'spell_id' => 360,
            'tag_id' => 14
        ]);
        SpellTag::insert([
            'spell_id' => 360,
            'tag_id' => 3
        ]);
        SpellTag::insert([
            'spell_id' => 360,
            'tag_id' => 1
        ]);
        SpellTag::insert([
            'spell_id' => 361,
            'tag_id' => 21
        ]);
        SpellTag::insert([
            'spell_id' => 361,
            'tag_id' => 22
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
