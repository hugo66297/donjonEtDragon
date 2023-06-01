<?php

use App\Models\Goal;
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
        Schema::create('goals', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->text('description');
        });
        Goal::insert([
            'id' => Str::uuid(),
            'name' => 'civiliser Phandaline.',
            'description' => '<p>Vous étiez destiné à bien plus qu\'à être le maître d\'un domaine inexistant. Il serait bien difficile de reconstruire la Colline de Corlinn, le volcan y a veillé. Cependant, au cours des trois ou quatre dernières années, d\'aventureux colons ont entrepris de reconstruire une autre ruine qui se trouve près de la cité : la vieille ville de Phandaline, dévastée par des orcs il y a cinq siècles de cela. Il vous semble évident que ce qu\'il manque aujourd\'hui à Phandaline est une influence civilisatrice, quelqu\'un qui prenne les rênes de la ville et y fasse régner la loi et l\'ordre. Quelqu\'un comme vous.</p><p>Mais vous n\'êtes pas le seul à avoir eu cette idée. En effet, un chevalier appelé Sildar Hallhiver est récemment parti pour Phandaline en compagnie d\'un nain nommé Gundren Cherchepierre. Ils ont prévu de rouvrir une ancienne mine et de refaire de Phandaline une ville civilisée, riche et prospère. Dans la mesure où vous partagez les mêmes objectifs, Hallhiver devrait accepter de vous assister.<p>',
        ]);
        Goal::insert([
            'id' => Str::uuid(),
            'name' => 'donner une leçon aux Fers Rouges.',
            'description' => '<p>Vous avez appris que Daran Edermath cherche des individus courageux et guidés par des principes afin de donner une leçon à des brutes dans la ville de Phandaline. Ces truands se font appeler les Fers Rouges et ils se pavanent à Phandaline comme le faisaient vos camarades à Neverwinter. Mettre un terme à leurs exactions est un objectif noble.<p>',
        ]);
        Goal::insert([
            'id' => Str::uuid(),
            'name' => 'vous venger.',
            'description' => '<p>Quelqu\'un parmi les Fers Rouges a presque réussi à vous faire tuer et vous avez sacrément envie de découvrir de qui il s\'agit. Une fois son identité connue, il sera temps de vous venger : de cette personne, de Bâton de Verre, peut-être même de tous les Fers Rouges. Vous venez d\'apprendre quelque chose susceptible de vous aider : une femme appelée Halia Thornton a aussi une dent contre les Fers Rouges. Cependant, elle vit à Phandaline, ce qui veut dire que vous allez devoir risquer de vous faire reconnaître par les Fers Rouges qui veulent votre mort.<p>',
        ]);
        Goal::insert([
            'id' => Str::uuid(),
            'name' => 'consacrer l\'autel profané.',
            'description' => '<p>À l\'aide de visions qu\'il vous a envoyées pendant vos transes, votre dieu vous a confié une nouvelle mission. Une tribu de gobelins s\'est installée dans une ancienne ruine que l\'on surnomme maintenant le château des Cragmaw, où ils ont profané un autel qui était sacré aux yeux d\'Oghma. L\'autel est maintenant dédié à l\'ignoble dieu gobelin Maglubiyet. C\'est un affront qu\'Oghma ne peut tolérer.</p><p>Vous ne doutez pas qu\'Oghma a prévu de grandes choses pour vous si vous parvenez à remplir cette quête. En attendant, vos visions indiquent que sœur Garaèle, une prêtresse de Tymora, la déesse de la chance, pourra vous aider si vous lui rendez visite au village de Phandaline.<p>',
        ]);
        Goal::insert([
            'id' => Str::uuid(),
            'name' => 'chasser le dragon.',
            'description' => '<p>Vous avez l\'impression que les ruines d\'Arbrefoudre vous appellent. Votre famille et leurs proches avaient des vies prospères là-bas, il y a bien longtemps. Ils sont maintenant condamnés à vivre de tâches domestiques. Les ruines sont hantées par des zombis des cendres et, selon la rumeur, un dragon s\'est installé dans la vieille tour. Rien qu\'un héros ne puisse résoudre. Si vous arrivez à tuer le dragon ou le faire fuir, vous aurez prouvé, à vous-même et à tout le monde, que vous êtes véritablement un héros et destiné à de grandes choses.<p>',
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goals');
    }
};
