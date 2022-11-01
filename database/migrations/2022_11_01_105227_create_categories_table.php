<?php

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('picture_path');
            $table->text('description');
        });

        Category::insert([
           'name' => 'Barbare',
           'picture_path' => 'storage/img/categories/barbarian.jpg',
           'description' => ''
        ]);
        Category::insert([
            'name' => 'Clerc',
            'picture_path' => 'storage/img/categories/cleric.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Roublard',
            'picture_path' => 'storage/img/categories/rogue.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Magicien',
            'picture_path' => 'storage/img/categories/wizard.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Barde',
            'picture_path' => 'storage/img/categories/bard.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Druide',
            'picture_path' => 'storage/img/categories/druid.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Moine',
            'picture_path' => 'storage/img/categories/monk.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Paladin',
            'picture_path' => 'storage/img/categories/paladin.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Rôdeur',
            'picture_path' => 'storage/img/categories/ranger.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Ensorceleur',
            'picture_path' => 'storage/img/categories/sorcerer.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Occultiste',
            'picture_path' => 'storage/img/categories/warlock.jpg',
            'description' => ''
        ]);
        Category::insert([
            'name' => 'Guerrier',
            'picture_path' => 'storage/img/categories/fighter.jpg',
            'description' => ''
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
