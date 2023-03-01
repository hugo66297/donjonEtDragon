<?php

use App\Models\SavingThrow;
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
        Schema::create('saving_throws', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
        });

        SavingThrow::insert([
            'name' => 'Force'
        ]);
        SavingThrow::insert([
            'name' => 'Dextérité'
        ]);
        SavingThrow::insert([
            'name' => 'Constitution'
        ]);
        SavingThrow::insert([
            'name' => 'Intelligence'
        ]);
        SavingThrow::insert([
            'name' => 'Sagesse'
        ]);
        SavingThrow::insert([
            'name' => 'Charisme'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saving_throws');
    }
};
