<?php

use App\Models\Level;
use App\Models\School;
use App\Models\Spell;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spells', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->string('slug');
            $table->foreignIdFor(School::class)->constrained();
            $table->foreignIdFor(Level::class)->constrained();
            $table->boolean('is_rituel')->default(false);
            $table->string('cast_time', 191);
            $table->string('range', 191);
            $table->text('component');
            $table->string('duration', 191);
            $table->text('description');
            $table->text('upper_lvl')->nullable();
        });
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Agrandissement/Rapetissement',
            'slug' => Str::slug('Agrandissement/Rapetissement'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une pincée de limaille de fer)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous agrandissez ou rétrécissez une créature ou un objet situé à portée et dans votre champ de vision pendant toute la durée du sort. Choisissez soit une créature, soit un objet qui n\'est ni porté ni transporté. Si la cible n\'est pas consentante, elle a droit à un jet de sauvegarde de Constitution. Si elle le réussit, le sort reste sans effet.</p><p> Si la cible est une créature, tout ce qu\'elle porte et tout ce qu\'elle transporte change de taille avec elle. En revanche, si elle lâche un objet, il reprend sa taille normale sur-le-champ.</p><p> <strong>Agrandir.</strong> La cible double dans toutes les dimensions, et son poids est multiplié par huit. Cette croissance augmente sa catégorie de taille d\'un cran, de Moyenne à Grande par exemple. Si la cible n\'a pas assez de place pour doubler de volume, elle atteint la taille maximale possible dans l\'espace dont elle dispose. Elle est avantagée lors des tests de Force et des jets de sauvegarde de Force jusqu\'à la fin du sort. Les armes de la cible grandissent pour s\'adapter à sa nouvelle taille. Tant qu\'elles sont ainsi agrandies, elles infligent 1d4 dégâts de plus.</p><p> <strong>Rétrécir.</strong> La cible réduit de moitié dans toutes les dimensions et son poids est divisé par huit. Ce rétrécissement réduit sa catégorie de taille d\'un cran, de Moyenne à Petite par exemple. La cible est désavantagée lors des tests de Force et des jets de sauvegarde de Force jusqu\'à la fin du sort. Les armes de la cible rétrécissent pour s\'adapter à sa nouvelle taille. Tant qu\'elles sont ainsi réduites, elles infligent 1d4 dégâts de moins (mais cela ne peut pas faire passer les dégâts en dessous de 1).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aide',
            'slug' => Str::slug('Aide'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une minuscule bandelette de tissu blanc)',
            'duration' => '8 heures',
            'description' => '<p>Le sort renforce vos alliés qui deviennent plus robustes et  plus résolus. Choisissez jusqu\'à trois créatures à portée. Le maximum de points de vie et les points de vie actuels de chacune d\'entre elles augmentent de 5 pendant toute la durée du sort.</p>',
            'upper_lvl' => '<p>Quand vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les points de vie de chaque cible augmentent de 5 points supplémentaires pour chaque niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Alarme',
            'slug' => Str::slug('Alarme'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (une minuscule clochette et un filament en argent)',
            'duration' => '8 heures',
            'description' => '<p>Vous installez une alarme pour vous avertir en cas d\'intrusion. Choisissez une porte, une fenêtre ou une zone à portée qui ne fasse pas plus qu\'un cube de 6 mètres d\'arête. Tant que le sort fait effet, une alarme vous alerte dès qu\'une créature de taille Très Petite ou supérieure touche la zone protégée ou y pénètre. Au moment où vous lancez le sort, vous pouvez désigner des créatures qui ne déclencheront pas l\'alarme. Vous pouvez aussi choisir si l\'alarme sera audible ou mentale.</p><p> Une alarme mentale vous avertit d\'un tintement dans votre tête tant que vous vous trouvez dans un rayon de 1,5 kilomètre autour de la zone protégée. Ce tintement suffit à vous réveiller si vous êtes endormi.</p><p> Une alarme audible émet le même son qu\'une cloche d\'alerte pendant 10 secondes et retentit dans un rayon de 18 mètres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Allié planaire',
            'slug' => Str::slug('Allié planaire'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous demandez de l\'aide à une entité appartenant à un autre monde. Vous devez connaître cet être, que ce soit un dieu, un primordial, un prince démoniaque ou une autre créature à la puissance cosmique. L\'entité vous envoie un céleste, un élémentaire ou un fiélon qui lui est loyal. Cette créature apparaît dans un emplacement libre à portée. Si vous connaissez le nom d\'une créature spécifique, vous pouvez le mentionner lors de l\'incantation pour demander à ce que ce soit elle que l\'entité vous envoie, bien qu\'elle puisse tout de même vous envoyer un autre émissaire (au MD de décider).</p><p> Quand la créature apparaît, elle n\'a aucune obligation de se comporter d\'une manière particulière. Vous pouvez lui demander d\'accomplir un service rémunéré, mais elle n\'est pas obligée d\'accepter. Votre requête peut être très simple (nous faire passer en volant au-dessus de ce précipice, nous aider à livrer un combat...) ou plus complexe (espionner nos ennemis, nous protéger lors de l\'exploration de ce donjon...). Pour négocier un service, vous devez être en mesure de communiquer avec la créature.</p><p> Le paiement peut se faire sous diverses formes. Un céleste peut demander une importante donation en or ou en objets magiques à un temple allié tandis qu\'un fiélon peut exiger un sacrifice vivant ou un trésor. Certaines créatures monnayent leurs services contre une quête à accomplir de votre côté.</p><p> En règle générale, une tâche qui s\'accomplit en quelques minutes se paie 100 po la minute. Une tâche qui demande plusieurs heures coûte 1 000 po de l\'heure, et une tâche effectuée sur plusieurs jours (10 au maximum) vaut 10 000 po la journée. Le MD peut modifier le montant en fonction des circonstances dans lesquelles vous lancez le sort. Si la tâche à accomplir s\'accorde avec l\'éthique de la créature, elle peut réduire son salaire de moitié ou même y renoncer. Les tâches qui ne présentent aucun risque coûtent souvent la moitié du prix indiqué précédemment tandis que les missions particulièrement dangereuses valent parfois bien plus cher. Une créature accepte rarement une tâche visiblement suicidaire.</p><p> Une fois que la créature a accompli la tâche demandée ou quand la durée de service décidée est arrivée à son terme, elle retourne sur son plan d\'origine après vous avoir fait son rapport, si la tâche l\'exige et qu\'elle est en mesure de le faire.</p><p> Si vous êtes incapable de vous mettre d\'accord avec la créature sur le prix de ses services, elle retourne immédiatement sur son plan natal.</p><p> Une créature enrôlée dans votre groupe compte comme un membre à part entière et reçoit sa part de points d\'expérience.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Amélioration de caractéristique',
            'slug' => Str::slug('Amélioration de caractéristique'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (des poils ou des plumes venant d\'un animal)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous touchez une créature pour lui accorder une amélioration magique. Choisissez l\'un des effets suivants dont la cible bénéficiera jusqu\'à la fin du sort.</p><p> <strong>Endurance de l\'ours.</strong> La cible est avantagée lors des tests de Constitution. Elle gagne aussi 2d6 points de vie temporaires qui disparaissent quand le sort se termine.</p><p> <strong>Force du taureau.</strong> La cible est avantagée lors des tests de Force et sa capacité de charge est doublée.</p><p> <strong>Grâce du chat.</strong> La cible est avantagée lors des tests de Dextérité. De plus, elle ne subit pas de dégâts quand elle chute sur 6 mètres ou moins, à condition qu\'elle ne soit pas neutralisée.</p><p> <strong>Splendeur de l\'aigle.</strong> La cible est avantagée lors des tests de Charisme.</p><p> <strong>Ruse du renard.</strong> La cible est avantagée lors des tests d\'intelligence.</p><p> <strong>Sagesse du hibou.</strong> La cible est avantagée lors des tests de Sagesse.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez prendre un créature de plus pour cible par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Amitié avec les animaux',
            'slug' => Str::slug('Amitié avec les animaux'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un peu de nourriture)',
            'duration' => '24 heures',
            'description' => '<p>Grâce à ce sort, vous convainquez une bête que vous ne lui voulez pas de mal. Choisissez une bête située à portée dans votre champ de vision. Elle doit vous voir et vous entendre. Le sort échoue si elle possède une Intelligence de 4 ou plus. Dans le cas contraire, elle doit réussir un jet de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Le sort se termine si vous ou l\'un de vos camarades blessez la cible.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une bête supplémentaire par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Animation des morts',
            'slug' => Str::slug('Animation des morts'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, S, M (une goutte de sang, un lambeau de chair et une pincée de poudre d\'os)',
            'duration' => 'instantanée',
            'description' => '<p>Ce sort crée un serviteur mort-vivant. Choisissez un tas d\'os ou le cadavre d\'un humanoïde de taille Moyenne ou Petite situé à portée. Votre sort imprègne la cible d\'un ignoble simulacre de vie, la relevant sous forme de mort-vivant. Elle devient un squelette si vous avez lancé le sort sur un tas d\'os, et un zombi si vous avez opté pour un cadavre (le MD dispose des statistiques de jeu de la créature).</p><p> À chacun de vos tours, vous pouvez dépenser une action bonus pour donner un ordre mental à la créature générée via ce sort si elle se trouve dans un rayon de 18 mètres (si vous contrôlez plusieurs créatures, vous pouvez donner un ordre à l\'une d\'elles, certaines d\'entre elles ou à toutes à la fois, à condition de transmettre le même ordre à chacune). À vous de décider quelles actions la créature va entreprendre et à quel endroit elle se déplacera au cours du tour suivant, mais vous pouvez aussi lui donner un ordre plus générique, comme de garder une salle ou un couloir. En l\'absence d\'ordre, la créature se contente de se défendre contre les créatures hostiles. Une fois qu\'elle a reçu un ordre, elle continue à le suivre jusqu\'à ce qu\'elle ait accompli sa tâche.</p><p> La créature est placée sous votre contrôle pendant 24 heures, après quoi elle cesse d\'obéir aux ordres que vous lui avez donnés. Pour la contrôler pendant 24 heures de plus, il vous faut lui relancer ce sort avant la fin de la période de 24 heures pendant laquelle il fait effet. Si vous utilisez ce sort ainsi, il vous permet de réaffirmer votre contrôle sur un maximum de quatre créatures animées grâce à lui plutôt que d\'en animer une nouvelle.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, vous animez ou réaffirmez votre contrôle sur deux créatures de plus par niveau au-delà du 3e. Chaque créature doit venir d\'un tas d\'os ou d\'un cadavre différent.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Animation des objets',
            'slug' => Str::slug('Animation des objets'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Les objets prennent vie sur votre ordre. Choisissez jusqu\'à dix objets non magiques à portée que personne ne porte ni ne transporte. Les cibles de taille Moyenne comptent comme deux objets, celles de taille Grande comme quatre et celles de taille Très Grande comme huit. Vous ne pouvez pas animer d\'objet de taille supérieure. Chaque cible s\'anime et devient une créature placée sous votre contrôle jusqu\'à la fin du sort ou jusqu\'à tomber à 0 point de vie.</p><p> Par une action bonus, vous pouvez donner un ordre mental à toute créature créée via ce sort qui se trouve au maximum à 150 mètres de vous (si vous en contrôlez plusieurs, vous pouvez donner un ordre à l\'une d\'elles, certaines d\'entre elles ou toutes à la fois, à condition de donner le même ordre à toutes). À vous de décider quelle action la créature va entreprendre et à quel endroit elle se déplacera au cours du tour suivant, mais vous pouvez aussi lui donner un ordre plus générique, comme de garder une salle ou un couloir. En l\'absence d\'ordre, la créature se contente de se défendre contre les créatures hostiles. Une fois qu\'elle a reçu un ordre, elle continue à le suivre jusqu\'à ce qu\'elle ait accompli sa tâche.</p><p><h1>Statistiques des objets animés</h1></p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Taille</th><th class="px-6 py-3">PV</th><th class="px-6 py-3">CA</th><th class="px-6 py-3">Attaque</th><th class="px-6 py-3">For</th><th class="px-6 py-3">Dex</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">Très Petite</td><td class="px-4 py-4">20</td><td class="px-4 py-4">18</td><td class="px-4 py-4">+8 pour toucher, 1d4+4 dégâts</td><td class="px-4 py-4">4</td><td class="px-4 py-4">18</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Petite</td><td class="px-4 py-4">25</td><td class="px-4 py-4">16</td><td class="px-4 py-4">+6 pour toucher, 1d8+2 dégâts</td><td class="px-4 py-4">6</td><td class="px-4 py-4">14</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Moyenne</td><td class="px-4 py-4">40</td><td class="px-4 py-4">13</td><td class="px-4 py-4">+5 pour toucher, 2d6+1 dégâts</td><td class="px-4 py-4">10</td><td class="px-4 py-4">12</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Grande</td><td class="px-4 py-4">50</td><td class="px-4 py-4">10</td><td class="px-4 py-4">+6 pour toucher, 2d10+2 dégâts</td><td class="px-4 py-4">14</td><td class="px-4 py-4">10</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Très Grande</td><td class="px-4 py-4">80</td><td class="px-4 py-4">10</td><td class="px-4 py-4">+8 pour toucher, 2d12+4 dégâts</td><td class="px-4 py-4">18</td><td class="px-4 py-4">6</td></tr></tbody></table></p><p> Un objet animé est une créature artificielle avec une CA, des points de vie, des attaques, une Force et une Dextérité déterminés par sa taille. Sa Constitution est de 10 tandis que son Intelligence et sa Sagesse sont de 3 et son Charisme de 1. Il a une vitesse de 9 mètres. S\'il est dépourvu de pattes ou d\'appendices susceptibles de le mouvoir, il gagne à la place la capacité de voler à une vitesse de 9 mètres et peut utiliser le vol stationnaire. Si l\'objet est solidement attaché à une surface ou à un objet de plus grande taille, comme une chaîne vissée à un mur, sa vitesse est de O. L\'objet possède la vision aveugle dans un rayon de 9 mètres ; au-delà, il est aveugle. Quand l\'objet animé tombe à 0 point de vie, il reprend sa forme originelle d\'objet et tout dégât en surplus est infligé à sa forme originelle.</p><p> Si vous ordonnez à un objet animé d\'attaquer, il a droit à une attaque au corps à corps unique contre une créature située dans un rayon de 1,50 mètre. Il porte une attaque de coup avec un bonus d\'attaque et des dégâts contondants déterminés en fonction de sa taille. Le MD peut tout à fait décider qu\'un objet animé inflige des dégâts perforants ou tranchants si sa forme le lui permet.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, vous pouvez animer deux objets supplémentaires par emplacement au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Anticipation / Contingence',
            'slug' => Str::slug('Anticipation / Contingence'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => 'personnelle',
            'component' => 'V, S, M (une statuette de vous taillée dans l\'ivoire et ornée de gemmes d\'une valeur minimum de 1 500 po)',
            'duration' => '10 jours',
            'description' => '<p>Choisissez un sort de niveau 5 ou moins que vous êtes en mesure de lancer, qui possède une durée d\'incantation d\'une action, et qui peut vous prendre pour cible. Vous lancez ce sort (que l\'on appelle le sort contingent) lors de l\'incantation de la contingence. Vous dépensez donc les emplacements des deux sorts, mais le contingent ne fait pas effet immédiatement. Il s\'activera lorsque certaines conditions seront remplies. Vous devez décrire ces dernières au moment où vous lancez les deux sorts. Par exemple, lors d\'une contingence associée à une respiration aquatique, vous pouvez stipuler que la respiration aquatique doit se déclencher quand vous vous trouvez immergé dans l\'eau ou dans un liquide similaire.</p><p> Le sort contingent prend effet dès que les circonstances sont remplies pour la première fois, que vous le vouliez ou non, ce qui met un terme à la contingence.</p><p> Le sort contingent affecte uniquement votre personne, même s\'il peut normalement affecter d\'autres créatures. Vous ne pouvez utiliser qu\'un seul sort de contingence à la fois, si vous en lancez un second, les effets du précédent se dissipent. De plus, la contingence prend fin si sa composante matérielle n\'est plus sur votre personne.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Antidétection / Non-détection',
            'slug' => Str::slug('Antidétection / Non-détection'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une pincée de poussière de diamant d\'une valeur de 25 po, que le sort consume une fois saupoudrée sur la cible)',
            'duration' => '8 heures',
            'description' => '<p>Pendant toute la durée du sort, vous dissimulez la cible que vous touchez aux yeux de la magie de divination. Vous pouvez prendre pour cible une créature consentante, un endroit ou un objet ne mesurant pas plus de 3 mètres dans chaque dimension. La magie de divination ne peut plus viser votre cible et les organes de scrutation magiques ne la perçoivent plus.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Apaisement des émotions',
            'slug' => Str::slug('Apaisement des émotions'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous tentez de supprimer les émotions fortes au sein d\'un groupe de gens. Chaque humanoïde qui se trouve dans une sphère de 6 mètres de rayon centrée autour d\'un point de votre choix situé à portée doit faire un jet de sauvegarde de Charisme. Une créature peut décider de rater volontairement ce jet, sachant que lorsqu\'une créature rate son jet de sauvegarde, vous l\'affectez avec l\'un des deux effets suivants, à votre choix.</p><p> Vous débarrassez temporairement la cible de tout état charmé ou terrorisé. Une fois le sort terminé, l\'état s\'applique de nouveau, à moins que sa durée n\'ait expiré.</p><p> Sinon, vous rendez la cible indifférente vis-à-vis des créatures de votre choix, envers lesquelles elle était auparavant hostile. Cette indifférence prend fin si la cible est attaquée ou affectée par un sort néfaste, ou bien si elle voit l\'un de ses amis se faire ainsi molester. La cible redevient hostile dès que le sort se termine, à moins que le MD n\'en décide autrement.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Apparence trompeuse',
            'slug' => Str::slug('Apparence trompeuse'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => '8 heures',
            'description' => '<p>Ce sort vous permet de modifier l\'apparence d\'autant de créatures que vous voulez, à condition qu\'elles se trouvent à portée et dans votre champ de vision. Vous donnez à chacune d\'entre elles une nouvelle apparence illusoire. Une cible non consentante peut faire un jet de sauvegarde de Charisme. Si elle le réussit, le sort ne l\'affecte pas.</p><p> Ce sort change l\'apparence physique, mais aussi les habits, les armures, les armes et le reste de l\'équipement. Vous pouvez faire croire que chaque créature affectée est plus petite ou plus grande de 30 centimètres maximum qu\'en réalité, lui donner l\'air grosse, maigre ou entre les deux. Vous ne pouvez pas changer le type de son corps, vous devez choisir une forme possédant la même conformation qu\'elle au niveau des membres. En dehors de cela, les détails de l\'illusion sont laissés à votre imagination. Le sort persiste pendant toute sa durée ou jusqu\'à ce que vous utilisiez une action pour le révoquer.</p><p> Les changements apportés par le sort ne résistent pas à un examen physique. Par exemple, si vous l\'utilisez pour ajouter un chapeau à la tenue de la cible, les objets passent au travers et toute personne qui essaie de le toucher ne sentira que de l\'air ou des cheveux et un crâne. Si vous utilisez le sort pour la faire paraître plus mince qu\'en réalité, la main de quelqu\'un qui tente de la toucher se heurtera à son corps alors que, visuellement, elle semble encore dans le vide.</p><p> Une créature peut utiliser son action pour examiner une cible et faire un test d\'lntelligence (Investigation) contre le DD du jet de sauvegarde du sort. Si elle réussit, elle comprend que la cible est déguisée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Appel de destrier / Trouver une monture',
            'slug' => Str::slug('Appel de destrier / Trouver une monture'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous invoquez un esprit qui prend la forme d\'une monture dotée d\'une intelligence, d\'une puissance et d\'une loyauté hors du commun, et créez un lien durable avec lui. La monture apparaît dans un emplacement inoccupé à portée et prend l\'apparence de votre choix : un cheval de guerre, un poney, un chameau, un élan, ou un molosse. (Votre MD peut autoriser d\'autres formes animales.) La monture possède les statistiques de la forme choisie, mais au lieu d\'être de type normal, elle est céleste, féerique ou fiélone (à vous de choisir). De plus, si elle a d\'ordinaire une Intelligence de 5 ou moins, cette caractéristique passe à 6 et elle comprend un langage de votre choix que vous maîtrisez.</p><p> Vous pouvez chevaucher votre monture au combat ou en dehors des affrontements, et le lien instinctif que vous partagez avec elle vous permet de vous battre ensemble comme si vous étiez une seule et même entité. Tant que vous la chevauchez, les sorts qui vous visent exclusivement l\'affectent aussi si vous le désirez.</p><p> Quand la monture tombe à 0 point de vie, elle disparaît sans laisser de cadavre physique. Vous pouvez la renvoyer quand vous le désirez par une action qui la fait disparaître. Si vous lancez de nouveau ce sort, c\'est la même monture qui apparaît, disposant à nouveau de tous ses points de vie.</p><p> Vous pouvez communiquer par télépathie avec votre monture tant qu\'elle se trouve dans un rayon de 1,5 kilomètre.</p><p> Vous ne pouvez vous lier qu\'à une seule monture issue de ce sort à la fois. Vous pouvez libérer la monture du lien quand vous le désirez, par une action qui la fait disparaître.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Appel de familier',
            'slug' => Str::slug('Appel de familier'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 heure',
            'range' => '3 mètres',
            'component' => 'V, S, M (10 po de charbon, d\'encens et d\'herbes à faire brûler dans un brasero en laiton)',
            'duration' => 'instantanée',
            'description' => '<p>Vous vous attachez les services d\'un familier, un esprit qui prend la forme d\'un animal de votre choix : une chauvesouris, un chat, un crabe, une grenouille (ou un crapaud), un faucon, un lézard, une pieuvre, une chouette, un serpent venimeux, un poisson (un piranha), un rat, un corbeau, un hippocampe, une araignée ou une belette. Le familier apparaît dans un emplacement inoccupé à portée et possède les mêmes statistiques que l\'animal dont il revêt la forme, bien qu\'il soit un céleste, une fée ou un fiélon (à vous de choisir) au lieu d\'une bête.</p><p> Votre familier agit indépendamment de vous, mais il obéit toujours à vos ordres. Lors d\'un combat, il lance son propre dé d\'initiative et agit à son tour. Il ne peut pas attaquer, mais il peut effectuer d\'autres actions normalement.</p><p> Quand le familier tombe à 0 point de vie, il disparaît sans laisser de cadavre derrière lui. Il réapparaît si vous lancez de nouveau ce sort.</p><p> Vous pouvez communiquer par télépathie avec votre familier tant qu\'il se trouve dans un rayon de 30 mètres autour de vous. De plus, vous pouvez dépenser votre action pour percevoir le monde par les yeux et les oreilles de votre familier jusqu\'au début de votre prochain tour. Vous bénéficiez aussi de tout sens spécial que possède votre familier. Pendant ce temps, vos yeux et vos oreilles ne fonctionnent plus.</p><p> Vous pouvez renvoyer temporairement votre familier par une action. Il gagne alors une poche dimensionnelle où il attend que vous le rappeliez. Vous pouvez aussi le renvoyer définitivement. Vous pouvez utiliser une action alors qu\'il est temporairement renvoyé pour le faire réapparaître dans un emplacement inoccupé situé dans un rayon de 9 mètres autour de vous.</p><p> Vous ne pouvez avoir qu\'un familier à la fois. Si vous lancez ce sort alors que vous avez déjà un familier, vous attribuez simplement une nouvelle forme à celui que vous possédez déjà choisissez une des formes de la liste précédente, que votre familier adopte de suite.</p><p> Enfin, quand vous lancez un sort avec une portée de « contact » votre familier peut délivrer le sort comme si c\'était lui qui le lançait. Il doit se trouver à 30 mètres de vous ou moins et utiliser sa réaction pour transmettre le sort au moment où vous le lancez. Si le sort exige un jet d\'attaque, vous utilisez votre propre modificateur d\'attaque lors du jet.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Appel de la foudre',
            'slug' => Str::slug('Appel de la foudre'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => '<p>Un nuage orageux apparaît sous forme d\'un cylindre de 3 mètres de haut pour 18 mètres de rayon, centré sur un point situé dans votre champ de vision et à 30 mètres directement au-dessus de vous. Le sort échoue si vous ne pouvez voir le point situé à cette hauteur, là où le nuage doit se former (si vous vous trouvez dans une pièce trop petite pour accueillir le nuage par exemple).</p><p> Quand vous lancez le sort, vous devez choisir un point situé à portée et dans votre champ de vision. Un éclair jaillit du nuage et vient frapper ce point. Chaque créature située dans un rayon de 1,50 mètre autour de ce point doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 3d10 dégâts de foudre, les autres la moitié seulement. À chacun de vos tours jusqu\'à la fin du sort, vous pouvez dépenser votre action pour appeler ainsi la foudre, en visant le même point ou un autre.</p><p> Si, au moment de l\'incantation, vous vous trouvez en extérieur et que les conditions sont déjà orageuses, le sort vous donne le contrôle de l\'orage déjà présent au lieu d\'en créer un nouveau. Dans ce cas, les dégâts du sort augmentent de 1d10.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Arme élémentaire',
            'slug' => Str::slug('Arme élémentaire'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 heure',
            'description' => '<p>Vous touchez une arme non magique pour la rendre magique. Choisissez l\'un des types de dégâts suivants : acide, feu, foudre, froid ou tonnerre. Pendant toute la durée du sort, l\'arme bénéficie d\'un bonus de +1 aux jets d\'attaque et inflige 1d4 dégâts supplémentaires du type choisi.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou 6, le bonus aux jets d\'attaque passe à +2 et les dégâts supplémentaires à 2d4. Quand vous utilisez un emplacement de sort de niveau 7 ou plus, le bonus passe à +3 et les dégâts supplémentaires à 3d4.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Arme magique',
            'slug' => Str::slug('Arme magique'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous touchez une arme non magique. Jusqu\'à la fin du sort, elle devient magique et bénéficie d\'un bonus de +1 aux jets d\'attaque et de dégâts.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, le bonus passe à +2, et à +3 si vous utilisez un emplacement de niveau 6 ou plus.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Arme spirituelle',
            'slug' => Str::slug('Arme spirituelle'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => '<p>Vous créez à portée une arme spectrale flottante qui persiste pendant toute la durée du sort ou jusqu\'à ce que vous le lanciez de nouveau. Lors de l\'incantation, vous pouvez faire une attaque de sort au corps à corps contre une créature située dans un rayon de 1,50 mètre autour de l\'arme. Si vous touchez, la cible reçoit un montant de dégâts de force égal à 1d8 + votre modificateur de caractéristique d\'incantation.</p><p> À votre tour et par une action bonus, vous pouvez déplacer l\'arme d\'un maximum de 6 mètres et répéter l\'attaque contre une créature située dans un rayon de 1,50 mètre autour d\'elle.</p><p> L\'arme peut revêtir la forme de votre choix. Les clercs des divinités associées à une arme particulière (comme St Cuthbert, connu pour sa masse ou Thor pour son marteau) font en sorte que l\'arme générée ressemble à l\'arme iconique de leur protecteur.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Armure d\'Agathys',
            'slug' => Str::slug('Armure d\'Agathys'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un verre d{\'eau)',
            'duration' => '1 heure',
            'description' => '<p>Une force magique protectrice vous entoure et se manifeste sous la forme d\'une pellicule de givre spectral qui recouvre votre personne et votre équipement. Vous gagnez 5 points de vie temporaires pendant toute la durée du sort. Si une créature vous touche avec une attaque de corps à corps alors que vous possédez encore ces points de vie temporaires, elle subit 5 dégâts de froid.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les points de vie temporaires et les dégâts de froid augmentent de 5 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Armure du mage',
            'slug' => Str::slug('Armure du mage'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un bout de cuir tanné)',
            'duration' => '8 heures',
            'description' => '<p>Vous touchez une créature consentante qui ne porte pas d\'armure et l\'enveloppez d\'une force magique protectrice jusqu\'à la fin du sort. La CA de base de la cible passe à 13 + son modificateur de Dextérité. Le sort se termine si la cible revêt une armure ou si vous révoquez le sort par une action.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Arrêt du temps',
            'slug' => Str::slug('Arrêt du temps'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous arrêtez brièvement le cours du temps pour tout le monde sauf vous. Le temps ne s\'écoule plus pour les autres créatures tandis que vous disposez de 1d4+1 tours d\'affilée, pendant lesquels vous pouvez faire des actions et vous déplacer normalement.</p><p> Ce sort se termine si l\'une des actions que vous effectuez lors de ce laps de temps ou l\'un des effets que vous créez lors de ce laps de temps affecte une créature autre que vous ou un objet porté ou transporté par une créature autre que vous. Le sort se termine également si vous vous éloignez à plus de 300 mètres de l\'endroit où vous l\'avez lancé.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aspersion acide',
            'slug' => Str::slug('Aspersion acide'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez une boule d\'acide. Choisissez une créature à portée, ou deux créatures à portée situées à 1,50 mètre ou moins l\'une de l\'autre. Une cible doit réussir un jet de sauvegarde de Dextérité, sinon elle subit 1d6 dégâts d\'acide. Les dégâts du sort augmentent de 1d6 quand vous atteignez le niveau 5 (2d6), le niveau 11 (3d6) et le niveau 17 (4d6).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Assassin imaginaire',
            'slug' => Str::slug('Assassin imaginaire'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S ',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous puisez dans les cauchemars d\'une créature située à portée dans votre champ de vision pour créer une manifestation illusoire de ses pires terreurs, qu\'elle sera la seule à voir. La cible doit faire un jet de sauvegarde de Sagesse. Si elle le rate, elle est terrorisée pendant toute la durée du sort. Tant que le sort n\'est pas terminé, la cible doit faire un jet de sauvegarde de Sagesse à la fin de chacun de ses tours. Elle subit 4d10 dégâts psychiques à chaque échec. Le sort se termine dès qu\'elle réussit un jet de sauvegarde.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 4e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Assistance',
            'slug' => Str::slug('Assistance'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Vous touchez une créature consentante. Une fois avant la fin du sort, la cible peut lancer 1d4 et ajouter le chiffre obtenu au test de caractéristique de son choix. Elle peut lancer le dé avant ou après le test. Le sort se termine alors.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Augure',
            'slug' => Str::slug('Augure'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S, M (bâtonnets, os ou petits objets similaires d\'une valeur minimale de 25 po, portant des marques spéciales)',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez des bâtonnets ornés de gemmes ou des os de dragon, tirez des cartes ornementées ou utilisez une autre méthode de divination pour recevoir un présage de la part d\'une entité d\'un autre monde. Ce présage concerne les résultats de la conduite que vous comptez tenir dans les trente prochaines minutes. C\'est au MD de choisir l\'un des présages suivants :<ul><li>Bonheur pour un résultat positif</li> <li>Malheur pour un résultat négatif</li> <li>Bonheur et malheur pour un résultat comportant du positif et du négatif</li> <li>Rien pour un résultat n\'étant ni positif ni négatif</li></ul></p><p> Le sort ne tient pas compte d\'une éventuelle modification des circonstances, comme l\'incantation de sorts supplémentaires, ou la perte ou l\'arrivée d\'un compagnon.</p><p> Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances par incantation en sus de la première que vous obteniez une prémonition aléatoire au lieu d\'une prémonition fiable. C\'est au MD de faire ce jet en secret.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aura de pureté',
            'slug' => Str::slug('Aura de pureté'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (9 m de rayon)',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => '<p>Une énergie purificatrice émane de vous et forme une aura dans un rayon de 9 mètres. Cette aura se déplace avec vous jusqu\'à la fin du sort et reste centrée sur vous. Chaque créature non hostile qui se trouve dans l\'aura (vous y compris) ne peut pas tomber malade, devient résistante aux dégâts de poison et est avantagée sur les jets de sauvegarde contre les effets générant les états suivants : assourdi, aveuglé, charmé, empoisonné, étourdi, paralysé, terrorisé.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aura de vie',
            'slug' => Str::slug('Aura de vie'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (9 m de rayon)',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => '<p>Une énergie protectrice de vie émane de vous et forme une aura dans un rayon de 9 mètres. Cette aura se déplace avec vous jusqu\'à la fin du sort et reste centrée sur vous. Chaque créature non hostile qui se trouve dans l\'aura (vous y compris) devient résistante aux dégâts nécrotiques et il est impossible de réduire son maximum de points de vie. De plus, une créature vivante non hostile récupère 1 point de vie quand elle débute son tour au sein de l\'aura alors qu\'elle a 0 point de vie.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aura de vitalité',
            'slug' => Str::slug('Aura de vitalité'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (9 m de rayon)',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Une énergie curative émane de vous et forme une aura dans un rayon de 9 mètres. Cette aura se déplace avec vous jusqu\'à la fin du sort et reste centrée sur vous. Vous pouvez utiliser une action bonus pour rendre 2d6 points de vie à une créature située au sein de l\'aura, vous y compris.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aura du croisé',
            'slug' => Str::slug('Aura du croisé'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Une puissance sacrée émane de vous et forme une aura d\'un rayon de 9 mètres, réveillant la combativité de vos amis. L\'aura est centrée sur vous et se déplace avec vous jusqu\'à la fin du sort. Toutes les créatures non hostiles (y compris vous-même) situées en son sein infligent 1d4 dégâts radiants de plus quand elles touchent une cible avec une attaque armée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aura magique de Nystul',
            'slug' => Str::slug('Aura magique de Nystul'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un petit carré de soie)',
            'duration' => '24 heures',
            'description' => '<p>Vous enveloppez la créature ou l\'objet touché d\'une illusion, afin que les sorts de divination révèlent des informations erronées à son propos. La cible du sort doit être une créature consentante ou un objet qui n\'est ni porté ni transporté par une autre créature.</p><p> Lorsque vous lancez le sort, vous choisissez l\'un des effets suivants, ou les deux, qui persistent pendant toute la durée du sort. Si vous lancez ce sort sur la même créature ou le même objet chaque jour pendant 30 jours, en lui attribuant le même effet à chaque fois, l\'illusion persiste jusqu\'à ce que quelqu\'un la dissipe.</p><p> <strong>Aura factice.</strong> Vous modifiez la manière dont la cible apparaît vis-à-vis des sorts et effets magiques détectant les auras magiques, comme détection de la magie. Vous pouvez ainsi faire en sorte qu\'un objet magique paraisse dépourvu de magie ou qu\'un objet ordinaire semble magique, ou vous pouvez modifier l\'aura magique de la cible de manière à ce qu\'elle paraisse appartenir à l\'école de magie de votre choix. Quand vous apposez cet effet sur un objet, vous pouvez faire en sorte que la magie factice se montre à toute personne qui manipule l\'objet.</p><p> <strong>Masque.</strong> Vous modifiez la manière dont la cible apparaît aux sorts et effets magiques qui détectent les types de créatures, comme le sens divin d\'un paladin ou le déclencheur d\'un sort de symbole. Vous choisissez un type de créature : les autres sorts et effets magiques traitent la cible comme si elle appartenait au type ou à l\'alignement choisi.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Aura sacrée',
            'slug' => Str::slug('Aura sacrée'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un petit reliquaire d\'une valeur minimum de 1 000 po contenant une relique sacrée, comme un bout de la robe d\'un saint ou un morceau de parchemin prélevé sur un texte sacré)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Une lumière divine émane de votre personne et forme un doux halo qui vous enveloppe dans un rayon de 9 mètres. Les créatures de votre choix se trouvant dans ce rayon au moment où vous lancez ce sort émettent une faible lumière dans un rayon de 1,50 mètre. De plus, jusqu\'à la fin du sort, elles sont avantagées lors des jets de sauvegarde tandis que les autres créatures sont désavantagées quand elles effectuent un jet d\'attaque contre elles. Quand un fiélon ou un mort-vivant touche une créature affectée avec une attaque au corps à corps, l\'aura qui enveloppe la créature flamboie soudain. L\'assaillant doit réussir un jet de sauvegarde de Constitution ou se retrouver aveugle jusqu\'à la fin du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bagou',
            'slug' => Str::slug('Bagou'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => '1 heure',
            'description' => '<p>Jusqu\'à la fin du sort, chaque fois que vous faites un test de Charisme, vous pouvez remplacer le nombre obtenu au dé par un 15. De plus, quoi que vous disiez, la magie visant à déterminer si vous dites la vérité vous croit toujours sincère.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Baies nourricières',
            'slug' => Str::slug('Baies nourricières'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un brin de gui)',
            'duration' => 'instantanée',
            'description' => '<p>Jusqu\'à dix baies apparaissent dans votre main. Elles sont imprégnées de magie pendant une journée. Une créature peut utiliser son action pour manger une baie, ce qui lui rend un point de vie et la nourrit pour la journée. Les baies perdent leurs propriétés si personne ne les mange dans les 24 heures qui suivent l\'incantation.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Balisage / Rayon traçant',
            'slug' => Str::slug('Balisage / Rayon traçant'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => '<p>Un rayon de lumière frappe une créature de votre choix située à portée. Faites un jet d\'attaque de sort à distance contre elle. Si vous touchez, elle subit 4d6 dégâts radiants et scintille d\'une faible lumière mystique jusqu\'à la fin de votre prochain tour. D\'ici là et grâce à cette lueur, le prochain jet d\'attaque effectué contre elle est avantagé.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bannissement',
            'slug' => Str::slug('Bannissement'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un objet qui répugne à la cible)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Vous tentez d\'envoyer une créature située dans votre champ de vision dans un autre plan d\'existence. Elle doit réussir un jet de sauvegarde de Charisme ou se faire bannir.</p><p> Si la cible est native du plan d\'existence sur lequel vous vous trouvez, vous l\'exilez dans un demi-plan inoffensif. Elle est neutralisée tant qu\'elle se trouve là-bas et y reste jusqu\'à la fin du sort. À ce moment, elle réapparaît à l\'endroit qu\'elle a quitté ou dans l\'emplacement inoccupé le plus proche si son emplacement de départ est occupé.</p><p> Si la cible est originaire d\'un plan d\'existence autre que celui sur lequel vous vous trouvez, une légère détonation accompagne son retour de force sur son plan d\'origine. Si le sort se termine avant qu\'une minute ne se soit écoulée, la cible réapparaît à l\'endroit qu\'elle a quitté ou dans l\'emplacement inoccupé le plus proche si son emplacement de départ est occupé. Sinon, elle ne revient pas.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, vous pouvez viser une créature de plus par niveau au-delà du 4e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Barrière de lames',
            'slug' => Str::slug('Barrière de lames'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => '<p>Vous créez un mur vertical constitué de lames toumoyantes faites d\'énergie magique et tranchantes comme des rasoirs. Le mur apparaît à portée et persiste pour toute la durée du sort. Vous pouvez créer un mur droit d\'un maximum de 30 mètres de long, 6 mètres de haut et 1,50 mètre d\'épaisseur, ou un mur circulaire d\'un maximum de 18 mètres de diamètre, 6 mètres de haut et 1,50 mètre d\'épaisseur. Le mur offre un abri important aux créatures qui se trouvent derrière lui, et son espace est traité comme un terrain difficile.</p><p> Quand une créature pénètre dans la zone du mur pour la première fois au cours de son tour ou quand elle commence son tour dans cette zone, elle doit faire un jet de sauvegarde de Dextérité. Si elle le rate, elle subit 6d10 dégâts tranchants; si elle le réussit, elle en reçoit seulement la moitié.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bénédiction',
            'slug' => Str::slug('Bénédiction'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un peu d\'eau bénite à asperger)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Vous bénissez jusqu\'à trois créatures de votre choix situées à portée. Quand une cible fait un jet d\'attaque ou de sauvegarde avant la fin du sort, elle lance 1d4 et ajoute le montant obtenu au jet d\'attaque ou de sauvegarde.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une créature de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Blessure',
            'slug' => Str::slug('Blessure'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Faites une attaque de sort au corps à corps contre une créature située à une distance inférieure ou égale à votre allonge. Si vous la touchez, elle subit 3d10 dégâts nécrotiques.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bouche magique',
            'slug' => Str::slug('Bouche magique'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (un rayon de miel et de la poussière de jade d\'une valeur de 10 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous implantez un message dans un objet situé à portée. On entend le message dès que les conditions le déclenchant sont remplies. Choisissez un objet situé dans votre champ de vision qui n\'est ni porté ni transporté par une autre créature. Prononcez ensuite le message, qui doit se composer de 25 mots au maximum, mais peut se répéter pendant un maximum de 10 minutes. Enfin, déterminez les circonstances dans lesquelles Je message s\'activera.</p><p> Quand les conditions de déclenchement sont remplies, une bouche magique apparaît sur l\'objet et récite le message avec la même voix que vous et au volume où vous l\'avez prononcé. Si l\'objet choisi possède une bouche ou quelque chose qui y ressemble (comme la bouche d\'une statue), la bouche magique apparaît de manière à donner l\'impression que les paroles sortent des lèvres de l\'objet. Lors de l\'incantation, vous pouvez décider que le sort se termine une fois le message transmis ou qu\'il reste actif et répète le message chaque fois que les conditions de déclenchement sont remplies.</p><p> Ces dernières peuvent être aussi génériques ou spécifiques que vous le désirez, mais elles doivent se baser sur des données visuelles ou audibles, perceptibles dans un rayon de 9 mètres autour de l\'objet. Par exemple, vous pouvez ordonner à la bouche de parler dès qu\'une créature approche à 9 mètres ou moins de l\'objet ou quand une cloche d\'argent retentit dans un rayon de 9 mètres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bouclier',
            'slug' => Str::slug('Bouclier'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 réaction à effectuer lorsque vous êtes touché par une attaque ou un sort de projectile magique',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => '<p>Une barrière invisible faite de force magique apparaît autour de vous et vous protège. Jusqu\'au début de votre prochain tour, vous avez un bonus de +5 à la CA, y compris contre l\'attaque qui a déclenché l\'incantation du sort, et vous ne subissez aucun dégât de la part de projectile magique.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bouclier de feu',
            'slug' => Str::slug('Bouclier de feu'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un morceau de phosphore ou une luciole)',
            'duration' => '10 minutes',
            'description' => '<p>De fines volutes de flammes enveloppent votre corps pendant toute la durée du sort, émettant une vive lumière dans un rayon de 3 mètres et une faible lumière dans un rayon de 3 mètres de plus. Vous pouvez mettre un terme prématuré au sort en utilisant une action.</p><p> Les flammes vous offrent un bouclier chaud ou froid, comme bon vous semble. Le bouclier chaud vous apporte une résistance contre les dégâts de froid, le bouclier froid une résistance contre les dégâts de feu.</p><p> De plus, quand une créature située dans un rayon de 1,50 mètre autour de vous vous touche avec une attaque au corps à corps, le bouclier génère une gerbe de flammes. Si le bouclier est chaud, il inflige 2d8 dégâts de feu à l\'assaillant, s\'il est froid, il lui inflige 2d8 dégâts de froid.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bouclier de la foi',
            'slug' => Str::slug('Bouclier de la foi'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '18 mètres',
            'component' => 'V, S, M (un petit parchemin avec un extrait de texte sacré)',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => '<p>Un champ scintillant apparaît autour d\'une créature de votre choix située à portée et lui donne un bonus de +2 à la CA pendant toute la durée du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bouffée de poison',
            'slug' => Str::slug('Bouffée de poison'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous tendez la main en direction d\'une créature située à portée dans votre champ de vision et projetez une bouffée de gaz toxique sortie de votre paume. La créature doit réussir un jet de sauvegarde de Constitution ou subir 1d12 dégâts de poison.</p><p> Les dégâts du sort augmentent de 1d12 quand vous atteignez le niveau 5 (2d12), le niveau 11 (3d12) et le niveau 17 (4d12).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Boule de feu',
            'slug' => Str::slug('Boule de feu'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une petite boule de guano de chauve-souris et du soufre)',
            'duration' => 'instantanée',
            'description' => '<p>Une traînée luisante part de votre doigt tendu et file vers un point de votre choix situé à portée et dans votre champ de vision, où elle explose dans une gerbe de flammes grondantes. Chaque créature située dans une sphère de 6 mètres de rayon centrée sur ce point doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 8d6 dégâts de feu, les autres la moitié seulement.</p><p> Le feu s\'étend en contournant les angles. Il embrase les objets inflammables de la zone, à moins que quelqu\'un ne les porte ou ne les transporte.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Boule de feu à retardement',
            'slug' => Str::slug('Boule de feu à retardement'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une petite boule de guano de chauvesouris et du soufre)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Un rayon de lumière jaune jaillit de votre doigt tendu et se condense pour former une bille luisante en un point de votre choix situé à portée pendant toute la durée du sort. Quand le sort se termine, soit parce que votre concentration se brise, soit parce que vous y mettez volontairement un terme, la bille se dilate dans un grondement sourd et explose en une gerbe de feu qui s\'étend en franchissant les angles éventuels. Toutes les créatures situées dans une sphère de 6 mètres de rayon centrée sur le point où se trouvait la bille doivent faire un jet de sauvegarde de Dextérité. Celles qui échouent reçoivent un montant de dégâts de feu égal au total de dégâts accumulés (voir plus loin), les autres reçoivent la moitié de ce montant seulement.</p><p> De base, le sort inflige 12d6 dégâts de feu. À la fin de votre tour, si la bille n\'a pas encore explosé, ces dégâts augmentent de 1d6.</p><p> Si quelqu\'un touche la bille avant la fin de l\'intervalle, il doit faire un jet de sauvegarde de Dextérité. S\'il échoue, le sort se termine immédiatement et la bille explose. S\'il réussit, il peut lancer la bille à une distance maximale de 12 mètres. Si elle touche un objet solide ou une créature, le sort se termine et la bille explose.</p><p> Les flammes endommagent les objets qui se trouvent dans la zone et embrasent les objets inflammables qui ne sont ni portés ni transportés.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 8 ou plus, les dégâts de base augmentent de 1d6 par niveau au-delà du 7e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Bourrasque',
            'slug' => Str::slug('Bourrasque'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (ligne de 18 mètres)',
            'component' => 'V, S, M (une graine de légume)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Une zone de vent fort de 18 mètres de long sur 3 de large souffle depuis votre position dans la direction que vous avez choisie pendant toute la durée du sort. Chaque créature commençant son tour dans la zone doit réussir un jet de sauvegarde de Force, sans quoi elle est repoussée de 4,50 mètres à l\'opposé de vous, dans la direction où souffle le vent.</p><p> Une créature qui se trouve dans la zone doit dépenser 60 centimètres de mouvement pour se rapprocher de vous de 30 centimètres.</p><p> La bourrasque disperse les gaz et les vapeurs et éteint les bougies, les torches et autres flammes nues similaires dans la zone. Les flammes protégées, par une lanterne par exemple, s\'agitent follement et ont 50% de chance de s\'éteindre.</p><p> Vous pouvez changer la direction dans laquelle souffle la bourrasque par une action bonus à chacun de vos tours jusqu\'à la fin du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Brume mortelle / Nuage mortel',
            'slug' => Str::slug('Brume mortelle / Nuage mortel'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez une sphère de 6 mètres de rayon faite d\'un brouillard vert jaunâtre empoisonné. Il est centré sur un point de votre choix situé à portée. Le brouillard s\'étend en contournant les coins au besoin. Il persiste pendant toute la durée du sort ou jusqu\'à ce qu\'un vent fort (au moins 30 km/h) le disperse et mette un terme au sort. La visibilité est lourdement obstruée dans sa zone d\'effet.</p><p> Quand une créature entre dans la zone du sort pour la première fois de son tour ou qu\'elle y démarre son tour, elle doit faire un jet de sauvegarde de Constitution. Elle subit 5d8 dégâts de poison si elle rate son jet et seulement la moitié si elle le réussit. Le brouillard affecte même les créatures qui retiennent leur souffle ou qui n\'ont pas besoin de respirer.</p><p> Le brouillard s\'éloigne de vous sur une distance de 3 mètres au début de chacun de vos tours, rampant à la surface du sol. Comme ses vapeurs sont plus lourdes que l\'air, il s\'enfonce dans les replis du terrain et s\'infiltre même dans les ouvertures.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cage de force',
            'slug' => Str::slug('Cage de force'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '30 mètres',
            'component' => 'V, S, M (poussière de rubis d\'une valeur de 1 500 po)',
            'duration' => '1 heure',
            'description' => '<p>Une prison immobile et invisible, en forme de cube et faite de force magique, se forme soudain autour d\'une zone de votre choix située à portée. Ce peut être une cage ou une boîte hermétique, à votre guise.</p><p> Une prison en forme de cage peut faire un maximum de 6 mètres d\'arête et dispose de barreaux d\'un centimètre d\'épaisseur placés à un centimètre d\'intervalle.</p><p> Une prison en forme de boîte peut faire un maximum de 3 mètres d\'arête et forme une barrière pleine qui empêche la matière de passer. Elle bloque aussi le passage des sorts lancés vers l\'intérieur ou l\'extérieur.</p><p> Quand vous lancez ce sort, chaque créature qui se trouve entièrement au sein de la zone affectée se retrouve prise au piège. Une créature qui s\'y trouve seulement en partie ou qui s\'avère trop grande pour y tenir est repoussée vers l\'extérieur de la zone jusqu\'à ce qu\'elle la quitte complètement.</p><p> Une créature enfermée dans la cage ne peut pas la quitter par des moyens non magiques. Si elle tente d\'utiliser la téléportation ou les déplacements interplanaires pour s\'échapper, elle doit d\'abord faire un jet de sauvegarde de Charisme. Si elle le réussit, elle peut utiliser cette magie pour fuir, sinon elle ne parvient pas à quitter la cage et l\'utilisation du sort ou de l\'effet est gaspillée. La cage s\'étend aussi sur le plan éthéré, ce qui bloque les déplacements éthérés.</p><p> La dissipation de la magie est sans effet sur ce sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Caresse du vampire',
            'slug' => Str::slug('Caresse du vampire'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Le simple contact de votre main enveloppée d\'ombres peut siphonner la force vitale d\'autrui pour soigner vos propres plaies. Faites une attaque de sort au corps à corps contre une créature située à une distance inférieure ou égale à votre allonge. Si vous touchez, elle subit 3d6 dégâts nécrotiques et vous récupérez un montant de points de vie égal à la moitié des dégâts infligés. Vous pouvez dépenser votre action à chacun de vos tours pour répéter cette attaque jusqu\'à la fin du sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Carquois magique / Vif carquois',
            'slug' => Str::slug('Carquois magique / Vif carquois'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'contact',
            'component' => 'V, S, M (un carquois contenant au moins une munition)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Vous transmutez votre carquois de manière à ce qu\'il produise une réserve infinie de munitions non magiques qui semblent bondir dans votre main dès que vous la tendez pour les saisir.</p><p> Pendant toute la durée du sort, à chacun de vos tours, vous pouvez utiliser une action bonus pour effectuer deux attaques avec une arme utilisant les munitions venant du carquois. Chaque fois que vous portez une telle attaque à distance, le carquois remplace magiquement la munition dépensée par une autre, identique, non magique. Les munitions que produit le carquois se désintègrent quand le sort se termine. Si le carquois ne se trouve plus en votre possession, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cécité/Surdité',
            'slug' => Str::slug('Cécité/Surdité'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => '1 minute',
            'description' => '<p>Vous pouvez rendre un ennemi sourd ou aveugle. Choisissez une créature autre que vous qui se situe à portée et dans votre champ de vision. Elle doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle est soit aveugle, soit sourde (à vous de choisir) pendant toute la durée du sort. Elle a droit à un nouveau jet de sauvegarde de Constitution à la fin de chacun de ses tours, le sort se terminant si elle le réussit</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez viser unecréature de plus par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cercle de mort',
            'slug' => Str::slug('Cercle de mort'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (la poudre d\'une perle noire broyée d\'une valeur minimale de 500 po)',
            'duration' => 'instantanée',
            'description' => '<p>Une sphère d\'énergie négative s\'étend dans un rayon de 18 mètres à partir d\'un point situé à portée. Chaque créature située dans la sphère doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 8d6 dégâts nécrotiques, les autres la moitié seulement.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les dégâts augmentent de 2d6 par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cercle de pouvoir',
            'slug' => Str::slug('Cercle de pouvoir'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (9 mètres de rayon)',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Une énergie divine émane de vous, qui déforme les énergies magiques pour les diffuser dans un rayon de 9 mètres autour de votre personne. La sphère est centrée sur vous et se déplace avec vous jusqu\'à la fin du sort. Pendant toute la durée du sort, toutes les créatures amicales de la zone (vous y compris) ont l\'avantage lors de leurs jets de sauvegarde contre les sorts et autres effets magiques. De plus, quand une créature affectée réussit son jet de sauvegarde contre un sort ou un effet magique qui inflige des dégâts réduits de moitié en cas de jet de sauvegarde réussi, elle ne subit absolument aucun dégât.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cercle de téléportation',
            'slug' => Str::slug('Cercle de téléportation'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, M (des craies et des encres rares contenant des extraits de pierres précieuses pour une valeur de 50 po, que le sort consume)',
            'duration' => '1 round',
            'description' => '<p>Lorsque vous lancez ce sort, vous tracez un cercle de 3 mètres de diamètre au sol et y inscrivez des symboles qui relient l\'endroit où vous vous trouvez actuellement à un cercle de téléportation permanent de votre choix dont vous connaissez la séquence de symboles et qui se trouve sur le même plan d\'existence que vous. Un portail scintillant s\'ouvre dans le cercle que vous avez tracé et reste ouvert jusqu\'à la fin de votre prochain tour. Toute créature qui franchit ce portail apparaît instantanément dans un rayon de 1,50 mètre autour du cercle de destination ou dans l\'espace inoccupé le plus proche si le reste est occupé.</p><p> Nombre de temples majeurs, de guildes et d\'autres lieux d\'importance possèdent des cercles de téléportation permanents tracés quelque part dans leur enceinte. Chacun de ces cercles utilise une séquence de symboles uniques : une série de runes magiques disposées selon un motif particulier. Lorsque vous apprenez à lancer ce sort, vous apprenez la séquence associée à deux destinations situées sur le plan matériel et déterminées par le MD. Vous pouvez apprendre d\'autres séquences de symboles au cours de vos aventures. Pour en mémoriser une, vous devez l\'étudier pendant 1 minute.</p><p> Vous pouvez créer un cercle de téléportation permanent en lançant ce sort au même endroit tous les jours pendant un an. Vous n\'avez pas besoin d\'utiliser le cercle pour vous téléporter quand vous lancez ce sort pour cela.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cercle magique',
            'slug' => Str::slug('Cercle magique'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, S, M (eau bénite ou poudre d\'argent et de fer d\'une valeur minimale de 100 po, que le sort consume)',
            'duration' => '1 heure',
            'description' => '<p>Vous créez un cylindre d\'énergie magique de 3 mètres de rayon pour 6 mètres de haut, centré sur un point au sol situé à portée et dans votre champ de vision. Des runes luisantes apparaissent là où le cylindre touche le sol ou une autre surface.</p><p> Choisissez l\'un des types de créatures suivants: célestes, élémentaires, fées, fiélons ou morts-vivants. Le cercle affecte une créature du type choisi de la manière suivante.</p><p> La créature ne peut pas entrer de son plein gré dans le cylindre par des moyens non magiques. Si elle tente d\'utiliser la téléportation ou le voyage extraplanaire pour y pénétrer, elle doit auparavant réussir un jet de sauvegarde de Charisme.</p><p> La créature est désavantagée lors des jets d\'attaque contre les créatures se trouvant dans le cylindre.</p><p> La créature ne peut ni charmer, ni terroriser, ni posséder les créatures situées dans le cylindre.</p><p> Quand vous lancez ce sort, vous pouvez décider que sa magie agira à l\'envers, empêchant les créatures du type choisi de quitter le cercle et protégeant contre elles les individus situés à l\'extérieur du cercle.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, la durée du sort augmente d\'une heure par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Chaîne d\'éclairs',
            'slug' => Str::slug('Chaîne d\'éclairs'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '450 mètres',
            'component' => 'V, S, M (un éclat d\'ambre, de verre ou de cristal, trois épingles en argent et un morceau de fourrure)',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez un arc électrique qui file vers une cible de votre choix, située à portée dans votre champ de vision. Trois éclairs bondissent ensuite de cette cible sur un maximum de trois autres cibles qui doivent toutes se trouver dans un rayon de 9 mètres autour de la première. Une cible peut être une créature ou un objet et ne peut recevoir qu\'un seul éclair.</p><p> Chaque cible doit faire un jet de sauvegarde de Dextérité et subit 10d8 dégâts de foudre en cas d\'échec, la moitié en cas de réussite.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, un éclair de plus bondit de la première cible vers une autre pour chaque niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Champ antimagie',
            'slug' => Str::slug('Champ antimagie'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (sphère de 3 mètres de rayon)',
            'component' => 'V, S, M (une pincée de poudre de fer ou de limaille)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Une sphère d\'antimagie invisible de 3 mètres de rayon vous entoure. La zone qu\'elle englobe est coupée de l\'énergie magique qui imprègne le multivers. En son sein, il est impossible de lancer un sort, les créatures invoquées disparaissent et même les objets magiques deviennent ordinaires. La sphère reste centrée sur vous et se déplace avec vous jusqu\'à la fin du sort.</p><p> Les sorts et autres effets magiques, en dehors de ceux émanant d\'un artefact ou d\'une divinité, sont supprimés au sein de la sphère et ne peuvent pénétrer dans son espace. Un emplacement dépensé pour lancer un sort ainsi supprimé est tout de même consommé. L\'effet ne fonctionne pas tant qu\'il est supprimé, mais le temps passé sous suppression est tout de même décompté de sa durée d\'efficacité.</p><p> <strong>Effets visant une cible.</strong> Les sorts et autres effets magiques visant une créature ou un objet situé dans la sphère, comme projectile magique ou charme-personne, n\'ont aucun effet sur cette cible.</p><p> <strong>Zones de magie.</strong> L\'aire d\'un sort ou d\'un effet magique, comme celle d\'une boule de feu, ne peut pas s\'étendre au sein de la sphère. Si la sphère recouvre une zone de magie existante, l\'effet de cette dernière est supprimé dans la partie recouverte par la sphère. Par exemple, les flammes d\'un mur de feu sont supprimées au sein de la sphère, créant un trou dans le mur si la partie recouverte est assez grande.</p><p> <strong>Sorts.</strong> Tout sort ou effet magique actif sur une créature ou un objet est supprimé dès qu\'elle ou il se trouve à l\'intérieur et pendant tout le temps qu\'elle ou il y reste.</p><p> <strong>Objets magiques.</strong> Les propriétés et les pouvoirs d\'un objet magique sont supprimés une fois au sein de la sphère. Par exemple, une épée longue +1 située dans la sphère fonctionne comme une épée longue ordinaire.</p><p> Les propriétés et les pouvoirs d\'une arme magique sont supprimés si son utilisateur la manie contre une cible située dans la sphère ou s\'il se trouve dans la sphère. Si une arme ou une munition magique quitte entièrement la sphère (par exemple si vous tirez une flèche magique ou projetez une lance magique en dehors de la sphère), la suppression de magie cesse d\'affecter l\'objet dès qu\'il quitte la sphère.</p><p> <strong>Déplacement magique.</strong> La téléportation et les voyages planaires échouent systématiquement au sein de la sphère, que cette dernière serve de destination ou de point de départ à ce type de déplacement. Un portail menant en un autre lieu, sur un autre monde ou sur un autre plan d\'existence se ferme temporairement tant qu\'il est englobé dans la sphère, de même que l\'ouverture sur un espace extradimensionnel telle celle créée par le sort corde enchantée.</p><p> <strong>Créatures et objets.</strong> Une créature ou un objet invoqués ou créés par magie disparaissent temporairement si la sphère les recouvre. Ils réapparaissent instantanément dès que l\'espace qu\'ils occupent ne se trouve plus au sein de la sphère./n <strong>Dissipation de la magie.</strong> Les sorts et les effets magiques comme dissipation de la magie n\'ont aucun effet sur la sphère.</p><p> De même, les sphères issues de divers sorts de champ antimagie ne s\'annulent pas les unes les autres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Changement de forme',
            'slug' => Str::slug('Changement de forme'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un diadème de jade d\'une valeur minimale de 1 500 po, que vous devez coiffer avant de lancer le sort)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous prenez la forme d\'une créature différente pendant toute la durée du sort. Vous pouvez revêtir l\'apparence de n\'importe quelle créature dotée d\'un indice de dangerosité égal ou inférieur au vôtre. En revanche, vous ne pouvez pas vous changer en une créature artificielle ni en mort-vivant, et vous devez avoir vu au moins une fois la créature que vous imitez. Vous vous changez en un spécimen ordinaire de cette créature, sans niveau de classe et sans le trait incantation.</p><p> Vos statistiques de jeu sont remplacées par celles de la créature choisie, mais vous conservez votre alignement et vos valeurs d\'intelligence, de Sagesse et de Charisme. Vous gardez également vos compétences et vos maîtrises de jet de sauvegarde, en plus de gagner celles de la créature. Si elle possède les mêmes maîtrises que vous, mais que son bonus est plus élevé, utilisez-le à la place du vôtre. Vous ne pouvez pas utiliser les actions d\'antre ni les actions légendaires de la créature.</p><p> Vous adoptez les dés de vie et les points de vie de votre nouvelle forme. Quand vous reprenez votre forme normale, vous revenez au nombre de points de vie qui était le vôtre avant de vous transformer. Si vous reprenez votre forme normale parce que vous êtes tombé à 0 point de vie, les dégâts en surplus sont déduits des points de vie de votre forme normale. Tant que ces dégâts ne font pas tomber les points de vie de votre forme normale à 0, vous n\'êtes pas inconscient.</p><p> Vous conservez les avantages de vos pouvoirs de race, de classe et autre et vous êtes toujours en mesure de les utiliser, à condition que votre nouvelle forme soit physiquement capable de le faire. Vous ne pouvez pas utiliser vos sens spéciaux (comme la vision dans le noir), à moins que votre nouvelle forme n\'en soit aussi dotée. Vous pouvez parler uniquement si votre nouvelle forme en est normalement capable.</p><p> Quand vous vous transformez, vous choisissez si votre équipement tombe au sol, s\'il fusionne avec votre nouvelle forme ou si cette nouvelle forme le porte sur elle, auquel cas il fonctionne normalement. C\'est au MD de déterminer si la nouvelle forme peut porter une pièce d\'équipement, en fonction de sa taille et de sa morphologie. Votre équipement ne change pas de forme ni de taille pour s\'accorder à votre nouvelle forme ; si cette dernière ne peut s\'en accommoder, l\'équipement ou certaines pièces d\'équipement tombent à terre ou fusionnent avec votre nouvelle silhouette. L\'équipement fusionné ne génère aucun effet.</p><p> Pendant la durée du sort, vous pouvez utiliser votre action pour prendre une nouvelle forme répondant aux mêmes critères et aux mêmes règles que précédemment, à une exception : si votre nouvelle forme possède plus de points de vie que la précédente, votre nombre de points de vie reste tel qu\'il était.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Changement de plan',
            'slug' => Str::slug('Changement de plan'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un diapason de métal valant au moins 250 po, harmonisé avec un plan d\'existence donné)',
            'duration' => 'instantanée',
            'description' => '<p>Vous et un maximum de huit autres créatures consentantes vous donnez la main pour former un cercle et êtes transportés sur un autre plan d\'existence. Vous pouvez spécifier une destination en termes génériques, comme la Cité d\'airain sur le plan élémentaire du Feu ou le palais de Dispater dans la deuxième strate des Neuf Enfers. Vous apparaîtrez alors à cet endroit ou à proximité. Par exemple, si vous tentez d\'atteindre la Cité d\'airain, vous pouvez arriver dans sa rue de l\'Acier, devant la Porte des cendres ou de l\'autre côté de la mer de Feu d\'où vous la contemplez. C\'est au MD de décider.</p><p> Sinon, si vous connaissez la séquence de glyphes magiques d\'un cercle de téléportation présent sur un autre plan d\'existence, ce sort peut vous conduire dans ce cercle. S\'il est trop étroit pour accueillir toutes les créatures qui voyagent avec vous, les créatures en trop apparaissent dans les emplacements inoccupés les plus proches du cercle.</p><p> Vous pouvez aussi utiliser ce sort pour bannir une créature non consentante sur un autre plan. Choisissez une créature à votre portée et faites une attaque de sort au corps à corps contre elle. Si vous touchez, elle doit faire un jet de sauvegarde de Charisme. Si elle le rate, elle est emportée en un endroit aléatoire du plan d\'existence que vous nommez. Une fois là, c\'est à elle de trouver un moyen de rentrer sur son plan natal.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Charme-personne',
            'slug' => Str::slug('Charme-personne'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => '<p>Vous tentez de charmer un humanoïde se trouvant à portée et dans votre champ de vision. Il doit faire un jet de sauvegarde de Sagesse, pour lequel il est avantagé si vous ou vos compagnons êtes actuellement en train de le combattre. S\'il rate son test, vous le charmez jusqu\'à la fin du sort ou jusqu\'à ce que vous ou vos compagnons lui fassiez du mal. La créature charmée vous considère comme un ami. Quand le sort se termine, elle sait que vous l\'avez charmée.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez charmer une créature de plus par niveau au-delà du 1er. Toutes les cibles doivent se trouver à 9 mètres ou moins les unes des autres lorsque vous lancez le sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment aveuglant / Frappe aveuglante',
            'slug' => Str::slug('Châtiment aveuglant / Frappe aveuglante'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>La prochaine attaque armée qui vous permet de toucher une créature avant la fin de ce sort voit votre arme briller d\'une vive lumière et inflige 3d8 dégâts radiants de plus à votre cible. De plus, la cible doit réussir un jet de sauvegarde de Constitution, sans quoi elle est aveuglée jusqu\'à la fin du sort.</p><p> Une créature aveuglée par ce sort a droit à un nouveau jet de sauvegarde de Constitution à la fin de chacun de ses tours. Dès qu\'elle en réussit un, elle n\'est plus aveuglée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment calcinant / Frappe ardente',
            'slug' => Str::slug('Châtiment calcinant / Frappe ardente'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Lors de la prochaine attaque armée qui vous permet de toucher une créature pendant la durée du sort, votre arme flamboie, comme chauffée à blanc, et l\'attaque inflige 1d6 dégâts de feu supplémentaires. Elle embrase également la cible qui doit faire un jet de sauvegarde de Constitution au début de chacun de ses tours jusqu\'à la fin du sort. Si elle échoue, elle subit 1d6 dégâts de feu, si elle réussit le sort se termine. Si la cible ou une créature située dans un rayon de 1,50 mètre autour d\'elle utilise une action pour éteindre les flammes ou si un effet les étouffe (si la cible est plongée dans l\'eau par exemple), le sort se termine.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts initiaux augmentent de 1d6 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment Courroucé / Frappe colérique',
            'slug' => Str::slug('Châtiment Courroucé / Frappe colérique'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Lorsque vous touchez une cible avec une attaque armée au corps à corps pour la première fois pendant la durée de ce sort, votre attaque inflige 1d6 dégâts psychiques supplémentaires. De plus, si la cible est une créature, elle doit réussir un jet de sauvegarde de Sagesse, sans quoi elle est terrorisée à votre vue jusqu\'à ce que le sort se termine. Par une action, elle peut faire un jet de sauvegarde de Sagesse contre le DD du jet de sauvegarde de votre sort pour rassembler son courage et mettre fin au sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment débilitant / Frappe assommante',
            'slug' => Str::slug('Châtiment débilitant / Frappe assommante'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Lors de la prochaine attaque armée qui vous permet de toucher une créature pendant la durée du sort, votre arme transperce le corps et l\'esprit de la cible et lui inflige 4d6 dégâts psychiques supplémentaires. La cible doit faire un jet de sauvegarde de Sagesse. Si elle échoue, elle est désavantagée lors des jets d\'attaque et de caractéristique et ne peut pas utiliser de réaction avant la fin de son prochain tour.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment du ban / Frappe du bannissement',
            'slug' => Str::slug('Châtiment du ban / Frappe du bannissement'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>La prochaine attaque armée qui vous permet de toucher une créature avant la fin de ce sort voit votre arme crépiter d\'énergie et inflige 5d10 dégâts de force à votre cible. De plus, si cette attaque réduit la cible à 50 pv ou moins, elle la bannit. Si la cible est originaire d\'un plan d\'existence différent de celui sur lequel vous vous trouvez, elle disparaît, renvoyée dans son plan d\'origine. Si elle est originaire du plan sur lequel vous vous trouvez, elle disparaît dans un demi-plan inoffensif. Elle est neutralisée tant qu\'elle s\'y trouve, c\'est-à-dire jusqu\'à la fin du sort. À ce moment, elle réapparaît à l\'emplacement qu\'elle a quitté ou dans l\'emplacement le plus proche si le précédent est occupé.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment révélateur / Frappe lumineuse',
            'slug' => Str::slug('Châtiment révélateur / Frappe lumineuse'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>La prochaine attaque armée qui vous permet de toucher une créature avant la fin de ce sort voit votre arme briller d\'une lumière astrale et inflige 2d6 dégâts radiants de plus à votre cible, qui devient visible si elle était invisible et émet une faible lumière dans un rayon de 1,50 mètre jusqu\'à la fin du sort. Elle ne peut plus devenir invisible pendant toute cette durée.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts supplémentaires augmentent de 1d6 par emplacement de sort au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Châtiment tonitruant / Frappe tonitruante',
            'slug' => Str::slug('Châtiment tonitruant / Frappe tonitruante'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Lorsque vous touchez une cible avec une attaque armée au corps à corps pour la première fois pendant la durée de ce sort, votre arme fait retentir un fracas tonitruant audible dans un rayon de 90 mètres autour de vous, et l\'attaque inflige 2d6 dégâts de tonnerre supplémentaires. De plus, si la cible est une créature, elle doit réussir un jet de sauvegarde de Force ou se trouver repoussée sur 3 mètres à l\'opposé de votre position et tomber à terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Chien de garde de Mordenkainen',
            'slug' => Str::slug('Chien de garde de Mordenkainen'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un petit sifflet en argent, un éclat d\'os et une ficelle)',
            'duration' => '8 heures',
            'description' => '<p>Vous invoquez un chien de garde fantomatique dans un emplacement inoccupé situé à portée et dans votre champ de vision. Il reste là pendant toute la durée du sort ou jusqu\'à ce que vous le renvoyiez par une action ou que vous vous éloigniez à plus de 30 mètres de lui.</p><p> Le chien est invisible pour tout le monde sauf pour vous et il est impossible de le blesser. Il se met à aboyer dès qu\'une créature de taille Petite ou supérieure arrive à 9 mètres de lui sans prononcer d\'abord le mot de passe que vous avez choisi lors de l\'incantation. Le chien perçoit les créatures invisibles et voit ce qui se passe sur le plan éthéré. Il ignore les illusions.</p><p> Au début de votre tour, le chien tente de mordre une créature qui vous est hostile et située dans un rayon de 1,50 mètre autour de lui. Son bonus d\'attaque est égal à votre modificateur de caractéristique d\'incantation + votre bonus de maîtrise. S\'il touche, il inflige 4d8 dégâts perforants.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Clairvoyance',
            'slug' => Str::slug('Clairvoyance'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '1,5 kilomètre',
            'component' => 'V, S, M (soit un focaliseur d\'une valeur minimale de 100 po, soit une corne incrustée de pierreries pour l\'ouïe, soit un oeil de verre pour la vue)',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => '<p>Vous créez un organe sensoriel invisible à portée dans un endroit qui vous est familier (un endroit où vous vous êtes déjà rendu ou que vous avez déjà vu) ou dans un endroit évident qui ne vous est pas familier (comme de l\'autre côté d\'une porte, derrière un coin, dans un bosquet...). L\'organe reste là pendant toute la durée du sort. Il est impossible de l\'attaquer ou d\'interagir avec.</p><p> Vous choisissez la vue ou l\'ouïe au moment où vous lancez le sort. Vous pouvez alors utiliser le sens choisi à travers l\'organe comme si vous occupiez son emplacement. Vous pouvez dépenser une action pour passer de la vue à l\'ouïe ou inversement.</p><p> Une créature capable de voir l\'organe sensoriel (en bénéficiant par exemple de voir l\'invisible ou de vision parfaite) le perçoit comme une orbe lumineuse intangible de la taille de votre poing.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Clignotement',
            'slug' => Str::slug('Clignotement'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => '<p>Pendant toute la durée du sort, vous lancez 1d20 à la fin de chacun de vos tours. Sur un 11 ou plus, vous disparaissez de votre plan d\'existence actuel et apparaissez sur le plan éthéré (si vous vous trouviez déjà là, le sort échoue et l\'incantation est gaspillée). Au début de votre tour suivant et quand le sort se termine alors que vous vous trouvez sur le plan éthéré, vous retournez sur un emplacement inoccupé de votre choix que vous pouvez voir dans un rayon de 3 mètres autour de l\'emplacement dont vous avez disparu. S\'il n\'y a pas d\'emplacement disponible dans ce rayon, vous apparaissez dans l\'espace inoccupé le plus proche (choisi au hasard s\'il y en a plusieurs à égale distance). Vous pouvez révoquer ce sort par une action.</p><p> Tant que vous êtes sur le plan éthéré, vous voyez et entendez ce qui se passe sur le plan d\'où vous venez, qui apparaît sous forme d\'ombres grises, mais votre vision ne porte pas au-delà de 18 mètres. Vous pouvez seulement affecter des créatures se trouvant sur le plan éthéré et elles sont les seules à pouvoir vous affecter. Les créatures qui ne se trouvent pas sur ce plan ne peuvent ni vous percevoir, ni interagir avec vous, à moins qu\'elles ne disposent d\'un pouvoir le leur permettant.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Clone',
            'slug' => Str::slug('Clone'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (un diamant valant au moins 1 000 po et un cube d\'au moins 2,5 centimètres d\'arête de chair de la créature à cloner, le sort consommant ces deux composantes, ainsi qu\'un réceptacle d\'une valeur minimale de 2 000 po disposant d\'un couvercle susceptible d\'être scellé, et assez grand pour contenir une créature de taille Moyenne, comme une grande urne, un cercueil, une cavité remplie de boue creusée dans la terre ou un récipient de cristal rempli d\'eau salée)',
            'duration' => 'instantanée',
            'description' => '<p>Ce sort génère la réplique inerte d\'une créature vivante, pour la protéger de la mort. Le clone se forme au sein d\'un réceptacle scellé et grandit jusqu\'à atteindre sa taille adulte et sa maturité en 120 jours; cependant, vous pouvez décider que le clone sera une version plus jeune de la créature qu\'il reproduit. Il reste inerte et indéfiniment dans le même état tant que le réceptacle reste scellé.</p><p> Une fois que le clone est arrivé à maturité, si la créature originale meurt, son âme se transfère dans le clone, à condition que cette âme soit libre et désireuse de revenir à la vie. D\'un point de vue physique, le clone est identique à l\'original. De plus, il possède la même personnalité, les mêmes souvenirs et les mêmes capacités, mais il n\'hérite pas de son équipement. Les restes physiques de la créature originale ne disparaissent pas. S\'ils ne sont pas détruits, ils deviennent inertes et ne peuvent pas servir à ramener la créature à la vie puisque son âme se trouve ailleurs.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Coffre secret de Léomund',
            'slug' => Str::slug('Coffre secret de Léomund'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un superbe coffre de 90x60x60 centimètres, fait de matériaux rares d\'une valeur minimale de 5 000 po et une réplique du coffre de taille Très Petite, faite des mêmes matériaux et valant au moins 50 po)',
            'duration' => 'instantanée',
            'description' => '<p>Vous dissimulez un coffre et son contenu sur le plan éthéré. Pour cela, vous devez toucher le coffre et la réplique qui sert de composante matérielle au sort. Le coffre peut contenir un maximum de 324 décimètres cubes (90x60x60 centimètres) de matière non vivante.</p><p> Tant que le coffre reste sur le plan éthéré, vous pouvez utiliser une action pour toucher la réplique et le rappeler à vous. Il apparaît en un emplacement libre au sol, situé dans un rayon de 1,50 mètre autour de vous. Vous pouvez renvoyer le coffre dans le plan éthéré en utilisant une action et en touchant le coffre et sa réplique.</p><p> Au bout de 60 jours, il y a 5% de chances cumulatifs par jour que les effets du sort se terminent. Ils s\'achèvent aussi si vous lancez de nouveau le sort, si la petite réplique du coffre est détruite ou si vous décidez de mettre un terme au sort par une action. Si le sort se termine alors que le grand coffre est encore sur le plan éthéré, ce coffre est irrémédiablement perdu.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Colonne de flamme',
            'slug' => Str::slug('Colonne de flamme'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (une pincée de soufre)',
            'duration' => 'instantanée',
            'description' => '<p>Une colonne verticale de feu divin rugissant surgit des cieux et s\'abat à l\'endroit de votre choix. Toute créature située dans un cylindre de 3 mètres de rayon et 12 mètres de haut centré sur le point à portée de votre choix doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 4d6 dégâts de feu et 4d6 dégâts radiants, les autres la moitié seulement.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts de feu ou les dégâts radiants (à vous de choisir) augmentent de 1d6 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Communication à distance / Envoi de message',
            'slug' => Str::slug('Communication à distance / Envoi de message'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'illimitée',
            'component' => 'V, S, M (un petit bout de fil de cuivre)',
            'duration' => '1 round',
            'description' => '<p>Vous envoyez un court message d\'au maximum 25 mots à une créature qui vous est familière. Elle entend le message dans son esprit, sait que c\'est vous qui le lui avez envoyé si elle vous connaît, et peut vous répondre immédiatement de la même manière. Le sort permet aux créatures dotées d\'une Intelligence minimale de 1 de comprendre le sens de votre message.</p><p> Vous pouvez envoyer votre message à n\'importe quelle distance et même sur un autre plan d\'existence, mais si la cible est sur un autre plan, il y a 5% de chances que le message n\'arrive pas à destination.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Communication avec les animaux',
            'slug' => Str::slug('Communication avec les animaux'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => '<p>Vous devenez capable de comprendre les bêtes et de communiquer verbalement avec elles pendant toute la durée du sort. Les connaissances et le degré de conscience de nombreuses bêtes sont limités par leur intelligence réduite, mais elles peuvent au moins vous renseigner sur les environs et les monstres avoisinants, ainsi que sur ce qu\'elles perçoivent aujourd\'hui ou ont perçu la veille. Si le MD accepte, vous pouvez convaincre une bête de vous accorder une petite faveur.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Communication avec les morts',
            'slug' => Str::slug('Communication avec les morts'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S, M (encens incandescent)',
            'duration' => '10 minutes',
            'description' => '<p>Vous donnez un semblant de vie et d\'intelligence à un cadavre de votre choix situé à portée. Il est alors en mesure de répondre à vos questions. Le cadavre doit encore disposer d\'une bouche et ne doit pas être devenu mort-vivant. Le sort échoue si le cadavre choisi a déjà été la cible de ce sort au cours des dix jours précédents.</p><p> Vous pouvez poser jusqu\'à cinq questions avant la fin de la durée du sort. Les connaissances du cadavre se limitent à ce qu\'il savait de son vivant, y compris au niveau des langues qu\'il parle. Les réponses sont souvent brèves, cryptiques ou répétitives et le cadavre n\'est absolument pas obligé de vous donner une réponse sincère si vous lui êtes hostile ou s\'il vous reconnaît comme étant un ennemi. Ce sort ne ramène pas l\'âme de la cible dans son corps, juste l\'esprit qui l\'animait; le cadavre ne peut donc pas apprendre de nouvelles informations, ne comprend rien de ce qui s\'est passé après sa mort et est incapable de faire des spéculations sur l\'avenir.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Communication avec les plantes',
            'slug' => Str::slug('Communication avec les plantes'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (9 mètres de rayon)',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => '<p>Vous imprégnez la végétation située dans un rayon de 9 mètres autour de vous d\'une conscience et d\'une mobilité limitées, ce qui permet aux plantes de communiquer avec vous et de suivre des ordres simples. Vous pouvez interroger les végétaux sur les événements qui se sont déroulés la veille dans la zone du sort et ainsi obtenir des informations sur les créatures qui sont passées, sur les conditions météorologiques et autres.</p><p> Vous pouvez également transformer un terrain rendu difficile à cause de la végétation (comme des buissons ou d\'épais taillis) en terrain ordinaire pendant toute la durée du sort. Ou vous pouvez transformer un terrain ordinaire où poussent des plantes en terrain difficile pendant toute la durée du sort, par exemple de manière à ce que des plantes grimpantes et des branches gênent vos poursuivants.</p><p> Les plantes peuvent exécuter d\'autres tâches pour vous, si le MD donne son accord. Le sort ne leur permet pas de se déraciner et de se déplacer, mais elles peuvent agiter leurs branches, leurs vrilles et leurs tiges.</p><p> Si une créature végétale se trouve dans la zone, vous pouvez communiquer avec elle comme si vous partagiez un même langage, mais vous ne gagnez pas de capacité magique permettant de l\'influencer.</p><p> Ce sort permet de libérer une créature entravée par les plantes nées d\'un sort d\'enchevêtrement.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Communion',
            'slug' => Str::slug('Communion'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S, M (de l\'encens et une fiole d\'eau bénite ou maudite)',
            'duration' => '1 minute',
            'description' => '<p>Vous entrez en contact avec votre divinité ou l\'un de ses représentants et lui posez jusqu\'à trois questions auxquelles on peut répondre par oui ou par non. Vous devez les poser avant la fin du sort et vous recevez une réponse correcte à chacune d\'entre elles.</p><p> Les êtres divins ne sont pas forcément omniscients, il se peut donc que vous obteniez « obscur » comme réponse, si votre question porte sur des informations sortant du champ des connaissances de votre divinité. Si une réponse d\'un seul mot risque de se révéler trompeuse ou contraire aux intérêts de la divinité, le MD peut lui substituer une courte phrase.</p><p> Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances (cumulables) que chaque incantation en sus de la première ne reçoive pas de réponse. Le MD effectue ce jet en secret.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Communion avec la nature',
            'slug' => Str::slug('Communion avec la nature'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Pendant un court instant, vous ne faites plus qu\'un avec la nature et obtenez des informations sur le territoire environnant. En extérieur, ce sort vous transmet des informations sur le terrain qui vous entoure dans un rayon de 4,5 kilomètres. Dans une grotte ou un autre environnement naturel souterrain, le rayon d\'action est de 90 mètres. Ce sort ne fonctionne pas là où les constructions ont remplacé la nature, comme en ville ou dans un donjon.</p><p> Vous obtenez instantanément des informations sur un maximum de trois éléments de votre choix portant sur l\'un des sujets suivants dans votre zone.<ul><li>Le terrain et les étendues d\'eau.</li> <li>Les plantes, les minéraux, les animaux et les peuples majoritaires.</li> <li>Les célestes, les fées, les fiélons, les élémentaires ou les morts-vivants dotés d\'une certaine puissance.</li> <li>L\'influence émanant des autres plans d\'existence.</li> <li>Les constructions.</li></ul></p><p> Par exemple, vous pouvez apprendre où se trouve un puissant mort-vivant résidant dans la zone, où sont situés les points d\'eau potable majeurs et où se trouvent les villages les plus proches.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Compréhension des langues',
            'slug' => Str::slug('Compréhension des langues'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une pincée de suie et de sel)',
            'duration' => '1 heure',
            'description' => '<p>Pendant toute la durée du sort, vous comprenez le sens littéral de tout langage parlé que vous entendez. Vous comprenez aussi les langues écrites que vous voyez, à condition de toucher la surface sur laquelle on a tracé les mots. Il vous faut 1 minute pour lire une page de texte.</p><p> Ce sort ne décode pas les messages secrets compris dans un texte ni les glyphes qui n\'appartiennent pas à un langage écrit, comme un symbole magique.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Compulsion',
            'slug' => Str::slug('Compulsion'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Les créatures de votre choix situées à portée dans votre champ de vision et en mesure de vous entendre doivent faire un jet de sauvegarde de Sagesse. Une cible impossible à charmer réussit automatiquement son jet. Si la cible rate son jet, elle est affectée par le sort. Jusqu\'à la fin de celui-ci, vous pouvez, à chaque tour, utiliser une action bonus pour désigner une direction horizontale par rapport à vous. Chaque cible affectée doit alors utiliser son déplacement au mieux pour aller dans cette direction à son prochain tour. Elle peut effectuer son action avant de se déplacer. Une fois qu\'elle s\'est ainsi déplacée, elle peut faire un nouveau jet de sauvegarde de Sagesse pour tenter de mettre un terme à l\'effet du sort.</p><p> Une cible n\'est pas obligée de se rendre au sein d\'une zone à l\'évidence dangereuse, comme un brasier ou une fosse béante, mais elle est prête à provoquer des attaques d\'opportunité pour se déplacer dans la direction indiquée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cône de froid',
            'slug' => Str::slug('Cône de froid'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 18 mètres)',
            'component' => 'V, S, M (un petit cône de cristal ou de verre)',
            'duration' => 'instantanée',
            'description' => '<p>Une bouffée d\'air froid jaillit de vos mains. Toutes les créatures présentes dans un cône de 18 mètres doivent faire un jet de sauvegarde de Constitution. Celles qui le ratent subissent 8d8 dégâts de froid, les autres la moitié seulement.</p><p> Une créature qui succombe suite à ce sort se transforme en statue de glace jusqu\'à ce qu\'elle fonde.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Confusion',
            'slug' => Str::slug('Confusion'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (trois coquilles de noix)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Ce sort assaille et pervertit l\'esprit des créatures, générant des hallucinations et provoquant des réactions incontrôlées. Toutes les créatures situées dans une sphère de 3 mètres de rayon autour d\'un point de votre choix situé à portée doivent faire un jet de sauvegarde de Sagesse quand vous lancez le sort. Si elles échouent, le sort les affecte.</p><p> Une cible affectée ne peut pas accomplir de réaction et doit lancer 1d10 au début de chacun de ses tours pour déterminer comment elle se comporte pendant le tour.</p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">d10</th><th class="px-6 py-3">Comportment</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">1</td><td class="px-4 py-4">La créature utilise la totalité de son mouvment pour se déplacer dans une direction aléatoire. Pour déterminer cette dernière, lancez un d8 en assignant une direction à chaque face. La créature n\'effectue aucune action pour ce tour.</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">2-6</td><td class="px-4 py-4">La créature ne bouge pas et n\'entreprend pas la moindre action pour ce tour.</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">7-8</td><td class="px-4 py-4">La créature utilise sont action pour porter une attaque au corps à corps contre une créature aléatoire à portée d\'allonge. S\'il n\'y a pas de créature à portée, elle ne fait rien du tour.</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">9-10</td><td class="px-4 py-4">La créature peut agir et se déplacer normalement.</td></tr></tbody></table></p><p> Une créature affectée peut faire un jet de sauvegarde de Sagesse à la fin de chacun de ses tours. En cas de succès, l\'effet se termine pour elle.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, le rayon de la sphère augmente de 1,50 mètre par niveau au-delà du 4e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contact avec les plans',
            'slug' => Str::slug('Contact avec les plans'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => '1 minute',
            'description' => '<p>Vous contactez mentalement un demi-dieu, l\'esprit d\'un sage décédé il y a longtemps, ou une autre entité mystérieuse issue d\'un autre plan. Le contact avec cette intelligence extraplanaire met votre esprit à rude épreuve et risque même de le briser. Quand vous lancez ce sort, vous devez faire un jet de sauvegarde d\'Intelligence DD 15. En cas d\'échec, vous recevez 6d6 dégâts psychiques et vous devenez fou jusqu\'à ce que vous ayez bénéficié d\'un long repos. Tant que vous êtes fou, vous ne pouvez pas entreprendre la moindre action, vous ne comprenez pas ce que disent les autres créatures, vous êtes incapable de lire et vous ne bredouillez que des paroles insensées. Une tierce personne peut mettre un terme à cet effet en vous lançant le sort de restauration supérieure.</p><p> Si vous réussissez votre jet de sauvegarde, vous pouvez poser jusqu\'à cinq questions à l\'entité. Vous devez les poser avant la fin du sort. C\'est le MD qui répond à chacune d\'entre elles avec un mot, comme « oui », « non », « peut-être », « jamais », « hors sujet » ou « obscur » (si l\'entité ignore la réponse à votre question). Si une réponse limitée à un seul mot risque de se révéler trompeuse, le MD peut la remplacer par une courte phrase.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contact glacial',
            'slug' => Str::slug('Contact glacial'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => '<p>Vous faites apparaître une main fantomatique et squelettique à l\'emplacement d\'une créature située à portée. Faites un jet d\'attaque de sort à distance contre la créature pour la transir de froid. Si l\'attaque touche, la victime reçoit 1d8 dégâts nécrotiques et ne peut pas récupérer de point de vie avant le début de votre prochain tour. Jusque-là, la main s\'accroche à elle.</p><p> Si votre cible est un mort-vivant, il est en plus désavantagé lors des jets d\'attaque effectués contre vous jusqu\'à la fin de votre prochain tour.</p><p> Les dégâts du sort augmentent de 1d8 quand vous atteignez le niveau 5 (2d8), le niveau 11 (3d8) et le niveau 17 (4d8).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contagion',
            'slug' => Str::slug('Contagion'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '7 jours',
            'description' => '<p>Votre simple contact transmet des maladies. Faites une attaque de sort au corps à corps contre une créature à portée. Si vous touchez, vous lui inoculez une maladie de votre choix, à sélectionner parmi celles décrites plus loin.</p><p> La cible doit faire un jet de sauvegarde de Constitution à la fin de chacun de ses tours. Une fois qu\'elle en a raté trois, la maladie fait effet pendant toute la durée du sort et la créature n\'a plus à faire de jet de sauvegarde. Si elle réussit trois jets de sauvegarde, elle guérit de sa maladie et le sort se termine.</p><p> Comme le sort déclenche une maladie naturelle chez la cible, tout effet qui guérit une maladie ou améliore ses symptômes s\'y applique.</p><p> <strong>Mal aveuglant.</strong> La créature est en proie à de violentes douleurs cérébrales et ses yeux deviennent d\'un blanc laiteux. Elle est désavantagée lors des tests de Sagesse et des jets de sauvegarde de Sagesse et elle est aveugle.</p><p> <strong>Fièvre répugnante.</strong> Une forte fièvre s\'empare de la créature qui est désavantagée lors des tests de Force, des jets de sauvegarde de Force et des jets d\'attaque basés sur la Force.</p><p> <strong>Pourriture.</strong> La chair de la créature se met à pourrir. Elle est désavantagée lors des tests de Charisme et devient vulnérable à tous les dégâts.</p><p> <strong>Bouille-crâne.</strong> La créature a soudain l\'esprit enfiévré. Elle est désavantagée lors des tests d\'Intelligence et des jets de sauvegarde d\'intelligence. De plus, au combat, elle se comporte comme si elle était sous l\'effet d\'un sort de confusion./n <strong>Convulsions.</strong> La créature est agitée de tremblements. Elle est désavantagée lors des tests de Dextérité, des jets de sauvegarde de Dextérité et des jets d\'attaque basés sur la Dextérité.</p><p> <strong>Mort poisseuse.</strong> La créature est affligée de saignements incontrôlables. Elle est désavantagée lors des tests de Constitution et des jets de sauvegarde de Constitution. De plus, elle est étourdie jusqu\'à la fin de son prochain tour à chaque fois qu\'elle subit des dégâts.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contamination',
            'slug' => Str::slug('Contamination'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous transmettez une maladie virulente à une créature située à portée dans votre champ de vision. La cible doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle subit 14d6 dégâts nécrotiques, la moitié seulement si elle réussit. Ces dégâts ne peuvent pas faire passer les points de vie de la cible au-dessous de 1. Si la cible rate son jet de sauvegarde, son total de points de vie maximum est réduit, pendant 1 heure, d\'un montant égal aux dégâts nécrotiques reçus. Tout effet qui guérit les maladies ramène le maximum de points de vie de la cible à la normale sans avoir besoin d\'attendre une heure.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contresort',
            'slug' => Str::slug('Contresort'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 réaction à utiliser quand vous voyez une créature située dans un rayon de 18 mètres autour de vous lancer un sort',
            'range' => '18 mètres',
            'component' => 'S',
            'duration' => 'instantanée',
            'description' => '<p>Vous tentez d\'interrompre une créature en pleine incantation. Si elle essayait de lancer un sort de niveau 3 ou moins, il échoue et reste sans effet. Si le sort est de niveau 4 ou plus, faites un test de caractéristique en utilisant votre caractéristique d\'incantation. Le DD est de 10 + niveau du sort. Si vous réussissez, le sort de la créature échoue et reste sans effet.</p><p> Au moment de l\'incantation, vous pouvez désigner plusieurs créatures de votre choix que le sort ignorera.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, le sort à interrompre est automatiquement sans effet s\'il est d\'un niveau égal ou inférieur à celui de l\'emplacement de sort utilisé.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contrôle de l\'eau',
            'slug' => Str::slug('Contrôle de l\'eau'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '90 mètres',
            'component' => 'V, S, M (une goutte d\'eau et une pincée de poussière)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Jusqu\'à la fin du sort, vous contrôlez toute étendue d\'eau indépendante située dans la zone de votre choix, cette dernière devant tenir dans un cube d\'au maximum 30 mètres d\'arête. Quand vous lancez ce sort, vous pouvez choisir l\'un des effets suivants. À votre tour, vous pouvez utiliser une action pour répéter l\'effet ou en appliquer un nouveau.</p><p> <strong>Inondation.</strong> Vous faites monter le niveau d\'une étendue d\'eau isolée d\'un maximum de 6 mètres. Si la zone comprend une rive, l\'eau déborde et se répand sur la terre ferme.</p><p> Si vous avez lancé le sort sur une grande étendue d\'eau, vous créez une vague de 6 mètres de haut qui traverse la zone affectée d\'un bout à l\'autre pour se briser une fois arrivée à la fin de la zone. Tous les véhicules de taille Très Grande ou inférieure qui se trouvent sur le chemin de la vague sont emportés jusqu\'au bout de la zone. Tous ces véhicules ont 25% de chances de chavirer.</p><p> Le niveau de l\'eau reste plus élevé jusqu\'à la fin du sort ou jusqu\'à ce que vous choisissiez un autre effet. Si l\'effet d\'inondation produit une vague, elle se reforme au début de votre prochain tour tant que vous gardez cet effet actif.</p><p> <strong>Écarter les eaux.</strong> Vous écartez les eaux de la zone pour y créer un passage. Il traverse toute la zone, les eaux formant une muraille de chaque côté. Le passage demeure jusqu\'à la fin du sort ou jusqu\'à ce que vous optiez pour un effet différent. Dans ces deux cas, l\'eau remplit alors progressivement le passage, au fil du round suivant, jusqu\'à ce que le niveau de l\'eau revienne à la normale.</p><p> <strong>Modifier le cours de l\'eau.</strong> Vous changez l\'itinéraire de l\'eau courante qui traverse la zone et l\'envoyez dans la direction de votre choix, même si elle doit pour cela franchir des obstacles comme passer par-dessus un mur ou couler dans une direction improbable. L\'eau suit vos instructions dans la zone affectée, mais dès qu\'elle en sort, elle reprend un cours normal défini par le terrain qu\'elle parcourt. L\'eau continue de couler là où vous l\'avez choisi jusqu\'à la fin du sort ou jusqu\'à ce que vous décidiez d\'un autre effet.</p><p> <strong>Tourbillon.</strong> Cet effet nécessite une étendue d\'eau d\'au moins 15 mètres carrés pour 7,50 mètres de fond et se traduit par la formation d\'un tourbillon au centre de la zone. Il se présente sous forme d\'un vortex de 1,50 mètre de large à sa base pour un maximum de 15 mètres de large au sommet et une hauteur de 7,50 mètres. Toutes les créatures et tous les objets qui se trouvent dans l\'eau et dans un rayon de 7,50 mètres autour du tourbillon sont entraînés vers lui sur 3 mètres. Une créature peut s\'éloigner à la nage si elle réussit un test de Force (Athlétisme) contre le DD du jet de sauvegarde de votre sort.</p><p> Quand une créature entre dans le vortex pour la première fois de son tour ou qu\'elle y commence son tour, elle doit faire un jet de sauvegarde de Force. Si elle échoue, elle reçoit 2d8 dégâts contondants et se fait emporter par le vortex jusqu\'à la fin du sort. Si elle réussit son jet, elle subit seulement la moitié des dégâts et n\'est pas prise dans le vortex. Une créature emportée par le vortex peut utiliser une action pour tenter de s\'en éloigner comme décrit plus haut, mais elle est désavantagée lors de son test de Force (Athlétisme). À chaque tour, la première fois qu\'un objet entre dans le vortex, il subit 2d8 dégâts contondants. Ces dégâts se répètent à chaque round passé dans le vortex.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Contrôle du climat',
            'slug' => Str::slug('Contrôle du climat'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => 'personnelle (rayon de 7,5 kilomètres)',
            'component' => 'V, S, M (encens incandescent et un peu de bois et de terre mélangés dans de l\'eau)',
            'duration' => 'concentration, jusqu\'à 8 heures',
            'description' => '<p>Vous prenez le contrôle de la météo dans un rayon de 7,5 kilomètres autour de vous pendant toute la durée du sort. Vous devez être en extérieur au moment de l\'incantation. Si vous vous rendez dans un endroit d\'où vous ne voyez pas directement le ciel, le sort se termine prématurément.</p><p> Au moment de l\'incantation, vous changez les conditions météorologiques actuelles déterminées par le MD en fonction du climat et de la saison. Vous pouvez modifier les précipitations, la température et le vent. Il faut 1d4 × 10 minutes pour que les nouvelles conditions s\'installent. Vous pouvez ensuite les modifier à nouveau. Le temps retourne progressivement à la normale une fois le sort terminé.</p><p> Quand vous modifiez les conditions météorologiques, cherchez les conditions actuelles dans les tables suivantes vous pouvez les décaler d\'un cran vers le haut ou le bas. Quand vous modifiez le vent, vous pouvez changer sa direction.</p><p><h1>Précipitations</h1></p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Étape</th><th class="px-6 py-3">Condition</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">1</td><td class="px-4 py-4">Ciel dégagé</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">2</td><td class="px-4 py-4">Quelques nuages</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">3</td><td class="px-4 py-4">Ciel couvert ou brume au sol</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">4</td><td class="px-4 py-4">Pluie, grêle ou neige</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">5</td><td class="px-4 py-4">Pluie torrentielles, forte grêle ou blizzard</td></tr></tbody></table></p><p><h1>Température</h1></p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Étape</th><th class="px-6 py-3">Condition</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">1</td><td class="px-4 py-4">Chaleur insoutenable</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">2</td><td class="px-4 py-4">Forte chaleur</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">3</td><td class="px-4 py-4">Tiède</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">4</td><td class="px-4 py-4">Frais</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">5</td><td class="px-4 py-4">Grand froid</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">6</td><td class="px-4 py-4">Froid polaire</td></tr></tbody></table></p><p><h1>Vent</h1></p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Étape</th><th class="px-6 py-3">Condition</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">1</td><td class="px-4 py-4">Temps calme</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">2</td><td class="px-4 py-4">Vent modéré</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">3</td><td class="px-4 py-4">Vent fort</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">4</td><td class="px-4 py-4">Grand vent</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">5</td><td class="px-4 py-4">Tempête</td></tr></tbody></table></p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Convocations instantanées de Drawmij',
            'slug' => Str::slug('Convocations instantanées de Drawmij'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (un saphir d\'une valeur de 1 000 po)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous touchez un objet pesant 5 kilos ou moins et dont la dimension la plus longue est de 1,80 mètre ou moins. Le sort laisse une marque invisible sur la surface de l\'objet et inscrit le nom de l\'objet sur le saphir que vous utilisez comme composante matérielle. Chaque fois que vous lancez ce sort, vous devez utiliser un saphir différent.</p><p> Ensuite, vous pouvez utiliser une action quand vous le désirez pour prononcer le nom de l\'objet et broyer le saphir. L\'objet apparaît immédiatement dans votre main, en dépit des distances physiques et planaires, et le sort se termine.</p><p> Si l\'objet est actuellement porté ou transporté par quelqu\'un d\'autre, il (l\'objet) n\'arrive pas jusqu\'à vous quand vous broyez le saphir, mais vous apprenez qui est la créature qui détient l\'objet et vous savez à peu près où elle se trouve à ce moment-là.</p><p> Dissipation de la magie ou un effet similaire appliqué sur le saphir met un terme à l\'effet du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Coquille antivie',
            'slug' => Str::slug('Coquille antivie'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (3 mètres de rayon)',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Une barrière scintillante se déploie depuis votre personne jusqu\'à englober une zone d\'un rayon de 3 mètres. Elle se déplace avec vous, reste centrée sur vous et repousse les créatures autres que les morts-vivants et les créatures artificielles. Cette barrière persiste pendant toute la durée du sort.</p><p> La barrière empêche les créatures affectées de la franchir ou de passer un membre au travers. Une créature affectée peut lancer des sorts ou porter des attaques à distance ou via une arme à allonge, tout cela franchissant la barrière.</p><p> Si vous vous déplacez de telle manière qu\'une créature affectée est contrainte de traverser la barrière, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Corde enchantée',
            'slug' => Str::slug('Corde enchantée'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (extrait de maïs en poudre et boucle de parchemin torsadé)',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez une longueur de corde d\'au maximum 18 mètres. L\'une de ses extrémités s\'élève alors dans les airs, jusqu\'à ce que toute la corde se dresse perpendiculairement au sol. Une entrée invisible s\'ouvre à l\'extrémité supérieure de la corde et débouche sur un espace extradimensionnel qui persiste jusqu\'à la fin du sort.</p><p> On peut atteindre cet espace extradimensionnel en grimpant jusqu\'au sommet de la corde. Il peut accueillir un maximum de huit créatures de taille Moyenne ou inférieure. On peut ensuite tirer la corde dans l\'espace extradimensionnel, afin que personne ne la voie en dehors de l\'abri.</p><p> Les attaques et les sorts ne peuvent pas traverser l\'entrée de l\'espace extradimensionnel, ni depuis l\'intérieur ni depuis l\'extérieur. En revanche, les créatures qui se trouvent à l\'intérieur peuvent regarder dehors grâce à une fenêtre de 90 centimètres sur 1,50 mètre centrée sur la corde.</p><p> Tout ce qui se trouve dans l\'espace extradimensionnel tombe à l\'extérieur quand le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Cordon de flèches',
            'slug' => Str::slug('Cordon de flèches'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '1,50 mètre',
            'component' => 'V, S, M (quatre flèches ou carreaux ou plus)',
            'duration' => '8 heures',
            'description' => '<p>Vous fichez quatre projectiles (flèches ou carreaux) non magiques en terre, à portée, et les imprégnez de magie afin de protéger une zone.Jusqu\'à la fin du sort, dès qu\'une créature autre que vous approche dans un rayon de 9 mètres autour des projectiles pour la première fois de son tour ou finit son tour à un tel endroit, une munition s\'envole pour la frapper. La créature doit réussir un jet de sauvegarde de Dextérité, sans quoi elle subit 1d6 dégâts perforants. Le projectile est ensuite détruit. Le sort se termine s\'il ne reste plus de projectiles.</p><p> Au moment de l\'incantation, vous pouvez désigner plusieurs créatures de votre choix que le sort ignorera.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez enchanter deux projectiles de plus par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Couleurs dansantes',
            'slug' => Str::slug('Couleurs dansantes'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 4,50 mètres)',
            'component' => 'V, S, M (une poignée de poudre ou de sable, colorée en rouge, jaune et bleu)',
            'duration' => '1 round',
            'description' => '<p>Un éventail de lumières colorées éblouissantes jaillit de votre main. Lancez 6d10. Le total représente le nombre de points de vie de créatures que le sort affecte. Les créatures situées dans un cône de 4,50 mètres, prenant votre personne comme point d\'origine, sont affectées dans l\'ordre croissant de leurs points de vie actuels (en ignorant les créatures inconscientes et les créatures aveugles).</p><p> Chaque créature affectée, en commençant par celle qui possède actuellement le moins de points de vie, est aveuglée jusqu\'à la fin du sort. Soustrayez du total obtenu le nombre de points de vie actuel de chaque créature affectée avant de passer à la suivante, en choisissant chaque fois celle qui possède le moins de points de vie. Pour qu\'une créature soit affectée, elle doit posséder un nombre de points de vie actuel inférieur ou égal au total restant.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, lancez 2d10 supplémentaires par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Coup au but / Viser juste',
            'slug' => Str::slug('Coup au but / Viser juste'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'S',
            'duration' => 'concentration, jusqu\'à 1 round',
            'description' => '<p>Vous tendez la main et pointez du doigt une cible à portée. Votre magie vous donne un bref aperçu de ses défenses. À votre prochain tour, vous êtes avantagé lors de votre premier jet d\'attaque contre elle, à condition que le sort ne se soit pas terminé avant.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Couronne du dément',
            'slug' => Str::slug('Couronne du dément'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Choisissez un humanoïde situé à portée dans votre champ de vision. Il doit réussir un jet de sauvegarde de Sagesse, sans quoi vous le charmez pendant toute la durée du sort. Tant que la cible est sous votre charme, une couronne tordue en acier dentelé apparaît sur sa tête et une lueur démente brille dans son regard.</p><p> À chacun de ses tours, avant de se déplacer, la cible doit utiliser son action pour porter une attaque armée contre une créature (autre qu\'elle-même) que vous choisissez mentalement. Si vous ne choisissez pas de créature ou qu\'il n\'y en a pas à portée, la cible agit normalement.</p><p> Lors de vos tours suivants, vous devez utiliser votre action pour garder le contrôle de la cible, sinon le sort se termine. La cible peut faire un jet de sauvegarde de Sagesse à la fin de chacun de ses tours. Si elle réussit, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Création',
            'slug' => Str::slug('Création'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (un petit bout de matière de même type que l\'objet que vous voulez créer)',
            'duration' => 'spéciale',
            'description' => '<p>Vous tirez des bribes de matière ombreuse de l\'Obscur pour créer à portée des objets inertes en matière végétale: du tissu, de la corde, du bois ou des objets similaires. Ce sort permet aussi de créer des objets minéraux comme de la pierre, du cristal ou du métal. L\'objet créé ne doit pas être plus grand qu\'un cube de 1,50 mètre d\'arête et doit impérativement être d\'une forme et d\'un matériau que vous avez déjà vus.</p><p> La durée du sort dépend du matériau choisi pour façonner l\'objet. S\'il est fait de plusieurs matières, c\'est la durée la plus courte qui s\'applique.</p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Matériau</th><th class="px-6 py-3">Durée</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">Matière végétale</td><td class="px-4 py-4">1 jour</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Pierre ou cristal</td><td class="px-4 py-4">12 heures</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Métaux précieux</td><td class="px-4 py-4">1 heure</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Gemmes</td><td class="px-4 py-4">10 minutes</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Adamantium ou mithral</td><td class="px-4 py-4">1 minute</td></tr></tbody></table></p><p> Si vous utilisez les matériaux créés via ce sort comme composantes matérielles pour un autre sort, ce dernier échoue.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, l\'arête du cube augmente de 1,50 mètre par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Création de mort-vivant',
            'slug' => Str::slug('Création de mort-vivant'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, S, M (un pot d\'argile rempli de poussière tombale, un pot d\'argile rempli d\'eau saumâtre et un onyx noir d\'une valeur de 150 po par cadavre)',
            'duration' => 'instantanée',
            'description' => '<p>Ce sort se lance uniquement de nuit. Choisissez jusqu\'à trois cadavres de créatures humanoïdes de taille Moyenne ou Petite situés à portée. Chacun se change en goule placée sous votre contrôle. (Le MD dispose des statistiques de ces créatures).</p><p> À chacun de vos tours, vous pouvez utiliser une action bonus pour contrôler mentalement les créatures que vous avez animées avec ce sort si elles se trouvent dans un rayon de 36 mètres (si vous en contrôlez plusieurs, vous pouvez en commander une ou plusieurs à la fois, à condition de donner le même ordre à toutes). Vous pouvez décider de l\'action que la créature va entreprendre et de l\'endroit où elle va se rendre lors de son prochain tour, ou donner des consignes plus génériques, comme de garder une salle ou un couloir. En l\'absence d\'ordre de votre part, la créature se contente de se défendre contre les créatures hostiles. Dès qu\'une créature a reçu un ordre, elle s\'y conforme jusqu\'à avoir accompli sa tâche.</p><p> La créature reste sous votre contrôle pendant 24 heures, après quoi elle cesse d\'obéir aux ordres que vous lui avez donnés. Pour la maintenir sous votre contrôle pendant 24 heures de plus, vous devez lui relancer ce sort avant que les 24 heures de contrôle en cours ne se soient écoulées. Cette nouvelle utilisation du sort vous permet de réaffirmer votre contrôle sur un maximum de trois créatures que vous avez déjà animées via ce sort au lieu d\'en animer de nouvelles.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, vous pouvez animer ou maintenir votre contrôle sur quatre goules. Quand vous le lancez à partir d\'un emplacement de niveau 8, vous pouvez animer ou maintenir votre contrôle sur cinq goules ou deux blêmes ou deux nécrophages. Quand vous le lancez à partir d\'un emplacement de niveau 9, vous pouvez animer ou maintenir votre contrôle sur six goules ou trois blêmes ou trois nécrophages ou deux momies.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Création de nourriture et d\'eau',
            'slug' => Str::slug('Création de nourriture et d\'eau'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez 22,5 kilos de nourriture et 120 litres d\'eau, soit par terre, soit dans des récipients installés à portée. Cela suffit à nourrir et abreuver un maximum de quinze humanoïdes ou de cinq montures pendant 24 heures. Les vivres sont fades mais nourrissants. Ils se gâtent si personne ne les a mangés dans les 24 heures suivant leur création. L\'eau est claire et ne croupit pas.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Création ou destruction d\'eau',
            'slug' => Str::slug('Création ou destruction d\'eau'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une goutte d\'eau pour créer de l\'eau ou quelques grains de sable pour en détruire)',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez ou détruisez de l\'eau.</p><p> <strong>Création d\'eau.</strong> Vous créez jusqu\'à 40 litres d\'eau potable qui apparaissent à portée, dans un récipient ouvert.</p><p> Sinon, l\'eau peut tomber en pluie dans un cube de 9 mètres d\'arête à portée, éteignant toutes les flammes à nu dans la zone.</p><p> <strong>Destruction d\'eau.</strong> Vous détruisez jusqu\'à 40 litres d\'eau situés à portée dans un récipient ouvert.</p><p> Sinon, vous pouvez détruire le brouillard dans un cube de 9 mètres d\'arête situé à portée.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous créez ou détruisez 40 litres d\'eau de plus par niveau au-delà du ler ou bien l\'arête du cube affecté augmente de 1,50 mètre par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Croissance d\'épines',
            'slug' => Str::slug('Croissance d\'épines'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (sept épines acérées ou sept brindilles taillées en pointe)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Dans une zone de 6 mètres de rayon centrée sur un point à portée, le sol se met à se déformer et donne naissance à un tapis de pointes et d\'épines. La zone se mue en terrain difficile pendant toute la durée du sort. Quand une créature entre dans la zone ou s\'y déplace, elle reçoit 2d4 dégâts perforants par tranche de 1,50 mètre parcouru.</p><p> La transformation du sol est camouflée, de manière à ce que le terrain ait l\'air naturel. Une créature dans l\'incapacité de voir la zone au moment de l\'incantation doit faire un test de Sagesse (Perception) contre le DD du jet de sauvegarde de votre sort. Si elle le réussit, elle remarque que le terrain est dangereux avant d\'y entrer.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Croissance végétale',
            'slug' => Str::slug('Croissance végétale'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action ou 8 heures',
            'range' => '45 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Ce sort décuple la vitalité des plantes d\'une zone donnée. Le sort a deux modes d\'utilisation, l\'un apportant des avantages immédiats, l\'autre sur le long terme.</p><p> Si vous lancez ce sort en une action, choisissez un point à portée. Toutes les plantes ordinaires situées dans un rayon de 30 mètres autour de ce point deviennent particulièrement touffues et la végétation s\'épaissit. Une créature qui se déplace dans cette zone doit dépenser 1,20 mètre de déplacement pour parcourir 30 centimètres.</p><p> Vous pouvez exclure une ou plusieurs portions, de n\'importe quelle taille, de la zone affectée par le sort.</p><p> Si vous lancez le sort sur une période de huit heures, vous enrichissez la terre. Toute la végétation dans un rayon de 800 mètres autour d\'un point de votre choix situé à portée devient luxuriante pendant un an. Elle donne deux fois plus de nourriture que la normale lors de la récolte.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Danse irrésistible d\'Otto',
            'slug' => Str::slug('Danse irrésistible d\'Otto'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Choisissez une créature située à portée dans votre champ de vision. La cible entame une danse comique, se mettant à tape du pied et à caracoler sur place.</p><p> Les créatures insensibles au charme sont immunisées contre ce sort.</p><p> Une fois que la créature s\'est mise à danser, elle doit dépenser la totalité de son déplacement pour danser sans quitter son espace. De plus, elle est désavantagée lors des jets de sauvegarde de Dextérité et des jets d\'attaque. Tant que la cible est affectée par ce sort, les autres créatures sont avantagées par rapport à elle lors des jets d\'attaque. Une créature en train de danser peut utiliser son action pour faire un jet de sauvegarde de Sagesse et reprendre le contrôle de son corps. Si elle réussit, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Déblocage',
            'slug' => Str::slug('Déblocage'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Choisissez un objet situé à portée et dans votre champ de vision. Ce peut être une porte, une boîte, un coffre, des menottes, un cadenas ou un autre objet disposant d\'un système de fermeture ordinaire ou magique.</p><p> Une cible fermée par une serrure ordinaire, coincée ou bloquée par une barre se déverrouille ou se débloque. Si l\'objet a plusieurs serrures, le sort en ouvre une seule.</p><p> Si vous visez une cible fermée par un verrou magique, ce dernier est supprimé pendant 10 minutes, au cours desquelles on peut ouvrir et fermer la cible normalement.</p><p> Quand vous lancez le sort, un cliquetis émane de l\'objet et retentit si fort qu\'on l\'entend dans un rayon de 90 mètres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Décharge occulte / Explosion occulte',
            'slug' => Str::slug('Décharge occulte / Explosion occulte'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Un éclair d\'énergie crépitante file vers une créature à portée. Faites un jet d\'attaque de sort à distance contre la cible. Si vous réussissez, elle subit 1d10 dégâts de force.</p><p> Le sort crée des rayons supplémentaires quand vous atteignez certains niveaux : il lance deux rayons au niveau 5, trois au niveau 11 et quatre au niveau 17. Vous pouvez diriger tous les rayons sur une même cible ou les répartir entre plusieurs. Faites un jet d\'attaque distinct pour chaque rayon.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Dédale / Labyrinthe',
            'slug' => Str::slug('Dédale / Labyrinthe'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous bannissez une créature située à portée dans votre champ de vision dans un demi-plan labyrinthique. La cible y reste pendant toute la durée du sort ou jusqu\'à ce qu\'elle s\'échappe du dédale.</p><p> Elle peut utiliser une action pour tenter de s\'évader. Pour cela, elle effectue un test d\'Intelligence DD 20. Si elle le réussit, elle s\'échappe et le sort se termine (les minotaures et les démons goristros réussissent automatiquement).</p><p> Quand le sort se termine, la cible réapparaît à l\'emplacement qu\'elle a quitté ou, s\'il est occupé, dans l\'emplacement libre le plus proche.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Déguisement',
            'slug' => Str::slug('Déguisement'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => '<p>Vous faites en sorte que votre personne (y compris vos vêtements, votre armure, vos armes et les autres objets en votre possession) prenne une apparence différente jusqu\'à la fin du sort ou jusqu\'à ce que vous utilisiez une action pour y mettre un terme. Vous pouvez passer pour une personne de trente centimètres de plus ou de moins, sembler gros, maigre ou entre les deux. Vous ne pouvez pas changer le type de votre corps, vous devez choisir une forme possédant la même conformation que vous au niveau des membres. En dehors de cela, les détails de l\'illusion sont laissés à votre imagination.</p><p> Les changements qu\'apporte le sort ne résistent pas à un examen physique. Par exemple, si vous l\'utilisez pour ajouter un chapeau à votre tenue, les objets passent au travers et toute personne qui essaie de le toucher ne sentira que de l\'air, ou des cheveux et un crâne. Si vous utilisez le sort pour paraître plus mince qu\'en réalité, la main de quelqu\'un qui tente de vous toucher se heurtera à vous alors que, visuellement, elle semble encore dans le vide.</p><p> Pour percer votre déguisement à jour, une créature peut dépenser une action pour vous examiner. Elle doit alors réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Demi-plan',
            'slug' => Str::slug('Demi-plan'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'S',
            'duration' => '1 heure',
            'description' => '<p>Vous créez une porte floue sur une surface plate et solide située à portée dans votre champ de vision. Elle est assez large pour laisser passer sans mal des créatures de taille Moyenne. Quand quelqu\'un ouvre la porte, elle donne sur un demi-plan ressemblant à une pièce vide de 9 mètres de côté (dans toutes les dimensions) faite de bois ou de pierre. La porte disparaît quand le sort se termine et les créatures et les objets encore dans le demi-plan y restent piégés, car elle s\'efface aussi de leur côté.</p><p> Vous pouvez créer un nouveau demi-plan pour chaque incantation du sort ou relier la porte à un demi-plan que vous avez précédemment créé via ce sort. De plus, si vous connaissez la nature et le contenu d\'un demi-plan qu\'une autre créature a créé grâce à ce sort, vous pouvez lui relier votre propre porte.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Désintégration',
            'slug' => Str::slug('Désintégration'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (de la magnétite et une pincée de poussière)',
            'duration' => 'instantanée',
            'description' => '<p>Un mince rayon de lumière verte jaillit de votre doigt pointé vers une cible située à portée dans votre champ de vision. La cible peut être une créature, un objet ou une création de force magique, comme un mur issu d\'un mur de force.</p><p> Une créature visée par ce sort doit faire un jet de sauvegarde de Dextérité. Si elle le rate, elle subit 10d6+40 dégâts de force. Si ces dégâts la réduisent à 0 point de vie, elle est désintégrée.</p><p> Une créature désintégrée est réduite à l\'état de fine poussière grise, tout comme tous les objets qu\'elle porte et transporte, à l\'exception des objets magiques. Pour ressusciter une créature ainsi désintégrée, il faut impérativement recourir à une résurrection suprême ou un souhait.</p><p> Ce sort désintègre automatiquement les objets non magiques de taille Grande ou inférieure et les créations de force magique. Si la cible est un objet de Très Grande taille ou plus, le sort désintègre un cube de 3 mètres d\'arête au sein de l\'objet. Ce sort reste sans effet sur les objets magiques.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les dégâts augmentent de 3d6 par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Détection de la magie',
            'slug' => Str::slug('Détection de la magie'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration.jusqu\'à 10 minutes',
            'description' => '<p>Pendant toute la durée du sort, vous percevez la présence de magie dans un rayon de 9 mètres. Si vous percevez ainsi une magie, vous pouvez dépenser votre action pour discerner une faible aura autour d\'une créature ou d\'un objet visible dans la zone et imprégné de magie. Vous découvrez aussi à quelle école appartient cette magie, le cas échéant.</p><p> Le sort ignore la plupart des obstacles, mais il ne peut pas franchir 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince feuille de plomb, ni 1 mètre de bois ou de terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Détection de l\'invisibilité / Voir l\'invisible',
            'slug' => Str::slug('Détection de l\'invisibilité / Voir l\'invisible'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une pincée de talc et un saupoudrage de poudre d\'argent)',
            'duration' => '1 heure',
            'description' => '<p>Pendant toute la durée du sort, vous voyez les créatures et les objets invisibles comme s\'ils étaient bien visibles et vous pouvez aussi observer le plan éthéré. Les créatures et les objets éthérés vous apparaissent comme des silhouettes translucides et fantomatiques.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Détection des pensées',
            'slug' => Str::slug('Détection des pensées'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une pièce de cuivre)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Pendant toute la durée du sort, vous parvenez à lire les pensées de certaines créatures. Quand vous lancez ce sort, puis en tant qu\'action à votre tour jusqu\'à la fin du sort, vous pouvez focaliser vos pensées sur une créature située dans votre champ de vision et dans un rayon de 9 mètres. Si elle dispose d\'une Intelligence de 3 ou moins ou ne parle aucune langue, elle n\'est pas affectée.</p><p> Au départ, vous découvrez les pensées de surface de la créature, c\'est-à-dire ce qu\'elle a à l\'esprit à ce moment-là. Par une action, vous pouvez tourner votre attention vers les pensées d\'une autre créature ou tenter de vous enfoncer plus profondément dans l\'esprit de celle que vous sondez actuellement. Dans ce cas, cette créature doit faire un jet de sauvegarde de Sagesse. Si elle échoue, vous avez un aperçu de son mode de raisonnement (le cas échéant), de son état émotionnel ou de ce qui occupe une place importante dans son esprit (par exemple quelque chose qui l\'inquiète fortement, qu\'elle aime, qu\'elle déteste ... ). Si elle réussit, le sort se termine. Dans les deux cas, la cible sait que vous sondez son esprit et, à moins que vous ne tourniez votre attention vers une autre créature, votre cible peut utiliser son action à son tour pour faire un test d\'Intelligence opposé au vôtre. Si elle réussit, le sort se termine.</p><p> Les questions directement posées à l\'oral à une cible orientent naturellement le cours de ses pensées, ce sort est donc particulièrement utile lors d\'un interrogatoire.</p><p> Vous pouvez aussi utiliser ce sort pour détecter la présence de créatures intelligentes que vous ne voyez pas. Vous pouvez chercher les pensées qui se trouvent dans un rayon de 9 mètres autour de vous au moment où vous lancez ce sort ou bien par une action tandis que le sort est actif. Le sort peut franchir des obstacles, mais il est arrêté par soixante centimètres de roche, 2,5 centimètres de métal autre que le plomb ou une mince feuille de plomb. Vous ne pouvez pas repérer les créatures dotées d\'une Intelligence de 3 ou moins, ni celles qui ne parlent aucune langue.</p><p> Une fois que vous avez ainsi détecté la présence d\'une créature, vous pouvez lire ses pensées pendant le reste de la  durée du sort, comme expliqué plus haut, même si vous ne la voyez pas, mais elle doit tout de même se trouver à portée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Détection des pièges / Trouver les pièges',
            'slug' => Str::slug('Détection des pièges / Trouver les pièges'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous percevez la présence de tout piège se trouvant à portée et dans votre champ de vision. Concernant ce sort, le terme de piège désigne toute chose qui inflige soudainement ou de façon inattendue un effet considéré comme néfaste ou indésirable et que son créateur a conçue dans ce but. Ainsi, le sort prévient si une zone est affectée par une alarme, un glyphe de garde ou une fosse piégée mécanique, mais il ne révèle pas une faiblesse naturelle dans un plancher, un plafond instable ou une doline cachée.</p><p> Le sort indique simplement qu\'il y a un piège ; il ne précise pas où, mais vous donne une idée générale de la nature du danger qu\'il représente.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Détection du bien et du mal',
            'slug' => Str::slug('Détection du bien et du mal'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Pendant toute la durée du sort, vous savez s\'il y a une aberration, un céleste, un élémentaire, une fée, un fiélon ou un mort-vivant dans un rayon de 9 mètres autour de vous et vous savez précisément où il se trouve. De même, vous savez si un lieu ou un objet situé dans un rayon de 9 mètres a été consacré ou profané.</p><p> Le sort ignore la plupart des obstacles, mais il ne peut pas franchir 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince feuille de plomb, ni 1 mètre de bois ou de terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Détection du poison et des maladies',
            'slug' => Str::slug('Détection du poison et des maladies'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un brin d\'if )',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Pendant toute la durée du sort, vous percevez la présence de poisons, de créatures venimeuses et de maladies dans un rayonde 9 mètres autour de vous. Vous déterminez également leur emplacement et identifiez à chaque fois le type de poison, de créature ou de maladie concerné.</p><p> Le sort ignore la plupart des obstacles, mais il ne peut pas franchir 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince feuille de plomb, ni 1 mètre de bois ou de terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Disque flottant de Tenser',
            'slug' => Str::slug('Disque flottant de Tenser'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une goutte de mercure)',
            'duration' => '1 heure',
            'description' => '<p>Ce sort crée un plan de force circulaire horizontal d\'un mètre de diamètre pour 2,5 centimètres d\'épaisseur. Il flotte à un mètre du sol dans un espace inoccupé de votre choix situé à portée et dans votre champ de vision. Le disque persiste pendant toute la durée du sort et peut accueillir jusqu\'à 250 kilos. Si on pose plus de poids dessus, le sort se termine et tout ce qui se trouvait sur le disque tombe à terre.</p><p> Le disque reste immobile tant que vous vous tenez dans un rayon de 6 mètres. Si vous vous en éloignez plus que cela, il vous suit de manière à rester dans les 6 mètres autour de vous. Il peut se déplacer sur un terrain irrégulier, monter ou descendre des escaliers, des pentes, etc. Mais il ne peut pas franchir une différence de niveau de trois mètres ou plus. Par exemple, il ne peut pas passer au-dessus d\'une fosse de 3 mètres de profondeur ni la quitter s\'il a été formé au fond.</p><p> Si vous vous éloignez à plus de 30 mètres du disque (typiquement parce qu\'il ne peut pas contourner un obstacle pour vous suivre), le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Dissimulation suprême / Séquestration',
            'slug' => Str::slug('Dissimulation suprême / Séquestration'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une poudre de diamant, d\'émeraude, de rubis et de saphir d\'une valeur minimum de 5 000 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Grâce à ce sort, vous pouvez dissimuler une créature consentante ou un objet qui sera invisible à tout moyen de détection pendant toute la durée du sort. Quand vous lancez le sort et touchez la cible, elle devient invisible et ne peut plus être la cible de sorts de divination. De plus, les organes sensoriels de scrutation issus d\'un sort de divination ne la perçoivent plus. Si la cible est une créature, elle entre en état d\'animation suspendue. Le temps ne s\'écoule plus pour elle et elle ne vieillit plus.</p><p> Vous pouvez décider d\'une condition qui mettra un terme prématuré au sort. Ce peut être ce que vous voulez, mais ce doit être visible ou se produire dans un rayon de 1,5 kilomètre autour de la cible. Par exemple, « au bout de 1 000 ans » ou « quand la tarasque se réveillera ». Ce sort se termine également si la cible subit le moindre dégât.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Dissipation de la magie',
            'slug' => Str::slug('Dissipation de la magie'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Choisissez une créature, un objet ou un effet magique à portée. Tout sort de niveau 3 ou inférieur qui l\'affecte se termine. Si la cible est affectée par un sort de niveau 4 ou plus, faites un test de caractéristique en utilisant votre caractéristique d\'incantation. Le DD est de 10 + niveau du sort. Ce dernier se termine si vous réussissez votre test.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, vous mettez automatiquement un terme à un sort affectant la cible quand le niveau de ce sort est égal ou inférieur au niveau de l\'emplacement de sort que vous utilisez.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Dissipation du bien et du mal',
            'slug' => Str::slug('Dissipation du bien et du mal'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (eau bénite ou poudre d\'argent et de fer)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Une énergie scintillante vous entoure et vous protège contre les fées, les morts-vivants et les créatures originaires d\'au-delà du plan matériel. Pendant toute la durée du sort, les célestes, les élémentaires, les fées, les fiélons et les morts-vivants sont désavantagés lors de leurs jets d\'attaque contre vous.</p><p> Vous pouvez terminer le sort plus tôt en utilisant l\'une des fonctions spéciales suivantes.</p><p> <strong>Annulation d\'enchantement.</strong> Vous utilisez votre action pour toucher une créature à votre portée qui se trouve charmée, terrorisée ou possédée par un céleste, un élémentaire, une fée, un fiélon ou un mort-vivant. Cette créature n\'est alors plus charmée, terrorisée ou possédée par ces créatures.</p><p> <strong>Renvoi.</strong> Vous utilisez votre action pour faire une attaque de sort au corps à corps contre un céleste, un élémentaire, une fée, un fiélon ou un mort-vivant situé à une distance inférieure ou égale à votre allonge. Si vous touchez la créature, vous tentez de la renvoyer sur son plan natal. Elle doit réussir un jet de sauvegarde de Charisme ou retourner sur son plan natal (si elle ne s\'y trouve pas déjà). Si un mort-vivant ne se trouve pas sur son plan natal, il est renvoyé en Gisombre tandis qu\'une fée sera expulsée dans la Féerie sauvage.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'divination',
            'slug' => Str::slug('divination'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (de l\'encens et une offrande sacrificielle adaptée à votre religion, l\'ensemble valant au moins 25 po, et que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Grâce à votre magie et à une offrande, vous entrez en contact avec un dieu ou l\'un de ses serviteurs. Vous lui posez une unique question à propos d\'un objectif, d\'un événement ou d\'une activité qui doit se dérouler dans les sept jours à venir. Le MD vous donne une réponse sincère, pouvant être une courte phrase, des vers cryptiques ou un présage.</p><p> Le sort ne tient pas compte d\'une éventuelle modification des circonstances susceptible de bouleverser l\'issue des événements, comme l\'incantation de sorts supplémentaires ou la perte ou l\'arrivée d\'un compagnon.</p><p> Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances par incantation en sus de la première que vous obteniez une prémonition aléatoire au lieu d\'une prémonition fiable. C\'est au MD de faire ce jet en secret.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Doigt de mort',
            'slug' => Str::slug('Doigt de mort'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous envoyez de l\'énergie négative dans le corps d\'une créature située à portée dans votre champ de vision, ce qui lui inflige des douleurs déchirantes. La cible doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle subit 7d8+30 dégâts nécrotiques, la moitié seulement si elle réussit.</p><p> Si ce sort achève un humanoïde, ce dernier se relève au début de votre prochain tour sous forme de zombi à jamais sous votre contrôle. Il suit vos ordres verbaux au mieux de ses capacités.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Domination d\'animal',
            'slug' => Str::slug('Domination d\'animal'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous tentez d\'envoûter une bête située à portée dans votre champ de vision. Elle doit réussir un jet de sauvegarde de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Elle est avantagée lors du jet de sauvegarde si vous ou des créatures amicales envers vous êtes en train de la combattre.</p><p> Tant que la bête est charmée, vous entretenez un lien télépathique avec elle, qui persiste tant que vous vous trouvez sur le même plan d\'existence. Vous pouvez utiliser ce lien télépathique pour donner des ordres à cette créature tant que vous êtes conscient (ce qui ne vous demande pas d\'action). Elle fait de son mieux pour vous obéir. Vous pouvez lui donner un ordre simple et générique, comme « attaque cette créature », « cours jusque là-bas » ou « va chercher cet objet ». Si elle ne reçoit pas de nouvelles instructions de votre part une fois l\'ordre exécuté, elle se contente de se défendre et de se préserver au mieux.</p><p> Vous pouvez utiliser votre action pour prendre le contrôle total de votre cible et la diriger de façon précise. Jusqu\'à la fin de votre prochain tour, elle exécute seulement les actions que vous choisissez et ne fait rien que vous ne lui ayez autorisé. Pendant cette période, vous pouvez aussi lui faire exécuter une réaction, mais pour cela, vous devez également dépenser votre propre réaction.</p><p> Chaque fois que la cible subit des dégâts, elle a droit à un nouveau jet de sauvegarde de Sagesse contre le sort. Si elle le réussit, le sort prend fin.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5, la durée devient « concentration, jusqu\'à 10 minutes ». Si vous lancez ce sort en utilisant un emplacement de niveau 6, la durée devient « concentration, jusqu\'à 1 heure ». Si vous lancez ce sort en utilisant un emplacement de niveau 7, la durée devient « concentration, jusqu\'à 8 heures ».</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Domination de monstre',
            'slug' => Str::slug('Domination de monstre'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous tentez d\'envoûter une créature située à portée dans votre champ de vision. Elle doit réussir un jet de sauvegarde de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Elle est avantagée lors du jet de sauvegarde si vous ou des créatures amicales envers vous êtes en train de la combattre.</p><p> Tant que la créature est charmée, vous entretenez un lien télépathique avec elle qui persiste tant que vous vous trouvez sur le même plan d\'existence. Vous pouvez utiliser ce lien télépathique pour donner des ordres à cette créature tant que vous êtes conscient (ce qui ne vous demande pas d\'action). Elle fait de son mieux pour vous obéir. Vous pouvez lui donner un ordre simple et générique, comme « attaque cette créature », « cours jusque là-bas » ou « va chercher cet objet ». Si elle ne reçoit pas de nouvelles instructions de votre part une fois l\'ordre exécuté, elle se contente de se défendre et de se préserver au mieux.</p><p> Vous pouvez utiliser votre action pour prendre le contrôle total de votre cible et la diriger de façon précise. Jusqu\'à la fin de votre prochain tour, elle exécute seulement les actions que vous choisissez et ne fait rien que vous ne lui ayez autorisé. Pendant cette période, vous pouvez aussi lui faire exécuter une réaction, mais pour cela, vous devez également dépenser votre propre réaction.</p><p> Chaque fois que la cible subit des dégâts, elle a droit à un nouveau jet de sauvegarde de Sagesse contre le sort. Si elle le réussit, le sort prend fin.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 9, la durée devient « concentration, jusqu\'à 8 heures ».</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Domination de personne',
            'slug' => Str::slug('Domination de personne'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous tentez d\'envoûter un humanoïde situé à portée et dans votre champ de vision. Il doit réussir un jet de sauvegarde de Sagesse, sans quoi vous le charmez pendant toute la durée du sort. Il est avantagé lors du jet de sauvegarde si vous ou des créatures amicales envers vous êtes en train de le combattre.</p><p> Tant que l\'humanoïde est charmé, vous entretenez un lien télépathique avec lui qui persiste tant que vous vous trouvez sur le même plan d\'existence. Vous pouvez utiliser ce lien télépathique pour donner des ordres à cette créature tant que vous êtes conscient (ce qui ne vous demande pas d\'action). Elle fait de son mieux pour vous obéir. Vous pouvez lui donner un ordre simple et générique, comme « attaque cette créature », « cours jusque là-bas » ou « va chercher cet objet ». Si elle ne reçoit pas de nouvelles instructions de votre part une fois l\'ordre exécuté, elle se contente de se défendre et de se préserver au mieux.</p><p> Vous pouvez utiliser votre action pour prendre le contrôle total de votre cible et la diriger de façon précise. Jusqu\'à la fin de votre prochain tour, elle exécute seulement les actions que vous choisissez et ne fait rien que vous ne lui ayez autorisé. Pendant cette période, vous pouvez aussi lui faire exécuter une réaction, mais pour cela, vous devez également dépenser votre propre réaction.</p><p> Chaque fois que la cible subit des dégâts, elle a droit à un nouveau jet de sauvegarde de Sagesse contre le sort. Si elle le réussit, le sort prend fin.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un  emplacement de niveau 6, la durée devient « concentration, jusqu\'à 10 minutes ». Si vous lancez ce sort en utilisant un emplacement de niveau 7, la durée devient « concentration, jusqu\'à 1 heure ». Si vous lancez ce sort en utilisant un emplacement de niveau 8 ou plus la durée devient « concentration, jusqu\'à 8 heures ».</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Don des langues / Langues',
            'slug' => Str::slug('Don des langues / Langues'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, M (un modèle réduit de ziggourat en argile)',
            'duration' => '1 heure',
            'description' => '<p>Ce sort permet à la créature que vous touchez de comprendre toutes les langues parlées qu\'elle entend. De plus, quand elle parle, toute créature qui maîtrise au moins une langue et l\'entend comprend ce qu\'elle dit.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Double illusoire / Tromperie',
            'slug' => Str::slug('Double illusoire / Tromperie'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous devenez invisible à l\'instant même où un double illusoire de votre personne apparaît là où vous vous trouvez. Ce double persiste pendant toute la durée du sort, mais votre invisibilité se termine dès que vous lancez un sort ou attaquez.</p><p> Vous pouvez utiliser votre action pour déplacer votre double d\'un maximum de deux fois votre vitesse et le faire bouger, parler et se comporter comme bon vous semble.</p><p> Vous pouvez voir par les yeux et entendre par les oreilles de votre double comme si vous vous trouviez à son emplacement. À chacun de vos tours, vous pouvez utiliser une action bonus pour passer d\'une perception via ses sens à une perception via les vôtres ou inversement. Tant que vous utilisez les sens de votre double, vous êtes sourd et aveugle à ce qui se passe directement autour de vous.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Doux repos',
            'slug' => Str::slug('Doux repos'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une pincée de sel et une pièce de cuivre à poser sur chaque oeil du cadavre et qui doivent rester en place pendant toute la durée du sort)',
            'duration' => '10 jours',
            'description' => '<p>Vous touchez un cadavre ou assimilé. Pendant toute la durée du sort, la cible est protégée contre la décomposition et ne peut pas se transformer en mort-vivant.</p><p> Le sort rallonge aussi la période pendant laquelle on peut rappeler la cible d\'entre les morts, car les jours passés sous l\'influence de ce sort ne sont pas décomptés de la période pendant laquelle on peut utiliser des sorts comme relever les morts.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Druidisme',
            'slug' => Str::slug('Druidisme'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez l\'un des effets suivants à portée après quelques murmures adressés aux esprits de la nature.</p><p> Vous créez un effet sensoriel minuscule et inoffensif qui annonce le temps qu\'il fera là où vous vous trouvez pendant les 24 heures à venir. Cet effet peut prendre la forme d\'un orbe doré si le temps va rester dégagé, d\'un nuage s\'il va pleuvoir, de flocons s\'il va neiger, etc. L\'effet persiste pendant 1 round.</p><p> Vous faites instantanément éclore une fleur ou un bourgeon ou germer une graine.</p><p> Vous créez un effet sensoriel instantané inoffensif, comme des feuilles qui tombent, un coup de vent, le bruit que ferait un petit animal ou une légère odeur de moufette. L\'effet doit être contenu dans un cube d\'au maximum 1,50 mètre d\'arête.</p><p> Vous allumez ou éteignez instantanément une chandelle, une torche ou un petit feu de camp.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Duel forcé',
            'slug' => Str::slug('Duel forcé'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous poussez une créature à vous affronter en duel. Une créature située à portée dans votre champ de vision doit faire un jet de sauvegarde de Sagesse. Si elle le rate, vous l\'obnubilez et elle ne peut résister à votre injonction divine. Pendant toute la durée du sort, elle est désavantagée lors des jets d\'attaque effectués contre toute créature autre que vous et doit faire un jet de sauvegarde de Sagesse chaque fois qu\'elle tente de s\'éloigner à plus de 9 mètres de vous. Si elle réussit ce jet de sauvegarde, le sort ne gêne pas ses mouvements pour ce tour.</p><p> Le sort se termine si vous attaquez une créature autre que celle visée par ce sort, si vous lancez un sort sur une créature hostile autre qu\'elle, si une créature amicale envers vous la blesse ou lui lance un sort néfaste ou si vous terminez votre tour à plus de 9 mètres d\'elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Éclair',
            'slug' => Str::slug('Éclair'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (ligne de 30 mètres)',
            'component' => 'V, S, M (un peu de fourrure et une baguette en ambre, en cristal ou en verre)',
            'duration' => 'instantanée',
            'description' => '<p>Un éclair formant une ligne de 30 mètres de long pour 1,50 mètre de large jaillit de votre personne et file dans la direction de votre choix. Chaque créature située sur la ligne doit faire un jet de sauvegarde de Dextérité. Celles qui échouentsubissent 8d6 dégâts de foudre, les autres la moitié seulement.</p><p> La foudre embrase les objets inflammables de la zone qui ne sont ni portés ni transportés par une créature.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Éclat du soleil',
            'slug' => Str::slug('Éclat du soleil'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (du feu et un éclat d\'héliotrope)',
            'duration' => 'instantanée',
            'description' => '<p>La chaude lumière du soleil illumine une zone de 18 mètres de rayon centrée sur un point de votre choix situé à portée. Chaque créature présente dans cette lumière doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 12d6 dégâts radiants et sont aveuglées pendant 1 minute. Les autres subissent seulement la moitié des dégâts et ne sont pas aveuglées par le sort. Les vases et les morts-vivants sont désavantagés lors de ce jet de sauvegarde.</p><p> Une créature aveuglée par le sort fait un autre jet de Constitution à la fin de chacun de ses tours. Dès qu\'elle réussit, sa cécité disparaît.</p><p> Ce sort dissipe toutes les ténèbres présentes dans la zone qui sont issues d\'un sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Embruns prismatiques',
            'slug' => Str::slug('Embruns prismatiques'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 18 mètres)',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Huit rayons de lumière multicolores jaillissent de votre main. Chacun a une couleur différente et possède des pouvoirs et objectifs distincts. Chaque créature présente dans un cône de 18 mètres doit faire un jet de sauvegarde de Dextérité. Lancez 1d8 par cible pour savoir quelle couleur l\'affecte.</p><p> <strong>1.Rouge.</strong> La cible subit 10d6 dégâts de feu si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.</p><p> <strong>2.Orange.</strong> La cible subit 10d6 dégâts d\'acide si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.</p><p> <strong>3.Jaune.</strong> La cible subit 10d6 dégâts de foudre si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.</p><p> <strong>4.Vert.</strong> La cible subit 10d6 dégâts de poison si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.</p><p> <strong>5.Bleu.</strong> La cible subit 10d6 dégâcs de froid si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.</p><p> <strong>6.Indigo.</strong> Si la cible rate son jet de sauvegarde, elle est entravée et doit alors faire un jet de sauvegarde de Constitution à la fin de chacun de ses tours. Si elle en réussit trois, le sort se termine, si elle en rate trois, elle se change définitivement en pierre et elle est en proie à l\'état pétrifié. Les succès et les échecs n\'ont pas à être consécutifs : tenez le compte dans chaque catégorie jusqu\'à ce que l\'une d\'elles arrive à trois.</p><p> <strong>7.Violet.</strong> La cible est aveugle si elle rate son jet de sauvegarde. Elle doit alors faire un jet de sauvegarde de Sagesse au début de votre prochain tour. Si elle le réussit, elle recouvre la vue, si elle le rate, elle est emportée sur un autre plan d\'existence choisi par le MD et recouvre aussi la vue. (En général, une créature qui ne se trouve pas sur son propre plan d\'existence est bannie là-bas tandis que les autres créatures sont envoyées sur le plan astral ou éthéré).</p><p> <strong>8.Spécial.</strong> Deux rayons viennent frapper la cible. Relancez deux fois le dé en le relançant chaque fois que vous sortez un 8.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Emprisonnement',
            'slug' => Str::slug('Emprisonnement'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (un portrait sur un vélin ou une statuette sculptée à l\'effigie de la cible et une composante spéciale qui varie en fonction de la version du sort choisie et vaut au moins 500 po par dé de vie de la cible)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous créez des entraves magiques pour immobiliser une créature située à portée dans votre champ de vision. La cible doit réussir un jet de sauvegarde de Sagesse ou se retrouver emprisonnée par le sort. Si elle réussit, elle est immunisée contre ce sort si vous le lancez de nouveau. Tant que la créature est affectée par le sort, elle n\'a pas besoin de respirer, de manger, ni de boire et ne vieillit plus. Les sorts de divination ne parviennent plus à la localiser ni à la percevoir.</p><p> Vous devez opter pour l\'une des formes d\'emprisonnement suivantes quand vous lancez le sort.</p><p> <strong>Enseveli.</strong> La cible est ensevelie dans les profondeurs de la terre, dans une sphère de force magique tout juste assez grande pour la contenir. Rien ne peut traverser cette sphère et les créatures ne peuvent pas recourir au voyage planaire pour y entrer ou en sortir.</p><p> La composante spéciale de cette version du sort est un petit orbe en mithral.</p><p> <strong>Enchaîné.</strong> La cible est retenue par de lourdes chaînes fermement ancrées au sol. Elle est entravée jusqu\'à ce que le sort se termine et, jusque-là, elle ne peut pas se déplacer ni être déplacée, par quelque moyen que ce soit.</p><p> La composante spéciale de cette version du sort est une fine chaîne faite de métal précieux.</p><p> <strong>Prison isolée.</strong> Le sort transporte la cible dans un minuscule demi-plan protégé contre la téléportation et les voyages planaires. Ce demi-plan peut être un labyrinthe, une cage, une tour ou une structure confinée similaire de votre choix.</p><p> La composante spéciale de cette version du sort est une représentation miniature de la prison, faite de jade.</p><p> <strong>Confinement minimal.</strong> La cible rétrécit jusqu\'à ne plus faire que 2,5 centimètres de haut et se retrouve emprisonnée dans une gemme ou un objet similaire. La lumière traverse la gemme normalement (ce qui permet à la cible de voir l\'extérieur et aux autres créatures de regarder dedans) mais rien d\'autre ne peut traverser sa paroi, pas même les méthodes de téléportation ni les voyages planaires. Il est impossible de tailler la gemme ou de la briser tant que le sort fait effet.</p><p> La composante spéciale de cette version du sort est une grande gemme transparente comme un corindon, un diamant ou un rubis.</p><p> <strong>Sommeil.</strong> La cible s\'endort et il est impossible de la réveiller.</p><p> La composante spéciale de cette version du sort est un bouquet d\'herbes soporifiques très rares.</p><p> <strong>Mettre fin au sort.</strong> Lors de l\'incantation et quelle que soit la version du sort, vous pouvez préciser une condition spéciale qui met fin au sort et libère la cible. Cette condition peut être aussi spécifique ou aussi élaborée que vous le désirez, mais le MD doit confirmer que cette condition est réalisable et a une chance d\'être remplie. Elle peut se baser sur le nom de la créature, son identité ou sa divinité, mais sinon elle doit reposer sur des actions ou des qualités observables et non sur des éléments intangibles comme le niveau, la classe ou les points de vie.</p><p> Dissipation de la magie peut mettre fin au sort à condition d\'être lancée depuis un emplacement de sort de niveau 9 en visant la prison ou la composante matérielle spéciale utilisée pour lancer le sort.</p><p> Vous pouvez utiliser une composante spéciale pour créer une prison à la fois seulement. Si vous relancez ce sort en utilisant la même composante, la cible de la première incantation est libérée sur-le-champ.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Enchevêtrement',
            'slug' => Str::slug('Enchevêtrement'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Des herbes et des lianes entremêlées jaillissent du sol dans un carré de 6 mètres de côté centré sur un point à portée. Pendant toute la durée du sort, les végétaux transforment la zone en terrain difficile.</p><p> Une créature qui se trouve dans la zone affectée lorsque vous lancez le sort doit réussir un jet de sauvegarde de Force, sans quoi elle reste entravée dans les plantes jusqu\'à ce que le sort se termine. Une créature entravée peut utiliser une action pour faire un test de Force contre le DD du sort. Si elle réussit, elle se libère.</p><p> Quand le sort se termine, les plantes invoquées se flétrissent.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Entrave planaire',
            'slug' => Str::slug('Entrave planaire'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bijou d\'une valeur minimale de 1 000 po, que le sort consume)',
            'duration' => '24 heures',
            'description' => '<p>Grâce à ce sort, vous vous attachez de force les services d\'un céleste, d\'un élémentaire, d\'une fée ou d\'un fiélon. La créature doit se trouver à portée pendant toute la durée du sort. (En général, elle est d\'abord invoquée au centre d\'un cercle magique inversé où elle reste piégée le temps de l\'incantation). La cible doit faire un jet de sauvegarde de Charisme à la fin de l\'incantation. Si elle échoue, elle est contrainte de vous servir pendant toute la durée du sort. Si elle a été invoquée ou créée via un autre sort, la durée de ce dernier se prolonge jusqu\'à égaler celle de l\'entrave planaire.</p><p> La créature liée doit suivre vos instructions au mieux de ses capacités. Vous pouvez lui demander de vous accompagner lors d\'une aventure, de protéger un lieu ou de transmettre un message. La créature obéit à vos instructions à la lettre, mais si elle est hostile envers vous, elle peut tout à fait interpréter vos paroles de manière à satisfaire ses propres objectifs. Si la créature a exécuté vos instructions avant la fin du sort, elle revient vers vous pour vous en informer si elle se trouve sur le même plan d\'existence que vous. Si vous êtes sur un autre plan, elle se rend là où vous l\'avez liée et y reste jusqu\'à la fin du sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau supérieur, la durée augmente: 10 jours au niveau 6, 30 au niveau 7, 180 au niveau 8 et un an et un jour au niveau 9.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Envoûtement / Discours captivant',
            'slug' => Str::slug('Envoûtement / Discours captivant'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => '<p>Vous entonnez une suite de paroles envoûtantes qui obligent les créatures de votre choix qui vous entendent et sont situées à portée et dans votre champ de vision à faire un jet de sauvegarde de Sagesse. Une créature qui ne peut pas être charmée réussit automatiquement ce jet de sauvegarde. Si vous ou vos compagnons vous battez contre une de ces créatures, elle est avantagée lors du jet de sauvegarde. Si la créature rate son jet, elle est désavantagée lors des tests de Sagesse (Perception) destinés à percevoir une créature autre que vous jusqu\'à ce que le sort se termine ou jusqu\'à ce qu\'elle ne puisse plus vous entendre. Le sort se termine si vous êtes neutralisé ou dans l\'incapacité de parler.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Épée de Mordenkainen',
            'slug' => Str::slug('Épée de Mordenkainen'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (une épée en platine miniature avec le pommeau et la poignée en cuivre et zinc, d\'une valeur de 250 po)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous créez un plan de force en forme d\'épée qui plane à portée et persiste pendant toute la durée du sort.</p><p> Dès que l\'épée apparaît, vous faites une attaque de sort au corps à corps contre une cible de votre choix située dans un rayon de 1,50 mètre autour de l\'épée. Si l\'épée touche, la cible subit 3d10 dégâts de force. Tant que le sort n\'est pas terminé, vous pouvez dépenser une action bonus à chacun de vos tours pour déplacer l\'épée d\'un maximum de 6 mètres afin de la conduire à un endroit situé dans votre champ de vision, puis répéter l\'attaque contre la même cible ou une autre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Esprit faible',
            'slug' => Str::slug('Esprit faible'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une poignée de sphères en argile, en cristal, en verre ou minérales)',
            'duration' => 'instantanée',
            'description' => '<p>Vous vous attaquez à l\'esprit d\'une créature située à portée dans votre champ de vision en essayant de briser son intellect et sa personnalité. La cible subit 4d6 dégâts psychiques et doit faire un jet de sauvegarde d\'Intelligence.</p><p> Si la cible rate son jet, son Intelligence et son Charisme tombent à 1. Elle ne peut plus lancer de sorts, activer d\'objet magique, comprendre une langue, ni communiquer de manière intelligible. En revanche, elle est toujours capable de reconnaître ses amis, de les suivre et même de les protéger.</p><p> La créature peut refaire un jet de sauvegarde tous les 30 jours. Le sort se termine dès qu\'elle réussit.</p><p> On peut mettre un terme à ce sort avec restauration supérieure, guérison ou souhait.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Esprit impénétrable',
            'slug' => Str::slug('Esprit impénétrable'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '24 heures',
            'description' => '<p>Vous touchez une créature consentante et, jusqu\'à la fin du sort, vous l\'immunisez contre les dégâts psychiques, les effets percevant les émotions ou révélant les pensées, les sorts de divination et l\'état charmé. Ce sort déjoue même les souhaits et les sorts et effets de même puissance qui cherchent à affecter l\'esprit de la cible ou à obtenir des informations sur elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Esprits gardiens',
            'slug' => Str::slug('Esprits gardiens'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (4,50 mètres de rayon)',
            'component' => 'V, S, M (un symbole sacré)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous appelez des esprits qui vous protègent. Ils volètent autour de vous dans un rayon de 4,50 mètres pendant toute la durée du sort. Si vous êtes Bon ou Neutre, ils ont une apparence angélique ou féerique (à vous de choisir). Si vous êtes Mauvais, ils ont une apparence fiélone.</p><p> Quand vous lancez le sort, vous pouvez désigner autant de créatures que vous le voulez afin qu\'il ne les affecte pas. Une créature affectée voit sa vitesse réduite de moitié dans la zone et, quand elle y entre pour la première fois de son tour ou quand elle y commence son tour, elle doit faire un jet de sauvegarde de Sagesse. Si elle échoue, elle subit 3d8 dégâts radiants (si vous êtes Bon ou Neutre) ou 3d8 dégâts nécrotiques (si vous êtes Mauvais). Si elle réussit son jet de sauvegarde, elle subit seulement la moitié de ces dégâts.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Étrangeté / Ennemi subconscient',
            'slug' => Str::slug('Étrangeté / Ennemi subconscient'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous puisez dans les peurs les plus profondes d\'un groupe de créatures et créez des êtres illusoires dans leur esprit, qu\'elles sont les seules à voir. Chaque créature située dans une sphère de 9 mètres de rayon centrée sur un point de votre choix situé à portée doit faire un jet de sauvegarde de Sagesse. Celles qui ratent leur jet sont terrorisées pendant toute la durée. Les illusions se basent sur les peurs enfouies en chaque cible et transforment leurs pires cauchemars en menace implacable.</p><p> À la fin de chacun de ses tours, une créature terrorisée doit faire un jet de sauvegarde de Sagesse. Si elle échoue elle subit 4d10 dégâts psychiques; si elle réussit, le sort se termine pour elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Éveil',
            'slug' => Str::slug('Éveil'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '8 heures',
            'range' => 'contact',
            'component' => 'V, S, M (une agate d\'une valeur minimale de 1 000 po, que le sort consomme)',
            'duration' => 'instantanée',
            'description' => '<p>Une fois que vous avez passé la durée de l\'incantation à tracer des sentiers magiques dans une pierre précieuse, vous touchez un animal ou une plante de taille Très Grande ou inférieure qui doivent être dépourvus de toute valeur d\'intelligence ou posséder une Intelligence de 3 ou moins. La cible reçoit alors une Intelligence de 10 et la possibilité de parler un langage de votre connaissance. Si la cible est une plante, elle peut se déplacer à l\'aide de ses branches, de ses racines, de ses lianes, de ses vrilles ou autre et gagne des sens similaires à ceux d\'un humain. C\'est au MD de choisir les statistiques appropriées à la plante éveillée, en lui appliquant par exemple le profil d\'un buisson ou d\'un arbre éveillé.</p><p> La bête ou la plante éveillée est sous votre charme pendant 30 jours ou jusqu\'à ce que vous ou l\'un de vos compagnons la blessiez. Une fois que l\'effet de charme se termine, la créature éveillée décide seule si elle reste amicale envers vous, selon la façon dont vous l\'avez traitée lorsqu\'elle était charmée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Fabrication',
            'slug' => Str::slug('Fabrication'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous convertissez des matériaux bruts en produits finis faits de la même matière. Par exemple, vous pouvez fabriquer un pont de bois à partir de souches d\'arbres, une corde à base d\'un tas de chanvre, et des habits à partir de lin ou de laine.</p><p> Choisissez des matériaux bruts situés à portée et dans votre champ de vision. Vous pouvez fabriquer un objet de taille Grande ou inférieure (contenu dans un cube de 3 mètres de côté ou dans huit cubes reliés de 1,50 mètre de côté) à condition d\'avoir assez de matière première. Toutefois, si vous travaillez avec du métal, de la pierre ou une autre substance minérale, l\'objet fabriqué ne doit pas dépasser la taille Moyenne (donc tenir dans un cube de 1,50 mètre de côté). La qualité de l\'objet fabriqué dépend de celle des matières premières.</p><p> Il est impossible de créer ou de transmuter des créatures ou des objets magiques à l\'aide de ce sort. Vous ne pouvez pas non plus y recourir pour fabriquer des objets demandant un haut degré d\'expertise, comme des bijoux, des armes, du verre ou une armure, à moins que vous ne soyez formé à l\'utilisation des outils d\'artisanat nécessaires à l\'élaboration de tels objets.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Façonnage de la pierre',
            'slug' => Str::slug('Façonnage de la pierre'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (argile molle, à façonner pour lui donner approximativement la forme de l\'objet de pierre désiré)',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez un objet de pierre de taille Moyenne ou inférieure ou une section de pierre d\'un maximum de 1,50 mètre dans toutes les dimensions et lui donnez la forme que vous désirez. Vous pouvez, par exemple, façonner un gros caillou de manière à en faire une arme, une idole ou un coffre, ou bien creuser un étroit passage dans un mur, à condition que ce dernier ne fasse pas plus de 1,50 mètre d\'épaisseur. Vous pouvez façonner une porte de pierre ou son chambranle pour la sceller. L\'objet créé peut avoir au maximum deux charnières et un loquet, mais il est impossible de créer des mécanismes plus complexes.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Faux amis / Amis',
            'slug' => Str::slug('Faux amis / Amis'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, M (un peu de maquillage à s\'appliquer sur le visage lors de l\'incantation)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Pendant toute la durée du sort, vous êtes avantagé sur tous les tests de Charisme à l\'encontre d\'une créature de votre choix qui ne vous est pas hostile. Quand le sort se termine, cette créature se rend compte que vous avez usé de magie pour l\'influencer et elle devient hostile. Si elle est encline à la violence, elle peut très bien vous attaquer. Une autre peut chercher à se venger autrement (au choix du MD), selon la manière dont vous avez interagi avec elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Faveur divine',
            'slug' => Str::slug('Faveur divine'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vos prières vous imprègnent d\'une aura radieuse. Jusqu\'à la fin du sort, les attaques que vous portez avec une arme infligent 1d4 dégâts radiants supplémentaires en cas de coup au but.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Feindre la mort / État cadavérique',
            'slug' => Str::slug('Feindre la mort / État cadavérique'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une pincée de poussière tombale)',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez une créature consentante et la plongez dans un état cataleptique si profond qu\'elle semble morte.</p><p> Pendant toute la durée du sort ou jusqu\'à ce que vous utilisiez une action pour toucher la cible et révoquer le sort, la cible paraît morte, même suite à un examen externe ou après utilisation d\'un sort visant à déterminer son statut. Elle est aveuglée et neutralisée et sa vitesse passe à 0. Elle est résistante à tous les types de dégâts hormis les dégâts psychiques. Si elle est empoisonnée ou malade au moment où vous lancez le sort ou si elle le devient pendant la durée du sort, la maladie ou le poison n\'a aucun effet tant que ce sort n\'est pas terminé.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Festin des héros',
            'slug' => Str::slug('Festin des héros'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '9 mètres',
            'component' => 'V, S, M (un bol incrusté de gemmes d\'une valeur minimale de 1 000 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous matérialisez un grand festin, comprenant des boissons et des mets de grande qualité. Il faut une heure pour terminer le festin qui disparaît au bout de cette durée. Ses effets bénéfiques se manifestent uniquement une fois cette heure écoulée. Douze créatures au maximum peuvent vous accompagner lors de ce repas.</p><p> Une créature qui participe au festin bénéficie de plusieurs avantages. Elle est guérie de toutes les maladies et de tous les poisons qui l\'affectaient, elle est immunisée contre le poison et l\'état terrorisé, et elle est avantagée lors de tous ses jets de sauvegarde de Sagesse. Son maximum de points de vie augmente de 2d10 et elle gagne le même nombre de points de vie. Ces avantages persistent pendant 24 heures.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flamme éternelle',
            'slug' => Str::slug('Flamme éternelle'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (poussière de rubis d\'une valeur de 50 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Une flamme à la luminosité égale à celle d\'une torche embrase soudain l\'objet que vous touchez. L\'effet du sort ressemble à une flamme ordinaire, mais ne dégage pas de chaleur et ne consomme pas d\'oxygène. On peut couvrir ou cacher la flamme éternelle, mais pas l\'étouffer ni l\'éteindre avec de l\'eau.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flamme sacrée',
            'slug' => Str::slug('Flamme sacrée'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Un flamboiement digne d\'une flamme s\'abat sur une créature située à portée dans votre champ de vision. La cible doit réussir un jet de Dextérité ou subir 1d8 dégâts radiants. Même si elle se trouve derrière un abri, la cible n\'est pas avantagée lors du jet de sauvegarde.</p><p> Les dégâts du sort augmentent de 1d8 quand vous atteignez le niveau 5 (2d8), le niveau 11 (3d8) et le niveau 17 (4d8).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flammes / Produire une flamme',
            'slug' => Str::slug('Flammes / Produire une flamme'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => '<p>Une flamme vacillante apparaît dans votre main. Elle y reste pendant toute la durée du sort et ne vous blesse pas, pas plus qu\'elle n\'endommage votre équipement. La flamme émet une vive lumière dans un rayon de 3 mètres et une faible lumière dans un rayon de 3 mètres de plus. Le sort se termine si vous le révoquez par une action ou si vous le lancez de nouveau.</p><p> Vous pouvez attaquer avec la flamme, mais cela met fin au sort. Pour cela, quand vous lancez le sort, ou par une action lors d\'un tour ultérieur, vous lancez la flamme sur une créature située dans un rayon de 9 mètres. Faites une attaque de sort à distance. Si vous touchez, la cible subit 1d8 dégâts de feu.</p><p> Les dégâts de ce sort augmentent de 1d8 quand vous atteignez le niveau 5 (2d8), le niveau 11 (3d8) et Je niveau 17 (4d8).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Fléau d\'insectes',
            'slug' => Str::slug('Fléau d\'insectes'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '90 mètres',
            'component' => 'V, S, M (un peu de sucre en poudre, quelques graines de céréales et une tache de graisse)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Un essaim de sauterelles grouillantes remplit une sphère de 6 mètres de rayon centrée sur un point de votre choix situé à portée. La sphère s\'étend en contournant les angles et persiste pendant toute la durée du sort. La visibilité est réduite dans la zone affectée. L\'intérieur de la sphère devient un terrain difficile.</p><p> Quand la sphère d\'insectes apparaît, chaque créature prise à l\'intérieur doit faire un jet de sauvegarde de Constitution. Une créature subit 4d10 dégâts perforants si elle rate son jet, la moitié seulement si elle le réussit. Une créature doit faire le même jet quand elle entre dans la sphère pour la première fois de son tour ou quand elle y termine son tour.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flèche acide de Melf',
            'slug' => Str::slug('Flèche acide de Melf'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (poudre de feuille de rhubarbe et estomac de vipère)',
            'duration' => 'instantanée',
            'description' => '<p>Une flèche d\'un vert chatoyant file vers une cible située à portée et explose en une gerbe d\'acide. Faites une attaque de sort à distance contre la cible. Si vous touchez, la cible reçoit 4d4 dégâts d\'acide immédiatement et 2d4 dégâts d\'acide à la fin de son prochain tour. Si vous ne touchez pas, l\'acide éclabousse la cible et lui inflige la moitié des dégâts initiaux, mais aucun à la fin de son prochain tour.</p>',
            'upper_lvl' => '<p>Quand vous utilisez ce sort via un emplacement de niveau 3 ou plus, les dégâts initiaux et secondaires augmentent de 1d4 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flèche de foudre',
            'slug' => Str::slug('Flèche de foudre'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Lors de la prochaine attaque que vous effectuez avec une arme à distance pendant que ce sort est actif, la munition (ou l\'arme s\'il s\'agit d\'une arme de jet) se change en éclair. Faites un jet d\'attaque ordinaire. Si vous touchez, la cible subit 4d8 dégâts de foudre au lieu des dégâts normaux, la moitié si vous la ratez.</p><p> Que vous touchiez ou ratiez votre cible, toutes les créatures situées dans un rayon de 3 mètres autour d\'elle doivent faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 2d8 dégâts de foudre, les autres la moitié seulement.</p><p> La munition ou l\'arme de jet reprend ensuite sa forme normale.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts dus à chacun des deux effets du sort augmentent de 1d8 par emplacement de sort au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flétrissement',
            'slug' => Str::slug('Flétrissement'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>L\'énergie nécromantique inonde une créature de votre choix située à portée dans votre champ de vision, et draine ses fluides corporels et sa vitalité. La cible doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle reçoit 8d8 dégâts nécrotiques, la moitié seulement si elle réussit son jet. Ce sort n\'a aucun effet sur les morts-vivants ou les créatures artificielles.</p><p> Si vous visez une créature végétale ou une plante magique, elle est désavantagée lors du jet de sauvegarde et le sort lui inflige le maximum de dégâts possible.</p><p> Si vous visez une plante non magique qui n\'est pas une créature, comme un arbre ou un buisson, elle n\'a pas droit au moindre jet de sauvegarde, mais se flétrit et meurt.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 4e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Flou',
            'slug' => Str::slug('Flou'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Votre corps devient flou, il ondule et vacille comme une flamme aux yeux d\'autrui. Pendant toute la durée du sort, les créatures sont désavantagées lorsqu\'elles font un jet d\'attaque contre vous. Un attaquant est immunisé contre cet effet s\'il ne se repose pas sur sa vue, s\'il dispose de vision aveugle par exemple, ou s\'il peut percer les illusions à jour, avec vision parfaite.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Force fantasmagorique',
            'slug' => Str::slug('Force fantasmagorique'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un peu de laine)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous façonnez une illusion et l\'implantez dans l\'esprit d\'une créature située à portée dans votre champ de vision. Elle doit faire un jet de sauvegarde d\'intelligence. Si elle échoue, vous créez un objet, une créature ou un phénomène visible fantasmagorique de votre choix. L\'illusion doit tenir dans un cube de 3 mètres d\'arête. La cible est seule à la percevoir, et ce pendant toute la durée du sort. Ce dernier ne fonctionne pas contre les morts-vivants ni les créatures artificielles.</p><p> L\'illusion comprend des bruits, une température et d\'autres stimuli, mais, de même, la cible du sort est la seule à les percevoir.</p><p> La cible peut utiliser une action pour examiner l\'illusion avec un test d\'intelligence (Investigation) contre le DD du jet de sauvegarde de votre sort. Si elle réussit son test, elle comprend qu\'elle a affaire à une simple illusion et le sort se termine.</p><p> Tant que la cible est sous l\'effet du sort, elle traite l\'illusion comme un élément réel et invente une explication rationnelle aux résultats illogiques issus de ses interactions avec elle. Par exemple, si elle tente de traverser un pont fantasmagorique enjambant un ravin et tombe dès qu\'elle pose le pied sur ce pont, si elle survit à la chute, elle croit toujours que le pont est réel et trouve une explication logique à sa chute : on l\'a poussée, elle a glissé, une forte bourrasque l\'a fait basculer...</p><p> Une cible affectée croit si fort à la réalité de l\'illusion que cette dernière peut même la blesser. Une illusion créée à l\'image d\'une créature peut attaquer la cible. De même, une illusion représentant du feu, un bassin d\'acide ou une nappe de lave peut brûler la cible. À chaque round, à votre tour, votre illusion inflige 1d6 dégâts psychiques à la cible si elle se trouve au sein de l\'illusion ou dans un rayon de 1,50 mètre autour d\'elle et que cette illusion représente une créature ou un danger qui devrait logiquement la blesser, en l\'attaquant par exemple. La cible perçoit les dégâts comme étant d\'un type approprié à l\'illusion qu\'elle voit.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Forme éthérée',
            'slug' => Str::slug('Forme éthérée'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'jusqu\'à 8 heures',
            'description' => '<p>Vous pénétrez dans la région frontalière du plan éthéré, dans une zone où il chevauche votre plan actuel. Vous restez sur la Frontière éthérée pendant toute la durée du sort ou jusqu\'à ce que vous utilisiez une action pour y mettre fin. Pendant cette période, vous pouvez vous déplacer dans n\'importe quelle direction. Si vous optez pour un déplacement vers le haut ou le bas, le prix du mouvement est doublé, chaque mètre de déplacement vous coûtant un mètre supplémentaire. Vous voyez et entendez ce qui se passe sur le plan d\'où vous venez, mais tout y est gris et vous ne voyez plus rien au-delà de 18 mètres.</p><p> Une fois sur le plan éthéré, vous pouvez affecter uniquement des créatures situées sur ce plan et elles sont les seules à pouvoir vous affecter. Celles qui ne se trouvent pas sur ce plan ne vous perçoivent pas et sont incapables d\'interagir avec vous, à moins qu\'un pouvoir spécial ou magique ne le leur permette.</p><p> Les objets et effets qui ne se trouvent pas sur le plan éthéré n\'ont aucune incidence sur vous, ce qui vous permet de traverser des objets que vous apercevez sur le plan d\'où vous venez.</p><p> Quand le sort se termine, vous retournez immédiatement sur le plan d\'où vous venez, à l\'endroit que vous occupez actuellement. Si vous occupez le même emplacement qu\'un objet solide ou une créature lorsque cela se produit, vous êtes immédiatement projeté dans l\'espace inoccupé le plus proche susceptible de vous accueillir et subissez un montant de dégâts de force égal à 6,5 x le nombre de mètres sur lesquels vous avez été projeté.</p><p> Ce sort n\'a aucun effet si vous le lancez alors que vous vous trouvez sur le plan éthéré ou sur un plan non limitrophe, comme les plans extérieurs.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 8 ou plus, vous pouvez affecter jusqu\'à trois créatures consentantes (vous y compris) par niveau au-delà du 7e. Toutes ces créatures doivent se trouver dans un rayon de 3 mètres autour de vous quand vous lancez le sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Forme gazeuse',
            'slug' => Str::slug('Forme gazeuse'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un morceau de gaze et une volute de fumée)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous touchez une créature consentante et la transformez, ainsi que tous les objets qu\'elle porte et qu\'elle transporte, en nuage brumeux pour toute la durée du sort. Ce dernier se termine si la créature tombe à 0 point de vie. Le sort n\'affecte pas les créatures intangibles.</p><p> Sous cette forme, la cible n\'a plus qu\'un seul mode de déplacement : le vol, à une vitesse de 3 mètres. Elle peut entrer dans l\'espace d\'une autre créature et l\'occuper. Elle est résistante aux dégâts non magiques et elle est avantagée lors des jets de sauvegarde de Force, de Dextérité et de Constitution. Elle peut passer à travers de petits trous, de minces ouvertures et même de simples fissures. En revanche, les liquides équivalent pour elle à des surfaces solides. Elle ne peut pas tomber et continue de flotter dans les airs même si elle est étourdie ou neutralisée.</p><p> Sous forme de nuage brumeux, la cible ne peut pas parler ni manipuler d\'objet. Il lui est impossible de lâcher les objets qu\'elle portait et qu\'elle transportait et personne ne peut les utiliser ni interagir avec eux. Elle ne peut pas attaquer ni lancer de sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Fou rire de Tasha',
            'slug' => Str::slug('Fou rire de Tasha'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (de minuscules tartes et une plume à agiter dans les airs)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Une créature de votre choix située à portée dans votre champ de vision trouve soudain tout ce qui l\'entoure d\'une drôlerie hilarante et succombe à un fou rire irrépressible dès que ce sort l\'affecte. Elle doit réussir un jet de sauvegarde de Sagesse ou se retrouver à terre, neutralisée et incapable de se relever pendant toute la durée du sort. Ce sort n\'affecte pas les créatures dotées d\'une Intelligence de 4 ou moins.</p><p> À la fin de chacun de ses tours et chaque fois qu\'elle subit des dégâts, la cible a droit à un nouveau jet de sauvegarde de Sagesse. Elle est avantagée lors de ce jet si ce sont des dégâts qui l\'ont provoqué. Si la cible le réussit, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Fouet épineux',
            'slug' => Str::slug('Fouet épineux'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une tige de plante épineuse)',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez un long fouet semblable à une liane couverte d\'épines. Sur votre ordre, il frappe une créature à portée. Faites une attaque de sort au corps à corps contre la cible. Si vous touchez, la créature subit 1d6 dégâts perforants et, si la créature est de taille Grande ou inférieure, vous l\'attirez sur 3 mètres dans votre direction.</p><p> Les dégâts du sort augmentent de 1d6 quand vous atteignez le niveau 5 (2d6), le niveau 11 (3d6) et le niveau 17 (4d6).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Foulée brumeuse / Pas brumeux',
            'slug' => Str::slug('Foulée brumeuse / Pas brumeux'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous êtes brièvement entouré d\'une brume argentée et vous vous téléportez sur un maximum de 9 mètres jusqu\'à un emplacement inoccupé situé dans votre champ de vision.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Fracassement / Briser',
            'slug' => Str::slug('Fracassement / Briser'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un éclat de mica)',
            'duration' => 'instantanée',
            'description' => '<p>Un bruit retentit soudain avec une intensité douloureuse, à partir d\'un point situé à portée. Chaque créature située dans une sphère de 3 mètres de rayon centrée sur ce point doit faire un jet de sauvegarde de Constitution. Les créatures qui le ratent subissent 3d8 dégâts de tonnerre, les autres la moitié seulement. Une créature faite de matière inorganique, comme de la pierre, du cristal ou du métal est désavantagée sur ce jet de sauvegarde.</p><p> Un objet non magique que personne ne porte ni ne transporte subit aussi ces dégâts s\'il se trouve dans la zone du sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Frappe piégeuse',
            'slug' => Str::slug('Frappe piégeuse'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>La prochaine attaque armée, faite avant la fin de ce sort, qui vous permet de toucher une créature fait jaillir une masse grouillante de lianes épineuses au point d\'impact. La cible doit réussir un jet de sauvegarde de Force, sans quoi elle est entravée jusqu\'à la fin du sort. Une créature de taille Grande ou supérieure est avantagée sur ce jet de sauvegarde. Si la cible réussit son jet de sauvegarde, les lianes se flétrissent.</p><p> Tant que la cible est entravée par le sort, elle subit 1d6 dégâts perforants au début de chacun de ses tours. Une créature entravée par les lianes peut utiliser son action pour faire un jet de sauvegarde de Force contre le DD du jet de sauvegarde de votre sort. Une créature suffisamment proche de la cible pour la toucher peut aussi effectuer ce jet. Si le jet est réussi, la cible est libérée.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d6 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Fusion dans la pierre',
            'slug' => Str::slug('Fusion dans la pierre'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '8 heures',
            'description' => '<p>Vous entrez dans un objet ou une surface de pierre assez grande pour contenir entièrement votre corps, votre personne et votre équipement fusionnant avec la pierre pendant toute la durée du sort. Vous utilisez votre déplacement pour entrer dans la pierre en un point que vous êtes en mesure de toucher. Il ne reste alors rien de visible ni de détectable indiquant votre présence pour des sens non magiques.</p><p> Tant que vous êtes fusionné avec la pierre, vous ne voyez pas ce qui se passe à l\'extérieur et vous êtes désavantagé lors des tests de Sagesse (Perception) destinés à entendre les sons qui retentissent à l\'extérieur de la pierre. Vous restez conscient du temps qui passe et vous pouvez lancer des sorts sur votre propre personne. Vous pouvez utiliser votre déplacement pour quitter la pierre par l\'endroit par où vous y êtes entré, ce qui met fin au sort. En dehors de cela, vous êtes dans l\'incapacité de vous déplacer.</p><p> Vous n\'êtes pas blessé si la pierre subit des dégâts mineurs, mais si elle est partiellement détruite ou change de forme (au point que vous ne tenez plus entièrement à l\'intérieur), elle vous expulse et vous subissez 6d6 dégâts contondants. Si la pierre est complètement détruite (ou transmutée en une substance différente), elle vous expulse et vous subissez 50 dégâts contondants. Si vous vous faites expulser de la pierre, vous vous retrouvez à terre dans l\'emplacement inoccupé le plus proche de celui par lequel vous êtes entré dans la roche.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Gardien de la foi',
            'slug' => Str::slug('Gardien de la foi'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => '8 heures',
            'description' => '<p>Un gardien spectral de taille Grande apparaît et flotte dans un emplacement inoccupé de votre choix situé à portée dans votre champ de vision. Il occupe alors cet emplacement mais sa silhouette reste indistincte, à l\'exception de son épée luisante et de son bouclier frappé du symbole de votre divinité.</p><p> Toute créature hostile envers vous qui entre dans un emplacement situé dans un rayon de 3 mètres autour du gardien pour la première fois de son tour doit réussir un jet de sauvegarde de Dextérité. Si elle échoue, elle subit 20 dégâts radiants, la moitié seulement si elle réussit. Le gardien disparaît dès qu\'il a infligé un total de 60 dégâts.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Glissement de terrain / Déplacer la terre',
            'slug' => Str::slug('Glissement de terrain / Déplacer la terre'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (une lame de fer et un petit sac contenant un mélange de terres : de l\'argile, du terreau et du sable)',
            'duration' => 'concentration,jusqu\'à 2 heures',
            'description' => '<p>Choisissez une zone de terrain à portée d\'un maximum de 12 mètres de côté. Vous pouvez remodeler la terre, le sable ou l\'argile qu\'elle comporte comme bon vous semble pendant toute la durée du sort. Vous pouvez augmenter ou diminuer l\'altitude de la zone, creuser ou combler une tranchée, ériger ou abattre un mur, ou former un pilier. L\'amplitude de ces modifications ne peut pas excéder la moitié de la dimension la plus importante de la zone affectée. Donc, si vous modifiez une zone de 12 mètres de côté, vous pouvez créer un pilier de 6 mètres de haut au maximum, modifier l\'altitude de la zone de 6 mètres au plus, creuser une tranchée d\'un maximum de 6 mètres de profondeur, etc. Il faut 10 minutes pour finaliser ces modifications.</p><p> Au bout de chaque période de 10 minutes passées à vous concentrer sur le sort, vous pouvez choisir une nouvelle zone de terrain à modifier.</p><p> Comme les transformations se produisent lentement, il est bien rare qu\'une créature se retrouve piégée ou blessée à cause des mouvements du terrain.</p><p> Ce sort est incapable de manipuler la pierre naturelle et les constructions de pierre. La roche et les structures s\'adaptent au nouvel agencement du terrain. Si vos modifications déstabilisent une structure, elle peut très bien s\'effondrer.</p><p> De même, le sort n\'affecte pas directement la croissance des plantes. La terre déplacée emporte les végétaux avec elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Globe d\'invulnérabilité',
            'slug' => Str::slug('Globe d\'invulnérabilité'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (3 mètres de rayon)',
            'component' => 'V, S, M (une perle de verre ou de cristal qui explose à la fin du sort)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Une barrière immobile scintille légèrement dans un rayon de 3 mètres autour de vous et persiste pendant toute la durée du sort.</p><p> Tout sort de niveau 5 ou inférieur lancé depuis l\'extérieur de la barrière se trouve dans l\'incapacité d\'affecter les créatures et les objets se trouvant à l\'intérieur, même si l\'incantateur lance son sort en utilisant un emplacement de niveau supérieur. Le sort peut très bien viser les créatures et les objets situés au sein de la barrière, mais il n\'a aucun effet sur eux. De même, la zone protégée par la barrière est exclue de la zone affectée par les sorts de ces niveaux.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, la barrière bloque les sorts d\'un niveau de plus par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Glyphe de garde',
            'slug' => Str::slug('Glyphe de garde'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (encens et poudre de diamant d\'une valeur minimale de 200 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation ou déclenchement',
            'description' => '<p>Lorsque vous lancez ce sort, vous inscrivez un glyphe capable de blesser autrui, soit sur une surface quelconque, comme une table, le sol ou un mur, soit dans un objet que l\'on peut refermer pour dissimuler l\'inscription, comme un livre, un parchemin ou un coffre au trésor. Si vous optez pour une surface, le glyphe peut couvrir une zone de 3 mètres de diamètre au maximum. Si vous choisissez un objet, il ne faut plus le déplacer par la suite: si quelqu\'un le déplace à plus de 3 mètres de l\'endroit où vous avez jeté ce sort, le glyphe se brise et le sort se termine sans avoir été déclenché.</p><p> Le glyphe est presque invisible. Pour le discerner, il faut réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde de votre sort.</p><p> Lors de l\'incantation, c\'est à vous de décider de ce qui déclenchera le sort. Pour les glyphes tracés sur une surface quelconque, les déclencheurs les plus courants consistent à toucher le glyphe ou se tenir dessus, à déplacer un objet recouvrant le glyphe, à s\'approcher à une certaine distance du glyphe ou encore à manipuler l\'objet sur lequel le glyphe est tracé. Pour les glyphes inscrits dans un objet, on trouve parmi les déclencheurs les plus répandus le fait d\'ouvrir l\'objet, de s\'en approcher à une certaine distance ou de voir ou de lire le glyphe. Le sort se termine dès que le glyphe se déclenche.</p><p> Vous pouvez affiner le déclencheur, de façon à ce que le sort s\'active sous certaines conditions ou en fonction de certaines caractéristiques physiques (comme le poids ou la taille), selon un type de créature (pour un glyphe destiné aux aberrations ou aux drows par exemple) ou selon l\'alignement. Vous pouvez aussi définir des conditions pour que certaines créatures ne déclenchent pas le glyphe, en prononçant un mot de passe par exemple.</p><p> Lorsque vous dessinez le glyphe, vous devez choisir entre des runes explosives ou un glyphe à sort.</p><p> <strong>Runes explosives.</strong> Quand le glyphe se déclenche, il explose dans une sphère de 6 mètres de rayon centrée sur lui. La sphère s\'étend en contournant les angles si besoin. Chaque créature de la zone doit faire un jet de sauvegarde de Dextérité. Une créature reçoit 5d8 points de dégâts d\'acide, de froid, de feu, de foudre ou de tonnerre si elle rate son jet (à vous de choisir le type de dégâts lors de l\'incantation), la moitié seulement si elle le réussit.</p><p> <strong>Glyphe à sort.</strong> Vous pouvez stocker un sort de niveau 3 ou inférieur dans le glyphe en le lançant lors de l\'incantation du glyphe. Ce sort doit viser une créature unique ou une zone. Le sort stocké n\'a aucun effet immédiat quand il est lancé ainsi. Il se lance quand quelqu\'un déclenche le glyphe. Si le sort affecte une cible, il vise celle qui a déclenché le glyphe. S\'il affecte une zone, cette dernière est centrée sur la créature qui a déclenché le glyphe. Si le sort invoque des créatures hostiles ou crée des objets néfastes ou des pièges, ils apparaissent aussi près de l\'intrus que possible et s\'en prennent à lui. Si le sort nécessite de la concentration, il persiste jusqu\'à la fin de sa durée maximale.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts des runes explosives augmentent de 1d8 par niveau au-delà du 3e. Si vous créez un glyphe à sort, vous pouvez stocker un sort d\'un niveau égal ou inférieur à celui employé pour lancer le glyphe.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Gourdin magique / Crosse des druides',
            'slug' => Str::slug('Gourdin magique / Crosse des druides'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'contact',
            'component' => 'V, S, M (du gui, une feuille de trèfle et un bâton ou un gourdin)',
            'duration' => '1 minute',
            'description' => '<p>La puissance du monde naturel imprègne le bois du bâton ou du gourdin que vous tenez. Pendant toute la durée du sort, vous pouvez utiliser votre caractéristique d\'incantation au lieu de votre Force pour effectuer les jets d\'attaque et de dégâts au corps à corps avec cette arme. Le dé de dégâts de l\'arme devient un d8. L\'arme devient magique si elle ne l\'était pas déjà. Le sort se termine si vous le lancez de nouveau ou si vous lâchez votre arme.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Graisse',
            'slug' => Str::slug('Graisse'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (de la couenne de porc ou du beurre)',
            'duration' => '1 minute',
            'description' => '<p>Une couche de graisse particulièrement glissante recouvre le sol dans une zone de 3 mètres de côté centrée sur un point situé à portée et le change en terrain difficile pour toute la durée du sort.</p><p> Lorsque la graisse apparaît, chaque créature se trouvant dans la zone affectée doit réussir un jet de sauvegarde de Dextérité ou tomber à terre. Une créature qui entre dans la zone ou y termine son tour doit aussi réussir ce jet sous peine de se retrouver à terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Grande foulée',
            'slug' => Str::slug('Grande foulée'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une pincée de poussière)',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez une créature dont la vitesse augmente de 3 mètres jusqu\'à la fin du sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une créature de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Grêle d\'épines',
            'slug' => Str::slug('Grêle d\'épines'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>La prochaine fois que vous touchez une créature avec une attaque armée à distance avant la fin du sort, ce dernier crée une pluie d\'épines qui jaillit de votre arme ou de votre munition. En plus de l\'effet normal de l\'attaque, la cible et toutes les créatures situées dans un rayon de 1,50 mètre autour d\'elle doivent faire un jet de sauvegarde de Dextérité. Une créature subit 1d10 dégâts perforants en cas d\'échec, la moitié en cas de réussite.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d10 par emplacement de sort au-delà du 1er (pour un maximum de 6d10).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Guérison',
            'slug' => Str::slug('Guérison'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Choisissez une créature située à portée dans votre champ de vision. Une bouffée d\'énergie positive la traverse et lui rend 70 points de vie. Ce sort met aussi un terme à la cécité, la surdité et toutes les maladies qui l\'affectent. Ce sort n\'a aucun effet sur les créatures artificielles et les morts-vivants.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, la quantité de soins prodigués augmente de 10 points par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Guérison de groupe',
            'slug' => Str::slug('Guérison de groupe'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Un flot d\'énergie curative émane de vous et enveloppe les créatures blessées qui vous entourent. Vous rendez jusqu\'à 700 points de vie, divisés comme bon vous semble entre autant de créatures situées à portée et dans votre champ de vision que vous le voulez. Le sort débarrasse aussi les créatures qu\'il guérit de leurs maladies et des effets qui les rendent sourdes ou aveugles. Ce sort n\'a aucun effet sur les morts-vivants ni sur les créatures artificielles.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Hâte',
            'slug' => Str::slug('Hâte'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un copeau de racine de réglisse)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Choisissez une créature consentante située à portée dans votre champ de vision. Jusqu\'à la fin du sort, la cible voit sa vitesse doubler, gagne un bonus de +2 à la CA, est avantagée lors des jets de sauvegarde de Dextérité et dispose d\'une action de plus par tour. Cette action est uniquement réservée aux actions suivantes : attaquer (une attaque à l\'arme seulement), se précipiter, se désengager, se cacher ou utiliser un objet.</p><p> Quand le sort se termine, la cible ne peut pas se déplacer ni effectuer une action avant que son prochain tour ne se soit écoulé, car une vague de léthargie déferle sur elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Hérissement de projectiles / invocation d\'un tir de barrage',
            'slug' => Str::slug('Hérissement de projectiles / invocation d\'un tir de barrage'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 18 mètres)',
            'component' => 'V, S, M (une munition ou une arme de jet)',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez une arme de jet non magique ou un projectile non magique, afin de créer un cône d\'armes identiques qui filent dans les airs avant de disparaître. Chaque créature située dans un cône de 18 mètres doit réussir un jet de sauvegarde de Dextérité. Celles qui échouent subissent 3d8 dégâts, les autres la moitié seulement. Le type de dégâts est identique à celui du projectile utilisé comme composante.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Héroïsme',
            'slug' => Str::slug('Héroïsme'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous imprégnez une créature consentante que vous touchez de courage. Jusqu\'à la fin du sort, elle est immunisée contre l\'état terrorisé et, au début de chacun de ses tours, elle gagne un montant de points de vie temporaires égal à votre modificateur de caractéristique d\'incantation. Quand le sort se termine la cible perd les éventuels points de vie temporaires restants issus de ce sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une créature de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Identification',
            'slug' => Str::slug('Identification'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (une perle d\'une valeur minimale de 100 po et une plume de hibou)',
            'duration' => 'instantanée',
            'description' => '<p>Vous choisissez un objet avec lequel vous devez rester en contact pendant toute l\'incantation du sort. Si c\'est un objet magique ou un objet imprégné de magie, vous apprenez immédiatement quelles sont ses propriétés et comment vous en servir. Vous savez aussi s\'il faut s\'harmoniser avec lui pour l\'utiliser et combien de charges il possède, le cas échéant. Vous savez si des sorts affectent l\'objet et quel est leur nom. Si l\'objet a été créé grâce à un sort, vous apprenez quel sort lui a donné naissance.</p><p> Si, à la place, vous touchez une créature pendant toute l\'incantation, vous découvrez quels sorts l\'affectent présentement, le cas échéant.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'illusion mineure',
            'slug' => Str::slug('illusion mineure'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'S, M (un morceau de toison)',
            'duration' => '1 minute',
            'description' => '<p>Vous créez à portée un son ou une image représentant un objet. L\'illusion persiste pendant toute la durée du sort et se dissipe si vous révoquez le sort par une action ou si vous lancez de nouveau ce sort.</p><p> Si vous créez un son, son volume peut aller du simple murmure au hurlement. Ce peut être votre voix, celle de quelqu\'un d\'autre, le rugissement d\'un lion, un battement de tambours ou tout autre son de votre choix. Ce bruit persiste sans faiblir pendant toute la durée du sort, à moins que vous ne préfériez émettre des sons distincts à différents moments pendant la durée du sort.</p><p> Si vous créez une image (comme une chaise, des empreintes boueuses ou un petit coffre), elle doit tenir dans un cube de 1,50 mètre d\'arête. L\'image ne s\'accompagne pas de son, de lumière, d\'odeur, ni d\'autres effets sensoriels. Une interaction physique avec l\'image révèle de suite qu\'elle n\'est qu\'une illusion, car les objets la traversent.</p><p> Si une créature utilise son action pour examiner le son ou l\'image, elle comprend qu\'il s\'agit d\'une illusion si elle réussit un test d\'Intelligence (Investigation) opposé au DD du jet de sauvegarde de votre sort. Si une créature perce l\'illusion à jour, elle perd toute substance pour elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'illusion programmée',
            'slug' => Str::slug('illusion programmée'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un morceau de toison et de la poussière de jade d\'une valeur de 25 po)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous créez une illusion représentant un objet, une créature ou un autre phénomène visible à portée. Elle s\'active une fois les conditions spécifiques remplies ; en attendant, elle est imperceptible. L\'illusion doit tenir dans un cube de 9 mètres d\'arête. Vous décidez de son comportement et des sons qu\'elle émet au moment où vous lancez le sort. Ce comportement programmé peut durer un maximum de 5 minutes.</p><p> Quand les conditions spécifiées se présentent, l\'illusion apparaît et se comporte comme vous l\'avez décidé. Sa représentation finie, elle disparaît et reste en hibernation pendant 10 minutes. Ensuite, elle peut se réactiver de nouveau.</p><p> Les conditions de déclenchement peuvent être aussi génériques ou détaillées que vous le souhaitez, mais elles doivent toujours se baser sur des éléments visuels ou audibles se produisant dans un rayon de 9 mètres autour de la zone du sort. Par exemple, vous pouvez créer une illusion de vous-même qui apparaît pour avertir d\'autres gens quand ils tentent d\'ouvrir une porte piégée, ou vous pouvez programmer votre illusion pour qu\'elle se déclenche seulement quand une créature prononce le mot de passe correct.</p><p> Les interactions physiques révèlent que l\'image n\'est qu\'une illusion, car les objets la traversent. Si une créature utilise son action pour examiner l\'image, elle comprend que c\'est une illusion, à condition de réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde de votre sort. Si une créature perce l\'illusion à jour, elle voit à travers l\'image et les sons produits par l\'illusion sonnent creux à ses oreilles.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Image majeure',
            'slug' => Str::slug('Image majeure'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un morceau de toison)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez l\'image d\'un objet, d\'une créature ou d\'un phénomène visible pas plus grand qu\'un cube de 6 mètres d\'arête. L\'image apparaît en un point situé à portée et dans votre champ de vision et persiste pendant toute la durée du sort. Elle a l\'air absolument réelle et s\'accompagne des sons, des odeurs et de la température appropriés pour la chose qu\'elle représente. En revanche, elle ne dégage pas assez de chaleur ou de froid pour blesser quelqu\'un, ne génère pas de sons assez puissants pour provoquer des dégâts de tonnerre ou assourdir une créature, et n\'émet pas une odeur assez puissante pour écoeurer une créature (comme le fait la puanteur du troglodyte).</p><p> Tant que vous êtes à portée de l\'illusion, vous pouvez utiliser votre action pour déplacer l\'image vers un autre point situé à portée. Quand l\'image bouge, vous pouvez modifier son apparence de manière à ce que ses mouvements paraissent naturels. Par exemple, si vous créez l\'image d\'une créature et la déplacez, vous pouvez modifier l\'image pour donner l\'impression que la créature marche. De même, vous pouvez modifier les sons que l\'image émet, à tel point que vous pouvez lui faire tenir une conversation, par exemple.</p><p> Les interactions physiques avec l\'image révèlent qu\'elle n\'est qu\'une illusion, car les objets la traversent. Si une créature utilise son action pour examiner l\'image, elle comprend que c\'est une illusion à condition de réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde de votre sort. Si une créature perce l\'illusion à jour, elle voit à travers l\'image et ne perçoit plus que faiblement ses autres propriétés sensorielles.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, le sort persiste jusqu\'à dissipation, sans que vous ayez besoin de vous concentrer.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Image miroir',
            'slug' => Str::slug('Image miroir'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => '<p>Trois répliques illusoires de votre personne apparaissent dans votre emplacement. Jusqu\'à la fin du sort, ces répliques se déplacent en même temps que vous et imitent toutes vos actions, changeant de position de manière à ce qu\'il soit impossible de savoir quelles versions de vous sont des images et quelle version est réelle. Vous pouvez utiliser une action pour révoquer les répliques illusoires.</p><p> Pendant toute la durée du sort, chaque fois qu\'une créature vous prend pour cible d\'une attaque, vous devez lancer 1d20 pour savoir si l\'attaque touche votre personne ou l\'un de vos doubles.</p><p> Si vous avez trois répliques, vous devez obtenir 6 ou plus pour que l\'attaque touche une réplique. Si vous n\'en avez plus que deux, vous devez faire 8 ou plus et si vous n\'en avez plus qu\'une, vous devez faire 11 ou plus.</p><p> Chaque réplique possède une CA de 10 + votre modificateur de Dextérité. Si l\'attaque touche une réplique, elle la détruit. Le seul moyen de détruire une réplique est de la toucher avec une attaque, car elle ignore tous les autres effets et dégâts. Le sort se termine quand les trois répliques sont détruites. Une créature n\'est pas affectée par ce sort si elle ne voit pas, si elle se sert d\'un mode de perception autre que la vue (comme la vision aveugle) ou encore si elle perçoit les illusions comme telles avec vision parfaite, par exemple.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Image projetée',
            'slug' => Str::slug('Image projetée'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '750 kilomètres',
            'component' => 'V, S, M (une petite réplique de votre personne construite avec des matériaux valant au moins 5 po)',
            'duration' => 'concentration, jusqu\'à 1 jour',
            'description' => '<p>Vous créez un double illusoire de votre personne qui persiste pendant toute la durée du sort. Ce double peut apparaître à n\'importe quel endroit à portée, peu importent les obstacles interposés, à condition que vous l\'ayez déjà vu auparavant. D\'un point de vue visuel et auditif, l\'illusion vous est tout à fait semblable ; en revanche, elle est intangible. Si elle subit le moindre dégât, elle disparaît et le sort se termine.</p><p> Vous pouvez utiliser votre action pour déplacer votre illusion jusqu\'au double de votre vitesse, lui faire exécuter des gestes, la faire parler et se comporter comme bon vous semble. Elle imite vos manières à la perfection.</p><p> Vous pouvez entendre et voir par l\'intermédiaire des oreilles et des yeux de votre double, comme si vous occupiez son emplacement. À votre tour, vous pouvez dépenser une action bonus pour passer de l\'utilisation de ses sens à celle des vôtres et inversement. Tant que vous utilisez ses sens, vous êtes aveugle et sourd à votre propre environnement.</p><p> Les interactions physiques révèlent que l\'image n\'est qu\'une illusion, car les objets la traversent. Si une créature utilise son action pour examiner l\'image, elle comprend que c\'est une illusion, à condition de réussir un test d\'lntelligence (Investigation) contre le DD du jet de sauvegarde de votre sort. Si une créature perce l\'illusion à jour, elle voit à travers l\'image et les sons produits par l\'illusion sonnent creux à ses oreilles.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Image silencieuse',
            'slug' => Str::slug('Image silencieuse'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un morceau de toison)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez l\'image d\'un objet, d\'une créature ou d\'un phénomène visible tenant dans un cube de 4,50 mètres de côté. L\'image apparaît en un point situé à portée et persiste pendant toute la durée du sort. L\'image comporte seulement des composantes visuelles, elle ne s\'accompagne pas d\'odeurs, de sons, ni d\'autres effets sensoriels.</p><p> Vous pouvez utiliser votre action pour déplacer l\'image vers un autre point à portée. Pendant qu\'elle se déplace, vous pouvez modifier son apparence pour donner l\'impression d\'un mouvement naturel. Par exemple, si vous créez l\'image d\'une créature et que vous la déplacez, vous pouvez modifier l\'image pour donner l\'impression que la créature est en train de marcher.</p><p> Les interactions physiques révèlent que l\'image n\'est qu\'une illusion, car les objets la traversent. Si une créature utilise son action pour examiner l\'image, elle comprend que c\'est une illusion à condition de réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde de votre sort. Si une créature perce l\'illusion à jour, elle voit à travers l\'image.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Immobilisation de monstre',
            'slug' => Str::slug('Immobilisation de monstre'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (un petit morceau de fer bien droit)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Choisissez une créature située à portée dans votre champ de vision. Elle doit réussir un jet de sauvegarde de Sagesse, sans quoi elle est paralysée pour toute la durée du sort. Ce sort est sans effet sur les morts-vivants. À la fin de chacun de ses tours, la cible a droit à un nouveau jet de sauvegarde de Sagesse. Si elle le réussit, le sort se termine.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, vous pouvez viser une créature de plus par niveau au-delà du 5e. Les créatures visées doivent se trouver à 9 mètres ou moins les unes des autres au moment où vous lancez le sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Immobilisation de personne',
            'slug' => Str::slug('Immobilisation de personne'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un petit morceau de fer bien droit)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Choisissez un humanoïde situé à portée et dans votre champ de vision. Il doit réussir un jet de sauvegarde de Sagesse, sans quoi il est paralysé pour toute la durée du sort. À la fin de chacun de ses tours, la cible a droit à un nouveau jet de sauvegarde de Sagesse. Si elle le réussit, le sort se termine.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez viser un humanoïde de plus par niveau au-delà du 2e. Les humanoïdes visés doivent se trouver à 9 mètres ou moins les uns des autres au moment où vous lancez le sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Imprécation / Fléau',
            'slug' => Str::slug('Imprécation / Fléau'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une goutte de sang)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Trois créatures de votre choix au maximum, toutes situées à portée et dans votre champ de vision, sont contraintes de faire un jet de sauvegarde de Charisme. Dès qu\'une cible qui a raté ce jet effectue un jet d\'attaque ou de sauvegarde alors que le sort n\'est pas terminé, elle doit lancer 1d4 et soustraire le nombre obtenu de son jet d\'attaque ou de sauvegarde.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez viser une créature de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Injonction',
            'slug' => Str::slug('Injonction'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => '1 round',
            'description' => '<p>Vous lancez un ordre d\'un mot à une créature située à portée dans votre champ de vision. Elle doit réussir un jet de sauvegarde de Sagesse, sans quoi elle exécute votre ordre à son prochain tour. Le sort reste sans effet si la cible est un mortvivant, si elle ne comprend pas votre langue ou si votre ordre la met directement en danger.</p><p> Voici quelques ordres typiques et leurs effets. Vous pouvez donner un ordre différent de ceux présentés là, mais dans ce cas, c\'est au MD de décider comment la victime se comporte. Le sort se termine si elle se trouve dans l\'incapacité d\'obéir à l\'ordre reçu.</p><p> <strong>Approche.</strong> La cible s\'approche de vous en empruntant l\'itinéraire le plus court et le plus direct. Elle termine son tour dès qu\'elle arrive dans un rayon de 1,50 mètre autour de vous.</p><p> <strong>Lâche.</strong> La cible lâche ce qu\'elle tient et son tour se termine.</p><p> <strong>Fuis.</strong> La cible passe son tour à s\'éloigner de vous par la méthode la plus rapide à sa disposition.</p><p> <strong>Rampe.</strong> La cible se laisse tomber à terre et termine son tour.</p><p> <strong>Stop.</strong> La cible ne bouge pas et n\'entreprend aucune action. Une créature en vol reste dans les airs, à condition qu\'elle soit en mesure de le faire. Si elle est obligée de se déplacer pour rester en vol, elle parcourt la distance minimum requise pour ce faire.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une créature de plus par niveau au-delà du 1er. Ces créatures doivent toutes se trouver à 9 mètres ou moins les unes des autres lorsque vous lancez le sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Insecte géant',
            'slug' => Str::slug('Insecte géant'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous transformez un maximum de dix mille-pattes, trois araignées, cinq guêpes ou un scorpion situés à portée, en version géante de leur forme naturelle pendant toute la durée du sort. Un mille-patte devient donc un mille-patte géant, une araignée une araignée géante, une guêpe une guêpe géante et un scorpion un scorpion géant.</p><p> Chaque créature obéit à vos ordres verbaux et, lors d\'un combat, agit à chaque round à votre tour. C\'est le MD qui dispose des statistiques de ces créatures et gère leurs actions et leurs déplacements.</p><p> Une créature reste sous sa forme géante pendant toute la durée du sort, jusqu\'à ce qu\'elle tombe à 0 point de vie ou jusqu\'à ce que vous utilisiez une action pour révoquer l\'effet du sort sur elle.</p><p> Le MD peut vous autoriser à choisir une cible différente. Par exemple, si vous transformez une abeille, sa version géante peut disposer des mêmes statistiques qu\'une guêpe géante.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Interdiction',
            'slug' => Str::slug('Interdiction'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '10 minutes',
            'range' => 'contact',
            'component' => 'V, S, M (un peu d\'eau bénite, un encens rare et un rubis en poudre d\'une valeur minimale de 1 000 po)',
            'duration' => '1 jour',
            'description' => '<p>Vous créez un sceau empêchant les déplacements magiques dans une zone de 3 700 m² au sol et d\'une hauteur de 9 mètres. Pendant toute la durée du sort, les créatures ne peuvent pas se téléporter dans la zone ni y entrer via un portail comme celui issu du sort du même nom. Le sort protège la zone contre tous les modes de déplacement planaire et empêche donc les créatures d\'y entrer en passant par le plan astral, le plan éthéré, la Féerie sauvage, l\'Obscur ou en utilisant un sort de changement de plan.</p><p> De plus, le sort blesse les créatures des types choisis lors de son incantation. Choisissez un ou plusieurs de ces types : célestes, élémentaires, fées, fiélons, morts-vivants. Quand une créature d\'un type choisi pénètre dans la zone pour la première fois de son tour ou y commence son tour, elle subit 5d10 dégâts radiants ou nécrotiques (à vous de choisir quand vous lancez le sort).</p><p> Vous pouvez décider d\'un mot de passe lors de l\'incantation du sort. Si une créature le prononce en entrant dans la zone, elle ne subit pas de dégâts.</p><p> La zone d\'effet de ce sort ne peut pas se superposer à celle d\'un autre sort d\'interdiction. Si vous lancez interdiction tous les jours pendant 30 jours au même endroit, le sort persiste jusqu\'à dissipation et les composantes matérielles sont consommées lors de la dernière incantation.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Inversion de la gravité',
            'slug' => Str::slug('Inversion de la gravité'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '30 mètres',
            'component' => 'V, S, M (de la magnétite et de la limaille de fer)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Ce sort inverse la gravité dans un cylindre de 15 mètres de rayon et 30 mètres de haut centré sur un point à portée. Toutes les créatures et tous les objets qui ne sont pas ancrés au sol, d\'une manière ou d\'une autre, tombent vers le haut jusqu\'à atteindre le sommet de la zone affectée par le sort. Une créature peut faire un jet de sauvegarde de Dextérité pour s\'accrocher à un objet fixe situé à sa portée, afin d\'éviter la chute.</p><p> Si un objet solide (comme un plafond) se trouve sur la trajectoire de la chute, les créatures et les objets le percutent comme lors d\'une chute ordinaire vers le bas. Si un objet ou une créature atteint le sommet de la zone affectée sans heurter quoi que ce soit, il reste là, à osciller légèrement, pendant toute la durée du sort.</p><p> Une fois la durée du sort écoulée, les objets et les créatures affectés retombent à terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Invisibilité',
            'slug' => Str::slug('Invisibilité'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un cil enrobé de gomme arabique)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>La créature que vous touchez devient invisible jusqu\'à la fin du sort. Tout ce qu\'elle porte et transporte reste invisible tant qu\'elle le garde sur elle. Le sort se termine pour la cible qui attaque ou lance un sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez viser une créature de plus par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Invisibilité suprême',
            'slug' => Str::slug('Invisibilité suprême'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous devenez invisible jusqu\'à ce que le sort se termine, ou vous pouvez accorder cet effet à une créature consentante que vous touchez. Tout ce que porte la cible devient invisible tant que les objets restent sur sa personne.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation d\'animaux',
            'slug' => Str::slug('invocation d\'animaux'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez des esprits féeriques qui prennent la forme d\'animaux et apparaissent dans des cases inoccupées situées à portée et dans votre champ de vision. Choisissez l\'une des options suivantes pour déterminer quelles créatures apparaissent.<ul><li>Une bête d\'une dangerosité de 2 ou moins.</li> <li>Deux bêtes d\'une dangerosité de 1 ou moins.</li> <li>Quatre bêtes d\'une dangerosité de 1/2 ou moins.</li> <li>Huit bêtes d\'une dangerosité de 1/4 ou moins.</li></ul></p><p> Chacune de ces bêtes est aussi considérée comme une fée et disparaît dès qu\'elle tombe à 0 point de vie ou quand le sort se termine.</p><p> Les créatures invoquées se montrent amicales envers vous et vos compagnons. Lancez l\'initiative pour les créatures invoquées en tant que groupe qui dispose de ses propres tours de jeu. Les animaux obéissent aux ordres verbaux que vous leur donnez (sans que cela vous demande d\'utiliser une action). En l\'absence d\'ordre, ils se défendent contre les créatures hostiles, mais n\'entreprennent pas d\'autre action.</p><p> C\'est le MD qui dispose des statistiques des créatures.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant certains emplacements de niveau supérieur, vous choisissez l\'une des options d\'invocation décrites précédemment et faites apparaître plus de créatures : deux fois plus pour un emplacement de niveau 5, trois fois plus pour un emplacement de niveau 7 et quatre fois plus pour un emplacement de niveau 9.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation de céleste',
            'slug' => Str::slug('invocation de céleste'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez un céleste doté d\'un indice de dangerosité de 4 ou moins. Il apparaît dans une case inoccupée située à portée dans votre champ de vision. Le céleste disparaît dès qu\'il tombe à 0 point de vie ou quand le sort se termine.</p><p> Le céleste se montre amical envers vous et vos compagnons. Lancez l\'initiative pour lui, sachant qu\'il dispose de ses propres tours de jeu. Il obéit aux ordres verbaux que vous lui donnez (sans que cela vous demande d\'utiliser une action), tant qu\'ils ne vont pas à l\'encontre de son alignement. En l\'absence d\'ordre, il se défend contre les créatures hostiles, mais n\'entreprend pas d\'autre action.</p><p> C\'est le MD qui dispose des statistiques du céleste.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 9 ou plus, vous invoquez un céleste doté d\'un indice de dangerosité de 5 ou moins.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation d\'élémentaire',
            'slug' => Str::slug('invocation d\'élémentaire'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '27 mètres',
            'component' => 'V, S, M (encens à brûler pour l\'air, argile molle pour la terre, soufre et phosphore pour le feu, ou sable et eau pour l\'eau)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez un serviteur élémentaire. Choisissez une zone d\'air, de terre, de feu ou d\'eau occupant un cube de 3 mètres d\'arête situé à portée. Un élémentaire doté d\'un indice de dangerosité de 5 ou moins et adapté à la zone que vous avez choisie apparaît dans un espace inoccupé situé dans un rayon de 3 mètres autour d\'elle. Par exemple, un élémentaire du feu jaillit d\'un brasier tandis qu\'un élémentaire de la terre sort du sol. L\'élémentaire disparaît dès qu\'il tombe à 0 point de vie ou quand le sort se termine.</p><p> L\'élémentaire se montre amical envers vous et vos compagnons. Lancez l\'initiative pour lui, sachant qu\'il dispose de ses propres tours de jeu. Il obéit aux ordres verbaux que vous lui donnez (sans que cela vous demande d\'utiliser une action). En l\'absence d\'ordre, il se défend contre les créatures hostiles, mais n\'entreprend pas d\'autre action.</p><p> Si votre concentration se brise, l\'élémentaire ne disparaît pas, mais il échappe à votre contrôle et devient hostile envers vous et vos compagnons. Il peut aller jusqu\'à vous attaquer. Vous ne pouvez pas renvoyer un élémentaire qui est hors de contrôle, il disparaît simplement 1 heure après que vous l\'avez invoqué.</p><p> C\'est le MD qui dispose des statistiques de l\'élémentaire.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, l\'indice de dangerosité de l\'élémentaire augmente de 1 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation d\'élémentaire mineurs',
            'slug' => Str::slug('invocation d\'élémentaire mineurs'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez des élémentaires qui apparaissent dans des cases inoccupées situées à portée et dans votre champ de vision. Choisissez l\'une des options suivantes pour déterminer quelles créatures apparaissent.<ul><li>Un élémentaire d\'une dangerosité de 2 ou moins.</li> <li>Deux élémentaires d\'une dangerosité de 1 ou moins.</li> <li>Quatre élémentaires d\'une dangerosité de 1/2 ou moins.</li> <li>Huit élémentaires d\'une dangerosité de 1/4 ou moins.</li></ul></p><p> Un élémentaire ainsi invoqué disparaît dès qu\'il tombe à 0 point de vie ou quand le sort se termine.</p><p> Les créatures invoquées se montrent amicales envers vous et vos compagnons. Lancez l\'initiative pour les créatures invoquées en tant que groupe qui dispose de ses propres tours de jeu. Les élémentaires obéissent aux ordres verbaux que vous leur donnez (sans que cela vous demande d\'utiliser une action). En l\'absence d\'ordre, ils se défendent contre les créatures hostiles, mais n\'entreprennent pas d\'autre action.</p><p> C\'est le MD qui dispose des statistiques des créatures.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant certains emplacements de niveau supérieur, vous choisissez l\'une des options d\'invocation décrites précédemment et faites apparaître plus de créatures : deux fois plus pour un emplacement de niveau 6 et trois fois plus pour un emplacement de niveau 8.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation d\'êtres sylvestres',
            'slug' => Str::slug('invocation d\'êtres sylvestres'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (une baie de houx par créature invoquée)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez des créatures féeriques qui apparaissent dans des cases inoccupées situées à portée et dans votre champ de vision. Choisissez l\'une des options suivantes pour déterminer quelles créatures apparaissent.<ul><li>Une créature féerique d\'une dangerosité de 2 ou moins.</li> <li>Deux créatures féeriques d\'une dangerosité de 1 ou moins.</li> <li>Quatre créatures féeriques d\'une dangerosité de 1/2 ou moins.</li> <li>Huit créatures féeriques d\'une dangerosité de 1/4 ou moins.</li></ul></p><p> Une créature invoquée disparaît dès qu\'elle tombe à 0 point de vie ou quand le sort se termine.</p><p> Les créatures invoquées se montrent amicales envers vous et vos compagnons. Lancez l\'initiative pour les créatures invoquées en tant que groupe qui dispose de ses propres tours de jeu. Les créatures féeriques obéissent aux ordres verbaux que vous leur donnez (sans que cela vous demande d\'utiliser une action). En l\'absence d\'ordre, elles se défendent contre les créatures hostiles, mais n\'entreprennent pas d\'autre action.</p><p> C\'est le MD qui dispose des statistiques des créatures.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant certains emplacements de niveau supérieur, vous choisissez l\'une des options d\'invocation décrites précédemment et faites apparaître plus de créatures : deux fois plus pour un emplacement de niveau 6 et trois fois plus pour un emplacement de niveau 8.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation de fée',
            'slug' => Str::slug('invocation de fée'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez une créature féerique dotée d\'un indice de dangerosité de 6 ou moins, ou un esprit féerique qui revêt l\'apparence d\'une bête dotée d\'un indice de dangerosité de 6 ou moins. La créature apparaît dans une case inoccupée située à portée dans votre champ de vision. Elle disparaît dès qu\'elle tombe à 0 point de vie ou quand le sort se termine.</p><p> La créature féerique se montre amicale envers vous et vos compagnons. Lancez l\'initiative pour elle, sachant qu\'elle dispose de ses propres tours de jeu. Elle obéit aux ordres verbaux que vous lui donnez (sans que cela vous demande d\'utiliser une action), tant qu\'ils ne vont pas à l\'encontre de son alignement. En l\'absence d\'ordre, elle se défend contre les créatures hostiles, mais n\'entreprend pas d\'autre action.</p><p> Si votre concentration se brise, la créature féerique ne disparaît pas, mais elle échappe à votre contrôle et devient hostile envers vous et vos compagnons. Elle peut aller jusqu\'à vous attaquer. Vous ne pouvez pas renvoyer une créature féerique qui est hors de contrôle, elle disparaît simplement 1 heure après que vous l\'avez invoquée.</p><p> C\'est le MD qui dispose des statistiques de la créature féerique.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, l\'indice de dangerosité de l\'élémentaire augmente de 1 par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'invocation d\'une volée de projectiles',
            'slug' => Str::slug('invocation d\'une volée de projectiles'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '15 mètres',
            'component' => 'V, S, M (une munition ou une arme de jet)',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez une arme de jet non magique ou un projectile non magique, et choisissez un point à portée. Des centaines de copies du projectile s\'abattent sur la zone avant de disparaître. Chaque créature située dans un cylindre de 12 mètres de rayon, 6 mètres de hauteur et centré sur le point choisi doit réussir un jet de sauvegarde de Dextérité. Celles qui échouent subissent 8d8 dégâts, les autres la moitié seulement. Le type de dégâts est identique à celui du projectile utilisé comme composante.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Jeter une malédiction / Malédiction',
            'slug' => Str::slug('Jeter une malédiction / Malédiction'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous touchez une créature qui doit réussir un jet de sauvegarde de Sagesse, sans quoi elle est maudite pour toute la durée du sort. À vous de choisir la nature de cette malédiction parmi les options suivantes au moment de l\'incantation.<ul><li>Choisissez une caractéristique. Tant que la cible est maudite, elle est désavantagée lors des tests de caractéristique et des jets de sauvegarde basés sur cette caractéristique.</li> <li>Tant que la cible est maudite, elle est désavantagée lors de ses jets d\'attaque contre vous.</li> <li>Tant que la cible est maudite, elle doit faire un jet de sauvegarde de Sagesse au début de chacun de ses tours. Si elle le rate, elle gaspille son action du tour et ne fait rien.</li> <li>Tant que la cible est maudite, les sorts et les attaques émanant de vous lui infligent 1d8 dégâts nécrotiques supplémentaires.</li></ul></p><p> Le sort lever une malédiction met un terme à cet effet. Si le MD est d\'accord, vous pouvez choisir un autre effet de malédiction, mais il ne doit pas être plus puissant que ceux proposés ici. C\'est au MD de décider s\'il accepte ou non le nouvel effet de malédiction.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, le sort fait effet tant que vous vous concentrez, sans dépasser un maximum de 10 minutes. Si vous utilisez un emplacement de niveau 5 ou plus, la durée est de 8 heures, tandis qu\'elle passe à 24 heures si vous utilisez un emplacement de sort de niveau 7 ou plus. Si vous utilisez un emplacement de niveau 9, le sort persiste jusqu\'à ce qu\'il soit dissipé. L\'utilisation d\'un emplacement de niveau 5 ou plus vous dispense de vous concentrer.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lame de feu',
            'slug' => Str::slug('Lame de feu'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V, S, M (feuille de sumac)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous invoquez une lame enflammée dans votre main libre. Au niveau de la taille et de la forme, elle ressemble à un cimeterre et persiste pendant toute la durée du sort. Si vous la lâchez, elle disparaît, mais vous pouvez l\'invoquer de nouveau par une action bonus.</p><p> Vous pouvez utiliser votre action pour faire une attaque de sort au corps à corps avec la lame enflammée. Si vous touchez la cible, cette dernière subit 3d6 dégâts de feu.</p><p> La lame enflammée émet une vive lumière dans un rayon de 3 mètres et une faible lumière dans un rayon de 3 mètres de plus.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d6 tous les deux niveaux au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Léger comme une plume / Feuille morte',
            'slug' => Str::slug('Léger comme une plume / Feuille morte'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 réaction, que vous effectuez quand vous-même ou une créature située dans un rayon de 18 mètres tombe soudain',
            'range' => '18 mètres',
            'component' => 'V, M (une petite plume ou un peu de duvet)',
            'duration' => '1 minute',
            'description' => '<p>Choisissez jusqu\'à cinq créatures en train de tomber à portée. La vitesse de chute de chacune passe à 18 mètres par round jusqu\'à la fin du sort. Si une créature atterrit avant la fin du sort, elle ne subit pas de dégâts de chute et se reçoit sur ses pieds, le sort se terminant alors pour elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lenteur',
            'slug' => Str::slug('Lenteur'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (une goutte de mélasse)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous modifiez le cours du temps autour d\'un maximum de six créatures de votre choix situées dans un cube de 12 mètres d\'arête situé à portée. Chaque cible doit réussir un jet de sauvegarde de Sagesse, sans quoi le sort l\'affecte pendant toute sa durée.</p><p> Une cible affectée voit sa vitesse réduite de moitié. De plus, elle subit un malus de -2 à la CA et aux jets de sauvegarde de Dextérité et ne peut plus utiliser de réaction. À son tour, elle peut utiliser une action ou une action bonus, mais pas les deux. Elle ne peut pas faire plus d\'une attaque au corps à corps ou à distance à son tour, quels que soient ses pouvoirs et ses objets magiques.</p><p> Si la créature affectée tente de lancer un sort doté d\'un temps d\'incantation de 1 action, lancez un d20. Sur un 11 ou plus, le sort agit seulement au prochain tour de la créature qui doit utiliser son action de ce tour pour terminer l\'incantation. Si elle est en incapable, le sort est gâché.</p><p> Une créature affectée par ce sort fait un nouveau jet de sauvegarde de Sagesse à la fin de son tour. Si elle le réussit, le sort se termine pour elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lever une malédiction / Délivrance des malédictions',
            'slug' => Str::slug('Lever une malédiction / Délivrance des malédictions'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>À votre contact, toutes les malédictions qui affectent une créature ou un objet disparaissent. Si l\'objet est un objet magique maudit, la malédiction persiste, mais le sort rompt l\'harmonisation entre l\'objet et son détenteur, ce qui permet à ce dernier de l\'ôter ou de s\'en débarrasser.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lévitation',
            'slug' => Str::slug('Lévitation'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (soit une petite boucle de cuir, soit un bout de fil de métal doré formant la silhouette d\'une cuillère au long manche)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Une créature ou un objet situé à portée et dans votre champ de vision s\'élève à la verticale à une hauteur de 6 mètres et reste suspendu là pendant toute la durée du sort. Ce dernier peut soulever une cible d\'au maximum 250 kilos. Si la créature visée n\'est pas consentante, elle doit réussir un jet de sauvegarde de Constitution pour que le sort ne l\'affecte pas.</p><p> La cible peut se déplacer uniquement en se propulsant ou se tractant en prenant appui sur un objet fixe ou une surface à proximité (comme un mur ou un plafond). Elle se meut alors comme si elle était en pleine escalade. Quand vient votre tour, vous pouvez modifier l\'altitude de la cible d\'un maximum de 6 mètres dans la direction de votre choix. Si vous êtes la cible, vous pouvez monter ou descendre lors de votre déplacement. En dehors de cela, vous devez dépenser une action pour déplacer la cible qui doit rester dans le rayon de portée du sort. Si la cible est encore en l\'air quand le sort se termine, elle flotte délicatement jusqu\'au sol.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Liane avide',
            'slug' => Str::slug('Liane avide'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous invoquez une liane qui sort de terre dans un emplacement inoccupé de votre choix situé à portée dans votre champ de vision. Lorsque vous lancez ce sort, vous pouvez indiquer à la liane de s\'enrouler autour d\'une créature située dans un rayon de 9 mètres autour d\'elle et dans votre champ de vision. La créature doit réussir un jet de sauvegarde de Dextérité, sans quoi elle est traînée sur 6 mètres en direction du pied de la liane.</p><p> Tant que la durée du sort ne s\'est pas écoulée, vous pouvez ordonner à la liane de continuer de s\'en prendre à la même créature ou de changer de cible, et cela par une action bonus à chacun de vos tours.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Liberté de mouvement',
            'slug' => Str::slug('Liberté de mouvement'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un lien de cuir enroulé autour d\'un bras ou d\'un appendice similaire)',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez une créature consentante. Pendant toute la durée du sort, ses déplacements ne sont pas affectés par les terrains difficiles, tandis que les sorts et autres effets magiques ne peuvent ni la paralyser, ni l\'entraver, ni réduire sa vitesse.</p><p> La cible peut également dépenser 1,50 mètre de déplacement pour échapper automatiquement à des liens non magiques, comme des menottes ou la prise d\'une créature qui l\'empoigne. Enfin, sous l\'eau, elle ne subit pas de malus aux déplacements ni aux attaques.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lien de protection',
            'slug' => Str::slug('Lien de protection'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une paire d\'anneaux de platine valant chacun au moins 50 po, que la cible et vous devez porter pendant toute la durée)',
            'duration' => '1 heure',
            'description' => '<p>Ce sort protège une créature consentante et crée un lien mystique entre vous et votre cible jusqu\'à la fin du sort. Tant que la cible se trouve dans un rayon de 18 mètres autour de vous, elle gagne un bonus de +1 à la CA et aux jets de sauvegarde et devient résistante à tous les types de dégâts. En revanche, chaque fois qu\'elle subit des dégâts, vous subissez exactement les mêmes.</p><p> Le sort se termine si vous tombez à 0 point de vie ou si votre cible et vous êtes séparés de plus de 18 mètres. Il se termine aussi si vous le lancez de nouveau sur l\'une des deux créatures liées. Vous pouvez également révoquer le sort par une action.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lien télépathique de Rary',
            'slug' => Str::slug('Lien télépathique de Rary'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (bouts de coquille d\'oeuf issus de deux espèces de créatures différentes)',
            'duration' => '1 heure',
            'description' => '<p>Vous forgez un lien télépathique entre maximum huit créatures consentantes situées à portée. Elles sont alors psychiquement liées les unes aux autres pendant la durée du sort. Ce sort n\'affecte pas les créatures dotées d\'une Intelligence de 2 ou moins.</p><p> Jusqu\'à la fin du sort, les cibles peuvent communiquer entre elles par télépathie via le lien créé, qu\'elles partagent un même langage ou non. Cette communication fonctionne quelle que soit la distance séparant les créatures, mais ne s\'étend pas aux autres plans d\'existence.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Localisation d\'animaux ou de plantes',
            'slug' => Str::slug('Localisation d\'animaux ou de plantes'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (des poils de chien de chasse)',
            'duration' => 'instantanée',
            'description' => '<p>Décrivez ou nommez un type spécifique de bête ou de plante. Vous vous concentrez sur la voix de la nature qui vous entoure et découvrez dans quelle direction et à quelle distance se trouve le spécimen le plus proche dans un rayon de 7,5 kilomètres, s\'il y en a.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Localisation de créature',
            'slug' => Str::slug('Localisation de créature'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (des poils de chien de chasse)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Décrivez ou nommez une créature qui vous est familière. Vous sentez dans quelle direction elle se trouve, à condition qu\'elle soit dans un rayon de 300 mètres. Si elle se déplace, vous savez dans quelle direction.</p><p> Le sort permet de localiser une créature spécifique de votre connaissance ou la créature la plus proche du même type (comme un humain ou une licorne), mais pour cela, vous devez avoir déjà vu une telle créature de près, c\'est-à-dire vous être trouvé à 9 mètres d\'elle ou moins au moins une fois dans votre vie. Si la créature que vous décrivez ou nommez se trouve actuellement sous une forme différente, sous l\'effet d\'un sort de métamorphose par exemple, ce sort est incapable de la localiser.</p><p> Le sort ne parvient pas à localiser la créature si le chemin qui vous relie directement est coupé par une étendue d\'eau courante d\'au moins 3 mètres de large.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Localisation d\'objet',
            'slug' => Str::slug('Localisation d\'objet'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une branche fourchue)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Décrivez ou nommez un objet qui vous est familier. Vous sentez dans quelle direction il se trouve, à condition qu\'il soit dans un rayon de 300 mètres. S\'il se déplace, vous savez dans quelle direction.</p><p> Le sort permet de localiser un objet spécifique de votre connaissance à condition que vous l\'ayez vu de près, c\'est-à-dire vous être trouvé à 9 mètres ou moins au moins de lui une fois dans votre vie. Sinon, le sort peut localiser l\'objet d\'un type donné le plus proche, comme un type d\'appareil, de bijou, de meuble, d\'outil ou d\'arme.</p><p> Le sort ne parvient pas à localiser l\'objet si une couche de plomb, aussi mince soit-eJle, bloque une trajectoire directe entre vous et l\'objet.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lueur d\'espoir',
            'slug' => Str::slug('Lueur d\'espoir'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Ce sort offre espoir et robustesse. Choisissez autant de créatures consentantes à portée que vous le désirez. Pendant toute la durée du sort, elles sont avantagées lors des jets de sauvegarde de Sagesse et des jets de sauvegarde contre la mort. De plus, elles récupèrent le maximum de points de vie possible dès qu\'elles reçoivent des soins.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lueurs féeriques',
            'slug' => Str::slug('Lueurs féeriques'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Tous les objets contenus dans un cube de 6 mètres d\'arête situé à portée sont auréolés d\'une lumière bleue, verte ou violette (à vous de choisir). Les créatures qui se trouvent dans la zone au moment de l\'incantation sont aussi entourées de lumière, à moins de réussir un jet de sauvegarde de Dextérité. Pendant toute la durée du sort, les créatures et les objets affectés émettent une faible luminosité dans un rayon de 3 mètres.</p><p> Un assaillant a l\'avantage lors du jet d\'attaque contre une cible affectée s\'il peut la voir. Les créatures et les objets affectés ne peuvent pas bénéficier des effets de l\'invisibilité.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lumière',
            'slug' => Str::slug('Lumière'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, M (une luciole ou de la mousse phosphorescente)',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez un objet qui ne fait pas plus de 3 mètres dans chaque dimension. Jusqu\'à la fin du sort, il émet une vive lumière dans un rayon de 6 mètres et une faible lumière dans un rayon de 6 mètres de plus. Vous pouvez colorer cette lumière comme il vous plaît. Il suffit de recouvrir complètement l\'objet avec quelque chose d\'opaque pour bloquer la lumière. Le sort se termine si vous le lancez de nouveau ou si vous le révoquez en dépensant une action.</p><p> Si vous visez un objet porté ou transporté par une créature hostile, cette dernière doit réussir un jet de sauvegarde de Dextérité pour éviter les effets du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lumière du jour',
            'slug' => Str::slug('Lumière du jour'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => '<p>Une sphère de lumière de 18 mètres de rayon s\'étend depuis un point de votre choix situé à portée. Elle émet une lumière vive dans ce rayon et une lumière faible dans un rayon de 18 mètres de plus.</p><p> Si le point que vous avez choisi est un objet en votre possession ou un objet qui n\'est ni porté ni transporté par autrui, la lumière irradie de l\'objet et se déplace avec lui. Il suffit de recouvrir complètement l\'objet affecté avec un objet opaque, comme un bol ou un heaume, pour bloquer la lumière.</p><p> Si une partie de la zone affectée par ce sort chevauche une zone de ténèbres issue d\'un sort de niveau 3 ou moins, elle dissipe le sort de ténèbres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Lumières dansantes',
            'slug' => Str::slug('Lumières dansantes'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un bout de phosphore ou d\'orme, ou un ver luisant)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous créez jusqu\'à quatre lumières de la taille d\'une torche qui apparaissent à portée. Elles ressemblent à des lanternes, des torches ou des orbes luisantes qui flottent dans les airs pendant toute la durée du sort. Vous pouvez aussi les combiner pour obtenir une forme brillante vaguement humanoïde de taille Moyenne. Quelle que soit l\'option choisie, chaque source lumineuse offre une faible lumière dans un rayon de 3 mètres.</p><p> À votre tour et par une action bonus, vous pouvez déplacer les lumières sur un maximum de 18 mètres pour les installer ailleurs mais toujours à portée. Une lumière créée via ce sort doit toujours se trouver à 6 mètres ou moins d\'une autre émanant du même sort. Elle s\'éteint si elle passe hors de portée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Main de Bigby',
            'slug' => Str::slug('Main de Bigby'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (une coquille d\'oeuf et un gant en peau de serpent)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous créez une main de force luisante et translucide, de taille Grande, dans un espace inoccupé situé à portée et dans votre champ de vision. La main existe pendant toute la durée du sort, se déplace sur votre ordre et imite les mouvements de votre propre main.</p><p> La main est un objet doté d\'une CA 20 et d\'un nombre de points de vie égal à votre maximum de points de vie. Si elle tombe à 0 point de vie, le sort se dissipe. La main possède une Force de 26 (+8) et une Dextérité de 10 (+0). Elle n\'occupe pas la case où elle se trouve.</p><p> Lorsque vous lancez le sort, puis via une action bonus lors de vos tours ultérieurs, vous pouvez déplacer la main sur une distance maximale de 18 mètres et lui faire appliquer l\'un des effets suivants.</p><p> <strong>Poing serré.</strong> La main frappe une créature ou un objet situés dans un rayon de 1,50 mètre d\'elle. Faites une attaque de sort de contact pour la main en utilisant vos propres statistiques. Si elle touche, la cible subit 4d8 dégâts de force.</p><p> <strong>Main percutante.</strong> La main tente de repousser une créature située dans un rayon de 1,50 mètre dans la direction de votre choix. Faites un test avec la Force de la main opposé au test de Force (Athlétisme) de la cible. Si cette dernière est de taille Moyenne ou inférieure, vous êtes avantagé lors du test. Si vous l\'emportez, la main repousse la cible sur 1,50 mètre plus un nombre de mètres égal à une fois et demie votre modificateur de caractéristique d\'incantation. La main se déplace avec la cible de manière à rester dans un rayon de 1,50 mètre autour d\'elle.</p><p> <strong>Main agrippeuse.</strong> La main tente d\'empoigner une créature de taille Très Grande ou inférieure qui se trouve dans un rayon de 1,50 mètre. Utilisez la valeur de Force de la main pour résoudre le test d\'empoignade. Si la cible est de taille Moyenne ou inférieure, vous êtes avantagé lors du test. Tant que la main agrippe la cible, vous pouvez utiliser une action bonus pour que la main la broie. Dans ce cas, la cible subit un montant de dégâts contondants égal à 2d6 + votre modificateur de caractéristique d\'incantation.</p><p> <strong>Main interposée.</strong> La main s\'interpose entre vous et une créature de votre choix jusqu\'à ce que vous lui donniez un autre ordre. Elle se déplace de manière à toujours rester entre vous et la cible désignée et vous offre un abri partiel contre elle. La cible ne peut pas franchir la zone occupée par la main si sa valeur de Force est inférieure ou égale à celle de la main. Si elle est supérieure, elle peut se déplacer dans votre direction en traversant la zone de la main, qui est considérée comme un terrain difficile pour la cible.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts de l\'option poing serré augmentent de 2d8 et ceux de la main agrippeuse de 2d6 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Main du mage',
            'slug' => Str::slug('Main du mage'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => '<p>Une main spectrale flottante apparaît à portée, en un point de votre choix. Elle persiste pendant toute la durée du sort ou jusqu\'à ce que vous révoquiez le sort par une action. La main disparaît si elle s\'éloigne à plus de 9 mètres de vous ou si vous relancez le sort.</p><p> Vous pouvez utiliser votre action pour contrôler la main et vous en servir pour manipuler un objet, ouvrir une porte ou un récipient qui ne sont pas verrouillés, placer un objet dans un récipient ouvert ou l\'en sortir ou bien verser le contenu d\'une flasque. Vous pouvez déplacer la main d\'un maximum de 9 mètres chaque fois que vous l\'utilisez.</p><p> La main ne peut pas attaquer, activer un objet magique, ni transporter plus de 5 kilos.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mains brûlantes',
            'slug' => Str::slug('Mains brûlantes'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact (cône de 4,50 mètres)',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Alors que vous vous tenez les doigts écartés en éventail et les pouces l\'un contre l\'autre, une mince nappe de feu s\'étend depuis vos mains tendues. Chaque créature située dans un cône de 4,50 mètres doit faire un jet de sauvegarde de Dextérité. Celles qui échouent reçoivent 3d6 dégâts de feu, les autres la moitié seulement.</p><p> Le feu embrase tous les objets inflammables de la zone, à moins que quelqu\'un ne les porte ou ne les transporte.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Maléfice',
            'slug' => Str::slug('Maléfice'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '27 mètres',
            'component' => 'V, S, M (oeil de triton pétrifié)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous lancez une malédiction sur une créature située à portée dans votre champ de vision. Tant que la durée du sort n\'a pas expiré, vous infligez 1d6 dégâts nécrotiques supplémentaires à la cible chaque fois que vous la touchez avec une attaque. Lorsque vous lancez le sort, choisissez une caractéristique. La cible est désavantagée lors des tests concernant cette caractéristique.</p><p> Si la cible tombe à 0 point de vie avant que le sort n\'expire, vous pouvez utiliser votre action bonus lors d\'un tour ultérieur pour affecter une nouvelle créature.</p><p> Si la cible bénéficie du sort lever une malédiction, maléfice se termine immédiatement.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou 4, vous pouvez vous concentrer sur le sort pendant 8 heures. Si vous utilisez un emplacement de niveau 5 ou plus, vous pouvez maintenir votre concentration sur le sort jusqu\'à 24 heures.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Manoir somptueux de Mordenkainen',
            'slug' => Str::slug('Manoir somptueux de Mordenkainen'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '90 mètres',
            'component' => 'V, S, M (un portrait miniature gravé dans de l\'ivoire, un bout de marbre poli et une minuscule cuillère en argent, chaque objet devant valoir au minimum5 po)',
            'duration' => '24 heures',
            'description' => '<p>Vous invoquez une demeure extraplanaire à portée qui persiste pendant toute la durée du sort. À vous de choisir où se situe sa seule entrée. Cette dernière scintille légèrement et mesure 1,50 mètre de large pour 3 mètres de haut. Vous et toutes les créatures que vous désignez lors de l\'incantation êtes libres d\'entrer et de sortir de cette demeure extraplanaire, tant que son portail reste ouvert. Vous pouvez l\'ouvrir ou le fermer si vous vous tenez à 9 mètres ou moins de lui. Quand le portail est fermé, il est invisible.</p><p> Un splendide vestibule s\'ouvre derrière le portail et dessert de nombreuses pièces. Les lieux sont propres et l\'atmosphère tiède et agréable.</p><p> Vous pouvez disposer le plan des lieux comme bon vous semble, mais la surface totale ne peut pas excéder 50 cubes, chaque cube mesurant 3 mètres d\'arête. L\'endroit est meublé et décoré selon vos souhaits et contient assez de nourriture pour un banquet de neuf plats destiné à une centaine de convives au maximum. Une équipe de cent serviteurs presque translucides s\'occupent de tous ceux qui pénètrent dans la demeure. À vous de décider de l\'apparence visuelle de ces domestiques et de leur tenue. Ils obéissent aveuglément à tous vos ordres. Chacun est en mesure d\'accomplir n\'importe quelle tâche à la portée d\'un serviteur humain ordinaire, mais les domestiques ne peuvent ni attaquer ni effectuer une action visant à nuire directement à une autre créature. Ils peuvent donc aller chercher des affaires, faire le ménage, raccommoder et plier les habits, allumer la cheminée, servir les plats et la boisson, etc. Ils peuvent se rendre partout dans la demeure, mais sont incapables de la quitter. Les meubles et autres objets créés à l\'aide de ce sort se dissipent en volutes de fumée si quelqu\'un les sort de la demeure. Quand le sort se termine, toutes les créatures qui se trouvent dans l\'espace extradimensionnel sont expulsées dans les emplacements libres les plus proches de l\'entrée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Marche sur l\'onde',
            'slug' => Str::slug('Marche sur l\'onde'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un bout de liège)',
            'duration' => '1 heure',
            'description' => '<p>Ce sort permet de se déplacer sur n\'importe quelle surface liquide (comme de l\'eau, de l\'acide, de la boue, de la neige, des sables mouvants ou de la lave) comme s\'il s\'agissait d\'un sol ferme et inoffensif (ceci dit, les créatures qui marchent sur la lave subissent tout de même les dégâts liés à la chaleur dégagée). Vous pouvez accorder cette capacité pendant toute la durée du sort à un maximum de dix créatures consentantes situées à portée et dans votre champ de vision.</p><p> Si vous prenez pour cible une créature immergée dans un liquide, le sort la ramène à la surface du liquide à une vitesse de 18 mètres par round.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Marque du chasseur',
            'slug' => Str::slug('Marque du chasseur'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '27 mètres',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous choisissez une créature située à portée dans votre champ de vision et lui apposez une marque mystique la désignant comme votre proie. Jusqu\'à la fin du sort, vous lui infligez 1d6 dégâts supplémentaires chaque fois que vous la touchez avec une attaque armée et vous êtes avantagé sur les éventuels tests de Sagesse (Perception) ou Sagesse (Survie) que vous faites pour la retrouver. Si la cible tombe à 0 point de vie avant que ce sort n\'arrive à expiration, vous pouvez utiliser une action bonus lors d\'un tour ultérieur pour marquer une nouvelle créature.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou 4, vous pouvez vous concentrer sur le sort pendant 8 heures. Si vous utilisez un emplacement de niveau 5 ou plus, vous pouvez maintenir votre concentration sur le sort jusqu\'à 24 heures.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mauvais oeil',
            'slug' => Str::slug('Mauvais oeil'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Pendant la durée du sort, vos yeux deviennent deux trous noirs regorgeant d\'un pouvoir terrifiant. Une créature de votre choix, située dans votre champ de vision et dans un rayon de 18 mètres doit réussir un jet de sauvegarde de Sagesse ou se voir affectée par l\'un des effets suivants, choisi par vos soins, pendant toute la durée du sort. À chacun de vos tours jusqu\'à ce que le sort se termine, vous pouvez utiliser votre action pour viser une autre créature, mais vous ne pouvez pas reprendre pour cible une créature ayant déjà réussi un jet de sauvegarde contre l\'incantation de mauvais oeil en cours.</p><p> <strong>Endormi.</strong> La cible tombe inconsciente. Elle se réveille si elle subit le moindre dégât ou si une tierce personne utilise une action pour la réveiller en la secouant.</p><p> <strong>Paniqué.</strong> Vous terrorisez la cible. À chacun de ses tours, la cible terrorisée doit utiliser l\'action se précipiter et s\'éloigner de vous via l\'itinéraire le plus rapide et le plus sûr, à moins qu\'elle n\'ait nulle part où aller. Cet effet se termine si la cible gagne un emplacement situé à au moins 18 mètres de vous et d\'où elle ne vous voit plus.</p><p> <strong>Écoeuré.</strong> La cible est désavantagée lors des jets d\'attaque et des tests de caractéristique. Elle a droit à un nouveau jet de sauvegarde de Sagesse à la fin de chacun de ses tours. L\'effet se termine si elle le réussit.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Message',
            'slug' => Str::slug('Message'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un petit bout de fil de cuivre)',
            'duration' => '1 round',
            'description' => '<p>Vous pointez du doigt une créature à portée et murmurez un message. La cible (et elle seule) l\'entend et peut répondre dans un murmure que vous êtes le seul à entendre.</p><p> Vous pouvez lancer ce sort au travers d\'un objet solide si vous connaissez bien la cible et savez qu\'elle se trouve de l\'autre côté de cet obstacle. Le sort est bloqué par un silence magique, 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince couche de plomb ou 90 centimètres de bois. Le sort n\'a pas besoin de voyager en ligne directe, il peut contourner les angles et franchir les ouvertures.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Messager Animal',
            'slug' => Str::slug('Messager Animal'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un peu de nourriture)',
            'duration' => '24 heures',
            'description' => '<p>Grâce à ce sort, vous chargez un animal de livrer un message pour vous. Choisissez une bête de taille Très Petite située à portée dans votre champ de vision, comme un écureuil, un geai ou une chauve-souris. Vous lui précisez l\'endroit où se rendre (où vous devez vous être déjà vous-même rendu auparavant) et donnez une description générale du destinataire, comme « un homme ou une femme vêtus de l\'uniforme de la garde de la ville » ou « un nain roux avec un chapeau pointu ». Vous prononcez ensuite votre message, de vingt-cinq mots au maximum. La bête chargée du message fait alors route vers la destination indiquée pendant toute la durée du sort. Elle parcourt dans les 75 kilomètres par 24 heures si elle vole ou dans les 35 kilomètres si elle en est incapable.</p><p> Quand elle arrive sur place, elle transmet votre message à la créature que vous avez décrite, imitant le son de votre voix. Le messager parle uniquement à une créature correspondant à la description que vous lui avez donnée. S\'il n\'atteint pas sa destination avant la fin du sort, le message est perdu et l\'animal retourne là où vous avez lancé le sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, la durée du sort augmente de 48 heures par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Métal brûlant / Chauffer le métal',
            'slug' => Str::slug('Métal brûlant / Chauffer le métal'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bout de fer et une flamme)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => '<p>Choisissez un objet manufacturé en métal, comme une arme métallique ou une armure métallique lourde ou intermédiaire. Il doit être situé à portée et dans votre champ de vision et se met alors à luire d\'un rouge incandescent. Une créature en contact physique avec l\'objet reçoit 2d8 dégâts de feu lorsque vous lancez le sort. Vous pouvez dépenser une action bonus à chacun de vos tours suivants jusqu\'à la fin du sort pour infliger de nouveau ce montant de dégâts.</p><p> Si une créature tient l\'objet qui lui inflige des dégâts ou le porte sur elle, elle doit réussir un jet de sauvegarde de Constitution, sans quoi elle le lâche, si elle peut. Si elle le conserve, elle est désavantagée lors des jets d\'attaque et des tests de caractéristique jusqu\'au début de votre prochain tour.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Métamorphose',
            'slug' => Str::slug('Métamorphose'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un cocon de chenille)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Ce sort change la forme d\'une créature située à portée dans votre champ de vision. Une créature non consentante doit faire un jet de sauvegarde de Sagesse pour éviter cet effet. Le sort n\'a aucun effet sur un métamorphe ou une créature à 0 point de vie.</p><p> La transformation persiste pendant toute la durée du sort ou jusqu\'à ce que la cible tombe à 0 point de vie ou meure. Vous pouvez donner comme nouvelle forme celle de n\'importe quelle bête dont l\'indice de dangerosité est égal ou inférieur à celui de la cible (ou à son niveau, si elle n\'a pas d\'indice de dangerosité). Les statistiques de jeu de la cible, y compris ses valeurs de caractéristique mentales, sont remplacées par celles de la bête choisie. Elle conserve en revanche son alignement et sa personnalité.</p><p> La cible possède les points de vie correspondant à sa nouvelle forme. Quand elle reprend sa forme normale, elle se retrouve avec le nombre de points de vie qui était le sien avant la transformation. Si elle reprend sa forme normale parce qu\'elle est tombée à 0 point de vie, les éventuels dégâts en excès sont déduits des points de vie de sa forme normale. Tant que les dégâts en excès ne réduisent pas les points de vie normaux de la créature à 0, elle n\'est pas inconsciente.</p><p> La nouvelle forme de la créature limite les actions qu\'elle peut entreprendre et elle ne peut ni parler, ni lancer de sorts, ni effectuer une action qui nécessite de parler ou de se servir de ses mains.</p><p> L\'équipement de la cible fusionne avec sa nouvelle forme, mais elle ne peut pas activer, utiliser, ni manier la moindre pièce d\'équipement et ne peut pas non plus bénéficier de ses effets.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Métamorphose animale / Formes animales',
            'slug' => Str::slug('Métamorphose animale / Formes animales'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 24 heure',
            'description' => '<p>Votre magie change autrui en animal. Choisissez autant de créatures consentantes, à portée et dans votre champ de vision que vous désirez. Vous transformez chacune d\'entre elles en bête de taille Grande ou inférieure dotée d\'un indice de dangerosité de 4 ou moins. Lors de vos tours suivants, vous pouvez dépenser votre action pour transformer les créatures affectées en d\'autres animaux.</p><p> La transformation persiste pour chaque cible pendant toute la durée du sort ou jusqu\'à ce que la cible tombe à 0 point de vie ou meure. Vous pouvez attribuer une forme différente à chaque cible. Les statistiques de jeu de la cible sont remplacées par celles de l\'animal choisi, bien qu\'elle conserve son alignement, son Intelligence, sa Sagesse et son Charisme. La cible adopte les points de vie de sa nouvelle forme et, quand elle reprend son apparence normale, elle se retrouve avec le même nombre de points de vie que celui qu\'elle avait avant sa transformation. Si elle recouvre sa forme normale suite à un passage à 0 point de vie, les dégâts en excès sont reportés sur les points de vie de sa forme normale. Tant que ces dégâts en excès ne réduisent pas les points de vie de la forme normale de la cible à 0, elle ne tombe pas inconsciente. Les actions de la créature transformée sont limitées par la nature de sa nouvelle apparence et elle ne peut ni parler ni lancer de sorts.</p><p> L\'équipement de la cible fusionne avec sa nouvelle forme, mais elle ne peut pas activer ni manier la moindre pièce d\'équipement et ne bénéficie pas des avantages qui en découlent habituellement.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Métamorphose suprême',
            'slug' => Str::slug('Métamorphose suprême'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une goutte de mercure, une cuillérée de gomme arabique et une volute de fumée)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Choisissez une créature ou un objet non magique situés à portée et dans votre champ de vision. Vous transformez la créature en une autre créature, la créature en un objet ou l\'objet en une créature (cet objet ne doit pas être porté ni transporté par autrui). La transformation persiste pendant toute la durée du sort ou jusqu\'à ce que la cible tombe à 0 point de vie ou meure. Si vous vous concentrez sur ce sort pendant toute sa durée, la transformation persiste jusqu\'à dissipation. Ce sort n\'a aucun effet sur un métamorphe ou une créature tombée à 0 point de vie. Si la cible n\'est pas consentante, elle peut faire un jet de sauvegarde de Sagesse. Si elle le réussit, le sort ne l\'affecte pas.</p><p> <strong>Créature en créature.</strong> Si vous changez une créature en créature d\'un autre type, vous pouvez lui attribuer la forme de votre choix, à condition qu\'elle corresponde à une créature dotée d\'un indice de dangerosité égal ou inférieur au sien (ou à son niveau si la cible n\'a pas d\'indice de dangerosité). Les statistiques de jeu de la cible (y compris ses caractéristiques mentales) sont remplacées par celles de sa nouvelle forme, mais elle conserve son alignement et sa personnalité.</p><p> La cible adopte les points de vie de sa nouvelle forme. Quand elle reprend son apparence normale, elle se retrouve avec le même nombre de points de vie que celui qui était le sien avant sa transformation. Si elle reprend sa véritable forme parce qu\'elle est tombée à 0 point de vie, les dégâts en excès sont transférés sur sa forme normale. Tant que ces dégâts en excès ne font pas tomber sa forme normale à 0 point de vie, la cible n\'est pas inconsciente.</p><p> La nouvelle forme de la créature limite ses actions. Elle ne peut pas parler, lancer de sorts, ni effectuer une action nécessitant des mains ou la parole, à moins que sa nouvelle forme ne soit à même d\'accomplir ces actes.</p><p> L\'équipement de la cible fusionne avec sa nouvelle forme. La créature est donc dans l\'incapacité d\'activer, utiliser, ou manier son équipement ou de bénéficier de ses effets.</p><p> <strong>Objet en créature.</strong> Vous pouvez changer un objet en créature, à condition que la taille de la créature ne dépasse pas celle de l\'objet et que son indice de dangerosité soit de 9 ou moins. La créature est amicale envers vous et vos compagnons. Elle agit à chacun de vos tours. C\'est à vous de décider des actions qu\'elle entreprend et de ses déplacements, mais c\'est le MD qui dispose de ses statistiques et résout ses actions et ses déplacements.</p><p> Si le sort devient permanent, vous ne contrôlez plus la créature, mais elle peut rester amicale envers vous selon la manière dont vous l\'avez traitée.</p><p> <strong>Créature en objet.</strong> Si vous transformez une créature en objet, tous les objets qu\'elle porte et transporte se métamorphosent avec elle. Les statistiques de l\'objet remplacent celles de la créature qui, une fois revenue à sa forme normale à la fin du sort, n\'aura aucun souvenir de la période pendant laquelle elle a été métamorphosée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mirage',
            'slug' => Str::slug('Mirage'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => 'vision',
            'component' => 'V, S',
            'duration' => '10 jours',
            'description' => '<p>Vous donnez à un terrain d\'au maximum 2,5 kilomètres carrés la même apparence visuelle, sonore, olfactive et générale qu\'un autre type de terrain. En revanche, sa forme globale ne change pas. Vous pouvez maquiller un champ ou une route pour lui donner l\'air d\'un marais, d\'une colline, d\'une crevasse ou d\'un autre terrain difficile ou impraticable. Vous pouvez faire passer une mare pour une prairie herbeuse, un précipice pour une pente douce ou un goulet rocailleux pour une route aussi large que lisse.</p><p> Vous pouvez aussi modifier l\'apparence des structures ou en ajouter là où n\'y en a pas. En revanche, le sort est incapable de déguiser, dissimuler ou ajouter des créatures.</p><p> L\'illusion comprend des composantes auditives, visuelles, tactiles et olfactives, elle peut donc changer un sol dégagé en terrain difficile (ou inversement) ou gêner les déplacements dans la zone. Tout élément de terrain illusoire (comme une pierre ou une brindille) disparaît dès qu\'il quitte la zone d\'effet du sort.</p><p> Les créatures dotées de vision parfaite distinguent le véritable terrain derrière l\'illusion, mais les autres composantes restent en place ; elles savent donc qu\'elles ont affaire à une illusion, mais peuvent toujours interagir physiquement avec celle-ci.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Modification d\'apparence',
            'slug' => Str::slug('Modification d\'apparence'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous revêtez une forme différente. Quand vous lancez ce sort, choisissez l\'une des options suivantes, dont les effets dureront aussi longtemps que le sort. Tant qu\'il est actif, vous pouvez utiliser une action pour mettre un terme à une option afin de bénéficier d\'une autre.</p><p> <strong>Adaptation aquatique.</strong> Vous adaptez votre corps à un environnement aquatique, générant des branchies et des palmures entre vos doigts. Vous pouvez respirer sous l\'eau et gagnez une vitesse de nage égale à votre vitesse de marche.</p><p> <strong>Changer d\'apparence.</strong> Vous modifiez votre apparence et choisissez votre taille, votre poids, vos traits, le son de votre voix, la longueur de vos cheveux, votre pigmentation, et toute caractéristique distinctive désirée. Vous pouvez vous faire passer pour un membre d\'une autre race, mais vos caractéristiques ne changent pas. Vous ne pouvez pas vous faire passer pour une créature d\'une catégorie de taille différente de la vôtre, et votre silhouette générale doit rester la même (par exemple, si vous êtes un bipède, vous ne pouvez pas utiliser ce sort pour prendre l\'apparence d\'un quadrupède). À tout moment lors de la durée du sort, vous pouvez dépenser une action pour modifier de nouveau votre apparence de cette manière.</p><p> <strong>Armes naturelles.</strong> Vous gagnez des griffes, des crocs, des épines, des cornes ou une autre arme naturelle de votre choix. Vos attaques à mains nues infligent 1d6 dégâts contondants, perforants ou tranchants, comme il sied à l\'arme naturelle que vous avez choisie et vous maîtrisez automatiquement les attaques à mains nues. Enfin, votre arme naturelle est de nature magique et vous disposez d\'un bonus de +1 aux jets d\'attaque et de dégâts quand vous l\'utilisez.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Modification de mémoire',
            'slug' => Str::slug('Modification de mémoire'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous tentez de remodeler les souvenirs d\'autrui. Une créature située dans votre champ de vision doit faire un jet de sauvegarde de Sagesse. Si vous combattez cette créature, elle a l\'avantage lors du jet. Si elle échoue, vous la charmez pendant toute la durée du sort. Elle est alors neutralisée et n\'a plus conscience de ce qui l\'entoure, mais elle vous entend toujours. Le sort se termine si elle subit le moindre dégât ou si elle est la cible d\'un autre sort, auquel cas ses souvenirs restent tous intacts.</p><p> Tant que le sort persiste, vous pouvez influer sur les souvenirs de la cible liés à un événement qui s\'est déroulé dans les 24 heures précédentes et qui n\'a pas duré plus de 10 minutes. Vous pouvez éliminer définitivement tout souvenir de cet événement, permettre à la cible de s\'en souvenir parfaitement dans les moindres détails, modifier les détails dont elle se souvient ou créer un souvenir décrivant un tout autre événement.</p><p> Vous devez parler à votre cible pour décrire comment ses souvenirs sont affectés et, pour que les nouveaux souvenirs s\'implantent dans sa mémoire, elle doit être à même de comprendre votre langue. Son esprit se charge de combler les manques dans votre description. Si le sort se termine avant que vous ayez fini de décrire les souvenirs modifiés, la mémoire de la cible ne subit aucune modification. Sinon, elle tient compte des modifications qui lui ont été apportées dès que le sort se termine.</p><p> Les souvenirs modifiés ne changent pas forcément l\'attitude de la créature, surtout s\'ils entrent en contradiction avec ses penchants naturels, son alignement ou ses croyances. Un souvenir modifié illogique sera ignoré: par exemple, si la cible se souvient combien elle a aimé se baigner dans de l\'acide, elle prendra cela pour un mauvais rêve. Le MD peut estimer qu\'un souvenir est modifié de manière tellement insensée qu\'il n\'affecte pas la cible de manière significative.</p><p> Si la cible bénéficie de lever une malédiction ou de restauration supérieure, elle retrouve ses véritables souvenirs.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, vous pouvez modifier les souvenirs d\'un événement remontant à 7 jours (niveau 6), 30 jours (niveau 7), 1 an (niveau 8) ou issus de n\'importe quelle période du passé de la cible (niveau 9).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Monture fantôme',
            'slug' => Str::slug('Monture fantôme'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => '<p>Une créature équine de taille Grande quasi réelle apparaît dans un emplacement au sol de votre choix situé à portée. À vous de décider de l\'apparence de la créature, mais elle est systématiquement équipée d\'une selle, d\'un mors et d\'un filet. Toutes les pièces d\'équipement nées de ce sort disparaissent dans une volute de fumée si quelqu\'un les emporte à plus de 3 mètres de la monture.</p><p> Pendant toute la durée du sort, vous et une créature de votre choix pouvez chevaucher la monture. Cette dernière possède les mêmes statistiques qu\'un cheval de selle, sauf qu\'elle a une vitesse de 30 mètres et peut parcourir 15 kilomètres en une heure ou 20 kilomètres si elle galope. Quand le sort se termine, la monture s\'estompe progressivement, ce qui laisse une minute au cavalier pour mettre pied à terre. Le sort se termine si vous utilisez une action pour le révoquer ou si la monture subit le moindre dégât.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Moquerie cruelle',
            'slug' => Str::slug('Moquerie cruelle'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez une bordée d\'insultes empreintes d\'un subtil enchantement à une créature située à portée dans votre champ de vision. Si elle vous entend (elle n\'a pas besoin de vous comprendre), elle doit réussir un jet de sauvegarde de Sagesse, sans quoi elle subit 1d4 dégâts psychiques et se trouve désavantagée sur le prochain jet d\'attaque qu\'elle effectue avant la fin de son prochain tour.</p><p> Les dégâts du sort augmentent de 1d4 quand vous atteignez le niveau 5 (2d4), le niveau 11 (3d4) et le niveau 17 (4d4).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mot de guérison',
            'slug' => Str::slug('Mot de guérison'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Une créature de votre choix située à portée dans votre champ de vision récupère un montant de points de vie égal à 1d4 + votre modificateur de caractéristique d\'incantation. Ce sort n\'a aucun effet sur les créatures artificielles et les morts-vivants.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les soins augmentent de 1d4 par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mot de guérison de groupe',
            'slug' => Str::slug('Mot de guérison de groupe'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous prononcez des paroles curatives qui rendent un montant de points de vie égal à 1d4 + votre modificateur de caractéristique d\'incantation à un maximum de six créatures de votre choix situées à portée et dans votre champ de vision. Ce sort reste sans effet sur les morts-vivants et les créatures artificielles.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les soins augmentent de 1d4 par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mot de pouvoir étourdissant',
            'slug' => Str::slug('Mot de pouvoir étourdissant'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous prononcez un mot de pouvoir capable de submerger l\'esprit d\'une créature située à portée dans votre champ de vision. Elle en est abasourdie. Si elle possède 150 points de vie ou moins, elle est étourdie, sinon le sort est sans effet. Une cible étourdie a droit à un jet de sauvegarde de Constitution à la fin de chacun de ses tours. L\'effet d\'étourdissement se termine dès qu\'elle en réussit un.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mot de pouvoir guérisseur',
            'slug' => Str::slug('Mot de pouvoir guérisseur'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Une vague d\'énergie curative parcourt la créature que vous touchez et lui rend tous ses points de vie. Si elle est charmée, terrorisée, paralysée ou étourdie, cet état se dissipe. Si la créature est à terre, elle peut utiliser sa réaction pour se relever. Ce sort n\'a aucun effet sur les morts-vivants et les créatures artificielles.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mot de pouvoir mortel',
            'slug' => Str::slug('Mot de pouvoir mortel'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous prononcez un mot de pouvoir capable d\'obliger une créature située à portée dans votre champ de vision à mourir instantanément. Si la créature choisie a 100 points de vie ou moins, elle meurt, sinon le sort n\'a aucun effet.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mot de retour',
            'slug' => Str::slug('Mot de retour'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '1,50 mètre',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous et un maximum de cinq créatures consentantes situées dans un rayon de 1,50 mètre autour de vous vous téléportez immédiatement dans un sanctuaire précédemment choisi. Vous et les créatures qui se téléportent éventuellement avec vous apparaissez dans l\'emplacement inoccupé le plus proche de l\'endroit que vous avez désigné lorsque vous avez préparé votre sanctuaire (voir plus bas). Si vous lancez ce sort sans avoir préparé un sanctuaire au préalable, il n\'a aucun effet.</p><p> Pour désigner un sanctuaire, vous devez lancer ce sort en un lieu dédié à votre divinité, comme un temple, ou entretenant des liens étroits avec elle. Si vous tentez de lancer ainsi le sort dans une zone qui n\'est pas dédiée à votre divinité, il n\'a aucun effet.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Motif hypnotique',
            'slug' => Str::slug('Motif hypnotique'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'S, M (un bâtonnet d\'encens incandescent ou une fiole de cristal remplie d\'une matière phosphorescente)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous tissez dans les airs un motif aux couleurs mouvantes dans un cube de 9 mètres d\'arête situé à portée. Le motif apparaît pendant un bref instant avant de s\'évanouir. Chaque créature qui se trouve dans la zone et voit le motif doit faire un jet de sauvegarde de Sagesse. Celles qui échouent sont charmées pendant la durée du sort. Tant qu\'une créature est charmée par ce sort, elle est neutralisée et a une vitesse de 0.</p><p> Le sort se termine pour une créature donnée si elle subit le moindre dégât ou si quelqu\'un d\'autre utilise son action pour la secouer et la sortir de sa torpeur.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur d\'épines',
            'slug' => Str::slug('Mur d\'épines'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (une poignée d\'épines)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez un mur fait de buissons souples et robustes, enchevêtrés et hérissés d\'épines acérées. Il apparaît à portée sur une surface solide et persiste pendant toute la durée du sort. Vous pouvez faire un mur de 18 mètres de long, 3 mètres de haut et 1,50 mètre d\'épaisseur, ou le disposer en un cercle de 6 mètres de diamètre pour une hauteur maximum de 6 mètres et une épaisseur de 1,50 mètre. Le mur bloque le champ de vision.</p><p> Quand le mur apparaît, chaque créature située dans sa zone doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 7d8 dégâts perforants, les autres la moitié seulement.</p><p> Une créature peut traverser le mur, mais lentement et dans la douleur. Elle doit dépenser 1,20 mètre de déplacement pour avancer de 30 centimètres au sein du mur. De plus, quand elle entre dans le mur pour la première fois de son tour ou quand elle y termine son tour, elle doit faire un jet de sauvegarde de Dextérité. Elle subit 7d8 dégâts perforants si elle rate son jet, la moitié si elle le réussit.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les deux types de dégâts augmentent chacun de 1d8 par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur de feu',
            'slug' => Str::slug('Mur de feu'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un éclat de phosphore)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous créez un mur de feu sur une surface solide située à portée. Il peut faire un maximum de 18 mètres de long, 6 mètres de haut et 30 centimètres d\'épaisseur, ou prendre une forme circulaire de 6 mètres de diamètre pour 6 mètres de haut et 30 centimètres d\'épaisseur. Le mur est opaque et persiste toute la durée du sort.</p><p> Quand le mur apparaît, chaque créature présente dans sa zone d\'effet doit faire un jet de sauvegarde de Dextérité. Celles qui échouent reçoivent 5d8 dégâts de feu, les autres la moitié seulement.</p><p> Une face du mur (celle de votre choix) inflige 5d8 dégâts de feu à chaque créature qui termine son tour à 3 mètres d\'elle ou moins ou au sein du mur. Une créature qui pénètre dans le mur pour la première fois de son tour ou y termine son tour subit les mêmes dégâts. L\'autre face du mur n\'inflige pas de dégâts.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 4e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur de force',
            'slug' => Str::slug('Mur de force'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (une pincée de poudre de gemme translucide)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Un mur de force invisible se matérialise soudain en un point de votre choix situé à portée. Il s\'oriente comme bon vous semble, comme une barrière horizontale, verticale ou inclinée. Il peut flotter librement ou reposer sur une surface solide. Vous pouvez lui donner une forme de dôme hémisphérique ou de sphère d\'un rayon maximal de 3 mètres ou en faire une surface plane composée de dix panneaux de 3 mètres sur 3. Chaque panneau doit être contigu à un autre. Quelle que soit sa forme, le mur fait 0,5 centimètre d\'épaisseur et persiste pendant toute la durée du sort. Si le mur passe par l\'emplacement d\'une créature lorsqu\'il apparaît, il la repousse d\'un côté ou de l\'autre (à vous de choisir).</p><p> Aucun élément ne peut franchir physiquement le mur, qui est immunisé contre tous les dégâts et résiste à toute dissipation de la magie. En revanche, on peut le détruire instantanément avec une désintégration. Le mur s\'étend également sur le plan éthéré, ce qui empêche de le franchir sous forme éthérée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur de glace',
            'slug' => Str::slug('Mur de glace'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un éclat de quartz)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez un mur de glace sur une surface solide à portée. Vous pouvez lui donner une forme de dôme hémisphérique ou de sphère d\'un rayon maximal de 3 mètres ou en faire une surface plane composée de dix panneaux de 3 mètres carrés. Chaque panneau doit être contigu à un autre. Quelle que soit sa forme, le mur fait 30 centimètres d\'épaisseur et persiste pendant toute la durée du sort. Si le mur passe par l\'emplacement d\'une créature lorsqu\'il apparaît, il la repousse d\'un côté ou de \'autre et elle doit faire un jet de sauvegarde de Dextérité. Si elle échoue, elle subit 10d6 dégâts de froid, la moitié seulement si elle réussit.</p><p> Le mur est un objet que l\'on peut endommager et on peut donc y ouvrir des brèches. Il a une CA de 12 et 30 points de vie par section de 3 mètres de côté et il est vulnérable aux dégâts de feu. Si une section de 3 mètres de côté tombe à 0 point de vie, elle est détruite et laisse juste une zone d\'air glacé à l\'emplacement où se trouvait le pan de mur. Quand une créature se déplace dans cette zone frigorifique pour la première fois de son tour, elle doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle subit 5d6 dégâts de froid, la moitié seulement si elle réussit.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les dégâts que le mur inflige en apparaissant augmentent de 2d6 et les dégâts provoqués par un passage dans la zone d\'air glacé augmentent de 1d6 par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur de pierre',
            'slug' => Str::slug('Mur de pierre'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un petit bloc de granite)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez un mur de pierre non magique qui se matérialise en un point de votre choix à portée. Il fait 15 centimètres d\'épaisseur et se compose de dix panneaux de 3 mètres sur 3. Chaque panneau doit être contigu à un autre. Sinon, vous pouvez opter pour des panneaux de 3 mètres sur 6 de seulement 7,50 centimètres d\'épaisseur.</p><p> Si le mur passe par l\'emplacement d\'une créature lorsqu\'il apparaît, il la repousse d\'un côté ou de l\'autre (à vous de choisir). Si une créature est placée de telle manière qu\'elle devrait se retrouver entourée de toutes parts par le mur (ou par le mur et une autre surface solide), elle doit faire un jet de sauvegarde de Dextérité. Si elle le réussit, elle peut utiliser sa réaction pour se déplacer à sa vitesse au maximum afin de ne plus être encerclée par le mur.</p><p> Le mur peut prendre la forme que vous désirez, mais il ne peut pas occuper le même emplacement qu\'une créature ou un objet. Il n\'est pas forcément vertical et n\'a pas besoin de reposer sur des fondations solides. En revanche, il doit impérativement fusionner avec de la pierre existante lui servant de soutien solide. Vous pouvez donc utiliser ce sort pour jeter un pont au-dessus d\'un fossé ou créer une rampe.</p><p> Si vous créez une longueur de plus de 6 mètres, vous devez réduire de moitié la taille de chaque panneau pour créer des supports. Vous pouvez façonner la silhouette générale du mur pour le doter de créneaux, de remparts et autres.</p><p> Le mur est un objet de pierre que l\'on peut endommager et on peut donc y ouvrir des brèches. Chaque panneau a une CA de 15 et 30 points de vie par section de 2,5 centimètres d\'épaisseur. Si un panneau tombe à 0 point de vie, il est détruit, ce qui peut entraîner l\'effondrement des panneaux adjacents, au choix du MD.</p><p> Si vous restez concentré sur le sort pendant toute sa durée, le mur devient une structure permanente et ne peut plus être dissipé, sinon il disparaît à la fin du sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur de vent',
            'slug' => Str::slug('Mur de vent'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (un petit éventail et une plume exotique)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Un mur de vent fort se lève soudain depuis le sol en un point de votre choix à portée. Vous pouvez lui faire couvrir jusqu\'à 15 mètres de long, 4,50 mètres de haut et 30 centimètres d\'épaisseur. Vous pouvez lui donner la forme que vous voulez tant qu\'il dessine un chemin continu au sol. Ce mur persiste pendant toute la durée du sort.</p><p> Quand le mur apparaît, chaque créature située dans sa zone doit faire un jet de sauvegarde de Force. Les créatures qui échouent subissent 3d8 dégâts contondants, les autres la moitié seulement.</p><p> Le vent fort maintient la brume, la fumée et les autres gaz à l\'écart. Les créatures et objets volants de taille Petite ou inférieure ne peuvent pas traverser le mur. Les matériaux libres et légers s\'envolent si on les apporte dans le mur. Les flèches, les carreaux et autres projectiles ordinaires visant une cible située derrière le mur sont systématiquement détournés vers le haut et ratent automatiquement leur cible. (Ce phénomène n\'affecte pas les rochers que lancent les géants ou les engins de siège, ni les projectiles similaires.) Les créatures sous forme gazeuse ne peuvent pas franchir le mur.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mur prismatique',
            'slug' => Str::slug('Mur prismatique'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => '<p>Un plan de lumière scintillante multicolore forme un mur opaque vertical centré sur un point situé à portée et dans votre champ de vision. Ce mur fait au maximum 27 mètres de long, 9 mètres de haut et 2,5 centimètres d\'épaisseur. Sinon, vous pouvez façonner le mur de manière à ce qu\'il forme une sphère d\'au maximum 9 mètres de diamètre centrée sur un point de votre choix situé à portée. Le mur reste en place pendant toute la durée du sort. Si vous positionnez le mur de manière à ce qu\'il passe par un emplacement occupé par une créature, le sort échoue: votre action et l\'emplacement du sort sont gaspillés.</p><p> Le mur émet une vive lumière dans un rayon de 30 mètres et une faible lumière dans un rayon de 30 mètres de plus. Vous et les créatures que vous désignez au moment de l\'incantation pouvez traverser le mur et rester à côté sans conséquence. Si une créature qui voit le mur s\'en approche à 6 mètres ou moins, ou qu\'elle démarre son tour dans ce périmètre, elle doit réussir un jet de sauvegarde de Constitution ou devenir aveugle pendant 1 minute.</p><p> Le mur se compose de sept couches, chacune d\'une couleur différente. Quand une créature tente de franchir le mur ou d\'y enfoncer la main, elle avance d\'une couche à la fois, jusqu\'à les franchir toutes. Chaque fois qu\'elle traverse ou touche une couche, elle doit réussir un jet de sauvegarde de Dextérité, sans quoi elle est affectée par les propriétés de la couche indiquées plus bas.</p><p> On peut détruire le mur, également couche par couche, du rouge au violet, en appliquant une méthode spécifique à chaque couche. Une fois une couche détruite, elle ne se répare pas jusqu\'à la fin du sort. Un sceptre d\'annulation détruit un mur prismatique, mais un champ d\'antimagie en est incapable.</p><p> <strong>1. Rouge.</strong> La cible subit 10d6 dégâts de feu si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit. Tant que cette couche est en place, les attaques à distance non magiques ne peuvent pas traverser le mur. On peut la détruire en lui infligeant 25 dégâts de froid.</p><p> <strong>2. Orange.</strong> La cible subit 10d6 dégâts d\'acide si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit. Tant que cette couche est en place, les attaques à distance magiques ne peuvent pas traverser le mur. On peut détruire cette couche avec un vent fort.</p><p> <strong>3. Jaune.</strong> La cible subit 10d6 dégâts de foudre si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit. On peut détruire cette couche en lui infligeant au moins 60 dégâts de force.</p><p> <strong>4. Vert.</strong> La cible subit 10d6 dégâts de poison si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit. On peut détruire cette couche grâce à un sort de passe-muraille ou un autre sort d\'un niveau égal ou supérieur, capable d\'ouvrir un portail dans une surface solide.</p><p> <strong>5. Bleu.</strong> La cible subit 10d6 dégâts de froid si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit. On peut détruire cette couche en lui infligeant 25 dégâts de feu.</p><p> <strong>6. Indigo.</strong> Si la cible rate son jet de sauvegarde, elle est entravée et doit alors faire un jet de sauvegarde de Constitution à la fin de chacun de ses tours. Si elle en réussit trois, le sort se termine ; si elle en rate trois, elle se change définitivement en pierre et elle est en proie à l\'état pétrifié. Les succès et les échecs n\'ont pas à être consécutifs : tenez le compte dans chaque catégorie jusqu\'à ce que l\'une d\'elles arrive à trois.</p><p> Tant que cette couche est en place, il est impossible de lancer un sort à travers le mur. On peut détruire la couche grâce à la vive lumière d\'un sort de lumière du jour ou d\'un sort similaire de niveau égal ou supérieur.</p><p> <strong>7. Violet.</strong> La cible est aveugle si elle rate son jet de sauvegarde. Elle doit alors faire un jet de sauvegarde de Sagesse au début de votre prochain tour. Si elle le réussit, elle recouvre la vue, si elle le rate, elle est emportée sur un autre plan d\'existence choisi par le MD et recouvre aussi la vue. (En général, une créature qui ne se trouve pas sur son propre plan d\'existence est bannie là-bas tandis que les autres créatures sont envoyées sur le plan astral ou éthéré). On peut détruire cette couche avec une dissipation de la magie ou un sort similaire de niveau identique ou supérieur, capable de mettre un terme à un sort ou à un effet magique.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Murmures dissonants',
            'slug' => Str::slug('Murmures dissonants'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous fredonnez une mélodie discordante qu\'entend une seule créature de votre choix, située à portée. La malheureuse est alors victime de terribles douleurs et doit faire un jet de sauvegarde de Sagesse. Si elle échoue, elle subit 3d6 dégâts psychiques et doit immédiatement dépenser sa réaction (si elle le peut) pour s\'éloigner de vous autant que sa vitesse de déplacement le lui permet. Elle ne s\'avance pas dans des zones à l\'évidence dangereuses, comme un brasier ou une fosse. Si la cible réussit son jet de sauvegarde, elle subit seulement la moitié des dégâts et n\'a pas à s\'éloigner. Une créature assourdie réussit automatiquement son jet de sauvegarde.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d6 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Mythes et légendes / Légende',
            'slug' => Str::slug('Mythes et légendes / Légende'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => 'personnelle',
            'component' => 'V, S, M (de l\'encens d\'une valeur minimale de 250 po que le sort consume et quatre bandelettes d\'ivoire valant au moins 50 po chaque)',
            'duration' => 'instantanée',
            'description' => '<p>Nommez ou décrivez une personne, un lieu ou un objet. Le sort porte à votre connaissance un bref résumé des connaissances essentielles se rapportant à la chose nommée. Ces connaissances peuvent se présenter sous la forme d\'histoires actuelles, de contes oubliés ou même d\'un savoir secret qui n\'a jamais été révélé au grand public. Si la chose que vous nommez n\'est pas digne de figurer dans une légende, vous n\'obtenez aucune information. Plus vous possédez d\'informations sur cette chose, plus celles que vous recevez via le sort sont précises et détaillées.</p><p> Les informations obtenues sont exactes, mais susceptibles de se présenter dans un langage figuré. Par exemple, si vous avez une mystérieuse hache en main, le sort peut vous donner les renseignements suivants : « Malheur au malfaisant qui pose la main sur cette hache, car même son manche peut entailler la main des mécréants. Seul un véritable enfant de la pierre, un être qui aime Moradin et en est aimé en retour, pourra éveiller la véritable puissance de cette hache à condition de prononcer le mot sacré Rudnogg ».</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Nappe de brouillard',
            'slug' => Str::slug('Nappe de brouillard'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous créez une sphère de brouillard de 6 mètres de rayon centrée sur un point à portée. La sphère s\'étend en contournant les angles et, dans la zone qu\'elle occupe, la visibilité est fortement obstruée. Le brouillard persiste pendant toute la durée du sort ou jusqu\'à ce qu\'un vent modéré ou plus violent (soufflant au moins à 15 kilomètres/heure) le disperse.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, le rayon de la sphère augmente de 6 mètres par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Nuage incendiaire',
            'slug' => Str::slug('Nuage incendiaire'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Un nuage de fumée ondoyant constellé de braises rougeoyantes apparaît sous la forme d\'une sphère de 6 mètres de rayon centrée sur un point à portée. Le nuage se répand en contournant les angles si nécessaire et, à l\'intérieur, la visibilité est fortement obstruée. Le nuage persiste pendant toute la durée du sort ou jusqu\'à ce qu\'un vent fort ou modéré (au moins 15 km/h) le disperse.</p><p> Quand le nuage apparaît, chaque créature se trouvant à l\'intérieur doit faire un jet de sauvegarde de Dextérité. Celles qui échouent reçoivent 10d8 dégâts de feu, les autres la moitié seulement. Une créature doit aussi faire ce jet quand elle entre dans la zone affectée pour la première fois du tour ou qu\'elle y finit son tour.</p><p> Le nuage s\'éloigne de vous sur 3 mètres dans la direction d votre choix au début de chacun de vos tours.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Nuage nauséabond',
            'slug' => Str::slug('Nuage nauséabond'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (un oeuf pourri ou des feuilles de chou pourri)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous créez une sphère d\'un gaz jaunâtre et nauséabond de 6 mètres de rayon centrée sur un point à portée. Le nuage se répand en contournant les angles et la visibilité est nulle dans toute sa zone. Le nuage persiste dans la zone affectée pendant toute la durée du sort.</p><p> Chaque créature entièrement englobée dans le nuage au début de son tour doit faire un jet de sauvegarde de Constitution contre le poison. Celles qui échouent passent toute leur action du tour à vomir. Les créatures qui ne respirent pas et celles qui sont immunisées contre le poison réussissent automatiquement ce jet.</p><p> Un vent modéré (au moins 15 km/h) disperse le nuage après 4 rounds. Un vent fort (au moins 30 km/h) le disperse au bout de seulement 1 round.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Nuée de dagues',
            'slug' => Str::slug('Nuée de dagues'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un éclat de verre)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous emplissez de dagues tournoyantes un cube de 1,50 mètre d\'arête. Ce cube est centré sur un point de votre choix situé à portée. Une créature subit 4d4 dégâts tranchants quand elle entre dans la zone du sort pour la première fois d\'un tour ou quand elle y débute son tour.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 2d4 par emplacement de sort au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Nuée de météores',
            'slug' => Str::slug('Nuée de météores'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '1,5 kilomètre',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Des orbes de feu flamboyants s\'abattent au sol en quatre points de votre choix situés à portée et dans votre champ de vision. Chaque créature située dans la sphère de 12 mètres de rayon centrée sur chacun de ces points doit faire un jet de sauvegarde de Dextérité. Les sphères s\'étendent en contournant les angles. Une créature qui rate son jet de sauvegarde subit 20d6 dégâts de feu et 20d6 dégâts contondants, les autres la moitié seulement. Une créature qui se trouve prise dans deux sphères à la fois ne subit qu\'une seule fois les dégâts des météores.</p><p> Le sort abîme et embrase les objets inflammables de la zone s\'ils ne sont pas portés ou transportés.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Oeil du mage',
            'slug' => Str::slug('Oeil du mage'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (des poils de chauve-souris)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous créez un oeil magique invisible à portée qui flotte dans les airs pendant toute la durée du sort.</p><p> Il vous envoie mentalement des informations visuelles grâce à sa vision normale et dans le noir dans un rayon de 9 mètres. Il peut regarder dans toutes les directions.</p><p> Par une action, vous pouvez déplacer l\'oeil d\'un maximum de 9 mètres dans la direction de votre choix. Il peut s\'éloigner de vous sur une distance illimitée, mais il ne peut pas entrer dans un autre plan d\'existence. Une barrière solide l\'empêche de passer, mais il peut se glisser à travers une ouverture d\'au minimum 2,5 centimètres de diamètre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Orbe chromatique',
            'slug' => Str::slug('Orbe chromatique'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (un diamant d\'une valeur minimale de 50 po)',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez une sphère d\'énergie de 10 centimètres de diamètre sur une créature située à portée dans votre champ de vision. Cet orbe est fait d\'acide, de feu, de froid, de foudre, de poison ou de tonnerre (à vous de choisir). Vous effectuez ensuite un jet d\'attaque à distance contre votre cible. Si vous la touchez, elle subit 3d8 dégâts du type de l\'orbe.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d8 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Orientation / Trouver un chemin',
            'slug' => Str::slug('Orientation / Trouver un chemin'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S, M (un ensemble d\'instruments de divination [comme des os, des bâtonnets en ivoire, des cartes, des dents ou des runes gravées] d\'une valeur de 100 po et un objet venant de l\'endroit que vous cherchez)',
            'duration' => 'concentration, jusqu\'à 1 jour',
            'description' => '<p>Ce sort vous permet de trouver le chemin physique le plus direct et le plus court vers un endroit fixe spécifique avec lequel vous êtes familier et qui se trouve sur le même plan d\'existence que vous. Le sort échoue si vous choisissez une destination située sur un autre plan d\'existence, une destination mouvante (comme une forteresse mobile) ou une destination n\'ayant rien de spécifique (comme l\'antre d\'un dragon vert).</p><p> Tant que le sort persiste et que vous êtes sur le même plan d\'existence que votre destination, vous savez dans quelle direction et à quelle distance elle se trouve. Tant que vous faites route vers votre destination, chaque fois que vous avez le choix entre plusieurs itinéraires, vous déterminez automatiquement celui qui sera le plus court et le plus direct (mais pas forcément le plus sûr).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Parole divine',
            'slug' => Str::slug('Parole divine'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous prononcez une parole divine, empreinte de la puissance qui a façonné le monde à l\'aube de la création. Choisissez autant de créatures situées à portée et dans votre champ de vision que vous le désirez. Chacune de celles qui vous entendent doit faire un jet de sauvegarde de Charisme. En cas d\'échec, la créature souffre d\'un effet basé sur ses points de vie actuels.<ul><li>50 points de vie ou moins : sourde pour 1 minute.</li> <li>40 points de vie ou moins : aveugle et sourde pour 10 minutes.</li> <li>30 points de vie ou moins : aveugle, sourde et étourdie pour une heure.</li> <li>20 points de vie ou moins : morte sur-le-champ.</li></ul></p><p> Quels que soient ses points de vie, si un céleste, un élémentaire, une fée ou un fiélon rate son jet de sauvegarde, il est immédiatement renvoyé sur son plan natal (s\'il ne s\'y trouve pas déjà). Il ne peut pas revenir sur votre propre plan pendant les 24 heures qui suivent, à moins d\'user d\'un souhait.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Passage par les arbres',
            'slug' => Str::slug('Passage par les arbres'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous êtes soudain capable d\'entrer dans un arbre et de passer de son sein à celui d\'un autre arbre de la même espèce situé dans un rayon de 150 mètres. Ces deux arbres doivent être vivants et au moins de la même taille que vous. Vous devez dépenser 1,50 mètre de déplacement pour entrer dans un arbre. Vous apprenez alors instantanément où se trouvent tous les autres arbres de la même espèce dans un rayon de 150 mètres et vous pouvez gagner l\'un d\'eux ou ressortir par l\'arbre dans lequel vous êtes entré, ce mouvement faisant partie de votre déplacement de 1,50 mètre. Vous apparaissez à l\'endroit de votre choix dans un rayon de 1,50 mètre autour de l\'arbre dans lequel vous êtes arrivé en dépensant de nouveau 1,50 mètre de déplacement. S\'il ne vous reste pas de distance de déplacement à dépenser, vous apparaissez dans un rayon de 1,50 mètre autour de l\'arbre par lequel vous êtes entré.</p><p> Vous pouvez utiliser cette capacité de transport une fois par round pendant toute la durée du sort. Vous devez terminer chaque tour en dehors d\'un arbre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Passage sans trace',
            'slug' => Str::slug('Passage sans trace'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (cendres d\'une feuille de gui et une brindille d\'épicéa)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Une aura d\'ombre et de silence émane de vous et enveloppe vos compagnons, vous dissimulant aux sens d\'autrui. Pendant toute la durée du sort, chaque créature que vous choisissez et qui se trouve dans un rayon de 9 mètres (vous y compris) bénéficie d\'un bonus de + 10 aux tests de Dextérité (Discrétion) et il devient impossible de suivre sa piste à moins de recourir à des méthodes magiques. Une créature qui profite de ce bonus ne laisse aucune trace ni autre indice de son passage derrière elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Passe-muraille',
            'slug' => Str::slug('Passe-muraille'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une pincée de graines de sésame)',
            'duration' => '1 heure',
            'description' => '<p>Un passage apparaît en un point de votre choix situé à portée et dans votre champ de vision sur une surface de bois, de plâtre ou de pierre (comme un mur, un sol ou un plafond). Il persiste pendant toute la durée du sort. À vous de décider des dimensions de l\'ouverture qui peut faire, au maximum, 1,50 mètre de large pour 2,50 mètres de haut et 6 mètres de profondeur. L\'apparition du passage ne crée aucune faiblesse dans la structure qui l\'entoure.</p><p> Quand l\'ouverture disparaît, les créatures et les objets qui s\'y trouvaient encore sont expulsés en toute sécurité dans l\'emplacement inoccupé le plus proche de la surface sur laquelle vous avez lancé le sort.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Pattes d\'araignée',
            'slug' => Str::slug('Pattes d\'araignée'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une goutte de bitume et une araignée)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Jusqu\'à la fin du sort, une créature consentante que vous touchez devient capable de se déplacer sur les surfaces verticales, et même au plafond la tête en bas, tout en gardant les mains libres. La cible bénéficie aussi d\'une vitesse d\'escalade égale à sa vitesse de marche.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Peau d\'écorce',
            'slug' => Str::slug('Peau d\'écorce'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une poignée d\'écorce de chêne)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous touchez une créature consentante. Pendant toute la durée du sort, sa peau prend la consistance et l\'apparence de l\'écorce, et sa CA ne peut pas descendre au-dessous de 16, quelle que soit l\'armure qu\'elle porte.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Peau de pierre',
            'slug' => Str::slug('Peau de pierre'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (poussière de diamant d\'une valeur de 100 po, que le sort consume)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Ce sort modifie la chair d\'une créature consentante pour la rendre aussi dure que de la pierre. Jusqu\'à la fin du sort, la cible est résistante aux dégâts non magiques contondants, perforants et tranchants.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Petite hutte de Léomund',
            'slug' => Str::slug('Petite hutte de Léomund'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'personnelle (hémisphère de 3 mètres de rayon)',
            'component' => 'V, S, M (une petite perle de cristal)',
            'duration' => '8 heures',
            'description' => '<p>Un dôme de force immobile, de 3 mètres de rayon, apparaît soudain autour et au-dessus de vous. Il reste stationnaire pendant toute la durée du sort. Ce dernier se termine si vous quittez sa zone.</p><p> Le dôme peut abriter un maximum de neuf créatures de taille Moyenne ou inférieure, en plus de vous. Le sort échoue si la zone comprend une créature de taille supérieure ou plus de neuf créatures. Les créatures et les objets qui se trouvent à l\'intérieur du dôme lors de l\'incantation peuvent en sortir et y entrer librement ; en revanche, les autres créatures sont incapables de franchir ses limites. Les sorts et autres effets magiques ne peuvent pas s\'étendre au-delà de la limite du dôme ni se lancer à travers. L\'atmosphère au sein du dôme est agréable et sèche, quelles que soient les conditions météorologiques à l\'extérieur.</p><p> Tant que le sort n\'est pas terminé, vous pouvez faire en sorte que l\'intérieur du dôme soit faiblement éclairé ou plongé dans le noir. Vu de l\'extérieur, le dôme est opaque, de la couleur que vous désirez, mais vu de l\'intérieur, il est transparent.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Pétrification',
            'slug' => Str::slug('Pétrification'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (une pincée de chaux, de l\'eau et de la terre)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous tentez de changer en pierre une créature située à portée dans votre champ de vision. Si le corps de la cible est fait de chair, elle doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle se retrouve entravée, car sa chair se met à durcir. Si elle réussit, elle n\'est pas affectée.</p><p> Une créature entravée par ce sort doit faire un nouveau jet de sauvegarde de Constitution à la fin de chacun de ses tours. Si elle en réussit trois, le sort se termine. Si elle en rate trois, elle se change en pierre et se retrouve pétrifiée pendant toute la durée du sort. Inutile que les succès et les échecs soient consécutifs, notez juste leur nombre jusqu\'à ce que la cible arrive à en accumuler trois d\'une sorte ou de l\'autre.</p><p> Si quelqu\'un brise le corps physique de la cible alors qu\'elle est pétrifiée, les difformités subies sont conservées par sa forme originelle quand elle la reprend.</p><p> Si vous maintenez votre concentration sur ce sort jusqu\'à la fin de la durée maximale, la cible est définitivement changée en pierre jusqu\'à ce que quelqu\'un dissipe l\'effet.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Poigne électrique',
            'slug' => Str::slug('Poigne électrique'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>La foudre jaillit de votre main et bondit sur la créature que vous tentez de toucher. Faites une attaque de sort au corps à corps contre la cible. Vous êtes avantagé lors du jet d\'attaque si votre cible porte une armure métallique. Si vous touchez la cible, elle subit 1d8 dégâts de foudre et ne peut pas effectuer de réaction avant le début de son prochain tour.</p><p> Les dégâts du sort augmentent de 1d8 quand vous atteignez le niveau 5 (2d8), le niveau 11 (3d8) et le niveau 17 (4d8).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Portail',
            'slug' => Str::slug('Portail'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un diamant d\'une valeur minimale de 5 000 po)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous invoquez un portail reliant un espace inoccupé, situé à portée et dans votre champ de vision, à un autre plan d\'existence. Ce portail se présente sous la forme d\'une ouverture circulaire de 1,50 à 6 mètres de diamètre, à votre guise. Vous pouvez orienter le portail dans la direction de votre choix et il persiste pendant toute la durée du sort.</p><p> Le portail a une face avant et une face arrière sur chaque plan où il apparaît. Pour voyager grâce au portail, il faut impérativement le franchir en passant par l\'avant. Tout ce qui le traverse ainsi apparaît instantanément sur l\'autre plan, dans l\'espace inoccupé le plus proche du portail.</p><p> Les divinités et autres dirigeants planaires peuvent empêcher un portail né de ce sort de s\'ouvrir en leur présence ou en n\'importe quel point de leur domaine.</p><p> Quand vous lancez ce sort, vous pouvez prononcer le nom d\'une créature spécifique (sachant que les pseudonymes, les titres et les surnoms ne fonctionnent pas). Si cette créature se trouve sur un autre plan que celui sur lequel vous vous trouvez, le portail s\'ouvre dans ses environs immédiats et attire la créature en son sein. Elle réapparaît de votre côté du portail, dans l\'espace inoccupé le plus proche. Cela ne vous donne aucun contrôle sur la créature qui agit librement, comme le MD le désire. Elle peut s\'en aller, vous attaquer ou vous aider.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Portail arcanique',
            'slug' => Str::slug('Portail arcanique'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '150 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous créez des portails de téléportation reliés qui restent ouverts pendant toute la durée du sort. Choisissez deux points au sol, tous deux situés dans votre champ de vision, l\'un devant se trouver dans un rayon de 3 mètres autour de vous, l\'autre dans un rayon de 150 mètres autour de vous. Un portail circulaire de 3 mètres de diamètre s\'ouvre en chaque point. Si un portail est censé s\'ouvrir dans l\'emplacement qu\'occupe une créature, le sort échoue et l\'incantation est gaspillée.</p><p> Ces portails se présentent sous forme d\'anneaux luisants en deux dimensions emplis de brume, qui flottent à quelques centimètres du sol, perpendiculaires aux points que vous avez choisis. Chaque anneau se voit seulement d\'un côté (celui de votre choix), qui correspond à la face fonctionnant comme un portail.</p><p> Toute créature ou tout objet entrant dans un portail ressort par l\'autre, comme si les deux étaient adjacents. En revanche, il ne se passe rien si quelque chose traverse l\'emplacement du portail en passant par la face qui ne fait pas office de portail. La brume qui emplit chaque portail est opaque et bloque toute visibilité. À votre tour, vous pouvez faire pivoter le portail par une action bonus pour que la face active se tourne dans une nouvelle direction.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Porte dimensionnelle',
            'slug' => Str::slug('Porte dimensionnelle'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '150 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous vous téléportez depuis votre position actuelle vers n\'importe quel emplacement désiré situé à portée. Vous arrivez exactement à l\'endroit voulu. Ce peut être un endroit que vous voyez, que vous visualisez ou que vous pouvez décrire en donnant sa distance et sa direction, par exemple « 60 mètres plus bas en ligne droite » ou « en montant au nord-ouest à un angle de 45° sur 90 mètres ».</p><p> Vous pouvez amener des objets avec vous, tant que leur poids ne dépasse pas la charge que vous êtes capable de porter. Vous pouvez également emmener avec vous une créature consentante de votre taille ou d\'une taille inférieure, qui peut transporter du matériel dans la limite de ses capacités. Elle doit se trouver dans un rayon de 1,50 mètre autour de vous quand vous lancez le sort.</p><p> Si vous deviez arriver dans un emplacement déjà occupé par un objet ou une créature, vous et la créature qui voyage avec vous subissez chacun 4d6 dégâts de force tandis que le sort s\'avère incapable de vous téléporter.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Possession',
            'slug' => Str::slug('Possession'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S, M (une gemme, un cristal, un reliquaire ou un autre réceptacle ornemental d\'une valeur minimale de 500 po)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Votre corps tombe en catatonie tandis que votre âme le quitte et pénètre dans le réceptacle utilisé comme composante de sort. Tant qu\'elle se trouve là, vous percevez votre environnement comme si votre corps occupait le même espace que le réceptacle. En revanche, vous ne pouvez pas bouger ni utiliser de réaction. Vous ne pouvez accomplir qu\'une action: projeter votre âme dans un rayon de 30 mètres au maximum autour du réceptacle, soit pour retourner dans votre corps (ce qui met fin au sort), soit pour prendre possession d\'un autre corps humanoïde.</p><p> Vous pouvez tenter de prendre possession de n\'importe quel humanoïde situé dans votre champ de vision et dans un rayon de 30 mètres (sachant que les créatures protégées par une protection contre le bien et le mal ou par un cercle magique sont immunisées contre la possession). La cible doit faire un jet de sauvegarde de Charisme. Si elle échoue, votre âme s\'installe dans son corps et la sienne est prisonnière du réceptacle. Si elle réussit son test, elle résiste à votre tentative de possession et vous ne pouvez plus essayer de la posséder pendant 24 heures.</p><p> Une fois que vous avez pris possession du corps d\'une autre créature, vous le contrôlez totalement. Vos statistiques de jeu sont remplacées par celles de cette créature, bien que vous conserviez votre alignement et vos valeurs d\'Intelligence, de Sagesse et de Charisme. Vous conservez les avantages de vos pouvoirs de classe. Si votre cible possède des niveaux de classe, vous n\'avez pas accès à ses pouvoirs de classe.</p><p> Pendant ce temps, l\'âme de la créature possédée perçoit ce qui se passe autour du réceptacle grâce à ses propres sens, mais elle ne peut pas se déplacer ni effectuer la moindre action.</p><p> Tant que vous possédez le corps d\'autrui, vous pouvez utiliser votre action pour le quitter et regagner le réceptacle s\'il se trouve à 30 mètres de vous ou moins. L\'âme de votre hôte retourne alors dans son propre corps. Si le corps de l\'hôte périt alors que vous l\'occupez, l\'hôte meurt et vous devez faire un jet de sauvegarde de Charisme contre votre propre DD d\'incantation. Si vous réussissez, vous regagnez le réceptacle, à condition qu\'il se trouve dans un rayon de 30 mètres. Sinon, vous mourez.</p><p> Si le réceptacle est détruit ou que le sort se termine, votre âme regagne immédiatement votre corps, à moins qu\'il ne se trouve à plus de 30 mètres d\'elle ou qu\'il ait succombé, auquel cas vous périssez. Si l\'âme d\'une autre créature occupe le réceptacle au moment où il est détruit, cette âme retourne immédiatement dans son corps, à condition qu\'il se trouve dans un rayon de 30 mètres et soit encore en vie Sinon, elle meurt. Le réceptacle est détruit quand le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Prémonition',
            'slug' => Str::slug('Prémonition'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (une plume d\'oiseau chanteur)',
            'duration' => '8 heures',
            'description' => '<p>Vous touchez une créature consentante et lui conférez une aptitude limitée à voir dans le futur immédiat. Pendant toute la durée du sort, elle ne peut pas être prise par surprise et elle a l\'avantage sur les jets d\'attaque, les tests de caractéristique et les jets de sauvegarde. De plus, les autres créatures sont désavantagées lors de leurs jets d\'attaque contre elle pendant toute la durée du sort.</p><p> Le sort se termine immédiatement si vous le lancez de nouveau avant la fin de sa durée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Prestidigitation',
            'slug' => Str::slug('Prestidigitation'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S',
            'duration' => 'jusqu\'à 1 heure',
            'description' => '<p>Ce sort est un tour de magie basique que les incantateurs novices utilisent pour s\'entraîner. Vous l\'utilisez pour créer à portée l\'un des effets magiques suivants:<ul><li>Vous créez un effet sensoriel immédiat et inoffensif, comme une pluie d\'étincelles, un coup de vent, de faibles notes de musique ou une odeur étrange.</li> <li>Vous allumez ou éteignez instantanément une chandelle, une torche ou un petit feu de camp.</li> <li>Vous nettoyez ou salissez instantanément un objet ne faisant pas plus de 30 décimètres cubes.</li> <li>Vous refroidissez, réchauffez ou aromatisez jusqu\'à 30 décimètres cubes de matière non vivante pendant 1 heure.</li> <li>Vous faites apparaître une couleur, une petite marque ou un symbole sur un objet ou une surface pendant 1 heure.</li> <li>Vous créez un colifichet non magique ou une image illusoire tenant dans votre main, qui persiste jusqu\'à la fin de votre prochain tour.</li></ul></p><p> Si vous lancez le sort à plusieurs reprises, vous ne pouvez pas avoir plus de trois effets non instantanés actifs à la fois. Vous pouvez révoquer un tel effet par une action.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Prière de guérison',
            'slug' => Str::slug('Prière de guérison'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Un maximum de six créatures de votre choix, situées à portée et dans votre champ de vision, récupèrent chacune un montant de points de vie égal à 2d8 + votre modificateur de caractéristique d\'incantation. Ce sort n\'a aucun effet sur les morts-vivants et les créatures artificielles.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les soins augmentent de 1d8 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Projectile magique',
            'slug' => Str::slug('Projectile magique'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez trois fléchettes faites d\'énergie magique luisante. Chacune touche une créature de votre choix, située à portée dans votre champ de vision. Une fléchette inflige 1d4+1 dégâts de force à la cible. Toutes les fléchettes frappent leur cible en même temps, sachant que vous pouvez toutes les diriger contre une seule et même créature ou les répartir entre plusieurs.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, le sort crée une fléchette de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Projection astrale',
            'slug' => Str::slug('Projection astrale'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => '3 mètres',
            'component' => 'V, S, M (un zircon jaune d\'une valeur minimale de 1 000 po et un lingot d\'argent gravé d\'une valeur minimale de 100 po par créature ; le sort consume ces composantes)',
            'duration' => 'spéciale',
            'description' => '<p>Vous et un maximum de huit créatures consentantes à portée projetez vos corps astraux sur le plan astral (si vous vous trouvez déjà sur ce plan, le sort échoue et l\'incantation est gâchée). Les corps physiques que vous laissez derrière vous sont inconscients, en état d\'animation suspendue. Ils n\'ont pas besoin de nourriture ni d\'air et ne vieillissent pas.</p><p> Votre corps astral ressemble fort à votre corps physique, jusqu\'à reproduire ses caractéristiques de jeu et dupliquer ses possessions. La principale différence, c\'est le cordon argenté qui sort entre vos omoplates et se prolonge derrière vous, disparaissant du champ de vision après une trentaine de centimètres. C\'est lui qui vous relie à votre corps physique. Tant que ce lien est intact, vous pourrez rentrer chez vous, mais s\'il est coupé (ce qui se produit seulement si un effet précise qu\'il agit ainsi), votre âme est soudain séparée de votre corps et vous mourez sur-le-champ.</p><p> Votre forme astrale se déplace librement sur le plan astral et peut traverser les portails menant à d\'autres plans. Si vous pénétrez sur un nouveau plan ou si vous retournez sur le plan où vous étiez lorsque vous avez lancé ce sort, votre corps et vos possessions physiques sont transportés le long du cordon argenté, ce qui vous permet de réintégrer votre corps dès que vous arrivez sur le nouveau plan. Votre forme astrale est une incarnation distincte : les dégâts et autres effets s\'appliquant sur elle n\'ont aucun effet sur votre corps physique et ne vous affectent plus dès que vous le regagnez.</p><p> Le sort se termine pour vous et vos compagnons dès que vous utilisez une action pour y mettre fin. À ce moment, les créatures affectées regagnent leurs corps physiques qui se réveillent.</p><p> Le sort peut se terminer plus tôt pour vous ou pour l\'un de vos camarades. Si quelqu\'un réussit une dissipation de la magie contre le corps astral ou physique d\'une créature affectée, le sort se termine pour elle seule. Il en va de même si la forme astrale ou le corps physique d\'une créature affectée tombe à 0 point de vie. Si le sort se termine alors que le cordon argenté est intact, celui-ci ramène la forme astrale dans le corps physique, mettant un terme à l\'état d\'animation suspendue. Si vous êtes prématurément renvoyé dans votre corps physique, vos compagnons restent sous forme astrale et doivent se débrouiller seuls pour regagner leur corps physique, en général en se laissant tomber à 0 point de vie.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Protection contre l\'énergie',
            'slug' => Str::slug('Protection contre l\'énergie'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Pendant toute la durée du sort, la créature consentante que vous touchez devient résistante à un type de dégâts de votre choix : acide, feu, froid, foudre ou tonnerre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Protection contre la mort',
            'slug' => Str::slug('Protection contre la mort'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '8 heures',
            'description' => '<p>Vous touchez une créature et lui donnez une protection relative contre la mort.</p><p> Quand elle devrait tomber à 0 point de vie pour la première fois suite à des dégâts, elle tombe à la place à 1 point de vie et le sort se termine.</p><p> Si le sort est encore actif quand la cible est soumise à un effet qui devrait la tuer sur-le-champ sans lui infliger de dégâts, l\'effet est annulé contre cette cible et le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Protection contre le bien et le mal',
            'slug' => Str::slug('Protection contre le bien et le mal'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (eau bénite ou poudre de fer et d\'argent, que le sort consume)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Jusqu\'à la fin du sort, une créature consentante que vous touchez est protégée contre certains types de créatures : les aberrations, les célestes, les élémentaires, les fées, les fiélons et les morts-vivants.</p><p> Cette protection se traduit par plusieurs avantages. Les créatures des types précédemment nommés sont désavantagées lors des jets d\'attaque contre la cible et ne peuvent pas la charmer, la terroriser, ni la posséder. Si elle est déjà sous l\'effet d\'un tel état émanant d\'une telle créature, elle est avantagée lors d\'un éventuel nouveau jet de sauvegarde contre l\'effet en question.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Protection contre le poison',
            'slug' => Str::slug('Protection contre le poison'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez une créature. Si elle est empoisonnée, vous neutralisez ce poison. Si elle est victime de plusieurs poisons, vous en neutralisez un dont vous avez détecté la présence ou un au hasard.</p><p> Pendant toute la durée du sort, la cible est avantagée lors des jets de sauvegarde contre le poison et se montre résistante aux dégâts de poison.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Protection contre les armes',
            'slug' => Str::slug('Protection contre les armes'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => '<p>Vous tendez la main et tracez un symbole de protection dans les airs. Jusqu\'à la fin de votre prochain tour, vous êtes résistant aux dégâts perforants, contondants et tranchants découlant d\'une attaque armée.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Protections et sceaux',
            'slug' => Str::slug('Protections et sceaux'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => 'contact',
            'component' => 'V, S, M (encens incandescent, petite dose de soufre et d\'huile, cordelette avec des noeuds, petite dose de sang de mastodonte des ombres et petit sceptre en argent d\'une valeur minimale de 10 po)',
            'duration' => '24 heures',
            'description' => '<p>Vous créez un sceau protégeant une zone au sol de 225m² (soit une zone de 15 mètres de côté, soit une centaine de zones de 1,50 mètre de côté, soit vingt-zones de 3 mètres de côté). La zone protégée fait au maximum 6 mètres de haut et prend la forme de votre choix. Vous pouvez protéger ainsi plusieurs étages d\'une place forte en répartissant la zone affectée entre eux tant que vous pouvez relier toutes les zones contiguës en marchant lorsque vous lancez le sort.</p><p> Lors de l\'incantation, vous pouvez définir quels individus ne seront pas affectés par un ou tous les effets du sort. Vous pouvez aussi choisir un mot de passe qui immunise celui qui le prononce à haute voix contre ces effets.</p><p> Protections et sceaux produit les effets suivants dans la zone protégée.</p><p> <strong>Couloirs.</strong> Le brouillard envahit tous les couloirs où la visibilité est alors fortement obstruée. De plus, à chaque intersection ou embranchement laissant un choix de direction, il y a 50% de chances que les créatures autres que vous soient persuadées d\'aller dans la direction opposée à celle qu\'elles ont choisie.</p><p> <strong>Portes.</strong> Toutes les portes de la zone protégée sont fermées par magie, comme scellées avec un verrou magique. De plus, vous pouvez recouvrir jusqu\'à dix portes d\'une illusion (comme la fonction d\'objet illusoire du sort illusion mineure), afin de les faire passer pour une section de mur ordinaire.</p><p> <strong>Escaliers.</strong> Des toiles d\'araignées, comme le sort du même nom, emplissent tous les escaliers de la zone protégée, du sol au plafond. Tant que protections et sceaux persiste, ces fils repoussent en 10 minutes si quelqu\'un les brûle ou les arrache.</p><p> <strong>Autres effets de sort.</strong> Vous pouvez placer l\'un des effets suivants, au choix, dans la zone protégée par le sort.<ul><li>Placer lumières dansantes dans quatre couloirs. Vous pouvez choisir un programme très simple que les lumières suivront pendant toute la durée de protections et sceaux.</li> <li>Placer une bouche magique en deux endroits.</li> <li>Placer un nuage puant en deux endroits. Les vapeurs apparaissent à l\'endroit de votre choix. Tant que protections et sceaux persiste, elles réapparaissent au bout de 10 minutes si le vent les disperse.</li> <li>Placer une bourrasque constante dans un couloir ou une pièce.</li> <li>Placer une suggestion en un endroit. Choisissez une zone d\'au maximum 1,50 mètre de côté : toute créature qui y pénètre ou la traverse reçoit une suggestion mentale.</li></ul></p><p> Toute la zone protégée émet une aura magique. Si quelqu\'un lance avec succès une dissipation de la magie sur un effet spécifique, il élimine seulement cet effet.</p><p> Vous pouvez protéger une structure en permanence si vous lancez ce sort tous les jours pendant un an.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Purification de la nourriture et de l\'eau',
            'slug' => Str::slug('Purification de la nourriture et de l\'eau'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Toute la nourriture et les boissons non magiques présentes dans une sphère d\'un rayon de 1,50 mètre centrée autour d\'un point de votre choix situé à portée sont purifiées et débarrassées de tout poison et maladie.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Quête / Coercition mystique',
            'slug' => Str::slug('Quête / Coercition mystique'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => '30 jours',
            'description' => '<p>Vous imposez une coercition magique sur une créature située à portée dans votre champ de vision, l\'obligeant à vous accorder un service ou l\'empêchant de commettre une action ou une suite d\'actions, comme bon vous semble. Si la créature comprend votre langue, elle doit réussir un jet de sauvegarde de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Pendant toute cette période, elle subit 5d10 dégâts psychique chaque fois qu\'elle agit de manière directement opposée à vos instructions, mais jamais plus d\'une fois par jour. Si la créature ne vous comprend pas, ce sort n\'a aucun effet sur elle.</p><p> Vous pouvez donner n\'importe quel ordre de votre choix, en dehors de ceux qui mènent directement à la mort. Le sort se termine si jamais vous donnez un ordre suicidaire.</p><p> Vous pouvez mettre prématurément fin au sort en dépensant une action pour le dissiper. On peut aussi terminer le sort avec lever une malédiction, restauration supérieure ou souhait.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou 8, il dure 1 an. Avec un emplacement de sort de niveau 9, il persiste jusqu\'à ce que quelqu\'un le dissipe avec l\'un des sorts mentionnés précédemment.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rappel à la vie / Relever les morts',
            'slug' => Str::slug('Rappel à la vie / Relever les morts'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (un diamant d\'une valeur minimale de 500 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez une créature décédée et la ramenez à la vie, à condition que son trépas ne remonte pas à plus de 10 jours. Si l\'âme de la créature est désireuse de rejoindre son corps et libre de le faire, le défunt revient à la vie avec 1 point de vie.</p><p> Ce sort neutralise également les poisons et soigne les maladies non magiques qui affectaient la créature à sa mort. En revanche, il ne la débarrasse pas des maladies magiques, des malédictions et des effets similaires. Si on ne supprime pas ces effets sur le cadavre avant de lancer le sort, ils affectent de nouveau la créature ressuscitée. Ce sort est incapable de ramener un mort-vivant à la vie.</p><p> Ce sort referme les plaies mortelles, mais ne restaure pas les parties manquantes du corps. Si la créature est privée d\'un organe ou d\'un morceau indispensable à sa survie, comme sa tête, le sort échoue automatiquement.</p><p> Le retour d\'entre les morts est une rude épreuve qui se traduit par un malus de -4 aux jets d\'attaque et de sauvegarde ainsi qu\'aux tests de caractéristique. Chaque fois que la cible termine un long repos, ce malus se réduit de 1 jusqu\'à disparaître.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rayon affaiblissant',
            'slug' => Str::slug('Rayon affaiblissant'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Un rayon noir fait d\'énergie débilitante jaillit de votre doigt en direction d\'une créature à portée. Faites une attaque de sort à distance contre la cible. Si vous la touchez, la créature inflige seulement la moitié des dégâts habituels lorsqu\'elle attaque avec une arme basée sur la Force.</p><p> La cible a droit à un jet de sauvegarde de Constitution contre le sort à la fin de chacun de ses tours. Le sort se termine si elle réussit.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rayon ardent',
            'slug' => Str::slug('Rayon ardent'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous créez trois rayons de feu et les projetez sur des cibles à portée. Vous pouvez les diriger contre une même cible ou contre des cibles différentes.</p><p> Faites une attaque de sort à distance pour chaque rayon. Si vous touchez, la cible reçoit 2d6 dégâts de feu.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous créez un rayon de plus par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rayon de givre',
            'slug' => Str::slug('Rayon de givre'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Un rayon de lumière d\'un blanc bleuté file vers une créature à portée. Faites une attaque de sort à distance contre la cible. Si vous la touchez, elle subit 1d8 dégâts de froid et sa vitesse est réduite de 3 mètres jusqu\'au début de votre prochain tour. Les dégâts du sort augmentent de 1d8 quand vous atteignez le niveau 5 (2d8), le niveau 11 (3d8) et le niveau 17 (4d8).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rayon de lune',
            'slug' => Str::slug('Rayon de lune'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (quelques graines de ménisperme, peu importe l\'espèce, et un éclat de feldspath opalescent)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Un pâle rayon de lune brille dans un cylindre de 1,50 mètre de rayon pour 12 mètres de haut centré sur un point à portée. Une faible lumière emplit le cylindre jusqu\'à la fin du sort.</p><p> Quand une créature entre dans la zone du sort pour la première fois de son tour ou qu\'elle y commence son tour, elle est enveloppée de flammes fantomatiques qui provoquent de violentes douleurs, et doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle subit 2d10 dégâts radiants, la moitié seulement si elle réussit.</p><p> Les métamorphes sont désavantagés lors de ce jet. Si l\'un d\'eux le rate, il reprend aussitôt son apparence originelle et ne peut plus changer de forme tant qu\'il n\'a pas quitté la zone de lumière du sort.</p><p> Une fois que vous avez lancé ce sort, à chacun de vos tours, vous pouvez utiliser une action pour déplacer le rayon de lumière de 18 mètres au maximum dans la direction de votre choix.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rayon de soleil',
            'slug' => Str::slug('Rayon de soleil'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (ligne de 18 mètres)',
            'component' => 'V, S, M (une loupe)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Un rayon de vive lumière jaillit de votre main sur une ligne de 18 mètres de long pour 1,50 mètre de large. Chaque créature située sur cette ligne doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 6d8 dégâts radiants et sont aveuglées jusqu\'à la fin de votre prochain tour. Les autres subissent seulement la moitié des dégâts et ne sont pas aveuglées. Les vases et les morts-vivants sont désavantagés lors de ce jet de sauvegarde.</p><p> Vous pouvez créer une nouvelle ligne de lumière en dépensant votre action à n\'importe quel tour jusqu\'à la fin du sort.</p><p> Pendant toute la durée du sort, une boule de lumière brille dans votre main. Elle émet une vive lumière dans un rayon de 9 mètres et une faible lumière dans un rayon de 9 mètres supplémentaires. Cette lumière est de la même nature que la lumière du soleil.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Rayon empoisonné',
            'slug' => Str::slug('Rayon empoisonné'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Un rayon d\'énergie d\'un vert maladif frappe une créature à portée. Faites un jet d\'attaque de sort à distance contre elle. Si vous la touchez, elle subit 2d8 dégâts de poison et doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle est empoisonnée jusqu\'à la fin de votre prochain tour.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d8 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Régénération',
            'slug' => Str::slug('Régénération'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (un moulin à prières et de l\'eau bénite)',
            'duration' => '1 heure',
            'description' => '<p>Vous touchez une créature et stimulez ses capacités de guérison naturelle. La cible récupère 4d8 + 15 points de vie. Pendant toute la durée du sort, elle récupère aussi 1 point de vie au début de chacun de ses tours (10 points de vie par minute).</p><p> Si la cible a des membres sectionnés (des doigts, des jambes, une queue, etc.), ils repoussent au bout de 2 minutes. Si vous disposez de la partie amputée et la maintenez contre le moignon, le sort ressoude instantanément le membre au moignon.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Réincarnation',
            'slug' => Str::slug('Réincarnation'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (huiles et onguents rares d\'une valeur minimale de 1 000 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez un humanoïde mort ou un morceau du cadavre d\'une telle créature. Si la créature est morte depuis 10 jours au maximum, le sort lui fabrique un nouveau corps adulte et y appelle son âme. Le sort échoue si l\'âme n\'est pas libre de gagner ce corps ou si elle ne le désire pas.</p><p> La magie façonne un nouveau corps pour accueillir l\'âme, ce qui risque de modifier la race de la créature. Le MD lance 1d100 et consulte la table suivante pour déterminer quel sera le corps de la créature ramenée à la vie ou il en choisit un.</p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">d100</th><th class="px-6 py-3">Race</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">01-04</td><td class="px-4 py-4">Drakéide</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">05-13</td><td class="px-4 py-4">Nain des collines</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">14-21</td><td class="px-4 py-4">Nain des montagnes</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">22-25</td><td class="px-4 py-4">Elfe noir</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">26-34</td><td class="px-4 py-4">haut Elfe</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">35-42</td><td class="px-4 py-4">Elfe sylvestre</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">43-46</td><td class="px-4 py-4">Gnome des forêts</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">47-52</td><td class="px-4 py-4">Gnome des roches</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">53-56</td><td class="px-4 py-4">Demi-Elfe</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">57-60</td><td class="px-4 py-4">Demi-Orc</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">61-68</td><td class="px-4 py-4">Halfelin pied-léger</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">69-76</td><td class="px-4 py-4">Halfelin robuste</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">77-96</td><td class="px-4 py-4">Humain</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">97-100</td><td class="px-4 py-4">Tieffelin</td></tr></tbody></table></p><p>La créature réincarnée se souvient de son ancienne vie et de ses expériences passées. Elle garde les capacités dont elle disposait sous sa forme originelle, mais échange sa race précédente contre la nouvelle et modifie ses traits raciaux en fonction.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Réparation',
            'slug' => Str::slug('Réparation'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (deux magnétites)',
            'duration' => 'instantanée',
            'description' => '<p>Ce sort répare un objet cassé ou déchiré en un seul point, comme un maillon de chaîne cassé, deux moitiés d\'une clef brisée, une cape déchirée ou une outre de vin qui fuit. Pour cela, vous devez toucher l\'objet et la cassure ou la déchirure ne doit pas mesurer plus de 30 centimètres dans chaque dimension. Le problème se répare et il n\'en reste plus trace.</p><p> Le sort permet de réparer un objet magique ou une créature artificielle, mais pas de restaurer sa magie.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Repli expéditif',
            'slug' => Str::slug('Repli expéditif'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Ce sort vous permet de vous déplacer à une vitesse incroyable. Vous pouvez utiliser l\'action se précipiter quand vous le lancez, puis par une action bonus à chacun de vos tours jusqu\'à ce qu\'il se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Représailles infernales',
            'slug' => Str::slug('Représailles infernales'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 réaction en réponse aux dégâts que vous inflige une créature située dans votre champ de vision et dans un rayon de 18 mètres autour de vous',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Il vous suffit de pointer le doigt vers la créature qui vient de vous blesser pour qu\'elle soit momentanément enveloppée d\'un linceul de flammes infernales. Elle doit faire un jet de sauvegarde de Dextérité. Si elle échoue, elle subit 2d10 dégâts de feu, sinon la moitié seulement.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d10 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Répulsion/attirance / Aversion/attirance',
            'slug' => Str::slug('Répulsion/attirance / Aversion/attirance'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => '18 mètres',
            'component' => 'V, S, M (un cristal d\'alun trempé dans le vinaigre pour répulsion ou une goutte de miel pour attirance)',
            'duration' => '10 jours',
            'description' => '<p>Ce sort attire ou repousse les créatures de votre choix. Vous choisissez un objet ou une créature de taille Très Grande ou inférieure situés à portée ou une zone pas plus grande qu\'un cube de 60 mètres de côté. Ensuite, vous décrivez une catégorie de créatures intelligentes, comme les dragons rouges, les gobelins ou les vampires. La cible est alors baignée d\'une aura qui attire ou repousse ces créatures pendant toute la durée du sort. Vous devez choisir la répulsion ou l\'attirance comme effet de l\'aura.</p><p> <strong>Répulsion/Aversion.</strong> L\'enchantement génère chez les créatures de la catégorie choisie un intense besoin de quitter les lieux et d\'éviter la cible. Quand une telle créature voit la cible ou se trouve dans un rayon de 18 mètres autour d\'elle, elle doit réussir un jet de sauvegarde de Sagesse ou se retrouver terrorisée. Elle reste dans cet état tant qu\'elle voit la cible ou se trouve à 18 mètres ou moins d\'elle. Tant que la cible l\'effraie, la créature doit impérativement utiliser son déplacement pour gagner l\'endroit sûr le plus proche, c\'est-à-dire un endroit d\'où elle ne verra plus la cible. Si la créature s\'éloigne à plus de 18 mètres de la cible et ne la voit plus, elle n\'est plus terrorisée, mais elle le redevient si la cible apparaît de nouveau en vue ou si elle s\'approche à 18 mètres ou moins d\'elle.</p><p> <strong>Attirance.</strong>L\'enchantement génère chez la créature une envie irrépressible de s\'approcher de la cible dès qu\'elle se trouve à 18 mètres ou moins d\'elle ou dès qu\'elle la voit. Quand la créature voit la cible ou se trouve dans un rayon de 18 mètres autour d\'elle, elle doit réussir un jet de sauvegarde de Sagesse, sans quoi, à chacun de ses tours, elle se déplace de manière à entrer dans la zone désirée ou à arriver à portée de la cible. Une fois là, la créature ne peut plus s\'éloigner de sa propre initiative.</p><p> Si la cible blesse ou fait du mal à la créature affectée, cette dernière a droit à un nouveau jet de sauvegarde de Sagesse pour mettre un terme à l\'effet, comme décrit plus bas.</p><p> <strong>Mettre un terme à l\'effet.</strong> Si une créature affectée termine son tour alors qu\'elle ne se trouve pas à 18 mètres ou moins de la cible ou qu\'elle ne peut pas la voir, elle a droit à un jet de sauvegarde de Sagesse. Si elle le réussit, la cible n\'exerce plus d\'effet sur elle et elle comprend que le sentiment d\'attirance ou de répulsion qu\'elle ressentait était d\'origine magique. De plus, une créature affectée par le sort a droit à un jet de sauvegarde de Sagesse toutes les 24 heures tant que le sort persiste. Une créature qui réussit son jet de sauvegarde contre l\'effet est immunisée contre lui pendant 1 minute, après quoi, il peut de nouveau l\'affecter.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Résistance',
            'slug' => Str::slug('Résistance'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une cape miniature)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous touchez une créature consentante. Une fois avant la fin du sort, elle peut lancer 1d4 et ajouter le nombre obtenu à un unique jet de sauvegarde de son choix. Elle peut lancer le dé avant ou après avoir fait son jet de sauvegarde. Le sort se termine alors.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Respiration aquatique',
            'slug' => Str::slug('Respiration aquatique'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un petit roseau ou un brin de paille)',
            'duration' => '24 heures',
            'description' => '<p>Grâce à ce sort, un maximum de dix créatures situées à portée et dans votre champ de vision deviennent capables de respirer sous l\'eau jusqu\'à la fin du sort. Les créatures affectées conservent en plus leur mode de respiration normal.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Restauration partielle',
            'slug' => Str::slug('Restauration partielle'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez une créature et mettez fin à une maladie ou à un état qui l\'affectait, cet état étant aveugle, sourd, paralysé ou empoisonné.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Restauration suprême',
            'slug' => Str::slug('Restauration suprême'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (poussière de diamant d\'une valeur minimale de 100 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous imprégnez la créature que vous touchez d\'énergie positive, afin de la débarrasser d\'un effet débilitant. Vous pouvez ainsi réduire le niveau d\'épuisement de la cible d\'un cran ou mettre un terme à l\'un des effets suivants l\'affectant.<ul><li>Un effet qui charme ou pétrifie la cible.</li> <li>Une malédiction, y compris l\'harmonisation entre la cible et un objet magique maudit.</li> <li>Une réduction sur l\'une des valeurs de caractéristique de la cible.</li> <li>Un effet réduisant le maximum de points de vie de la cible.</li></ul></p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Résurrection',
            'slug' => Str::slug('Résurrection'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (un diamant d\'une valeur minimale de 1 000 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez le cadavre d\'une créature décédée depuis un siècle au maximum, qui n\'est pas morte de vieillesse et qui n\'est pas un mort-vivant. Si son âme est libre et consentante, la cible ressuscite avec tous ses points de vie.</p><p> Ce sort neutralise les poisons et maladies ordinaires qui affectaient éventuellement la cible à sa mort, mais il ne guérit pas les maladies magiques, les malédictions et autres effets de même type. Il faut en débarrasser la cible avant de la ressusciter, sans quoi ils l\'affligent de nouveau dès qu\'elle revient à la vie.</p><p> Ce sort referme les blessures mortelles et restaure les parties de corps éventuellement manquantes.</p><p> Le retour d\'entre les morts est une rude épreuve qui se traduit par un malus de -4 aux jets d\'attaque et de sauvegarde ainsi qu\'aux tests de caractéristique. Chaque fois que la cible termine un long repos, ce malus se réduit de 1 jusqu\'à disparaître.</p><p> Si ce sort est destiné à une créature décédée depuis un an ou plus, son incantation est extrêmement éprouvante. Après cela, vous ne pouvez plus lancer de sort et vous êtes désavantagé lors des jets d\'attaque et de sauvegarde et des tests de caractéristique jusqu\'à ce que vous ayez terminé un long repos.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Résurrection suprême',
            'slug' => Str::slug('Résurrection suprême'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (un peu d\'eau bénite à asperger et des diamants d\'une valeur totale minimale de 25 000 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez une créature décédée depuis deux cents ans au maximum, de n\'importe quelle cause sauf de vieillesse. Si son âme est libre et consentante, elle revient à la vie avec tous ses points de vie.</p><p> Le sort referme toutes les plaies, neutralise tous les poisons, guérit toutes les maladies et lève toutes les malédictions qui affectaient éventuellement la cible à sa mort. Il remplace les organes et les membres abîmés ou manquants. Il peut même fournir un nouveau corps à la cible si l\'original n\'existe plus, mais dans ce cas, vous devez prononcer le nom de la créature à ressusciter. Elle apparaît alors dans un emplacement inoccupé de votre choix dans un rayon de 3 mètres autour de vous.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Revigorer / Retour à la vie',
            'slug' => Str::slug('Revigorer / Retour à la vie'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (diamant d\'une valeur de 300 po, que le sort consume)',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez une créature morte au cours de la minute précédente. Elle revient à la vie avec 1 point de vie. Ce sort ne ramène pas à la vie les créatures mortes de vieillesse et ne restaure pas les parties manquantes du corps.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sanctification',
            'slug' => Str::slug('Sanctification'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '24 heures',
            'range' => 'contact',
            'component' => 'V, S, M (herbes, huiles et encens d\'une valeur minimale de 1 000 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous touchez un point et imprégnez la zone qui l\'entoure de puissance bénie (ou impie). Cette zone possède un rayon maximal de 18 mètres, sachant que le sort échoue si cette zone chevauche une autre zone déjà sous l\'effet d\'un sort de sanctification. La zone affectée est soumise aux effets suivants.</p><p> Premièrement, les célestes, les élémentaires, les fées, les fiélons et les morts-vivants ne peuvent entrer dans la zone, ni charmer, terroriser ou posséder les créatures qui s\'y trouvent. Une créature charmée, terrorisée ou possédée par l\'une de ces créatures ne l\'est plus dès qu\'elle pénètre dans la zone. Vous pouvez décider qu\'un ou plusieurs des types de créatures mentionnés ne seront pas affectés par cet effet.</p><p> Deuxièmement, vous pouvez apposer un effet supplémentaire sur la zone. Choisissez l\'un des effets de la liste suivante ou optez pour un autre que propose votre MD. Certains effets s\'appliquent aux créatures de la zone. Dans ce cas, vous pouvez préciser s\'ils affectent toutes les créatures, uniquement celles qui obéissent à une divinité ou à un chef particulier, ou seulement celles d\'un type donné, comme les orcs ou les trolls. Quand une créature susceptible d\'être affectée pénètre dans la zone d\'effet du sort pour la première fois de son tour ou quand elle y commence son tour, elle peut faire un jet de sauvegarde de Charisme. Si elle le réussit, elle ignore l\'effet supplémentaire jusqu\'à ce qu\'elle quitte la zone.</p><p> <strong>Courage.</strong> Les créatures affectées ne peuvent être terrorisées tant qu\'elles se trouvent dans la zone.</p><p> <strong>Ténèbres.</strong> Les ténèbres s\'abattent sur la zone. La lumière normale est incapable d\'illuminer les lieux, tout comme les lumières magiques issues d\'un sort de niveau inférieur à celui de l\'emplacement que vous avez utilisé pour lancer sanctification.</p><p> <strong>Lumière du jour.</strong> Une vive lumière emplit la zone. Les ténèbres magiques issues d\'un sort de niveau inférieur à celui de l\'emplacement que vous avez utilisé pour lancer sanctification ne peuvent étouffer cette lumière.</p><p> <strong>Protection contre l\'énergie.</strong> Les créatures affectées situées dans la zone gagnent une résistance contre un type de dégâts de votre choix, à l\'exception des dégâts contondants, perforants et tranchants.</p><p> <strong>Vulnérabilité à l\'énergie.</strong> Les créatures affectées situées dans la zone sont affligées d\'une vulnérabilité à un type de dégâts de votre choix, à l\'exception des dégâts contondants, perforants et tranchants.</p><p> <strong>Repos éternel.</strong> Les cadavres inhumés dans la zone ne peuvent pas se changer en morts-vivants.</p><p> <strong>Interférence extradimensionnelle.</strong> Les créatures affectées ne peuvent pas se déplacer ni voyager en usant de téléportation, ni de moyens extradimensionnels ou interplanaires.</p><p> <strong>Terreur.</strong> Les créatures affectées sont terrorisées tant qu\'elles se trouvent dans la zone.</p><p> <strong>Silence.</strong> Aucun son n\'émane de l\'intérieur de la zone et aucun son ne peut y pénétrer.</p><p> <strong>Langues.</strong> Les créatures affectées peuvent communiquer avec n\'importe quelle créature de la zone, même si elles ne partagent pas le même langage.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sanctuaire',
            'slug' => Str::slug('Sanctuaire'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action bonus',
            'range' => '9 mètres',
            'component' => 'V, S, M (un petit miroir en argent)',
            'duration' => '1 minute',
            'description' => '<p>Vous protégez une créature à portée contre les attaques. Jusqu\'à la fin du sort, toute créature qui vise la cible avec une attaque ou un sort néfaste doit d\'abord faire un jet de sauvegarde. Si elle le rate, elle doit choisir une nouvelle cible, sans quoi l\'attaque ou le sort est perdu. Ce sort ne protège pas la cible contre les effets de zone, comme l\'explosion d\'une boule de feu.</p><p> Ce sort se termine si la créature protégée attaque ou lance un sort affectant une créature ennemie.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sanctuaire privé de Mordenkainen',
            'slug' => Str::slug('Sanctuaire privé de Mordenkainen'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '36 mètres',
            'component' => 'V, S, M (une mince couche de plomb, un morceau de verre opaque, un bout de coton ou de tissu et de la chrysolite en poudre)',
            'duration' => '24 heures',
            'description' => '<p>Vous sécurisez par magie une zone à portée. Il s\'agit d\'un cube d\'au minimum 1,50 mètre d\'arête et d\'au maximum 30 mètres d\'arête. Le sort persiste pendant toute sa durée ou jusqu\'à ce que vous utilisiez une action pour le révoquer.</p><p> Vous décidez de la sécurité offerte par le sort au moment de l\'incantation en choisissant une ou plusieurs propriétés parmi les suivantes.<ul><li>Les sons ne peuvent pas franchir la barrière qui délimite la zone protégée.</li> <li>La barrière délimitant la zone protégée est sombre et brumeuse, ce qui empêche de voir au travers (même avec la vision dans le noir).</li> <li>Les organes sensoriels créés via un sort de divination ne peuvent pas apparaître au sein de la zone protégée ni traverser la barrière qui délimite son périmètre.</li> <li>Les sorts de divination ne peuvent pas prendre les créatures de la zone pour cible.</li> <li>Rien ne peut se téléporter à l\'intérieur ou à l\'extérieur de la zone protégée.</li> <li>Les voyages planaires sont bloqués au sein de la zone protégée.</li></ul></p><p> Si on lance ce sort tous les jours au même endroit pendant un an, ses effets deviennent permanents.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, vous pouvez augmenter la taille du cube de 30 mètres par niveau au-delà du 4e. Ainsi, avec un emplacement de niveau 5, vous pouvez protéger une zone de 60 mètres de côté.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Saut',
            'slug' => Str::slug('Saut'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une patte arrière de sauterelle)',
            'duration' => '1 minute',
            'description' => '<p>Vous touchez une créature et triplez sa distance de saut jusqu\'à ce que le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Scrutation',
            'slug' => Str::slug('Scrutation'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => 'personnelle',
            'component' => 'V, S, M (un focaliseur d\'une valeur minimale de 1 000 po comme une boule de cristal, un miroir en argent ou un bénitier rempli d\'eau bénite)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous voyez et entendez une créature donnée de votre choix, à condition qu\'elle se trouve sur le même plan d\'existence que vous. La cible doit faire un jet de sauvegarde de Sagesse, modifié par le degré de connaissance que vous avez d\'elle et le type de lien physique que vous avez établi avec elle. Si la cible sait que vous lancez ce sort, elle peut rater volontairement son jet de sauvegarde si elle veut que vous l\'observiez.</p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Connaissance</th><th class="px-6 py-3">Modificateur du jet de sauvegarde</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">Deuxième main (vous avez entendu parler de la cible)</td><td class="px-4 py-4">+5</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Première main (vous avez rencontré la cible)</td><td class="px-4 py-4">+0</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Familière (vous connaissez la cible)</td><td class="px-4 py-4">-5</td></tr></tbody></table></p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Lien</th><th class="px-6 py-3">Modificateur du jet de sauvegarde</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">Représentation ou portrait</td><td class="px-4 py-4">-2</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Possession ou habit</td><td class="px-4 py-4">-4</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Partie du corps, cheveux, ongles, etc</td><td class="px-4 py-4">-10</td></tr></tbody></table></p><p> Si la cible réussit son jet de sauvegarde, elle n\'est pas affectée et vous ne pouvez plus utiliser ce sort sur elle pendant 24 heures.</p><p> Si elle rate son jet, le sort crée un organe sensoriel invisible dans un rayon de 3 mètres autour d\'elle. Vous voyez et entendez à travers cet organe comme si vous vous trouviez à sa place. L\'organe sensoriel se déplace avec la cible et reste dans un rayon de 3 mètres autour d\'elle pendant toute la durée du sort. Une créature capable de voir les objets invisibles perçoit l\'organe sensoriel comme un orbe lumineux de la taille de votre poing.</p><p> Au lieu de prendre une créature pour cible, vous pouvez choisir un lieu que vous avez déjà vu. L\'organe sensoriel apparaît alors à cet endroit et n\'en bouge pas.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sens animal',
            'slug' => Str::slug('Sens animal'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous touchez un animal consentant. Pendant toute la durée du sort, vous pouvez utiliser votre action pour voir par ses yeux et entendre par ses oreilles. Vous continuez de percevoir le monde ainsi jusqu\'à ce que vous utilisiez votre action pour reprendre l\'usage de vos propres sens. Tant que vous utilisez les sens de la créature, vous bénéficiez de ses éventuels sens spéciaux, mais vous êtes sourd et aveugle à tout ce qui se passe autour de vous.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Serviteur invisible',
            'slug' => Str::slug('Serviteur invisible'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bout de ficelle et un morceau de bois)',
            'duration' => '1 heure',
            'description' => '<p>Ce sort crée une force invisible, dépourvue de forme et d\'intellect, mais capable d\'accomplir des tâches simples sur votre ordre jusqu\'à la fin du sort. Le serviteur se matérialise au sol, dans un emplacement inoccupé situé à portée. Il a une CA de 10, 1 pv, une Force de 2 et il est incapable d\'attaquer. S\'il tombe à 0 point de vie, le sort se termine.</p><p> Une fois à chacun de vos tours, vous pouvez utiliser une action bonus pour ordonner mentalement à votre serviteur de se déplacer d\'un maximum de 4,50 mètres et d\'interagir avec un objet. Le serviteur peut accomplir des tâches simples, à la portée d\'un domestique humain, comme aller chercher des affaires, faire le ménage, repriser, plier les habits, allumer la cheminée, servir les plats et la boisson, etc. Une fois que vous avez donné votre ordre, il fait de son mieux pour y obéir jusqu\'à ce qu\'il ait terminé. Il attend alors l\'ordre suivant. Si vous ordonnez à votre serviteur d\'accomplir une tâche qui l\'éloigne à plus de 18 mètres de vous, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Silence',
            'slug' => Str::slug('Silence'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Pendant toute la durée du sort, aucun son ne peut se créer au sein d\'une sphère de 6 mètres de rayon centrée sur un point de votre choix situé à portée, ni la traverser. Une créature ou un objet entièrement contenu dans la sphère sont immunisés contre les dégâts de tonnerre, et les créatures entièrement contenues dans la sphère sont sourdes. Il est impossible de lancer un sort à composante verbale dans la sphère.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Simulacre',
            'slug' => Str::slug('Simulacre'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '12 heures',
            'range' => 'contact',
            'component' => 'V, S, M (de la neige ou de la glace en quantité suffisante pour faire une reproduction grandeur nature de la créature à dupliquer; des cheveux, des rognures d\'ongles ou un autre échantillon de la créature à dupliquer, à placer dans la neige ou la glace, et de la poudre de rubis d\'une valeur minimale de 1 500 po que le sort consume, à saupoudrer sur le double)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous façonnez un double illusoire d\'une bête ou d\'un humanoïde à portée pendant toute la durée de l\'incantation. Le double est une créature partiellement réelle, faite de neige ou de glace, qui peut accomplir des actions et qui est affectée par les éléments extérieurs comme une créature normale. Il ressemble en tout point à l\'original, mais il n\'a que la moitié de son maximum de points de vie et n\'a pas d\'équipement lors de sa création. En dehors de cela, il utilise toutes les statistiques de la créature qu\'il représente.</p><p> Le simulacre se montre amical envers vous et les créatures que vous désignez. Il obéit à vos ordres vocaux, se déplace et agit comme vous le souhaitez et agit à votre tour lors des combats. Le simulacre est incapable d\'apprendre et de gagner en puissance, il ne monte donc jamais de niveau et ne développe jamais ses pouvoirs. Il ne peut pas non plus récupérer un emplacement de sort dépensé.</p><p> Si le simulacre est endommagé, vous pouvez le réparer dans un laboratoire d\'alchimie en utilisant des herbes rares et des minéraux d\'une valeur de 100 po par point de vie à régénérer. Le simulacre persiste jusqu\'à ce qu\'il tombe à 0 point de vie, il se transforme alors en neige et fond instantanément. Si vous lancez de nouveau ce sort, l\'éventuel double que vous avez déjà en activité est détruit sur-le-champ.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Simulacre de vie',
            'slug' => Str::slug('Simulacre de vie'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une petite quantité d\'alcool ou de spiritueux)',
            'duration' => '1 heure',
            'description' => '<p>Vous renforcez votre corps avec un semblant nécromantique de vie et gagnez 1d4 + 4 points de vie temporaires pendant la durée du sort.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous gagnez 5 points de vie temporaires de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Soin des blessures',
            'slug' => Str::slug('Soin des blessures'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>La créature que vous touchez récupère un nombre de points de vie égal à 1d8 + votre modificateur de caractéristique d\'incantation. Ce sort n\'a aucun effet sur les morts-vivants et les créatures artificielles.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les soins augmentent de 1d8 par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Soin des blessures de groupe',
            'slug' => Str::slug('Soin des blessures de groupe'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Une vague d\'énergie curative s\'étend depuis un point de votre choix situé à portée. Choisissez un maximum de six créatures présentes dans une sphère de 9 mètres de rayon centrée sur ce point. Chacune d\'entre elles récupère un montant de points de vie égal à 3d8 + votre modificateur de caractéristique d\'incantation. Ce sort n\'a aucun effet sur les morts-vivants ni sur les créatures artificielles.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les soins augmentent de 1d8 par niveau au-delà du 5e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sommeil',
            'slug' => Str::slug('Sommeil'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (une pincée de sable fin, des pétales de rose ou un criquet)',
            'duration' => '1 minute',
            'description' => '<p>Ce sort plonge quelques créatures dans un sommeil magique. Lancez 5d8. Le total indique le nombre de points de vie de créatures que le sort affecte. Les créatures se trouvant dans un rayon de 6 mètres autour d\'un point de votre choix situé à portée sont affectées dans l\'ordre croissant de leur montant de points de vie actuel (en ignorant les créatures inconscientes).</p><p> Chaque créature affectée par le sort tombe inconsciente, en commençant par celle qui possède actuellement le moins de vie. Elle reste ainsi jusqu\'à la fin de la durée du sort, jusqu\'à ce qu\'elle subisse des dégâts ou jusqu\'à ce que quelqu\'un utilise son action pour la réveiller en la secouant ou en la giflant. Soustrayez le nombre de points de vie de la créature endormie du total auquel vous avez droit avant de passer à la suivante, c\'est-à-dire celle qui a le moins de points de vie après elle. Le nombre de points de vie de la créature doit être égal ou inférieur au total vous restant, sinon le sort n\'affecte pas la créature.</p><p> Ce sort reste sans effet sur les morts-vivants et les créatures insensibles aux effets de charme.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, lancez 2d8 de plus par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Songe /Rêve',
            'slug' => Str::slug('Songe /Rêve'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'spéciale',
            'component' => 'V, S, M (une poignée de sable, une goutte d\'encre et une plume d\'écrivain prélevée sur un oiseau endormi)',
            'duration' => '8 heures',
            'description' => '<p>Ce sort façonne les rêves d\'une créature. Choisissez comme cible une créature de votre connaissance. Elle doit se trouver sur le même plan d\'existence que vous. Il est impossible de contacter une créature qui ne dort pas, comme un elfe, via ce sort. Vous entrez dans un état de transe et servez de messager, à moins que vous ne confiiez ce rôle à une autre créature consentante. Pendant la transe, le messager est conscient de son environnement, mais il ne peut pas entreprendre d\'action ni se déplacer.</p><p> Si la cible est endormie, le messager apparaît dans son rêve et peut discuter avec elle tant qu\'elle est endormie, pendant toute la durée du sort. Le messager peut aussi modeler l\'environnement onirique, en créant des objets, un paysage et d\'autres images. Il peut sortir de sa transe quand bon lui semble, mettant alors un terme prématuré au sort. La cible se souvient parfaitement de son rêve quand elle se réveille. Si la cible est éveillée quand vous lancez le sort, le messager le sait et peut sortir de sa transe (et mettre un terme au sort) ou attendre qu\'elle s\'endorme, car il apparaîtra dans ses rêves à ce moment. Vous pouvez affubler le messager d\'une apparence que la cible trouvera monstrueuse et terrifiante. Dans ce cas, le message qu\'il transmet ne peut excéder dix mots et la cible est obligée de faire un jet de sauvegarde de Sagesse. Si elle échoue, les échos de cette monstruosité fantasmagorique génèrent un cauchemar qui dure pendant tout le sommeil de la cible et l\'empêche de bénéficier des avantages de sa période de repos. De plus, quand elle se réveille, elle subit 3d6 dégâts psychiques. Si vous êtes en possession d\'un élément corporel de la cible, comme une mèche de cheveux, des rognures d\'ongles ou autre, elle est désavantagée lors de son jet de sauvegarde.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Souhait',
            'slug' => Str::slug('Souhait'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Le souhait est le plus puissant des sorts qu\'une créature mortelle puisse lancer. Vous pouvez modifier les fondements de la réalité selon vos désirs, simplement en prononçant quelques mots.</p><p> L\'utilisation basique de ce sort consiste à dupliquer les effets de n\'importe quel sort de niveau 8 ou moins. Vous n\'avez alors pas besoin de remplir les conditions requises, pas même de fournir les composantes matérielles onéreuses, le sort fait tout simplement effet.</p><p> Sinon, vous pouvez créer l\'un des effets suivants, au choix.<ul><li>Vous créez un objet d\'une valeur maximale de 25 000 po qui n\'a rien de magique. Il doit mesurer au maximum 90 mètres dans chaque dimension et apparaît en un emplacement inoccupé situé au sol et dans votre champ de vision.</li> <li>Vous permettez à un maximum de vingt créatures situées dans votre champ de vision de récupérer la totalité de leurs points de vie et vous mettez fin à tous les effets les affectant décrits dans le sort de restauration supérieure.</li> <li>Vous donnez à un maximum de dix créatures situées dans votre champ de vision une résistance à un type de dégâts de votre choix.</li> <li>Vous donnez à un maximum de dix créatures situées dans votre champ de vision l\'immunité contre un unique sort ou un autre effet magique pendant 8 heures. Par exemple, vous pouvez vous immuniser, ainsi que tous vos compagnons, contre l\'attaque absorption de vie des liches.</li> <li>Vous défaites un unique événement récent en faisant relancer un jet de dé effectué au cours du round précédent (y compris lors de votre dernier tour). La réalité se modifie pour s\'adapter au nouveau résultat. Par exemple, un souhait peut obliger un adversaire à relancer un jet de sauvegarde réussi, un ennemi à refaire son jet de critique ou un ami à rejouer un jet de sauvegarde raté. Vous pouvez avantager ou désavantager la créature qui relance le dé et vous êtes libre d\'appliquer le résultat du premier jet ou de la relance.</li></ul></p><p> Ce sort peut également vous permettre d\'accomplir des exploits dépassant le cadre des exemples précédents. Formulez votre souhait à votre MD de la manière la plus précise possible. Le MD dispose d\'une grande liberté pour gérer ce genre de cas. Plus le souhait est important, plus il y a de chances que quelque chose tourne mal. Le sort peut tout simplement échouer, avoir des effets partiels seulement ou s\'accompagner de conséquences inattendues en raison de la manière dont vous l\'avez formulé. Par exemple, si vous souhaitez qu\'un adversaire soit mort, vous pouvez très bien être projeté en avant dans le temps, à une période où il est décédé, ce qui, en pratique, vous élimine de la partie en cours de jeu. Et si vous souhaitez obtenir un objet magique légendaire ou un artefact mythique... vous pourriez très bien être instantanément transporté en sa présence... et en celle de son propriétaire actuel.</p><p> Le stress lié à l\'incantation d\'un souhait pour faire autre chose que répliquer un autre sort vous affaiblit grandement. A tel point que vous subissez 1d10 dégâts nécrotiques par niveau de sorts chaque fois que vous lancez un autre sort par la suite, et ce jusqu\'à ce que vous ayez terminé un long repos. Il est absolument impossible de réduire ces dégâts ou de les empêcher, de quelque manière que ce soit. De plus, votre Force tombe à 3 (si elle n\'est pas déjà de 3 ou moins) pendant 2d4 jours. Chaque fois que vous passez une de ces journées à vous reposer et ne rien faire de plus que des activités légères, le temps de récupération qui vous reste diminue de 2 jours. Enfin, suite à ce stress, il y a 33% de chances que vous ne puissiez plus jamais lancer souhait.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sphère de feu',
            'slug' => Str::slug('Sphère de feu'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bout de suif, une pincée de soufre et un peu de poudre de fer)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Une sphère de feu de 1,50 mètre de diamètre apparaît dans un espace inoccupé de votre choix situé à portée et subsiste pendant toute la durée du sort. Chaque créature qui termine son tour dans un rayon de 1,50 mètre autour de la sphère doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 2d6 dégâts de feu, les autres la moitié seulement.</p><p> Vous pouvez déplacer la sphère sur un maximum de 9 mètres par une action bonus. Si vous lui faites heurter une créature, cette dernière doit réussir un jet de sauvegarde contre les dégâts de la sphère qui arrête de se déplacer pour ce tour.</p><p> Quand vous déplacez la sphère, vous pouvez lui faire franchir des obstacles de 1,50 mètre de haut et la faire sauter par-dessus des fosses de 3 mètres de large. Elle embrase les objets inflammables qui ne sont ni portés ni transportés. Elle émet une vive lumière dans un rayon de 6 mètres et une faible lumière dans un rayon de 6 mètres de plus.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 2e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sphère glacée d\'Otiluke',
            'slug' => Str::slug('Sphère glacée d\'Otiluke'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '90 mètres',
            'component' => 'V, S, M (une petite sphère de cristal)',
            'duration' => 'instantanée',
            'description' => '<p>Un globe d\'énergie gelée jaillit de la pointe de votre doigt tendu et file vers un point de votre choix situé à portée. Là, il explose en une sphère de 18 mètres de rayon. Chaque créature de la zone doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 10d6 dégâts de froid, les autres la moitié seulement. Si le globe frappe une surface aqueuse ou un liquide principalement constitué d\'eau (ce qui n\'inclut pas les créatures majoritairement composées d\'eau), il gèle le liquide sur une épaisseur de 15 centimètres dans une zone de 9 mètres de côté. La glace subsiste une minute. Les créatures qui nageaient à la surlace de l\'étendue d\'eau se retrouvent prises dans la glace. Une telle créature peut utiliser une action pour faire un test de Force contre le DD du jet de sauvegarde de votre sort afin de se libérer.</p><p> Une fois que vous avez terminé l\'incantation, vous pouvez attendre avant de lancer le globe. Dans ce cas, il ressemble à une bille de fronde glacée qui reste dans votre main. Vous pouvez alors le lancer à la main (à une portée de 12 mètres) ou avec une fronde (selon la portée habituelle de cette fronde) ou le donner à une créature qui peut faire de même. Le globe se brise à l\'impact, explosant comme décrit dans la version normale du sort. Vous pouvez également poser le globe à terre sans le briser. Il explose au bout d\'une minute s\'il n\'a pas été brisé avant.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 6e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Sphère résiliente d\'Otiluke',
            'slug' => Str::slug('Sphère résiliente d\'Otiluke'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un bout de cristal transparent hémisphérique et son équivalent en gomme arabique)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Une sphère de force scintillante englobe une créature ou un objet de taille Grande ou inférieure situés à portée. Si la cible n\'est pas consentante, elle a droit à un jet de sauvegarde de Dextérité. Si elle le rate, elle est enfermée dans la sphère pour toute la durée du sort.</p><p> Rien ne peut franchir la barrière que forme la sphère ni les objets physiques, ni l\'énergie, ni les effets des autres sorts. En revanche, une créature qui se trouve au sein de la sphère y respire sans mal. La sphère est immunisée contre tous les types de dégâts. De plus, les attaques et les effets originaires de l\'extérieur de la sphère ne peuvent pas blesser la créature ou l\'objet qu\'elle abrite ; de même, une créature au sein de la sphère est incapable d\'endommager ce qui se trouve à l\'extérieur.</p><p> La sphère ne pèse rien et elle est tout juste assez grande pour contenir la créature ou l\'objet qu\'elle renferme. Une créature enfermée dans la sphère peut utiliser son action pour exercer une poussée sur la paroi de la sphère et la faire rouler à la moitié de sa vitesse habituelle. De même, une tierce personne peut ramasser la sphère ou la déplacer.</p><p> Un sort de désintégration visant la sphère la détruit sans endommager ce qu\'elle contient.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Stabilisation / Épargner les mourants',
            'slug' => Str::slug('Stabilisation / Épargner les mourants'),
            'school_id' => School::where('slug', 'necromancie')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous touchez une créature vivante à 0 point de vie, ce qui la stabilise. Ce sort n\'a aucun effet sur les morts-vivants et les créatures artificielles.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Suggestion',
            'slug' => Str::slug('Suggestion'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, M (une langue de serpent et un rayon de miel ou une goutte d\'huile d\'olive)',
            'duration' => 'concentration, jusqu\'à 8 heures',
            'description' => '<p>Vous visez une créature située à portée dans votre champ de vision et à même de vous entendre et de vous comprendre. Vous l\'influencez par magie de façon à ce qu\'elle suive la conduite que vous lui proposez (en seulement une phrase ou deux). Les créatures insensibles au charme sont immunisées contre ce sort. Vous devez formuler votre suggestion de manière à ce que la conduite à tenir semble tout à fait raisonnable. Si vous demandez à une créature de se poignarder, de se laisser tomber sur une lance, de s\'immoler ou d\'accomplir n\'importe quelle action à l\'évidence néfaste, le sort se termine automatiquement.</p><p> La cible doit faire un jet de sauvegarde de Sagesse. En cas d\'échec, elle fait de son mieux pour suivre la conduite que vous lui avez suggérée et cela peut continuer pendant toute la durée du sort. Si l\'activité suggérée peut se finir plus rapidement, le sort se termine quand la cible a accompli ce que vous lui avez demandé.</p><p> Vous pouvez spécifier des conditions qui déclenchent une activité spéciale pendant la durée du sort. Par exemple, vous pouvez suggérer à un chevalier de donner son cheval de guerre au premier mendiant qu\'il rencontre. Si les conditions ne sont pas remplies avant la fin du sort, la cible n\'accomplit pas l\'activité.</p><p> Si vous (ou l\'un de vos compagnons) blessez une créature affectée par ce sort, le sort se termine.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Suggestion de groupe',
            'slug' => Str::slug('Suggestion de groupe'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, M (une langue de serpent et soit un rayon de miel, soit une goutte d\'huile d\'olive)',
            'duration' => '24 heures',
            'description' => '<p>Vous visez un maximum de douze créatures de votre choix, situées à portée et dans votre champ de vision et à même de vous entendre et de vous comprendre. Vous les influencez par magie de façon à ce qu\'elles suivent la conduite que vous leur proposez (en seulement une phrase ou deux). Les créatures insensibles au charme sont immunisées contre ce sort. Vous devez formuler votre suggestion de manière à ce que la conduite à tenir semble tout à fait raisonnable. Si vous demandez à une créature de se poignarder, de se laisser tomber sur une lance, de s\'immoler ou d\'accomplir n\'importe quelle action à l\'évidence néfaste, l\'effet du sort s\'annule automatiquement.</p><p> Chaque cible doit faire un jet de sauvegarde de Sagesse. En cas d\'échec, la cible fait de son mieux pour suivre la conduite que vous lui avez suggérée et cela peut occuper toute la durée du sort. Si l\'activité suggérée peut se finir plus rapidement, le sort se termine quand la cible a accompli ce que vous lui avez demandé.</p><p> Vous pouvez spécifier des conditions qui déclenchent une activité spéciale pendant la durée du sort. Par exemple, vous pouvez suggérer à un groupe de soldats de donner tout leur argent au premier mendiant qu\'ils rencontrent. Si les conditions ne sont pas remplies avant la fin du sort, la cible n\'accomplit pas l\'activité.</p><p> Si vous (ou l\'un de vos compagnons) blessez une créature affectée par ce sort, le sort se termine pour elle.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, la durée du sort est de 10 jours. Si vous utilisez un emplacement de niveau 8, elle est de 30 jours et si vous utilisez un emplacement de niveau 9, elle est d\'un an et un jour.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Symbole',
            'slug' => Str::slug('Symbole'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (mercure, phosphore et poudre de diamant et d\'opale d\'une valeur totale d\'au moins 1 000 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation ou déclenchement',
            'description' => '<p>Quand vous lancez ce sort, vous inscrivez un glyphe néfaste sur une surface (comme une partie du sol, un pan de mur ou une table) ou dans un objet que l\'on peut refermer pour le dissimuler, comme un livre, un parchemin ou un coffre au trésor. Si vous optez pour une surface, le glyphe peut couvrir une zone de 3 mètres de diamètre au maximum. Si vous choisissez un objet, il ne faut plus le déplacer par la suite : si quelqu\'un le déplace à plus de 3 mètres de l\'endroit où vous avez jeté ce sort, le glyphe se brise et le sort se termine sans avoir été déclenché.</p><p> Le glyphe est presque invisible. Pour le discerner, il faut réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde de votre sort.</p><p> C\'est lors de l\'incantation que vous décidez de ce qui déclenchera le sort. Pour les glyphes tracés sur une surface quelconque, les déclencheurs les plus courants consistent à toucher le glyphe ou à se tenir dessus, à déplacer un objet recouvrant le glyphe, à s\'approcher à une certaine distance du glyphe ou encore à manipuler l\'objet sur lequel le glyphe est tracé. Pour les glyphes inscrits dans un objet, on trouve parmi les déclencheurs les plus répandus le fait d\'ouvrir l\'objet, de s\'en approcher à une certaine distance, ou de voir ou de lire le glyphe.</p><p> Vous pouvez affiner le déclencheur, de façon à ce que le sort s\'active sous certaines conditions ou en fonction de certaines caractéristiques physiques (comme le poids ou la taille), ou selon un type de créature (pour un glyphe destiné aux guenaudes ou aux métamorphes par exemple). Vous pouvez aussi définir des conditions pour que certaines créatures ne déclenchent pas le glyphe, en prononçant un mot de passe, par exemple.</p><p> Lorsque vous dessinez le glyphe, vous devez choisir l\'une des options suivantes. Une fois le glyphe déclenché, il se met à luire et emplit une sphère de 18 mètres de rayon avec une faible lumière pendant 10 minutes, après quoi, le sort se termine. Chaque créature présente dans la sphère quand le glyphe s\'active est visée par ses effets, tout comme une créature qui entre dans la sphère pour la première fois de son tour ou qui y termine son tour.</p><p> <strong>Démence.</strong> Chaque cible doit faire un jet de sauvegarde d\'Intelligence. Celles qui échouent deviennent folles pendant 1 minute. Une créature démente ne peut pas entreprendre la moindre action, ne comprend pas ce que disent les autres créatures, ne peut pas lire et ne parle que dans un charabia incompréhensible. C\'est le MD qui contrôle ses déplacements qui deviennent complètement erratiques.</p><p> <strong>Désespoir.</strong> Chaque cible doit faire un jet de sauvegarde de Charisme. Celles qui échouent sont submergées par le désespoir pendant 1 minute. Pendant tout ce temps, elles ne peuvent pas attaquer ni viser une créature avec une capacité, un sort ou un autre effet magique hostiles.</p><p> <strong>Discorde.</strong> Chaque cible doit faire un jet de sauvegarde de Constitution. Celles qui le ratent se mettent à se quereller avec les autres créatures pendant 1 minute. Pendant tout ce temps, elles sont incapables de tenir une conversation sensée et sont désavantagées lors des jets d\'attaque et des tests de caractéristique.</p><p> <strong>Douleur.</strong> Chaque cible doit faire un jet de sauvegarde de Constitution. Celles qui échouent sont neutralisées par une douleur insoutenable pendant 1 minute.</p><p> <strong>Étourdissement.</strong> Chaque cible doit faire un jet de sauvegarde de Sagesse. Celles qui échouent sont étourdies pendant 1 minute.</p><p> <strong>Frayeur.</strong> Chaque cible doit faire un jet de sauvegarde de Sagesse. Celles qui échouent sont terrorisées pendant 1 minute. Une cible terrorisée lâche tout ce qu\'elle tient et doit s\'éloigner du glyphe de 9 mètres au minimum à chacun de ses tours, dans la mesure du possible.</p><p> <strong>Mort.</strong> Chaque cible doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 10d10 dégâts nécrotiques, les autres la moitié seulement.</p><p> <strong>Sommeil.</strong> Chaque cible doit faire un jet de sauvegarde de Sagesse. Celles qui échouent tombent inconscientes pendant 10 minutes. Une telle créature se réveille si elle subit des dégâts ou si quelqu\'un utilise son action pour la réveiller en la secouant ou la giflant.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Télékinésie',
            'slug' => Str::slug('Télékinésie'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous devenez capable de déplacer ou de manipuler des créatures ou des objets par la pensée. Lorsque vous lancez ce sort, puis en tant qu\'action à chaque round pendant toute la durée du sort, vous pouvez exercer votre force de volonté sur une créature ou un objet situés à portée et dans votre champ de vision, ce qui provoque l\'effet approprié indiqué plus bas. Vous pouvez affecter la même cible, round après round, ou en choisir une nouvelle quand vous le désirez. Si vous changez de cible, la précédente n\'est plus affectée.</p><p> <strong>Créatures.</strong> Vous pouvez essayer de déplacer une créature de taille Très Grande ou inférieure. Faites un test de caractéristique avec votre caractéristique d\'incantation, opposé au test de Force de la cible. Si vous l\'emportez, vous déplacez la créature d\'un maximum de 9 mètres dans la direction de votre choix, y compris en hauteur, mais pas hors de portée du sort. Jusqu\'à la fin de votre prochain tour, la créature est entravée dans votre étreinte télékinétique. Une créature soulevée dans les airs reste suspendue dans le vide.</p><p> Lors des rounds suivants, vous pouvez utiliser votre action pour maintenir votre prise télékinétique sur la cible en répétant les tests opposés.</p><p> <strong>Objets.</strong> Vous pouvez essayer de déplacer un objet pesant au maximum 500 kilos. Si cet objet n\'est ni porté ni transporté, vous le déplacez automatiquement d\'un maximum de 9 mètres dans la direction de votre choix, mais pas hors de portée du sort.</p><p> Si l\'objet est porté ou transporté par une créature, faites un test de caractéristique avec votre caractéristique d\'incantation, opposé au test de Force de cette créature. Si vous l\'emportez, vous éloignez l\'objet de cette créature sur un maximum de 9 mètres dans la direction de votre choix, mais pas hors de portée du sort.</p><p> Vous exercez un contrôle précis sur les objets pris dans votre étreinte télékinétique, vous pouvez donc manipuler un outil basique, ouvrir une porte ou un récipient, déposer un objet dans un récipient ou en retirer un, ou encore verser le contenu d\'une fiole.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Télépathie',
            'slug' => Str::slug('Télépathie'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'illimitée',
            'component' => 'V, S, M (une paire d\'anneaux en argent liés)',
            'duration' => '24 heures',
            'description' => '<p>Vous créez un lien télépathique entre vous et une créature consentante qui vous est familière. Elle peut se trouver n\'importe où tant qu\'elle est sur le même plan d\'existence que vous. Le sort se termine si vous ne vous trouvez plus tous deux sur le même plan.</p><p> Tant que le sort persiste, vous et la cible pouvez échanger instantanément des mots, des images, des sons et d\'autres messages sensoriels grâce au lien qui vous unit. La cible sait que c\'est avec vous qu\'elle communique. Le sort permet à toute créature dotée d\'une Intelligence minimale de 1 de comprendre la signification des mots que vous employez et de saisir le sens des messages sensoriels transmis.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Téléportation',
            'slug' => Str::slug('Téléportation'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Ce sort vous transporte instantanément à la destination de votre choix, ainsi qu\'un maximum de huit créatures consentantes de votre choix situées à portée et dans votre champ de vision ou bien ainsi qu\'un unique objet situé à portée et dans votre champ de vision. Si vous prenez un objet pour cible, il doit tenir dans un cube de 3 mètres de côté et il ne doit pas être porté ni transporté par une créature non consentante. Vous devez choisir une destination connue, située sur le même plan d\'existence que vous. C\'est votre degré de familiarité avec la destination qui détermine vos chances d\'arriver sur place. Le MD lance 1d100 et consulte la table suivante.</p><p><table class="w-full text-sm text-left text-gray-500 border-collapse shadow-md"><thead class="text-xs text-gray-700 uppercase bg-gray-100"><th class="px-6 py-3">Familiarité</th><th class="px-6 py-3">Incident</th><th class="px-6 py-3">Zone similaire</th><th class="px-6 py-3">À proximité</th><th class="px-6 py-3">Sur place</th></thead><tbody><tr class="bg-white border-b"><td class="px-4 py-4">Cercle permanent</td><td class="px-4 py-4">—</td><td class="px-4 py-4">—</td><td class="px-4 py-4">—</td><td class="px-4 py-4">01-100</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Objet associé</td><td class="px-4 py-4">—</td><td class="px-4 py-4">—</td><td class="px-4 py-4">—</td><td class="px-4 py-4">01-100</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Très familier</td><td class="px-4 py-4">01-05</td><td class="px-4 py-4">06-13</td><td class="px-4 py-4">14-24</td><td class="px-4 py-4">25-100</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Vu à quelques reprises</td><td class="px-4 py-4">01-33</td><td class="px-4 py-4">34-43</td><td class="px-4 py-4">44-53</td><td class="px-4 py-4">54-100</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Vu une seule fois</td><td class="px-4 py-4">01-43</td><td class="px-4 py-4">44-53</td><td class="px-4 py-4">54-73</td><td class="px-4 py-4">74-100</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Description</td><td class="px-4 py-4">01-43</td><td class="px-4 py-4">44-53</td><td class="px-4 py-4">54-73</td><td class="px-4 py-4">74-100</td></tr><tr class="bg-white border-b"><td class="px-4 py-4">Destination factice</td><td class="px-4 py-4">01-50</td><td class="px-4 py-4">51-100</td><td class="px-4 py-4">—</td><td class="px-4 py-4">—</td></tr></tbody></table></p><p><strong>Familiarité.</strong> « Cercle permanent » désigne un cercle de téléportation dont vous connaissez la séquence de symboles.</p><p> « Objet associé » indique que vous possédez un objet prélevé à la destination choisie au cours des six derniers mois, comme un livre sorti de l\'étagère de la bibliothèque d\'un magicien, les draps d\'une suite royale ou un éclat de marbre arraché au tombeau secret d\'une liche.</p><p> « Très familier » désigne un endroit où vous vous êtes souvent rendu, un lieu que vous avez soigneusement étudié ou un endroit que vous voyez au moment de l\'incantation.</p><p> « Vu à quelques reprises » correspond aux endroits que vous avez vus plus d\'une fois, mais avec lesquels vous n\'êtes pourtant pas très familier.</p><p> « Vu une fois » représente un lieu vu une seule fois, éventuellement par magie.</p><p> « Description » correspond à un endroit que vous connaissez seulement via la description d\'autrui, aussi bien au niveau de son emplacement que de son apparence, éventuellement grâce à une carte.</p><p> « Destination factice » désigne les endroits qui n\'existent pas, si par exemple vous avez tenté de scruter le sanctuaire d\'un ennemi mais n\'avez vu qu\'une illusion ou si vous essayez de vous téléporter en un endroit familier qui n\'existe plus.</p><p> <strong>Sur place.</strong> Vous et vos compagnons (ou l\'objet téléporté) apparaissez exactement où vous le souhaitiez.</p><p> <strong>À proximité.</strong> Vous et vos compagnons (ou l\'objet téléporté) apparaissez à une distance aléatoire de votre destination, éloignés dans une direction tout aussi aléatoire. La distance qui vous sépare de votre destination est de 1d10 x 1d10 pour cent de la distance que le sort vous a fait parcourir. Par exemple, si vous essayez de vous téléporter à une destination située à 180 kilomètres de votre position, que vous arrivez à proximité, et que vous obtenez 5 et 3 aux d10, vous allez arriver à 15 pour cent de distance de votre destination, c\'est-à-dire à 27 kilomètres. Le MD détermine la direction dans laquelle vous vous êtes éloignés de la cible en lançant un d8, le 1 représentant le nord, le 2 le nord-est, le 3 l\'est, etc... jusqu\'à faire le tour de la rose des vents. Si vous comptiez vous téléporter dans une cité portuaire et arrivez à 27 kilomètres au large de ses côtes, en pleine mer, vous pourriez bien avoir quelques ennuis.</p><p> <strong>Zone similaire.</strong> Vous et vos compagnons (ou l\'objet téléporté) arrivez dans une zone différente de celle prévue, mais dotée de caractéristiques visuelles ou thématiques similaires. Par exemple, si vous comptiez regagner votre laboratoire, vous pourriez arriver dans celui d\'un autre magicien ou dans une boutique d\'alchimie qui possède nombre d\'outils et d\'appareils présents dans votre laboratoire. En général, vous apparaissez dans l\'endroit ressemblant à votre destination le plus proche de celle-ci, mais comme le sort n\'a pas de limite de portée, vous pouvez tout à fait arriver n\'importe où sur votre plan d\'existence.</p><p> <strong>Incident.</strong> La magie imprévisible du sort complique le voyage. Chaque créature téléportée (ou l\'objet téléporté) subit 3d10 dégâts de force tandis que le MD relance le dé pour savoir où vous arrivez (sachant qu\'il peut se produire plusieurs incidents, chacun infligeant ses propres dégâts).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tempête de feu',
            'slug' => Str::slug('Tempête de feu'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 7)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Une tempête faite de nuages de feu ronflant se forme à l\'endroit que vous avez choisi, à portée. La tempête occupe une zone composée d\'un maximum de dix cubes de 3 mètres d\'arête, que vous pouvez disposer comme bon vous semble. Chaque cube doit avoir au moins une face adjacente à celle d\'un autre cube. Chaque créature de la zone doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 7d10 dégâts de feu, les autres la moitié seulement.</p><p> Le feu endommage les objets présents dans la zone et embrase les objets inflammables de la zone que personne ne porte ou ne transporte. Si vous le désirez, les flammes peuvent épargner la végétation présente dans la zone.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tempête de grêle',
            'slug' => Str::slug('Tempête de grêle'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '90 mètres',
            'component' => 'V, S, M (une pincée de poussière et quelques gouttes d\'eau)',
            'duration' => 'instantanée',
            'description' => '<p>Des grêlons durs comme de la pierre s\'abattent dans un cylindre de 6 mètres de rayon pour 12 mètres de haut, centré sur un point à portée. Chaque créature présente dans le cylindre doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 2d8 dégâts contondants et 4d6 dégâts de froid tandis que les autres en subissent la moitié seulement.</p><p> Les grêlons transforment la zone en terrain difficile jusqu\'à la fin de votre prochain tour.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, les dégâts contondants augmentent de 1d8 par niveau au-delà du 4e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tempête de neige',
            'slug' => Str::slug('Tempête de neige'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une pincée de poussière et quelques gouttes d\'eau)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Jusqu\'à la fin du sort, une averse de flocons et de neige fondue s\'abat dans un cylindre de 6 mètres de haut pour un rayon de 12 mètres centré sur un point de votre choix situé à portée. Dans la zone, la visibilité est fortement obstruée et les flammes à nu s\'éteignent.</p><p> Le sol de la zone est couvert d\'une couche de glace si glissante que le terrain devient difficile. Quand une créature entre dans la zone d\'effet pour la première fois de son tour ou y commence son tour, elle doit faire un jet de sauvegarde de Dextérité. Si elle échoue, elle tombe à terre.</p><p> Si une créature se concentre dans la zone d\'effet du sort, elle doit faire un jet de sauvegarde de Constitution contre le DD du jet de sauvegarde de votre sort. Si elle échoue, elle perd sa concentration.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tempête vengeresse',
            'slug' => Str::slug('Tempête vengeresse'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 9)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'champ de vision',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Des nuées d\'orage menaçantes se forment en un point situé dans votre champ de vision et s\'étendent dans un rayon de 108 mètres. Des éclairs strient la zone, le tonnerre gronde et un vent fort se lève. Chaque créature située sous le nuage lors de son apparition (mais pas à plus de 1500 mètres au-dessous) doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 2d6 dégâts de tonnerre et sont sourdes pendant 5 minutes.</p><p> À chaque round où vous continuez à vous concentrer sur ce sort, il génère des effets supplémentaires à votre tour.</p><p> <strong>Round 2.</strong> Une pluie acide se met à tomber. Les créatures et les objets situés sous le nuage subissent 1d6 dégâts d\'acide.</p><p> <strong>Round 3.</strong> Vous appelez six éclairs qui s\'abattent du nuage sur six créatures ou objets de votre choix situés sous la nuée. Une même créature ou un même objet ne peut pas être la cible de plusieurs éclairs. Une créature frappée par la foudre doit faire un jet de sauvegarde de Dextérité. Si elle échoue, elle subit 10d6 dégâts de foudre, la moitié seulement si elle réussit.</p><p> <strong>Round 4.</strong> La grêle se met à tomber. Chaque créature située sous le nuage subit 2d6 dégâts contondants.</p><p> <strong>Rounds 5 à 10.</strong> Des bourrasques et une pluie glacée balaient la zone sous le nuage et la transforment en terrain difficile où la visibilité est fortement obstruée. Chaque créature qui s\'y trouve subit 1d6 dégâts de froid. Il est impossible d\'effectuer une attaque avec une arme à distance dans la zone. Le vent et la pluie fonctionnent comme une distraction sévère quand il s\'agit de se concentrer sur un sort. Enfin, des bourrasques de vent fort (de 30 à 75 km/h) dispersent automatiquement le brouillard, la brume et les phénomènes similaires stagnant dans la zone, qu\'ils soient d\'origine ordinaire ou magique.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Ténèbres',
            'slug' => Str::slug('Ténèbres'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, M (des poils de chauve-souris et une goutte de poix ou un bout de charbon)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Des ténèbres magiques se répandent depuis un point de votre choix situé à portée, jusqu\'à englober une sphère de 4,50 mètres de rayon. Les ténèbres s\'étendent en franchissant tout angle éventuel. La vision dans le noir d\'une créature ne suffit pas à percer ces ténèbres et les lumières non magiques se révèlent incapables de les éclairer.</p><p> Si le point que vous avez choisi est un objet en votre possession ou un objet qui n\'est ni porté ni transporté par autrui, les ténèbres émanent de l\'objet et se déplacent avec lui. Il suffit de recouvrir complètement l\'objet affecté avec un objet opaque, comme un bol ou un heaume, pour bloquer les ténèbres.</p><p> Si une partie de la zone affectée par ce sort chevauche une zone de lumière issue d\'un sort de niveau 2 ou moins, elle dissipe le sort de lumière.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tentacules d\'Hadar',
            'slug' => Str::slug('Tentacules d\'Hadar'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (3 m de rayon)',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous invoquez la puissance d\'Hadar, le Sombre Appétit. Des filaments d\'énergie noire jaillissent de vous et fouettent toutes les créatures situées dans un rayon de 3 mètres. Chacune doit faire un jet de sauvegarde de Force. En cas d\'échec, une créature subit 2d6 dégâts nécrotiques et ne peut pas utiliser de réaction jusqu\'à son prochain tour. Une créature qui réussit son jet de sauvegarde subit seulement la moitié des dégâts et ne souffre pas d\'autres effets.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d6 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tentacules noirs d\'Evard',
            'slug' => Str::slug('Tentacules noirs d\'Evard'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (un bout de tentacule appartenant à une pieuvre ou un calmar géant)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Des tentacules noirs grouillants envahissent le sol d\'un emplacement de 6 mètres de côté situé à portée et dans votre champ de vision. Pendant toute la durée du sort, ils transforment la zone en terrain difficile.</p><p> Quand une créature pénètre dans la zone affectée pour la première fois au cours d\'un tour, ou quand elle débute son tour dans cette zone, elle doit réussir un jet de sauvegarde de Dextérité, sans quoi elle reçoit 3d6 dégâts contondants et se retrouve entravée par les tentacules jusqu\'à la fin du sort. Une créature qui commence son tour déjà entravée dans la zone subit 3d6 dégâts contondants.</p><p> Une créature entravée par les tentacules peut utiliser son action pour faire un test de Force ou de Dextérité (à elle de choisir) contre le DD de sauvegarde de votre sort. Si elle le réussit, elle parvient à se libérer.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Terrain hallucinatoire',
            'slug' => Str::slug('Terrain hallucinatoire'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 4)->first()->getKey(),
            'cast_time' => '10 minutes',
            'range' => '90 mètres',
            'component' => 'V, S, M (une pierre, une brindille et un bout de plante verte)',
            'duration' => '24 heures',
            'description' => '<p>Vous maquillez le terrain naturel dans un cube de 45 mètres d\'arête situé à portée et lui attribuez l\'apparence, les bruits et les odeurs d\'un autre type de terrain naturel. Ainsi, vous pouvez faire passer un champ ou une route pour un marais, une colline, une crevasse ou un autre terrain difficile voire impossible à traverser. Vous pouvez aussi déguiser une mare en prairie, un précipice en pente douce ou un goulet semé de rocaille en route large et aplanie. Les structures manufacturées, l\'équipement et les créatures de la zone ne changent pas d\'apparence.</p><p> Les caractéristiques tactiles de la zone ne changent pas, les créatures qui y pénètrent risquent donc fort de percer l\'illusion à jour. Si la différence entre le terrain réel et l\'illusion n\'est pas évidente au toucher, une créature qui examine soigneusement la zone a droit à un test d\'Intelligence (Investigation) opposé au DD du jet de sauvegarde de votre sort pour percer l\'illusion à jour. Une fois qu\'une créature a compris l\'illusion, elle la voit comme une image floue superposée au terrain réel.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Terreur / Peur',
            'slug' => Str::slug('Terreur / Peur'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 9 mètres)',
            'component' => 'V, S, M (une plume blanche ou un coeur de poule)',
            'duration' => 'concentration, jusqu\'à 1 minute.',
            'description' => '<p>Vous projetez une image fantasmagorique des pires terreurs d\'une créature. Chaque créature située dans un cône de 9 mètres doit réussir un jet de sauvegarde de Sagesse ou lâcher tout ce qu\'elle tient en main et être terrorisée pendant toute la durée du sort.</p><p> Tant qu\'une créature est terrorisée par ce sort, elle est obligée d\'utiliser l\'action se précipiter à chacun de ses tours et de s\'éloigner de vous par l\'itinéraire le plus sûr, à moins qu\'elle n\'ait nulle part où aller. Si elle termine son tour en un endroit où vous ne figurez plus dans son champ de vision, elle peut faire un jet de sauvegarde de Sagesse. Si elle le réussit, le sort se termine pour elle.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Texte illusoire',
            'slug' => Str::slug('Texte illusoire'),
            'school_id' => School::where('slug', 'illusion')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'is_rituel' => true,
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'S, M (de l\'encre à base de plomb valant au minimum 10 po, que le sort consume)',
            'duration' => '10 jours',
            'description' => '<p>Vous écrivez sur un papier, un parchemin ou un autre matériau adapté à l\'écriture et l\'imprégnez d\'une puissante illusion qui persiste pendant toute la durée du sort.</p><p> À vos yeux et à ceux de toutes les créatures que vous désignez lors de l\'incantation, l\'écriture semble normale, de votre main, et transmet le message que vous aviez en tête en rédigeant le texte. Pour les autres personnes, vos écrits semblent appartenir à une langue inconnue ou magique complètement inintelligible, ou alors ils transmettent un message complètement différent de la réalité, rédigé d\'une main qui n\'est pas la vôtre et dans une autre langue de votre connaissance.</p><p> Si quelqu\'un dissipe le sort, l\'illusion disparaît, mais le message original aussi.</p><p> Une créature dotée de vision parfaite est capable de lire le message original.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Thaumaturgie',
            'slug' => Str::slug('Thaumaturgie'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'jusqu\'à 1 minute',
            'description' => '<p>Vous créez une manifestation merveilleuse mineure ou un signe de puissance surnaturelle à portée, ce qui génère l\'un des effets magiques suivants à portée.<ul><li>Votre voix retentit jusqu\'à trois fois plus fort que la normale pendant 1 minute.</li> <li>Les flammes vacillent, se ravivent, se réduisent ou changent de couleur pendant 1 minute.</li> <li>Vous provoquez des secousses inoffensives qui agitent le sol pendant 1 minute.</li> <li>Vous émettez un son instantané qui émane d\'un point de votre choix situé à portée, comme un roulement de tonnerre, le croassement d\'un corbeau ou des murmures inquiétants.</li> <li>Vous provoquez la fermeture ou l\'ouverture violente et immédiate d\'une porte ou d\'une fenêtre non verrouillée.</li> <li>Vous modifiez l\'apparence de vos yeux pendant 1 minute.</li></ul></p><p> Si vous lancez ce sort à plusieurs reprises, vous ne pouvez avoir que trois effets d\'une minute actifs à la fois. Vous pouvez révoquer un tel effet par une action.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Toile d\'araignée',
            'slug' => Str::slug('Toile d\'araignée'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bout de toile d\'araignée)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => '<p>Vous invoquez une masse de toiles d\'araignées épaisses et collantes en un point de votre choix situé à portée. Pendant toute la durée du sort, les toiles occupent un cube de 6 mètres d\'arête centré sur le point choisi. Elles forment un terrain difficile à la visibilité légèrement obstruée.</p><p> Si les toiles ne sont pas ancrées entre deux éléments solides, comme des murs ou des arbres, ou disposées en couches sur le sol, le plafond ou un mur, elles s\'effondrent sur elles-mêmes et le sort se termine au début de votre prochain tour. Des toiles disposées en couches superposées sur une surface plane s\'accumulent sur une épaisseur de 1,50 mètre.</p><p> Chaque créature qui commence son tour dans les toiles ou qui y pénètre lors de son tour doit faire un jet de sauvegarde de Dextérité. En cas d\'échec, la créature est entravée tant qu\'elle reste dans les toiles ou jusqu\'à ce qu\'elle se libère.</p><p> Une créature entravée par les toiles peut utiliser son action pour faire un test de Force contre le DD du jet de sauvegarde de votre sort. Si elle le réussit, elle n\'est plus entravée.</p><p> Les toiles sont inflammables. Un cube de toiles de 1,50 mètre d\'arête exposé au feu brûle en 1 round, infligeant 2d4 dégâts de feu à toute créature qui commence son tour dans les flammes.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Trait de feu',
            'slug' => Str::slug('Trait de feu'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 0)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Vous lancez un trait enflammé sur une créature ou un objet à portée. Faites un jet d\'attaque de sort contre la cible. Si vous touchez, elle subit 1d10 dégâts de feu. Si le sort touche un objet inflammable qui n\'est ni porté ni transporté, il s\'embrase.</p><p> Les dégâts du sort augmentent de 1d10 quand vous atteignez le niveau 5 (2d10), le niveau 11 (3d10) et le niveau 17 (4d10).</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Trait ensorcelé / Carreau ensorcelé',
            'slug' => Str::slug('Trait ensorcelé / Carreau ensorcelé'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une brindille issue d\'un arbre frappé par la foudre)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Un éclair d\'énergie bleutée frappe une cible à portée et forme un arc électrique persistant entre elle et vous. Faites une attaque de sort à distance contre cette créature. Si vous touchez, elle subit 1d12 dégâts de foudre et, à chacun de vos tours pendant toute la durée du sort, vous pouvez utiliser votre action pour lui infliger automatiquement 1d12 dégâts de foudre. Le sort se termine si vous utilisez votre action pour faire autre chose. Il se termine également si la cible passe hors de portée du sort ou bénéficie d\'un abri total contre vous.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts initiaux augmentent de 1d12 par emplacement de sort au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Transport végétal / Voie végétale',
            'slug' => Str::slug('Transport végétal / Voie végétale'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => '<p>Ce sort crée un lien magique entre une plante inanimée de taille Grande ou supérieure située à portée et une autre plante, située à n\'importe quelle distance mais sur le même plan d\'existence. Vous devez impérativement avoir vu ou touché la plante de destination au moins une fois auparavant. Pendant toute la durée du sort, n\'importe quelle créature peut entrer par la plante de départ et ressortir par celle d\'arrivée en dépensant 1,50 mètre de déplacement.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tremblement de terre',
            'slug' => Str::slug('Tremblement de terre'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '150 mètres',
            'component' => 'V, S, M (une pincée de poussière, un caillou et un peu d\'argile)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous créez une perturbation sismique en un point situé au niveau du sol, à portée dans votre champ de vision. Pendant toute la durée du sort, d\'intenses secousses agitent le sol dans un cercle de 30 mètres de rayon centré sur le point choisi. Elles ébranlent toutes les créatures et structures en contact avec le sol de cette zone.</p><p> Le sol affecté devient un terrain difficile. Toute créature qui se trouve en contact avec le sol et en pleine concentration doit réussir un jet de sauvegarde de Constitution sous peine de voir sa concentration se briser.</p><p> Quand vous lancez ce sort et à la fin de chacun de vos tours passés à vous concentrer dessus, toutes les créatures en contact avec le sol de la zone affectée doivent faire un jet de sauvegarde de Dextérité. Celles qui échouent tombent à terre.</p><p> Le sort a des effets supplémentaires selon le terrain affecté. C\'est au MD de déterminer cela.</p><p> <strong>Fissures.</strong> Une fois que vous avez lancé le sort, des fissures s\'ouvrent dans toute la zone affectée au début de votre tour suivant. 1d6 fissures s\'ouvrent en des points choisis par le MD. Chacune fait 1d10 x 3 mètres de profondeur pour 3 mètres de large et s\'étend d\'un bout de la zone sismique à l\'autre. Une créature qui se tient sur l\'emplacement d\'une fissure en train de s\'ouvrir doit faire un jet de sauvegarde de Dextérité. Si elle le rate, elle tombe dedans, sinon elle réussit à s\'écarter à temps.</p><p> Une structure s\'effondre automatiquement si une fissure s\'ouvre sous elle (voir plus loin).</p><p> <strong>Structures.</strong> Les secousses infligent 50 dégâts contondants à toute structure en contact avec le sol au moment où vous lancez le sort et au début de chacun de vos tours jusqu\'à la fin du sort. Si l\'une d\'elles tombe à 0 point de vie, elle s\'effondre et blesse peut-être les créatures voisines. Une créature qui se trouve près d\'un bâtiment en train de s\'effondrer, à une distance égale ou inférieure à la moitié de la hauteur de ce bâtiment, doit faire un jet de sauvegarde de Dextérité. Si elle échoue, elle subit 5d6 dêgâts contondants, elle tombe à terre et elle est ensevelie sous les décombres. Il faut réussir un test de Force (Athlétisme) DD 20 via une action pour y échapper. Le MD peut modifier le DD en fonction de la nature des décombres. Si la créature réussit son jet de sauvegarde, elle subit seulement la moitié des dégâts, ne tombe pas à terre et n\'est pas ensevelie.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Tsunami',
            'slug' => Str::slug('Tsunami'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 8)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => 'champ de vision',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 6 rounds',
            'description' => '<p>Un mur d\'eau apparaît soudain en un point de votre choix situé à portée. Il peut faire jusqu\'à 90 mètres de long, autant de haut et 15 mètres d\'épaisseur. Il persiste pendant toute la durée du sort.</p><p> Quand le mur apparaît, toutes les créatures situées dans la zone qu\'il occupe doivent faire un jet de sauvegarde de Force. Celles qui échouent reçoivent 6d10 dégâts contondants, les autres la moitié seulement.</p><p> Une fois le mur apparu, il s\'éloigne de vous sur une distance de 15 mètres (emportant toutes les créatures qui se trouvent en son sein) au début de chacun de vos tours. Chaque créature de taille Grande ou inférieure qui se trouve dans le mur ou dans un espace où le mur pénètre lors de son déplacement doit réussir un jet de sauvegarde de Force ou subir 5d10 dégâts contondants. Une créature subit ces dégâts une fois seulement par round. À la fin du tour, la hauteur du mur se réduit de 15 mètres et les dégâts qu\'il inflige aux tours suivants se réduisent de 1d10. Le sort se termine quand le mur ne fait plus que 0 mètre de haut.</p><p> Une créature prisonnière du mur peut se déplacer en nageant, mais la vague est si puissante qu\'elle doit pour cela réussir un test de Force (Athlétisme) contre le DD de votre sort. Si elle rate ce test, elle est incapable de se déplacer. Une créature qui se déplace hors du mur tombe à terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Vague destructrice',
            'slug' => Str::slug('Vague destructrice'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 5)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (9 mètres)',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => '<p>Vous frappez le sol et créez une onde d\'énergie divine qui se répand alentour. Toutes les créatures de votre choix situées dans un rayon de 9 mètres autour de vous doivent faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 5d6 dégâts de tonnerre et 5d6 dégâts radiants ou nécrotiques (à vous de choisir). De plus, elles sont projetées à terre. Celles qui réussissent subissent seulement la moitié des dégâts et ne tombent pas à terre.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Vague tonnante',
            'slug' => Str::slug('Vague tonnante'),
            'school_id' => School::where('slug', 'evocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 1)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'personnelle (cube de 4,50 mètres)',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => '<p>Une vague de force tonnante émane de vous. Chaque créature située dans un cube de 4,50 mètres d\'arête partant de vous doit faire un jet de sauvegarde de Constitution. Les créatures qui échouent subissent 2d8 dégâts de tonnerre et sont repoussées de 3 mètres en face de vous. Les autres subissent seulement la moitié des dégâts et ne sont pas repoussées.</p><p> De plus, les objets qui ne sont pas arrimés et se trouvent entièrement englobés dans la zone affectée sont automatiquement repoussés de 3 mètres à l\'opposé de vous. Le sort émet un grondement de tonnerre qui s\'entend dans un rayon de 90 mètres.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 1er.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Vent divin / Marche sur le vent',
            'slug' => Str::slug('Vent divin / Marche sur le vent'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (du feu et de l\'eau bénite)',
            'duration' => '8 heures',
            'description' => '<p>Vous et un maximum de dix créatures consentantes, situées à portée et dans votre champ de vision, prenez une forme gazeuse pendant toute la durée du sort et ressemblez à des volutes de nuages. Sous cette forme, une créature affectée a une vitesse de vol de 90 mètres et une résistance aux dégâts des armes non magiques. Elle est limitée dans ses actions : elle peut juste se précipiter ou reprendre sa forme normale. Il lui faut une minute pour reprendre sa forme normale et, pendant toute cette période, elle est neutralisée et incapable de bouger. Elle peut de nouveau se muer en nuage tant que le sort n\'est pas terminé, cette nouvelle transformation lui demandant aussi une minute.</p><p> Si une créature est sous forme de nuage et en plein vol quand le sort se termine, elle descend de 18 mètres par round pendant 1 minute, jusqu\'à ce qu\'elle atterrisse, en parfaite sécurité. Si elle n\'arrive pas à atterrir avant la fin de cette minute, elle tombe sur la distance qui lui reste à parcourir.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Verrou magique',
            'slug' => Str::slug('Verrou magique'),
            'school_id' => School::where('slug', 'abjuration')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (poussière d\'or d\'une valeur minimum de 25 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation',
            'description' => '<p>Vous touchez une ouverture fermée, comme une porte, une fenêtre, un portail, un coffre ou autre. Elle se verrouille alors pour toute la durée du sort. Vous et toutes les créatures désignées lors de l\'incantation du sort pouvez ouvrir l\'ouverture normalement. Vous pouvez aussi définir un mot de passe qui, une fois prononcé dans un rayon de 1,50 mètre autour de l\'objet fermé, dissipe le sort pendant 1 minute. Sinon, impossible d\'ouvrir l\'objet à moins de le briser ou de dissiper ou supprimer le sort. Un sort de déblocage supprime le verrou magique pendant 10 minutes.</p><p> Tant que l\'objet est affecté par ce sort, il est bien plus difficile à briser ou à ouvrir de force: le DD pour le briser ou crocheter ses éventuelles serrures augmente de 10.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Vision dans le noir',
            'slug' => Str::slug('Vision dans le noir'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une pincée de carotte séchée ou une agate)',
            'duration' => '8 heures',
            'description' => '<p>Vous touchez une créature consentante pour lui permettre de voir dans le noir. Pendant toute la durée du sort, elle bénéficie de la vision dans le noir à une portée de 18 mètres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Vision suprême',
            'slug' => Str::slug('Vision suprême'),
            'school_id' => School::where('slug', 'divination')->first()->getKey(),
            'level_id' => Level::where('level_name', 6)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un collyre coûtant 25 po, fait de poudre de champignon, de safran et de graisse, que le sort consume)',
            'duration' => '1 heure',
            'description' => '<p>Grâce à ce sort, la créature consentante que vous touchez est capable de voir les choses telles qu\'elles sont réellement. Pendant toute la durée du sort, la cible bénéficie de vision parfaite, repère les portes dérobées cachées par magie et voit le plan éthéré, tout cela dans un rayon de 36 mètres.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Vol',
            'slug' => Str::slug('Vol'),
            'school_id' => School::where('slug', 'transmutation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une rémige)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => '<p>Vous touchez une créature consentante et lui conférez la capacité de voler à une vitesse de 18 mètres pendant toute la durée du sort. Si la cible se trouve dans les airs quand le sort se termine, elle tombe, à moins de pouvoir arrêter sa chute.</p>',
            'upper_lvl' => '<p>Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, vous pouvez viser une créature de plus par niveau au-delà du 3e.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Voracité d\'Hadar / Appétit d\'Hadar',
            'slug' => Str::slug('Voracité d\'Hadar / Appétit d\'Hadar'),
            'school_id' => School::where('slug', 'invocation')->first()->getKey(),
            'level_id' => Level::where('level_name', 3)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (tentacule de pieuvre en saumure)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => '<p>Vous ouvrez un portail sur le vide intersidéral, une région plongée dans les ténèbres et infestée par des horreurs inconnues. Une sphère de 6 mètres de rayon apparaît. Elle est faite de ténèbres et d\'un froid mordant et centrée sur un point à portée. Elle reste là pendant toute la durée du sort. Dans ce néant, on entend une cacophonie de sinistres murmures et de bruits de mastication, audibles dans un rayon de 9 mètres. Aucune lumière, ni magique ni autre, ne peut illuminer la zone et toute créature entièrement englobée en son sein est aveuglée. Le néant crée une distorsion dans le tissu de l\'espace et la zone est considérée comme un terrain difficile. Toute créature qui y commence son tour subit 2d6 dégâts de froid. Une créature qui y termine son tour doit réussir un jet de sauvegarde de Dextérité, sans quoi des tentacules laiteux venus d\'ailleurs la palpent et lui infligent 2d6 dégâts d\'acide.</p>'
        ]);
        Spell::insert([
            'id' => Str::uuid(),
            'name' => 'Zone de vérité',
            'slug' => Str::slug('Zone de vérité'),
            'school_id' => School::where('slug', 'enchantement')->first()->getKey(),
            'level_id' => Level::where('level_name', 2)->first()->getKey(),
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => '<p>Vous créez une zone magique, capable de protéger contre la duplicité, sous forme d\'une sphère de 4,50 mètres de rayon centrée sur un point de votre choix situé à portée. Jusqu\'à la fin du sort, une créature qui pénètre dans la sphère pour la première fois de son tour ou y commence son tour doit réussir un jet de sauvegarde de Charisme. Si elle échoue, elle ne peut pas mentir délibérément tant qu\'elle reste dans la zone du sort. Vous savez si chaque créature présente a réussi ou raté son jet de sauvegarde.</p><p> Une créature affectée est consciente du sort qui la limite et peut donc soigneusement éviter de répondre aux questions qui susciteraient normalement un mensonge de sa part. Une telle créature peut rester évasive dans ses réponses, tant qu\'elle reste dans les limites de la vérité.</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spells');
    }
};
