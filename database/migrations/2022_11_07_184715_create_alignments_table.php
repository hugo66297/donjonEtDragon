<?php

use App\Models\Alignment;
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
        Schema::create('alignments', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('abbreviation',10);
            $table->text('description');
        });
        Alignment::insert([
            'name' => 'Loyal Bon',
            'abbreviation' => 'LB',
            'description'=> 'On peut compter sur vous pour faire ce qui est considéré comme bien en société. Les dragons d\'or, les paladins et la majorité des nains sont d\'alignement Loyal Bon. '
         ]);
         Alignment::insert([
            'name' => 'Neutre Bon',
            'abbreviation' => 'NB',
            'description'=> 'Vous faites de votre mieux pour aider les autres en fonction de leurs besoins. De nombreux célestes, quelques géants des nuages et la plupart des gnomes sont d\'alignement Neutre Bon. '
         ]);
         Alignment::insert([
            'name' => 'Chaotique Bon',
            'abbreviation' => 'CB',
            'description'=> 'Vous agissez en votre âme et conscience, sans tenir compte des attentes des autres. Vous n\'aimez pas qu\'on vous donne des ordres. On trouve parmi les créatures qui ont l\'alignement Chaotique Bon les dragons de cuivre ou encore la plupart des elfes.'
         ]);
         Alignment::insert([
            'name' => 'Loyal Neutre',
            'abbreviation' => 'LN',
            'description'=> 'Vous êtes respectueux de la loi, d\'une tradition ou de votre code de conduite personnel. C\'est le cas de nombreux moines et magiciens, '
         ]);
         Alignment::insert([
            'name' => 'Neutre',
            'abbreviation' => 'N',
            'description'=> 'Vous êtes de ceux qui préfèrent se tenir à distance des dilemmes moraux et qui n\'aiment pas prendre parti. Vous faites ce qui vous paraît approprié sur le moment. Les hommes-lézards, la plupart des druides et de nombreux humains sont d\'alignement Neutre.'
         ]);
         Alignment::insert([
            'name' => 'Chaotique Neutre',
            'abbreviation' => 'CN',
            'description'=> 'Vous écoutez vos désirs et faites passer votre propre liberté avant tout. On trouve parmi les créatures d\'alignement Chaotique Neutre de nombreux barbares et roublards et quelques bardes. '
         ]);
         Alignment::insert([
            'name' => 'Loyal Mauvais',
            'abbreviation' => 'LM',
            'description'=> 'Vous vous appliquez méthodiquement à prendre ce dont vous avez envie dans le cadre d\'un code ou d\'une tradition, de votre loyauté ou d\'un ordre. Les créatures d\'alignement Loyal Mauvais sont généralement les diables, les dragons bleus et les hobgobelins. '
         ]);
         Alignment::insert([
            'name' => 'Neutre Mauvais',
            'abbreviation' => 'NM',
            'description'=> 'Vous faites ce que vous voulez tant que vous pouvez vous en tirer vivant. De nombreux drows, quelques géants des nuages et les yugoloths sont d\'alignement Neutre Mauvais. '
         ]);
         Alignment::insert([
            'name' => 'Chaotique Mauvais',
            'abbreviation' => 'CM',
            'description'=> 'Vous n\'hésitez pas à être violent de manière arbitraire. Vous vous laissez mener par votre cupidité, votre haine ou votre soif de sang. Les démons, les dragons rouges et les ores sont d\'alignement Chaotique Mauvais. '
         ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alignments');
    }
};