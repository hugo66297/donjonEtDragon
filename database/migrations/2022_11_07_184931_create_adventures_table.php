<?php

use App\Models\Adventure;
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
        Schema::create('adventures', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('abbreviation',20);
        });
        Adventure::insert([
            'name' => 'Lost Mine of Phandelver',
            'abbreviation'=> 'LMOP'
        ]);
        Adventure::insert([
            'name' => 'Icewind Dale, Rime of the Frostmaiden',
            'abbreviation'=> 'ID'
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
