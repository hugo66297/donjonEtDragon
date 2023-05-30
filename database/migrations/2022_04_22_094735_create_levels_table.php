<?php

use App\Models\Level;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->integer('level_name');
            $table->string('background_color');
            $table->string('text_color');
        });
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 0,
            'background_color' => '#6b7280',
            'text_color' => '#fff'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 1,
            'background_color' => '#365314',
            'text_color' => '#86efac'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 2,
            'background_color' => '#115e59',
            'text_color' => '#34d399'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 3,
            'background_color' => '#1e40af',
            'text_color' => '#5eead4'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 4,
            'background_color' => '#581c87',
            'text_color' => '#a5b4fc'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 5,
            'background_color' => '#701a75',
            'text_color' => '#f0abfc'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 6,
            'background_color' => '#831843',
            'text_color' => '#f9a8d4'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 7,
            'background_color' => '#7f1d1d',
            'text_color' => '#fda4af'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 8,
            'background_color' => '#713f12',
            'text_color' => '#fbbf24'
        ]);
        Level::insert([
            'id' => Str::uuid(),
            'level_name' => 9,
            'background_color' => '#000',
            'text_color' => '#fff'
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
