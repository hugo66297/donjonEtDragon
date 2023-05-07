<?php

use App\Models\Adventure;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventures', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->string('abbreviation', 20);
            $table->string('text_color', 7);
            $table->string('bg_color', 7);
        });
        Adventure::insert([
            'id' => Str::uuid(),
            'name' => 'Lost Mine of Phandelver',
            'abbreviation' => 'LMOP',
            'text_color' => '#84e1bc',
            'bg_color' => '#014737'
        ]);
        Adventure::insert([
            'id' => Str::uuid(),
            'name' => 'Icewind Dale, Rime of the Frostmaiden',
            'abbreviation' => 'ID',
            'text_color' => '#a4cafe',
            'bg_color' => '#233876'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adventures');
    }
};
