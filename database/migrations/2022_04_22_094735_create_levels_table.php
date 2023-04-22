<?php

use App\Models\Level;
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
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->integer('level_name');
            $table->string('background_color');
            $table->string('text_color');
        });
        Level::insert([
            'level_name' => 0,
            'background_color' => 'gray-500',
            'text_color' => 'white'
        ]);
        Level::insert([
            'level_name' => 1,
            'background_color' => 'green-900',
            'text_color' => 'green-300'
        ]);
        Level::insert([
            'level_name' => 2,
            'background_color' => 'teal-800',
            'text_color' => 'emerald-400'
        ]);
        Level::insert([
            'level_name' => 3,
            'background_color' => 'blue-800',
            'text_color' => 'teal-300'
        ]);
        Level::insert([
            'level_name' => 4,
            'background_color' => 'purple-900',
            'text_color' => 'indigo-300'
        ]);
        Level::insert([
            'level_name' => 5,
            'background_color' => 'fuchsia-900',
            'text_color' => 'fuchsia-300'
        ]);
        Level::insert([
            'level_name' => 6,
            'background_color' => 'pink-900',
            'text_color' => 'pink-300'
        ]);
        Level::insert([
            'level_name' => 7,
            'background_color' => 'red-900',
            'text_color' => 'rose-300'
        ]);
        Level::insert([
            'level_name' => 8,
            'background_color' => 'yellow-900',
            'text_color' => 'amber-400'
        ]);
        Level::insert([
            'level_name' => 9,
            'background_color' => 'black',
            'text_color' => 'white'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('levels');
    }
};
