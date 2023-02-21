<?php

use App\Models\Spell;
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
        Schema::create('spells', function (Blueprint $table) {
            $table->id();
            $table->string('name',191);
            $table->string('school',191);
            $table->integer('level')->default(0);
            $table->boolean('is_rituel')->default(false);
            $table->string('cast_time',191);
            $table->string('range',191);
            $table->text('component');
            $table->string('duration',191);
            $table->text('description');
            $table->text('upper_lvl')->nullable();
        });
        Spell::insert([
            'name' => 'Agrandissement/Rapetissement',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une pincée de limaille de fer)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Vous agrandissez ou rétrécissez une créature ou un objet situé à portée et dans votre champ de vision pendant toute la durée du sort. Choisissez soit une créature, soit un objet qui n\'est ni porté ni transporté. Si la cible n\'est pas consentante, elle a droit à un jet de sauvegarde de Constitution. Si elle le réussit, le sort reste sans effet.\n Si la cible est une créature, tout ce qu\'elle porte et tout ce qu\'elle transporte change de taille avec elle. En revanche, si elle lâche un objet, il reprend sa taille normale sur-le-champ.\n <B>Agrandir.</B> La cible double dans toutes les dimensions, et son poids est multiplié par huit. Cette croissance augmente sa catégorie de taille d\'un cran, de Moyenne à Grande par exemple. Si la cible n\'a pas assez de place pour doubler de volume, elle atteint la taille maximale possible dans l\'espace dont elle dispose. Elle est avantagée lors des tests de Force et des jets de sauvegarde de Force jusqu\'à la fin du sort. Les armes de la cible grandissent pour s\'adapter à sa nouvelle taille. Tant qu\'elles sont ainsi agrandies, elles infligent 1d4 dégâts de plus.\n <B>Rétrécir.</B> La cible réduit de moitié dans toutes les dimensions et son poids est divisé par huit. Ce rétrécissement réduit sa catégorie de taille d\'un cran, de Moyenne à Petite par exemple. La cible est désavantagée lors des tests de Force et des jets de sauvegarde de Force jusqu\'à la fin du sort. Les armes de la cible rétrécissent pour s\'adapter à sa nouvelle taille. Tant qu\'elles sont ainsi réduites, elles infligent 1d4 dégâts de moins (mais cela ne peut pas faire passer les dégâts en dessous de 1).'
         ]);
         Spell::insert([
            'name' => 'Aide',
            'school' => 'Abjuration',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une minuscule bandelette de tissu blanc)',
            'duration' => '8 heures',
            'description' => 'Le sort renforce vos alliés qui deviennent plus robustes et  plus résolus. Choisissez jusqu\'à trois créatures à portée. Le maximum de points de vie et les points de vie actuels de chacune d\'entre elles augmentent de 5 pendant toute la durée du sort.',
            'upper_lvl' => 'Quand vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les points de vie de chaque cible augmentent de 5 points supplémentaires pour chaque niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Alarme',
            'school' => 'Abjuration',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (une minuscule clochette et un filament en argent)',
            'duration' => '8 heures',
            'description' => 'Vous installez une alarme pour vous avertir en cas d\'intrusion. Choisissez une porte, une fenêtre ou une zone à portée qui ne fasse pas plus qu\'un cube de 6 mètres d\'arête. Tant que le sort fait effet, une alarme vous alerte dès qu\'une créature de taille Très Petite ou supérieure touche la zone protégée ou y pénètre. Au moment où vous lancez le sort, vous pouvez désigner des créatures qui ne déclencheront pas l\'alarme. Vous pouvez aussi choisir si l\'alarme sera audible ou mentale.\n Une alarme mentale vous avertit d\'un tintement dans votre tête tant que vous vous trouvez dans un rayon de 1,5 kilomètre autour de la zone protégée. Ce tintement suffit à vous réveiller si vous êtes endormi.\n Une alarme audible émet le même son qu\'une cloche d\'alerte pendant 10 secondes et retentit dans un rayon de 18 mètres.'
         ]);
         Spell::insert([
            'name' => 'Allié planaire',
            'school' => 'Invocation',
            'level' => 6,
            'cast_time' => '10 minutes',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous demandez de l\'aide à une entité appartenant à un autre monde. Vous devez connaître cet être, que ce soit un dieu, un primordial, un prince démoniaque ou une autre créature à la puissance cosmique. L\'entité vous envoie un céleste, un élémentaire ou un fiélon qui lui est loyal. Cette créature apparaît dans un emplacement libre à portée. Si vous connaissez le nom d\'une créature spécifique, vous pouvez le mentionner lors de l\'incantation pour demander à ce que ce soit elle que l\'entité vous envoie, bien qu\'elle puisse tout de même vous envoyer un autre émissaire (au MD de décider).\n Quand la créature apparaît, elle n\'a aucune obligation de se comporter d\'une manière particulière. Vous pouvez lui demander d\'accomplir un service rémunéré, mais elle n\'est pas obligée d\'accepter. Votre requête peut être très simple (nous faire passer en volant au-dessus de ce précipice, nous aider à livrer un combat...) ou plus complexe (espionner nos ennemis, nous protéger lors de l\'exploration de ce donjon...). Pour négocier un service, vous devez être en mesure de communiquer avec la créature.\n Le paiement peut se faire sous diverses formes. Un céleste peut demander une importante donation en or ou en objets magiques à un temple allié tandis qu\'un fiélon peut exiger un sacrifice vivant ou un trésor. Certaines créatures monnayent leurs services contre une quête à accomplir de votre côté.\n En règle générale, une tâche qui s\'accomplit en quelques minutes se paie 100 po la minute. Une tâche qui demande plusieurs heures coûte 1 000 po de l\'heure, et une tâche effectuée sur plusieurs jours (10 au maximum) vaut 10 000 po la journée. Le MD peut modifier le montant en fonction des circonstances dans lesquelles vous lancez le sort. Si la tâche à accomplir s\'accorde avec l\'éthique de la créature, elle peut réduire son salaire de moitié ou même y renoncer. Les tâches qui ne présentent aucun risque coûtent souvent la moitié du prix indiqué précédemment tandis que les missions particulièrement dangereuses valent parfois bien plus cher. Une créature accepte rarement une tâche visiblement suicidaire.\n Une fois que la créature a accompli la tâche demandée ou quand la durée de service décidée est arrivée à son terme, elle retourne sur son plan d\'origine après vous avoir fait son rapport, si la tâche l\'exige et qu\'elle est en mesure de le faire.\n Si vous êtes incapable de vous mettre d\'accord avec la créature sur le prix de ses services, elle retourne immédiatement sur son plan natal.\n Une créature enrôlée dans votre groupe compte comme un membre à part entière et reçoit sa part de points d\'expérience.'
         ]);
         Spell::insert([
            'name' => 'Amélioration de caractéristique',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (des poils ou des plumes venant d\'un animal)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => 'Vous touchez une créature pour lui accorder une amélioration magique. Choisissez l\'un des effets suivants dont la cible bénéficiera jusqu\'à la fin du sort.\n <B>Endurance de l\'ours.</B> La cible est avantagée lors des tests de Constitution. Elle gagne aussi 2d6 points de vie temporaires qui disparaissent quand le sort se termine.\n <B>Force du taureau.</B> La cible est avantagée lors des tests de Force et sa capacité de charge est doublée.\n <B>Grâce du chat.</B> La cible est avantagée lors des tests de Dextérité. De plus, elle ne subit pas de dégâts quand elle chute sur 6 mètres ou moins, à condition qu\'elle ne soit pas neutralisée.\n <B>Splendeur de l\'aigle.<B/> La cible est avantagée lors des tests de Charisme.\n <B>Ruse du renard.</B> La cible est avantagée lors des tests d\'intelligence.\n <B>Sagesse du hibou.</B> La cible est avantagée lors des tests de Sagesse.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez prendre un créature de plus pour cible par niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Amis',
            'school' => 'Enchantement',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, M (un peu de maquillage à s\'appliquer sur le visage lors de l\'incantation)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Pendant toute la durée du sort, vous êtes avantagé sur tous les tests de Charisme à l\'encontre d\'une créature de votre choix qui ne vous est pas hostile. Quand le sort se termine, cette créature se rend compte que vous avez usé de magie pour l\'influencer et elle devient hostile. Si elle est encline à la violence, elle peut très bien vous attaquer. Une autre peut chercher à se venger autrement (au choix du MD), selon la manière dont vous avez interagi avec elle.'
         ]);
         Spell::insert([
            'name' => 'Amitié avec les animaux',
            'school' => 'Enchantement',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un peu de nourriture)',
            'duration' => '24 heures',
            'description' => 'Grâce à ce sort, vous convainquez une bête que vous ne lui voulez pas de mal. Choisissez une bête située à portée dans votre champ de vision. Elle doit vous voir et vous entendre. Le sort échoue si elle possède une Intelligence de 4 ou plus. Dans le cas contraire, elle doit réussir un jet de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Le sort se termine si vous ou l\'un de vos camarades blessez la cible.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une bête supplémentaire par emplacement de sort au-delà du ler.'
         ]);
         Spell::insert([
            'name' => 'Animation des morts',
            'school' => 'Nécromancie',
            'level' => 3,
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, S, M (une goutte de sang, un lambeau de chair et une pincée de poudre d\'os)',
            'duration' => 'instantanée',
            'description' => 'Ce sort crée un serviteur mort-vivant. Choisissez un tas d\'os ou le cadavre d\'un humanoïde de taille Moyenne ou Petite situé à portée. Votre sort imprègne la cible d\'un ignoble simulacre de vie, la relevant sous forme de mort-vivant. Elle devient un squelette si vous avez lancé le sort sur un tas d\'os, et un zombi si vous avez opté pour un cadavre (le MD dispose des statistiques de jeu de la créature).\n À chacun de vos tours, vous pouvez dépenser une action bonus pour donner un ordre mental à la créature générée via ce sort si elle se trouve dans un rayon de 18 mètres (si vous contrôlez plusieurs créatures, vous pouvez donner un ordre à l\'une d\'elles, certaines d\'entre elles ou à toutes à la fois, à condition de transmettre le même ordre à chacune). À vous de décider quelles actions la créature va entreprendre et à quel endroit elle se déplacera au cours du tour suivant, mais vous pouvez aussi lui donner un ordre plus générique, comme de garder une salle ou un couloir. En l\'absence d\'ordre, la créature se contente de se défendre contre les créatures hostiles. Une fois qu\'elle a reçu un ordre, elle continue à le suivre jusqu\'à ce qu\'elle ait accompli sa tâche.\n La créature est placée sous votre contrôle pendant 24 heures, après quoi elle cesse d\'obéir aux ordres que vous lui avez donnés. Pour la contrôler pendant 24 heures de plus, il vous faut lui relancer ce sort avant la fin de la période de 24 heures pendant laquelle il fait effet. Si vous utilisez ce sort ainsi, il vous permet de réaffirmer votre contrôle sur un maximum de quatre créatures animées grâce à lui plutôt que d\'en animer une nouvelle.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, vous animez ou réaffirmez votre contrôle sur deux créatures de plus par niveau au-delà du 3e. Chaque créature doit venir d\'un tas d\'os ou d\'un cadavre différent.'
         ]);
         Spell::insert([
            'name' => 'Animation des objets',
            'school' => 'Transmutation',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Les objets prennent vie sur votre ordre. Choisissez jusqu\'à dix objets non magiques à portée que personne ne porte ni ne transporte. Les cibles de taille Moyenne comptent comme deux objets, celles de taille Grande comme quatre et celles de taille Très Grande comme huit. Vous ne pouvez pas animer d\'objet de taille supérieure. Chaque cible s\'anime et devient une créature placée sous votre contrôle jusqu\'à la fin du sort ou jusqu\'à tomber à O point de vie.\n Par une action bonus, vous pouvez donner un ordre mental à toute créature créée via ce sort qui se trouve au maximum à 150 mètres de vous (si vous en contrôlez plusieurs, vous pouvez donner un ordre à l\'une d\'elles, certaines d\'entre elles ou toutes à la fois, à condition de donner le même ordre à toutes). À vous de décider quelle action la créature va entreprendre et à quel endroit elle se déplacera au cours du tour suivant, mais vous pouvez aussi lui donner un ordre plus générique, comme de garder une salle ou un couloir. En l\'absence d\'ordre, la créature se contente de se défendre contre les créatures hostiles. Une fois qu\'elle a reçu un ordre, elle continue à le suivre jusqu\'à ce qu\'elle ait accompli sa tâche.<Table/>\n Un objet animé est une créature artificielle avec une CA, des points de vie, des attaques, une Force et une Dextérité déterminés par sa taille. Sa Constitution est de 10 tandis que son Intelligence et sa Sagesse sont de 3 et son Charisme de 1. Il a une vitesse de 9 mètres. S\'il est dépourvu de pattes ou d\'appendices susceptibles de le mouvoir, il gagne à la place la capacité de voler à une vitesse de 9 mètres et peut utiliser le vol stationnaire. Si l\'objet est solidement attaché à une surface ou à un objet de plus grande taille, comme une chaîne vissée à un mur, sa vitesse est de O. L\'objet possède la vision aveugle dans un rayon de 9 mètres ; au-delà, il est aveugle. Quand l\'objet animé tombe à O point de vie, il reprend sa forme originelle d\'objet et tout dégât en surplus est infligé à sa forme originelle.\n Si vous ordonnez à un objet animé d\'attaquer, il a droit à une attaque au corps à corps unique contre une créature située dans un rayon de 1,50 mètre. Il porte une attaque de coup avec un bonus d\'attaque et des dégâts contondants déterminés en fonction de sa taille. Le MD peut tout à fait décider qu\'un objet animé inflige des dégâts perforants ou tranchants si sa forme le lui permet.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, vous pouvez animer deux objets supplémentaires par emplacement au-delà du 5e.'
         ]);
         Spell::insert([
            'name' => 'Apaisement des émotions',
            'school' => 'Enchantement',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous tentez de supprimer les émotions fortes au sein d\'un groupe de gens. Chaque humanoïde qui se trouve dans une sphère de 6 mètres de rayon centrée autour d\'un point de votre choix situé à portée doit faire un jet de sauvegarde de Charisme. Une créature peut décider de rater volontairement ce jet, sachant que lorsqu\'une créature rate son jet de sauvegarde, vous l\'affectez avec l\'un des deux effets suivants, à votre choix.\n Vous débarrassez temporairement la cible de tout état charmé ou terrorisé. Une fois le sort terminé, l\'état s\'applique de nouveau, à moins que sa durée n\'ait expiré.\n Sinon, vous rendez la cible indifférente vis-à-vis des créatures de votre choix, envers lesquelles elle était auparavant hostile. Cette indifférence prend fin si la cible est attaquée ou affectée par un sort néfaste, ou bien si elle voit l\'un de ses amis se faire ainsi molester. La cible redevient hostile dès que le sort se termine, à moins que le MD n\'en décide autrement.'
         ]);
         Spell::insert([
            'name' => 'Apparence trompeuse',
            'school' => 'Illusion',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => '8 heures',
            'description' => 'Ce sort vous permet de modifier l\'apparence d\'autant de créatures que vous voulez, à condition qu\'elles se trouvent à portée et dans votre champ de vision. Vous donnez à chacune d\'entre elles une nouvelle apparence illusoire. Une cible non consentante peut faire un jet de sauvegarde de Charisme. Si elle le réussit, le sort ne l\'affecte pas.\n Ce sort change l\'apparence physique, mais aussi les habits, les armures, les armes et le reste de l\'équipement. Vous pouvez faire croire que chaque créature affectée est plus petite ou plus grande de 30 centimètres maximum qu\'en réalité, lui donner l\'air grosse, maigre ou entre les deux. Vous ne pouvez pas changer le type de son corps, vous devez choisir une forme possédant la même conformation qu\'elle au niveau des membres. En dehors de cela, les détails de l\'illusion sont laissés à votre imagination. Le sort persiste pendant toute sa durée ou jusqu\'à ce que vous utilisiez une action pour le révoquer.\n Les changements apportés par le sort ne résistent pas à un examen physique. Par exemple, si vous l\'utilisez pour ajouter un chapeau à la tenue de la cible, les objets passent au travers et toute personne qui essaie de le toucher ne sentira que de l\'air ou des cheveux et un crâne. Si vous utilisez le sort pour la faire paraître plus mince qu\'en réalité, la main de quelqu\'un qui tente de la toucher se heurtera à son corps alors que, visuellement, elle semble encore dans le vide.\n Une créature peut utiliser son action pour examiner une cible et faire un test d\'lntelligence (Investigation) contre le DD du jet de sauvegarde du sort. Si elle réussit, elle comprend que la cible est déguisée.'
         ]);
         Spell::insert([
            'name' => 'Appel de familier',
            'school' => 'Invocation',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1 heure',
            'range' => '3 mètres',
            'component' => 'V, S, M (10 po de charbon, d\'encens et d\'herbes à faire brûler dans un brasero en laiton)',
            'duration' => 'instantanée',
            'description' => 'Vous vous attachez les services d\'un familier, un esprit qui prend la forme d\'un animal de votre choix : une chauvesouris, un chat, un crabe, une grenouille (ou un crapaud), un faucon, un lézard, une pieuvre, une chouette, un serpent venimeux, un poisson (un piranha), un rat, un corbeau, un hippocampe, une araignée ou une belette. Le familier apparaît dans un emplacement inoccupé à portée et possède les mêmes statistiques que l\'animal dont il revêt la forme, bien qu\'il soit un céleste, une fée ou un fiélon (à vous de choisir) au lieu d\'une bête.\n Votre familier agit indépendamment de vous, mais il obéit toujours à vos ordres. Lors d\'un combat, il lance son propre dé d\'initiative et agit à son tour. Il ne peut pas attaquer, mais il peut effectuer d\'autres actions normalement.\n Quand le familier tombe à 0 point de vie, il disparaît sans laisser de cadavre derrière lui. Il réapparaît si vous lancez de nouveau ce sort.\n Vous pouvez communiquer par télépathie avec votre familier tant qu\'il se trouve dans un rayon de 30 mètres autour de vous. De plus, vous pouvez dépenser votre action pour percevoir le monde par les yeux et les oreilles de votre familier jusqu\'au début de votre prochain tour. Vous bénéficiez aussi de tout sens spécial que possède votre familier. Pendant ce temps, vos yeux et vos oreilles ne fonctionnent plus.\n Vous pouvez renvoyer temporairement votre familier par une action. Il gagne alors une poche dimensionnelle où il attend que vous le rappeliez. Vous pouvez aussi le renvoyer définitivement. Vous pouvez utiliser une action alors qu\'il est temporairement renvoyé pour le faire réapparaître dans un emplacement inoccupé situé dans un rayon de 9 mètres autour de vous.\n Vous ne pouvez avoir qu\'un familier à la fois. Si vous lancez ce sort alors que vous avez déjà un familier, vous attribuez simplement une nouvelle forme à celui que vous possédez déjà choisissez une des formes de la liste précédente, que votre familier adopte de suite.\n Enfin, quand vous lancez un sort avec une portée de « contact » votre familier peut délivrer le sort comme si c\'était lui qui le lançait. Il doit se trouver à 30 mètres de vous ou moins et utiliser sa réaction pour transmettre le sort au moment où vous le lancez. Si le sort exige un jet d\'attaque, vous utilisez votre propre modificateur d\'attaque lors du jet.'
         ]);
         Spell::insert([
            'name' => 'Appel de la foudre',
            'school' => 'Invocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => 'Un nuage orageux apparaît sous forme d\'un cylindre de 3 mètres de haut pour 18 mètres de rayon, centré sur un point situé dans votre champ de vision et à 30 mètres directement au-dessus de vous. Le sort échoue si vous ne pouvez voir le point situé à cette hauteur, là où le nuage doit se former (si vous vous trouvez dans une pièce trop petite pour accueillir le nuage par exemple).\n Quand vous lancez le sort, vous devez choisir un point situé à portée et dans votre champ de vision. Un éclair jaillit du nuage et vient frapper ce point. Chaque créature située dans un rayon de 1,50 mètre autour de ce point doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 3d10 dégâts de foudre, les autres la moitié seulement. À chacun de vos tours jusqu\'à la fin du sort, vous pouvez dépenser votre action pour appeler ainsi la foudre, en visant le même point ou un autre.\n Si, au moment de l\'incantation, vous vous trouvez en extérieur et que les conditions sont déjà orageuses, le sort vous donne le contrôle de l\'orage déjà présent au lieu d\'en créer un nouveau. Dans ce cas, les dégâts du sort augmentent de 1d10.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 3e.'
         ]);
         Spell::insert([
            'name' => 'Appétit d\'Hadar',
            'school' => 'Invocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (tentacule de pieuvre en saumure)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous ouvrez un portail sur le vide intersidéral, une région plongée dans les ténèbres et infestée par des horreurs inconnues. Une sphère de 6 mètres de rayon apparaît. Elle est faite de ténèbres et d\'un froid mordant et centrée sur un point à portée. Elle reste là pendant toute la durée du sort. Dans ce néant, on entend une cacophonie de sinistres murmures et de bruits de mastication, audibles dans un rayon de 9 mètres. Aucune lumière, ni magique ni autre, ne peut illuminer la zone et toute créature entièrement englobée en son sein est aveuglée. Le néant crée une distorsion dans le tissu de l\'espace et la zone est considérée comme un terrain difficile. Toute créature qui y commence son tour subit 2d6 dégâts de froid. Une créature qui y termine son tour doit réussir un jet de sauvegarde de Dextérité, sans quoi des tentacules laiteux venus d\'ailleurs la palpent et lui infligent 2d6 dégâts d\'acide.'
         ]);
         Spell::insert([
            'name' => 'Arme élémentaire',
            'school' => 'Transmutation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 heure',
            'description' => 'Vous touchez une arme non magique pour la rendre magique. Choisissez l\'un des types de dégâts suivants : acide, feu, foudre, froid ou tonnerre. Pendant toute la durée du sort, l\'arme bénéficie d\'un bonus de +l aux jets d\'attaque et inflige 1d4 dégâts supplémentaires du type choisi.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou 6, le bonus aux jets d\'attaque passe à +2 et les dégâts supplémentaires à 2d4. Quand vous utilisez un emplacement de sort de niveau 7 ou plus, le bonus passe à +3 et les dégâts supplémentaires à 3d4.'
         ]);
         Spell::insert([
            'name' => 'Arme magique',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action bonus',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => 'Vous touchez une arme non magique.Jusqu\'à la fin du sort, elle devient magique et bénéficie d\'un bonus de +1 aux jets d\'attaque et de dégâts.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, le bonus passe à +2, et à +3 si vous utilisez un emplacement de niveau 6 ou plus.'
         ]);
         Spell::insert([
            'name' => 'Arme spirituelle',
            'school' => 'Évocation',
            'level' => 2,
            'cast_time' => '1 action bonus',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => 'Vous créez à portée une arme spectrale flottante qui persiste pendant toute la durée du sort ou jusqu\'à ce que vous le lanciez de nouveau. Lors de l\'incantation, vous pouvez faire une attaque de sort au corps à corps contre une créature située dans un rayon de 1,50 mètre autour de l\'arme. Si vous touchez, la cible reçoit un montant de dégâts de force égal à 1d8 + votre modificateur de caractéristique d\'incantation.\n À votre tour et par une action bonus, vous pouvez déplacer l\'arme d\'un maximum de 6 mètres et répéter l\'attaque contre une créature située dans un rayon de 1,50 mètre autour d\'elle.\n L\'arme peut revêtir la forme de votre choix. Les clercs des divinités associées à une arme particulière (comme St Cuthbert, connu pour sa masse ou Thor pour son marteau) font en sorte que l\'arme générée ressemble à l\'arme iconique de leur protecteur.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Armure d\'Agathys',
            'school' => 'Abjuration',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un verre d{\'eau)',
            'duration' => '1 heure',
            'description' => 'Une force magique protectrice vous entoure et se manifeste sous la forme d\'une pellicule de givre spectral qui recouvre votre personne et votre équipement. Vous gagnez 5 points de vie temporaires pendant toute la durée du sort. Si une créature vous touche avec une attaque de corps à corps alors que vous possédez encore ces points de vie temporaires, elle subit 5 dégâts de froid.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les points de vie temporaires et les dégâts de froid augmentent de 5 par emplacement de sort au-delà du 1er.'
         ]);
         Spell::insert([
            'name' => 'Armure du mage',
            'school' => 'Abjuration',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un bout de cuir tanné)',
            'duration' => '8 heures',
            'description' => 'Vous touchez une créature consentante qui ne porte pas d\'armure et l\'enveloppez d\'une force magique protectrice jusqu\'à la fin du sort. La CA de base de la cible passe à 13 + son modificateur de Dextérité. Le sort se termine si la cible revêt une armure ou si vous révoquez le sort par une action.'
         ]);
         Spell::insert([
            'name' => 'Arrêt du temps',
            'school' => 'Transmutation',
            'level' => 9,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => 'Vous arrêtez brièvement le cours du temps pour tout le monde sauf vous. Le temps ne s\'écoule plus pour les autres créatures tandis que vous disposez de 1d4+1 tours d\'affilée, pendant lesquels vous pouvez faire des actions et vous déplacer normalement.\n Ce sort se termine si l\'une des actions que vous effectuez lors de ce laps de temps ou l\'un des effets que vous créez lors de ce laps de temps affecte une créature autre que vous ou un objet porté ou transporté par une créature autre que vous. Le sort se termine également si vous vous éloignez à plus de 300 mètres de l\'endroit où vous l\'avez lancé.'
         ]);
         Spell::insert([
            'name' => 'Aspersion acide',
            'school' => 'Invocation',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous lancez une boule d\'acide. Choisissez une créature à portée, ou deux créatures à portée situées à 1,50 mètre ou moins l\'une de l\'autre. Une cible doit réussir un jet de sauvegarde de Dextérité, sinon elle subit 1d6 dégâts d\'acide. Les dégâts du sort augmentent de 1d6 quand vous atteignez le niveau 5 (2d6), le niveau 11 (3d6) et le niveau 17 (4d6).'
         ]);
         Spell::insert([
            'name' => 'Assassin imaginaire',
            'school' => 'Illusion',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S ',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous puisez dans les cauchemars d\'une créature située à portée dans votre champ de vision pour créer une manifestation illusoire de ses pires terreurs, qu\'elle sera la seule à voir. La cible doit faire un jet de sauvegarde de Sagesse. Si elle le rate, elle est terrorisée pendant toute la durée du sort. Tant que le sort n\'est pas terminé, la cible doit faire un jet de sauvegarde de Sagesse à la fin de chacun de ses tours. Elle subit 4d10 dégâts psychiques à chaque échec. Le sort se termine dès qu\'elle réussit un jet de sauvegarde.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, les dégâts augmentent de 1d1O par niveau au-delà du 4e.'
         ]);
         Spell::insert([
            'name' => 'Assistance',
            'school' => 'Divination',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Vous touchez une créature consentante. Une fois avant la fin du sort, la cible peut lancer 1d4 et ajouter le chiffre obtenu au test de caractéristique de son choix. Elle peut lancer le dé avant ou après le test. Le sort se termine alors.'
         ]);
         Spell::insert([
            'name' => 'Augure',
            'school' => 'Divination',
            'level' => 2,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S, M (bâtonnets, os ou petits objets similaires d\'une valeur minimale de 25 po, portant des marques spéciales)',
            'duration' => 'instantanée',
            'description' => 'Vous lancez des bâtonnets ornés de gemmes ou des os de dragon, tirez des cartes ornementées ou utilisez une autre méthode de divination pour recevoir un présage de la part d\'une entité d\'un autre monde. Ce présage concerne les résultats de la conduite que vous comptez tenir dans les trente prochaines minutes. C\'est au MD de choisir l\'un des présages suivants : <LI>Bonheur pour un résultat positif</LI> <LI>Malheur pour un résultat négatif</LI> <LI>Bonheur et malheur pour un résultat comportant du positif et du négatif</LI> <LI>Rien pour un résultat n\'étant ni positif ni négatif</LI>\n Le sort ne tient pas compte d\'une éventuelle modification des circonstances, comme l\'incantation de sorts supplémentaires, ou la perte ou l\'arrivée d\'un compagnon.\n Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances par incantation en sus de la première que vous obteniez une prémonition aléatoire au lieu d\'une prémonition fiable. C\'est au MD de faire ce jet en secret.'
         ]);
         Spell::insert([
            'name' => 'Aura de pureté',
            'school' => 'Abjuration',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => 'personnelle (9 m de rayon)',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => 'Une énergie purificatrice émane de vous et forme une aura dans un rayon de 9 mètres. Cette aura se déplace avec vous jusqu\'à la fin du sort et reste centrée sur vous. Chaque créature non hostile qui se trouve dans l\'aura (vous y compris) ne peut pas tomber malade, devient résistante aux dégâts de poison et est avantagée sur les jets de sauvegarde contre les effets générant les états suivants : assourdi, aveuglé, charmé, empoisonné, étourdi, paralysé, terrorisé.'
         ]);
         Spell::insert([
            'name' => 'Aura de vie',
            'school' => 'Abjuration',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => 'personnelle (9 m de rayon)',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => 'Une énergie protectrice de vie émane de vous et forme une aura dans un rayon de 9 mètres. Cette aura se déplace avec vous jusqu\'à la fin du sort et reste centrée sur vous. Chaque créature non hostile qui se trouve dans l\'aura (vous y compris) devient résistante aux dégâts nécrotiques et il est impossible de réduire son maximum de points de vie. De plus, une créature vivante non hostile récupère 1 point de vie quand elle débute son tour au sein de l\'aura alors qu\'elle a O point de vie.'
         ]);
         Spell::insert([
            'name' => 'Aura de vitalité',
            'school' => 'Évocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle (9 m de rayon)',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Une énergie curative émane de vous et forme une aura dans un rayon de 9 mètres. Cette aura se déplace avec vous jusqu\'à la fin du sort et reste centrée sur vous. Vous pouvez utiliser une action bonus pour rendre 2d6 points de vie à une créature située au sein de l\'aura, vous y compris.'
         ]);
         Spell::insert([
            'name' => 'Aura du croisé',
            'school' => 'Évocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Une puissance sacrée émane de vous et forme une aura d\'un rayon de 9 mètres, réveillant la combativité de vos amis. L\'aura est centrée sur vous et se déplace avec vous jusqu\'à la fin du sort. Toutes les créatures non hostiles (y compris vous-même) situées en son sein infligent 1d4 dégâts radiants de plus quand elles touchent une cible avec une attaque armée.'
         ]);
         Spell::insert([
            'name' => 'Aura magique de Nystul',
            'school' => 'Illusion',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un petit carré de soie)',
            'duration' => '24 heures',
            'description' => 'Vous enveloppez la créature ou l\'objet touché d\'une illusion, afin que les sorts de divination révèlent des informations erronées à son propos. La cible du sort doit être une créature consentante ou un objet qui n\'est ni porté ni transporté par une autre créature.\n Lorsque vous lancez le sort, vous choisissez l\'un des effets suivants, ou les deux, qui persistent pendant toute la durée du sort. Si vous lancez ce sort sur la même créature ou le même objet chaque jour pendant 30 jours, en lui attribuant le même effet à chaque fois, l\'illusion persiste jusqu\'à ce que quelqu\'un la dissipe.\n <B>Aura factice.</B> Vous modifiez la manière dont la cible apparaît vis-à-vis des sorts et effets magiques détectant les auras magiques, comme détection de la magie. Vous pouvez ainsi faire en sorte qu\'un objet magique paraisse dépourvu de magie ou qu\'un objet ordinaire semble magique, ou vous pouvez modifier l\'aura magique de la cible de manière à ce qu\'elle paraisse appartenir à l\'école de magie de votre choix. Quand vous apposez cet effet sur un objet, vous pouvez faire en sorte que la magie factice se montre à toute personne qui manipule l\'objet.\n <B>Masque.</B> Vous modifiez la manière dont la cible apparaît aux sorts et effets magiques qui détectent les types de créatures, comme le sens divin d\'un paladin ou le déclencheur d\'un sort de symbole. Vous choisissez un type de créature : les autres sorts et effets magiques traitent la cible comme si elle appartenait au type ou à l\'alignement choisi.'
         ]);
         Spell::insert([
            'name' => 'Aura sacrée',
            'school' => 'Abjuration',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un petit reliquaire d\'une valeur minimum de 1 000 po contenant une relique sacrée, comme un bout de la robe d\'un saint ou un morceau de parchemin prélevé sur un texte sacré)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Une lumière divine émane de votre personne et forme un doux halo qui vous enveloppe dans un rayon de 9 mètres. Les créatures de votre choix se trouvant dans ce rayon au moment où vous lancez ce sort émettent une faible lumière dans un rayon de 1,50 mètre. De plus, jusqu\'à la fin du sort, elles sont avantagées lors des jets de sauvegarde tandis que les autres créatures sont désavantagées quand elles effectuent un jet d\'attaque contre elles. Quand un fiélon ou un mort-vivant touche une créature affectée avec une attaque au corps à corps, l\'aura qui enveloppe la créature flamboie soudain. L\'assaillant doit réussir un jet de sauvegarde de Constitution ou se retrouver aveugle jusqu\'à la fin du sort.'
         ]);
         Spell::insert([
            'name' => 'Bagou',
            'school' => 'Transmutation',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => '1 heure',
            'description' => 'Jusqu\'à la fin du sort, chaque fois que vous faites un test de Charisme, vous pouvez remplacer le nombre obtenu au dé par un 15. De plus, quoi que vous disiez, la magie visant à déterminer si vous dites la vérité vous croit toujours sincère.'
         ]);
         Spell::insert([
            'name' => 'Baies nourricières',
            'school' => 'Transmutation',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un brin de gui)',
            'duration' => 'instantanée',
            'description' => 'Jusqu\'à dix baies apparaissent dans votre main. Elles sont imprégnées de magie pendant une journée. Une créature peut utiliser son action pour manger une baie, ce qui lui rend un point de vie et la nourrit pour la journée. Les baies perdent leurs propriétés si personne ne les mange dans les 24 heures qui suivent l\'incantation.'
         ]);
         Spell::insert([
            'name' => 'Balisage',
            'school' => 'Évocation',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => 'Un rayon de lumière frappe une créature de votre choix située à portée. Faites un jet d\'attaque de sort à distance contre elle. Si vous touchez, elle subit 4d6 dégâts radiants et scintille d\'une faible lumière mystique jusqu\'à la fin de votre prochain tour. D\'ici là et grâce à cette lueur, le prochain jet d\'attaque effectué contre elle est avantagé.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 1er.'
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => 'Bannissement',
            'school' => 'Abjuration',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un objet qui répugne à la cible)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Vous tentez d\'envoyer une créature située dans votre champ de vision dans un autre plan d\'existence. Elle doit réussir un jet de sauvegarde de Charisme ou se faire bannir.\n Si la cible est native du plan d\'existence sur lequel vous vous trouvez, vous l\'exilez dans un demi-plan inoffensif. Elle est neutralisée tant qu\'elle se trouve là-bas et y reste jusqu\'à la fin du sort. À ce moment, elle réapparaît à l\'endroit qu\'elle a quitté ou dans l\'emplacement inoccupé le plus proche si son emplacement de départ est occupé.\n Si la cible est originaire d\'un plan d\'existence autre que celui sur lequel vous vous trouvez, une légère détonation accompagne son retour de force sur son plan d\'origine. Si le sort se termine avant qu\'une minute ne se soit écoulée, la cible réapparaît à l\'endroit qu\'elle a quitté ou dans l\'emplacement inoccupé le plus proche si son emplacement de départ est occupé. Sinon, elle ne revient pas.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, vous pouvez viser une créature de plus par niveau au-delà du 4e.'
         ]);
         Spell::insert([
            'name' => 'Barrière de lames',
            'school' => 'Évocation',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => 'Vous créez un mur vertical constitué de lames toumoyantes faites d\'énergie magique et tranchantes comme des rasoirs. Le mur apparaît à portée et persiste pour toute la durée du sort. Vous pouvez créer un mur droit d\'un maximum de 30 mètres de long, 6 mètres de haut et 1,50 mètre d\'épaisseur, ou un mur circulaire d\'un maximum de 18 mètres de diamètre, 6 mètres de haut et 1,50 mètre d\'épaisseur. Le mur offre un abri important aux créatures qui se trouvent derrière lui, et son espace est traité comme un terrain difficile.\n Quand une créature pénètre dans la zone du mur pour la première fois au cours de son tour ou quand elle commence son tour dans cette zone, elle doit faire un jet de sauvegarde de Dextérité. Si elle le rate, elle subit 6d10 dégâts tranchants; si elle le réussit, elle en reçoit seulement la moitié.'
         ]);
         Spell::insert([
            'name' => 'Bénédiction',
            'school' => 'Enchantement',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un peu d\'eau bénite à asperger)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Vous bénissez jusqu\'à trois créatures de votre choix situées à portée. Quand une cible fait un jet d\'attaque ou de sauvegarde avant la fin du sort, elle lance 1d4 et ajoute le montant obtenu au jet d\'attaque ou de sauvegarde.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez affecter une créature de plus par niveau au-delà du ler.'
         ]);
         Spell::insert([
            'name' => 'Blessure',
            'school' => 'Nécromancie',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Faites une attaque de sort au corps à corps contre une créature située à une distance inférieure ou égale à votre allonge. Si vous la touchez, elle subit 3d10 dégâts nécrotiques.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts augmentent de 1d10 par niveau au-delà du 1er.'
         ]);
         Spell::insert([
            'name' => 'Bouche magique',
            'school' => 'Illusion',
            'level' => 2,
            'is_rituel'=> true,
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (un rayon de miel et de la poussière de jade d\'une valeur de 10 po, que le sort consume)',
            'duration' => 'jusqu\'à dissipation',
            'description' => 'Vous implantez un message dans un objet situé à portée. On entend le message dès que les conditions le déclenchant sont remplies. Choisissez un objet situé dans votre champ de vision qui n\'est ni porté ni transporté par une autre créature.Prononcez ensuite le message, qui doit se composer de 25 mots au maximum, mais peut se répéter pendant un maximum de 10 minutes. Enfin, déterminez les circonstances dans lesquelles Je message s\'activera.\n Quand les conditions de déclenchement sont remplies, une bouche magique apparaît sur l\'objet et récite le message avec la même voix que vous et au volume où vous l\'avez prononcé. Si l\'objet choisi possède une bouche ou quelque chose qui y ressemble (comme la bouche d\'une statue), la bouche magique apparaît de manière à donner l\'impression que les paroles sortent des lèvres de l\'objet. Lors de l\'incantation, vous pouvez décider que le sort se termine une fois le message transmis ou qu\'il reste actif et répète le message chaque fois que les conditions de déclenchement sont remplies.\n Ces dernières peuvent être aussi génériques ou spécifiques que vous le désirez, mais elles doivent se baser sur des données visuelles ou audibles, perceptibles dans un rayon de 9 mètres autour de l\'objet. Par exemple, vous pouvez ordonner à la bouche de parler dès qu\'une créature approche à 9 mètres ou moins de l\'objet ou quand une cloche d\'argent retentit dans un rayon de 9 mètres.'
         ]);
         Spell::insert([
            'name' => 'Bouclier',
            'school' => 'Abjuration',
            'level' => 1,
            'cast_time' => '1 réaction à effectuer lorsque vous êtes touché par une attaque ou un sort de projectile magique',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => 'Une barrière invisible faite de force magique apparaît autour de vous et vous protège. Jusqu\'au début de votre prochain tour, vous avez un bonus de +5 à la CA, y compris contre l\'attaque qui a déclenché l\'incantation du sort, et vous ne subissez aucun dégât de la part de projectile magique.'
         ]);
         Spell::insert([
            'name' => 'Bouclier de feu',
            'school' => 'Évocation',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un morceau de phosphore ou une luciole)',
            'duration' => '10 minutes',
            'description' => 'De fines volutes de flammes enveloppent votre corps pendant toute la durée du sort, émettant une vive lumière dans un rayon de 3 mètres et une faible lumière dans un rayon de 3 mètres de plus. Vous pouvez mettre un terme prématuré au sort en utilisant une action.\n Les flammes vous offrent un bouclier chaud ou froid, comme bon vous semble. Le bouclier chaud vous apporte une résistance contre les dégâts de froid, le bouclier froid une résistance contre les dégâts de feu.\n De plus, quand une créature située dans un rayon de 1,50 mètre autour de vous vous touche avec une attaque au corps à corps, le bouclier génère une gerbe de flammes. Si le bouclier est chaud, il inflige 2d8 dégâts de feu à l\'assaillant, s\'il est froid, il lui inflige 2d8 dégâts de froid.'
         ]);
         Spell::insert([
            'name' => 'Bouclier de la foi',
            'school' => 'Abjuration',
            'level' => 1,
            'cast_time' => '1 action bonus',
            'range' => '18 mètres',
            'component' => 'V, S, M (un petit parchemin avec un extrait de texte sacré)',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => 'Un champ scintillant apparaît autour d\'une créature de votre choix située à portée et lui donne un bonus de +2 à la CA pendant toute la durée du sort.'
         ]);
         Spell::insert([
            'name' => 'Bouffée de poison',
            'school' => 'Invocation',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous tendez la main en direction d\'une créature située à portée dans votre champ de vision et projetez une bouffée de gaz toxique sortie de votre paume. La créature doit réussir un jet de sauvegarde de Constitution ou subir 1d12 dégâts de poison.\n Les dégâts du sort augmentent de 1d12 quand vous atteignez le niveau 5 (2d12), le niveau 11 (3d12) et le niveau 17 (4d12).'
         ]);
         Spell::insert([
            'name' => 'Boule de feu',
            'school' => 'Évocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une petite boule de guano de chauve-souris et du soufre)',
            'duration' => 'instantanée',
            'description' => 'Une traînée luisante part de votre doigt tendu et file vers un point de votre choix situé à portée et dans votre champ de vision, où elle explose dans une gerbe de flammes grondantes. Chaque créature située dans une sphère de 6 mètres de rayon centrée sur ce point doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 8d6 dégâts de feu, les autres la moitié seulement.\n Le feu s\'étend en contournant les angles. Il embrase les objets inflammables de la zone, à moins que quelqu\'un ne les porte ou ne les transporte.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 3e.'
         ]);
         Spell::insert([
            'name' => 'Boule de feu à retardement',
            'school' => 'Évocation',
            'level' => 7,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une petite boule de guano de chauvesouris et du soufre)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Un rayon de lumière jaune jaillit de votre doigt tendu et se condense pour former une bille luisante en un point de votre choix situé à portée pendant toute la durée du sort. Quand le sort se termine, soit parce que votre concentration se brise, soit parce que vous y mettez volontairement un terme, la bille se dilate dans un grondement sourd et explose en une gerbe de feu qui s\'étend en franchissant les angles éventuels. Toutes les créatures situées dans une sphère de 6 mètres de rayon centrée sur le point où se trouvait la bille doivent faire un jet de sauvegarde de Dextérité. Celles qui échouent reçoivent un montant de dégâts de feu égal au total de dégâts accumulés (voir plus loin), les autres reçoivent la moitié de ce montant seulement.\n De base, le sort inflige 12d6 dégâts de feu. À la fin de votre tour, si la bille n\'a pas encore explosé, ces dégâts augmentent de 1d6.\n Si quelqu\'un touche la bille avant la fin de l\'intervalle, il doit faire un jet de sauvegarde de Dextérité. S\'il échoue, le sort se termine immédiatement et la bille explose. S\'il réussit, il peut lancer la bille à une distance maximale de 12 mètres. Si elle touche un objet solide ou une créature, le sort se termine et la bille explose.\n Les flammes endommagent les objets qui se trouvent dans la zone et embrasent les objets inflammables qui ne sont ni portés ni transportés.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 8 ou plus, les dégâts de base augmentent de 1d6 par niveau au-delà du 7e.'
         ]);
         Spell::insert([
            'name' => 'Bourrasque',
            'school' => 'Évocation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => 'personnelle (ligne de 18 mètres)',
            'component' => 'V, S, M (une graine de légume)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Une zone de vent fort de 18 mètres de long sur 3 de large souffle depuis votre position dans la direction que vous avez choisie pendant toute la durée du sort. Chaque créature commençant son tour dans la zone doit réussir un jet de sauvegarde de Force, sans quoi elle est repoussée de 4,50 mètres à l\'opposé de vous, dans la direction où souffle le vent.\n Une créature qui se trouve dans la zone doit dépenser 60 centimètres de mouvement pour se rapprocher de vous de 30 centimètres.\n La bourrasque disperse les gaz et les vapeurs et éteint les bougies, les torches et autres flammes nues similaires dans la zone. Les flammes protégées, par une lanterne par exemple, s\'agitent follement et ont 50% de chance de s\'éteindre.\n Vous pouvez changer la direction dans laquelle souffle la bourrasque par une action bonus à chacun de vos tours jusqu\'à la fin du sort.'
         ]);
         Spell::insert([
            'name' => 'Briser',
            'school' => 'Évocation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un éclat de mica)',
            'duration' => 'instantanée',
            'description' => 'Un bruit retentit soudain avec une intensité douloureuse, à partir d\'un point situé à portée. Chaque créature située dans une sphère de 3 mètres de rayon centrée sur ce point doit faire un jet de sauvegarde de Constitution. Les créatures qui le ratent subissent 3d8 dégâts de tonnerre, les autres la moitié seulement. Une créature faite de matière inorganique, comme de la pierre, du cristal ou du métal est désavantagée sur ce jet de sauvegarde.\n Un objet non magique que personne ne porte ni ne transporte subit aussi ces dégâts s\'il se trouve dans la zone du sort.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Cage de force',
            'school' => 'Évocation',
            'level' => 7,
            'cast_time' => '1 action',
            'range' => '30 mètres',
            'component' => 'V, S, M (poussière de rubis d\'une valeur de 1 500 po)',
            'duration' => '1 heure',
            'description' => 'Une prison immobile et invisible, en forme de cube et faite de force magique, se forme soudain autour d\'une zone de votre choix située à portée. Ce peut être une cage ou une boîte hermétique, à votre guise.\n Une prison en forme de cage peut faire un maximum de 6 mètres d\'arête et dispose de barreaux d\'un centimètre d\'épaisseur placés à un centimètre d\'intervalle.\n Une prison en forme de boîte peut faire un maximum de 3 mètres d\'arête et forme une barrière pleine qui empêche la matière de passer. Elle bloque aussi le passage des sorts lancés vers l\'intérieur ou l\'extérieur.\n Quand vous lancez ce sort, chaque créature qui se trouve entièrement au sein de la zone affectée se retrouve prise au piège. Une créature qui s\'y trouve seulement en partie ou qui s\'avère trop grande pour y tenir est repoussée vers l\'extérieur de la zone jusqu\'à ce qu\'elle la quitte complètement.\n Une créature enfermée dans la cage ne peut pas la quitter par des moyens non magiques. Si elle tente d\'utiliser la téléportation ou les déplacements interplanaires pour s\'échapper, elle doit d\'abord faire un jet de sauvegarde de Charisme. Si elle le réussit, elle peut utiliser cette magie pour fuir, sinon elle ne parvient pas à quitter la cage et l\'utilisation du sort ou de l\'effet est gaspillée. La cage s\'étend aussi sur le plan éthéré, ce qui bloque les déplacements éthérés.\n La dissipation de la magie est sans effet sur ce sort.'
         ]);
         Spell::insert([
            'name' => 'Caresse du vampire',
            'school' => 'Nécromancie',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Le simple contact de votre main enveloppée d\'ombres peut siphonner la force vitale d\'autrui pour soigner vos propres plaies. Faites une attaque de sort au corps à corps contre une créature située à une distance inférieure ou égale à votre allonge. Si vous touchez, elle subit 3d6 dégâts nécrotiques et vous récupérez un montant de points de vie égal à la moitié des dégâts infligés. Vous pouvez dépenser votre action à chacun de vos tours pour répéter cette attaque jusqu\'à la fin du sort.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d6 par niveau au-delà du 3e.'
         ]);
         Spell::insert([
            'name' => 'Carquois magique',
            'school' => 'Transmutation',
            'level' => 5,
            'cast_time' => '1 action bonus',
            'range' => 'contact',
            'component' => 'V, S, M (un carquois contenant au moins une munition)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Vous transmutez votre carquois de manière à ce qu\'il produise une réserve infinie de munitions non magiques qui semblent bondir dans votre main dès que vous la tendez pour les saisir.\n Pendant toute la durée du sort, à chacun de vos tours, vous pouvez utiliser une action bonus pour effectuer deux attaques avec une arme utilisant les munitions venant du carquois. Chaque fois que vous portez une telle attaque à distance, le carquois remplace magiquement la munition dépensée par une autre, identique, non magique. Les munitions que produit le carquois se désintègrent quand le sort se termine. Si le carquois ne se trouve plus en votre possession, le sort se termine.'
         ]);
         Spell::insert([
            'name' => 'Carreau ensorcelé',
            'school' => 'Évocation',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une brindille issue d\'un arbre frappé par la foudre)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Un éclair d\'énergie bleutée frappe une cible à portée et forme un arc électrique persistant entre elle et vous. Faites une attaque de sort à distance contre cette créature. Si vous touchez, elle subit 1d12 dégâts de foudre et, à chacun de vos tours pendant toute la durée du sort, vous pouvez utiliser votre action pour lui infliger automatiquement 1d12 dégâts de foudre. Le sort se termine si vous utilisez votre action pour faire autre chose. Il se termine également si la cible passe hors de portée du sort ou bénéficie d\'un abri total contre vous.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, les dégâts initiaux augmentent de 1d12 par emplacement de sort au-delà du 1er.'
         ]);
         Spell::insert([
            'name' => 'Cécité/Surdité',
            'school' => 'Nécromancie',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => '1 minute',
            'description' => 'Vous pouvez rendre un ennemi sourd ou aveugle. Choisissez une créature autre que vous qui se situe à portée et dans votre champ de vision. Elle doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle est soit aveugle, soit sourde (à vous de choisir) pendant toute la durée du sort. Elle a droit à un nouveau jet de sauvegarde de Constitution à la fin de chacun de ses tours, le sort se terminant si elle le réussit',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez viser unecréature de plus par niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Cercle de mort',
            'school' => 'Nécromancie',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (la poudre d\'une perle noire broyée d\'une valeur minimale de 500 po)',
            'duration' => 'instantanée',
            'description' => 'Une sphère d\'énergie négative s\'étend dans un rayon de 18 mètres à partir d\'un point situé à portée. Chaque créature située dans la sphère doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 8d6 dégâts nécrotiques, les autres la moitié seulement.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les dégâts augmentent de 2d6 par niveau au-delà du 6e.'
         ]);
         Spell::insert([
            'name' => 'Cercle de pouvoir',
            'school' => 'Abjuration',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => 'personnelle (9 mètres de rayon)',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => 'Une énergie divine émane de vous, qui déforme les énergies magiques pour les diffuser dans un rayon de 9 mètres autour de votre personne. La sphère est centrée sur vous et se déplace avec vous jusqu\'à la fin du sort. Pendant toute la durée du sort, toutes les créatures amicales de la zone (vous y compris) ont l\'avantage lors de leurs jets de sauvegarde contre les sorts et autres effets magiques. De plus, quand une créature affectée réussit son jet de sauvegarde contre un sort ou un effet magique qui inflige des dégâts réduits de moitié en cas de jet de sauvegarde réussi, elle ne subit absolument aucun dégât.'
         ]);
         Spell::insert([
            'name' => 'Cercle de téléportation',
            'school' => 'Invocation',
            'level' => 5,
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, M (des craies et des encres rares contenant des extraits de pierres précieuses pour une valeur de 50 po, que le sort consume)',
            'duration' => '1 round',
            'description' => 'Lorsque vous lancez ce sort, vous tracez un cercle de 3 mètres de diamètre au sol et y inscrivez des symboles qui relient l\'endroit où vous vous trouvez actuellement à un cercle de téléportation permanent de votre choix dont vous connaissez la séquence de symboles et qui se trouve sur le même plan d\'existence que vous. Un portail scintillant s\'ouvre dans le cercle que vous avez tracé et reste ouvert jusqu\'à la fin de votre prochain tour. Toute créature qui franchit ce portail apparaît instantanément dans un rayon de 1,50 mètre autour du cercle de destination ou dans l\'espace inoccupé le plus proche si le reste est occupé.\n Nombre de temples majeurs, de guildes et d\'autres lieux d\'importance possèdent des cercles de téléportation permanents tracés quelque part dans leur enceinte. Chacun de ces cercles utilise une séquence de symboles uniques : une série de runes magiques disposées selon un motif particulier. Lorsque vous apprenez à lancer ce sort, vous apprenez la séquence associée à deux destinations situées sur le plan matériel et déterminées par le MD. Vous pouvez apprendre d\'autres séquences de symboles au cours de vos aventures. Pour en mémoriser une, vous devez l\'étudier pendant 1 minute.\n Vous pouvez créer un cercle de téléportation permanent en lançant ce sort au même endroit tous les jours pendant un an. Vous n\'avez pas besoin d\'utiliser le cercle pour vous téléporter quand vous lancez ce sort pour cela.'
         ]);
         Spell::insert([
            'name' => 'Cercle magique',
            'school' => 'Abjuration',
            'level' => 3,
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, S, M (eau bénite ou poudre d\'argent et de fer d\'une valeur minimale de 100 po, que le sort consume)',
            'duration' => '1 heure',
            'description' => 'Vous créez un cylindre d\'énergie magique de 3 mètres de rayon pour 6 mètres de haut, centré sur un point au sol situé à portée et dans votre champ de vision. Des runes luisantes apparaissent là où le cylindre touche le sol ou une autre surface.\n Choisissez l\'un des types de créatures suivants: célestes, élémentaires, fées, fiélons ou morts-vivants. Le cercle affecte une créature du type choisi de la manière suivante.\n La créature ne peut pas entrer de son plein gré dans le cylindre par des moyens non magiques. Si elle tente d\'utiliser la téléportation ou le voyage extraplanaire pour y pénétrer, elle doit auparavant réussir un jet de sauvegarde de Charisme.\n La créature est désavantagée lors des jets d\'attaque contre les créatures se trouvant dans le cylindre.\n La créature ne peut ni charmer, ni terroriser, ni posséder les créatures situées dans le cylindre.\n Quand vous lancez ce sort, vous pouvez décider que sa magie agira à l\'envers, empêchant les créatures du type choisi de quitter le cercle et protégeant contre elles les individus situés à l\'extérieur du cercle.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, la durée du sort augmente d\'une heure par niveau au-delà du 3e.'
         ]);
         Spell::insert([
            'name' => 'Chaîne d\'éclairs',
            'school' => 'Évocation',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '450 mètres',
            'component' => 'V, S, M (un éclat d\'ambre, de verre ou de cristal, trois épingles en argent et un morceau de fourrure)',
            'duration' => 'instantanée',
            'description' => 'Vous créez un arc électrique qui file vers une cible de votre choix, située à portée dans votre champ de vision. Trois éclairs bondissent ensuite de cette cible sur un maximum de trois autres cibles qui doivent toutes se trouver dans un rayon de 9 mètres autour de la première. Une cible peut être une créature ou un objet et ne peut recevoir qu\'un seul éclair.\n Chaque cible doit faire un jet de sauvegarde de Dextérité et subit 10d8 dégâts de foudre en cas d\'échec, la moitié en cas de réussite.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, un éclair de plus bondit de la première cible vers une autre pour chaque niveau au-delà du 6e.'
         ]);
         Spell::insert([
            'name' => 'Champ antimagie',
            'school' => 'Abjuration',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => 'personnelle (sphère de 3 mètres de rayon)',
            'component' => 'V, S, M (une pincée de poudre de fer ou de limaille)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => 'Une sphère d\'antimagie invisible de 3 mètres de rayon vous entoure. La zone qu\'elle englobe est coupée de l\'énergie magique qui imprègne le multivers. En son sein, il est impossible de lancer un sort, les créatures invoquées disparaissent et même les objets magiques deviennent ordinaires. La sphère reste centrée sur vous et se déplace avec vous jusqu\'à la fin du sort.\n Les sorts et autres effets magiques, en dehors de ceux émanant d\'un artefact ou d\'une divinité, sont supprimés au sein de la sphère et ne peuvent pénétrer dans son espace. Un emplacement dépensé pour lancer un sort ainsi supprimé est tout de même consommé. L\'effet ne fonctionne pas tant qu\'il est supprimé, mais le temps passé sous suppression est tout de même décompté de sa durée d\'efficacité.\n <B>Effets visant une cible.</B> Les sorts et autres effets magiques visant une créature ou un objet situé dans la sphère, comme projectile magique ou charme-personne, n\'ont aucun effet sur cette cible.\n <B>Zones de magie.</B> L\'aire d\'un sort ou d\'un effet magique, comme celle d\'une boule de feu, ne peut pas s\'étendre au sein de la sphère. Si la sphère recouvre une zone de magie existante, l\'effet de cette dernière est supprimé dans la partie recouverte par la sphère. Par exemple, les flammes d\'un mur de feu sont supprimées au sein de la sphère, créant un trou dans le mur si la partie recouverte est assez grande.\n <B>Sorts.</B> Tout sort ou effet magique actif sur une créature ou un objet est supprimé dès qu\'elle ou il se trouve à l\'intérieur et pendant tout le temps qu\'elle ou il y reste.\n <B>Objets magiques.</B> Les propriétés et les pouvoirs d\'un objet magique sont supprimés une fois au sein de la sphère. Par exemple, une épée longue +1 située dans la sphère fonctionne comme une épée longue ordinaire.\n Les propriétés et les pouvoirs d\'une arme magique sont supprimés si son utilisateur la manie contre une cible située dans la sphère ou s\'il se trouve dans la sphère. Si une arme ou une munition magique quitte entièrement la sphère (par exemple si vous tirez une flèche magique ou projetez une lance magique en dehors de la sphère), la suppression de magie cesse d\'affecter l\'objet dès qu\'il quitte la sphère.\n <B>Déplacement magique.</B> La téléportation et les voyages planaires échouent systématiquement au sein de la sphère, que cette dernière serve de destination ou de point de départ à ce type de déplacement. Un portail menant en un autre lieu, sur un autre monde ou sur un autre plan d\'existence se ferme temporairement tant qu\'il est englobé dans la sphère, de même que l\'ouverture sur un espace extradimensionnel telle celle créée par le sort corde enchantée.\n <B>Créatures et objets.</B> Une créature ou un objet invoqués ou créés par magie disparaissent temporairement si la sphère les recouvre. Ils réapparaissent instantanément dès que l\'espace qu\'ils occupent ne se trouve plus au sein de la sphère./n <B>Dissipation de la magie.</B> Les sorts et les effets magiques comme dissipation de la magie n\'ont aucun effet sur la sphère.\n De même, les sphères issues de divers sorts de champ antimagie ne s\'annulent pas les unes les autres.'
         ]);
         Spell::insert([
            'name' => 'Changement de forme',
            'school' => 'Transmutation',
            'level' => 9,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un diadème de jade d\'une valeur minimale de 1 500 po, que vous devez coiffer avant de lancer le sort)',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => 'Vous prenez la forme d\'une créature différente pendant toute la durée du sort. Vous pouvez revêtir l\'apparence de n\'importe quelle créature dotée d\'un indice de dangerosité égal ou inférieur au vôtre. En revanche, vous ne pouvez pas vous changer en une créature artificielle ni en mort-vivant, et vous devez avoir vu au moins une fois la créature que vous imitez. Vous vous changez en un spécimen ordinaire de cette créature, sans niveau de classe et sans le trait incantation.\n Vos statistiques de jeu sont remplacées par celles de la créature choisie, mais vous conservez votre alignement et vos valeurs d\'intelligence, de Sagesse et de Charisme. Vous gardez également vos compétences et vos maîtrises de jet de sauvegarde, en plus de gagner celles de la créature. Si elle possède les mêmes maîtrises que vous, mais que son bonus est plus élevé, utilisez-le à la place du vôtre. Vous ne pouvez pas utiliser les actions d\'antre ni les actions légendaires de la créature.\n Vous adoptez les dés de vie et les points de vie de votre nouvelle forme. Quand vous reprenez votre forme normale, vous revenez au nombre de points de vie qui était le vôtre avant de vous transformer. Si vous reprenez votre forme normale parce que vous êtes tombé à 0 point de vie, les dégâts en surplus sont déduits des points de vie de votre forme normale. Tant que ces dégâts ne font pas tomber les points de vie de votre forme normale à 0, vous n\'êtes pas inconscient.\n Vous conservez les avantages de vos pouvoirs de race, de classe et autre et vous êtes toujours en mesure de les utiliser, à condition que votre nouvelle forme soit physiquement capable de le faire. Vous ne pouvez pas utiliser vos sens spéciaux (comme la vision dans le noir), à moins que votre nouvelle forme n\'en soit aussi dotée. Vous pouvez parler uniquement si votre nouvelle forme en est normalement capable.\n Quand vous vous transformez, vous choisissez si votre équipement tombe au sol, s\'il fusionne avec votre nouvelle forme ou si cette nouvelle forme le porte sur elle, auquel cas il fonctionne normalement. C\'est au MD de déterminer si la nouvelle forme peut porter une pièce d\'équipement, en fonction de sa taille et de sa morphologie. Votre équipement ne change pas de forme ni de taille pour s\'accorder à votre nouvelle forme ; si cette dernière ne peut s\'en accommoder, l\'équipement ou certaines pièces d\'équipement tombent à terre ou fusionnent avec votre nouvelle silhouette. L\'équipement fusionné ne génère aucun effet.\n Pendant la durée du sort, vous pouvez utiliser votre action pour prendre une nouvelle forme répondant aux mêmes critères et aux mêmes règles que précédemment, à une exception : si votre nouvelle forme possède plus de points de vie que la précédente, votre nombre de points de vie reste tel qu\'il était.'
         ]);
         Spell::insert([
            'name' => 'Changement de plan',
            'school' => 'Invocation',
            'level' => 7,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un diapason de métal valant au moins 250 po, harmonisé avec un plan d\'existence donné)',
            'duration' => 'instantanée',
            'description' => 'Vous et un maximum de huit autres créatures consentantes vous donnez la main pour former un cercle et êtes transportés sur un autre plan d\'existence. Vous pouvez spécifier une destination en termes génériques, comme la Cité d\'airain sur le plan élémentaire du Feu ou le palais de Dispater dans la deuxième strate des Neuf Enfers. Vous apparaîtrez alors à cet endroit ou à proximité. Par exemple, si vous tentez d\'atteindre la Cité d\'airain, vous pouvez arriver dans sa rue de l\'Acier, devant la Porte des cendres ou de l\'autre côté de la mer de Feu d\'où vous la contemplez. C\'est au MD de décider.\n Sinon, si vous connaissez la séquence de glyphes magiques d\'un cercle de téléportation présent sur un autre plan d\'existence, ce sort peut vous conduire dans ce cercle. S\'il est trop étroit pour accueillir toutes les créatures qui voyagent avec vous, les créatures en trop apparaissent dans les emplacements inoccupés les plus proches du cercle.\n Vous pouvez aussi utiliser ce sort pour bannir une créature non consentante sur un autre plan. Choisissez une créature à votre portée et faites une attaque de sort au corps à corps contre elle. Si vous touchez, elle doit faire un jet de sauvegarde de Charisme. Si elle le rate, elle est emportée en un endroit aléatoire du plan d\'existence que vous nommez. Une fois là, c\'est à elle de trouver un moyen de rentrer sur son plan natal.'
         ]);
         Spell::insert([
            'name' => 'Charme-personne',
            'school' => 'Enchantement',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => 'Vous tentez de charmer un humanoïde se trouvant à portée et dans votre champ de vision. Il doit faire un jet de sauvegarde de Sagesse, pour lequel il est avantagé si vous ou vos compagnons êtes actuellement en train de le combattre. S\'il rate son test, vous le charmez jusqu\'à la fin du sort ou jusqu\'à ce que vous ou vos compagnons lui fassiez du mal. La créature charmée vous considère comme un ami. Quand le sort se termine, elle sait que vous l\'avez charmée.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous pouvez charmer une créature de plus par niveau au-delà du 1er. Toutes les cibles doivent se trouver à 9 mètres ou moins les unes des autres lorsque vous lancez le sort.'
         ]);
         Spell::insert([
            'name' => 'Chauffer le métal',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bout de fer et une flamme)',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Choisissez un objet manufacturé en métal, comme une arme métallique ou une armure métallique lourde ou intermédiaire. Il doit être situé à portée et dans votre champ de vision et se met alors à luire d\'un rouge incandescent. Une créature en contact physique avec l\'objet reçoit 2d8 dégâts de feu lorsque vous lancez le sort. Vous pouvez dépenser une action bonus à chacun de vos tours suivants jusqu\'à la fin du sort pour infliger de nouveau ce montant de dégâts.\n Si une créature tient l\'objet qui lui inflige des dégâts ou le porte sur elle, elle doit réussir un jet de sauvegarde de Constitution, sans quoi elle le lâche, si elle peut. Si elle le conserve, elle est désavantagée lors des jets d\'attaque et des tests de caractéristique jusqu\'au début de votre prochain tour.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Chien de garde de Mordenkainen',
            'school' => 'Invocation',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (un petit sifflet en argent, un éclat d\'os et une ficelle)',
            'duration' => '8 heures',
            'description' => 'Vous invoquez un chien de garde fantomatique dans un emplacement inoccupé situé à portée et dans votre champ de vision. Il reste là pendant toute la durée du sort ou jusqu\'à ce que vous le renvoyiez par une action ou que vous vous éloigniez à plus de 30 mètres de lui.\n Le chien est invisible pour tout le monde sauf pour vous et il est impossible de le blesser. Il se met à aboyer dès qu\'une créature de taille Petite ou supérieure arrive à 9 mètres de lui sans prononcer d\'abord le mot de passe que vous avez choisi lors de l\'incantation. Le chien perçoit les créatures invisibles et voit ce qui se passe sur le plan éthéré. Il ignore les illusions.\n Au début de votre tour, le chien tente de mordre une créature qui vous est hostile et située dans un rayon de 1,50 mètre autour de lui. Son bonus d\'attaque est égal à votre modificateur de caractéristique d\'incantation + votre bonus de maîtrise. S\'il touche, il inflige 4d8 dégâts perforants.'
         ]);
         Spell::insert([
            'name' => 'Clairvoyance',
            'school' => 'Divination',
            'level' => 3,
            'cast_time' => '10 minutes',
            'range' => '1,5 kilomètre',
            'component' => 'V, S, M (soit un focaliseur d\'une valeur minimale de 100 po, soit une corne incrustée de pierreries pour l\'ouïe, soit un oeil de verre pour la vue)',
            'duration' => 'concentration,jusqu\'à 10 minutes',
            'description' => 'Vous créez un organe sensoriel invisible à portée dans un endroit qui vous est familier (un endroit où vous vous êtes déjà rendu ou que vous avez déjà vu) ou dans un endroit évident qui ne vous est pas familier (comme de l\'autre côté d\'une porte, derrière un coin, dans un bosquet...). L\'organe reste là pendant toute la durée du sort. Il est impossible de l\'attaquer ou d\'interagir avec.\n Vous choisissez la vue ou l\'ouïe au moment où vous lancez le sort. Vous pouvez alors utiliser le sens choisi à travers l\'organe comme si vous occupiez son emplacement. Vous pouvez dépenser une action pour passer de la vue à l\'ouïe ou inversement.\n Une créature capable de voir l\'organe sensoriel (en bénéficiant par exemple de voir l\'invisible ou de vision parfaite) le perçoit comme une orbe lumineuse intangible de la taille de votre poing.'
         ]);
         Spell::insert([
            'name' => 'Clignotement',
            'school' => 'Transmutation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => 'Pendant toute la durée du sort, vous lancez 1d20 à la fin de chacun de vos tours. Sur un 11 ou plus, vous disparaissez de votre plan d\'existence actuel et apparaissez sur le plan éthéré (si vous vous trouviez déjà là, le sort échoue et l\'incantation est gaspillée). Au début de votre tour suivant et quand le sort se termine alors que vous vous trouvez sur le plan éthéré, vous retournez sur un emplacement inoccupé de votre choix que vous pouvez voir dans un rayon de 3 mètres autour de l\'emplacement dont vous avez disparu. S\'il n\'y a pas d\'emplacement disponible dans ce rayon, vous apparaissez dans l\'espace inoccupé le plus proche (choisi au hasard s\'il y en a plusieurs à égale distance). Vous pouvez révoquer ce sort par une action.\n Tant que vous êtes sur le plan éthéré, vous voyez et entendez ce qui se passe sur le plan d\'où vous venez, qui apparaît sous forme d\'ombres grises, mais votre vision ne porte pas au-delà de 18 mètres. Vous pouvez seulement affecter des créatures se trouvant sur le plan éthéré et elles sont les seules à pouvoir vous affecter. Les créatures qui ne se trouvent pas sur ce plan ne peuvent ni vous percevoir, ni interagir avec vous, à moins qu\'elles ne disposent d\'un pouvoir le leur permettant.'
         ]);
         Spell::insert([
            'name' => 'Clone',
            'school' => 'Nécromancie',
            'level' => 8,
            'cast_time' => '1 heure',
            'range' => 'contact',
            'component' => 'V, S, M (un diamant valant au moins 1 000 po et un cube d\'au moins 2,5 centimètres d\'arête de chair de la créature à cloner, le sort consommant ces deux composantes, ainsi qu\'un réceptacle d\'une valeur minimale de 2 000 po disposant d\'un couvercle susceptible d\'être scellé, et assez grand pour contenir une créature de taille Moyenne, comme une grande urne, un cercueil, une cavité remplie de boue creusée dans la terre ou un récipient de cristal rempli d\'eau salée)',
            'duration' => 'instantanée',
            'description' => 'Ce sort génère la réplique inerte d\'une créature vivante, pour la protéger de la mort. Le clone se forme au sein d\'un réceptacle scellé et grandit jusqu\'à atteindre sa taille adulte et sa maturité en 120 jours; cependant, vous pouvez décider que le clone sera une version plus jeune de la créature qu\'il reproduit. Il reste inerte et indéfiniment dans le même état tant que le réceptacle reste scellé.\n Une fois que le clone est arrivé à maturité, si la créature originale meurt, son âme se transfère dans le clone, à condition que cette âme soit libre et désireuse de revenir à la vie. D\'un point de vue physique, le clone est identique à l\'original. De plus, il possède la même personnalité, les mêmes souvenirs et les mêmes capacités, mais il n\'hérite pas de son équipement. Les restes physiques de la créature originale ne disparaissent pas. S\'ils ne sont pas détruits, ils deviennent inertes et ne peuvent pas servir à ramener la créature à la vie puisque son âme se trouve ailleurs.'
         ]);
         Spell::insert([
            'name' => 'Coercition mystique',
            'school' => 'Enchantement',
            'level' => 5,
            'cast_time' => '1 minute',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => '30 jours',
            'description' => 'Vous imposez une coercition magique sur une créature située à portée dans votre champ de vision, l\'obligeant à vous accorder un service ou l\'empêchant de commettre une action ou une suite d\'actions, comme bon vous semble. Si la créature comprend votre langue, elle doit réussir un jet de sauvegarde de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Pendant toute cette période, elle subit 5d10 dégâts psychique chaque fois qu\'elle agit de manière directement opposée à vos instructions, mais jamais plus d\'une fois par jour. Si la créature ne vous comprend pas, ce sort n\'a aucun effet sur elle.\n Vous pouvez donner n\'importe quel ordre de votre choix, en dehors de ceux qui mènent directement à la mort. Le sort se termine si jamais vous donnez un ordre suicidaire.\n Vous pouvez mettre prématurément fin au sort en dépensant une action pour le dissiper. On peut aussi terminer le sort avec lever une malédiction, restauration supérieure ou souhait.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou 8, il dure 1 an. Avec un emplacement de sort de niveau 9, il persiste jusqu\'à ce que quelqu\'un le dissipe avec l\'un des sorts mentionnés précédemment.'
         ]);
         Spell::insert([
            'name' => 'Coffre secret de Léomund',
            'school' => 'Invocation',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (un superbe coffre de 90x60x60 centimètres, fait de matériaux rares d\'une valeur minimale de 5 000 po et une réplique du coffre de taille Très Petite, faite des mêmes matériaux et valant au moins 50 po)',
            'duration' => 'instantanée',
            'description' => 'Vous dissimulez un coffre et son contenu sur le plan éthéré. Pour cela, vous devez toucher le coffre et la réplique qui sert de composante matérielle au sort. Le coffre peut contenir un maximum de 324 décimètres cubes (90x60x60 centimètres) de matière non vivante.\n Tant que le coffre reste sur le plan éthéré, vous pouvez utiliser une action pour toucher la réplique et le rappeler à vous. Il apparaît en un emplacement libre au sol, situé dans un rayon de 1,50 mètre autour de vous. Vous pouvez renvoyer le coffre dans le plan éthéré en utilisant une action et en touchant le coffre et sa réplique.\n Au bout de 60 jours, il y a 5% de chances cumulatifs par jour que les effets du sort se terminent. Ils s\'achèvent aussi si vous lancez de nouveau le sort, si la petite réplique du coffre est détruite ou si vous décidez de mettre un terme au sort par une action. Si le sort se termine alors que le grand coffre est encore sur le plan éthéré, ce coffre est irrémédiablement perdu.'
         ]);
         Spell::insert([
            'name' => 'Colonne de flamme',
            'school' => 'Évocation',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (une pincée de soufre)',
            'duration' => 'instantanée',
            'description' => 'Une colonne verticale de feu divin rugissant surgit des cieux et s\'abat à l\'endroit de votre choix. Toute créature située dans un cylindre de 3 mètres de rayon et 12 mètres de haut centré sur le point à portée de votre choix doit faire un jet de sauvegarde de Dextérité. Celles qui échouent subissent 4d6 dégâts de feu et 4d6 dégâts radiants, les autres la moitié seulement.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts de feu ou les dégâts radiants (à vous de choisir) augmentent de ld6 par niveau au-delà du 5e.'
         ]);
         Spell::insert([
            'name' => 'Communication avec les animaux',
            'school' => 'Divination',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => 'Vous devenez capable de comprendre les bêtes et de communiquer verbalement avec elles pendant toute la durée du sort. Les connaissances et le degré de conscience de nombreuses bêtes sont limités par leur intelligence réduite, mais elles peuvent au moins vous renseigner sur les environs et les monstres avoisinants, ainsi que sur ce qu\'elles perçoivent aujourd\'hui ou ont perçu la veille. Si le MD accepte, vous pouvez convaincre une bête de vous accorder une petite faveur.'
         ]);
         Spell::insert([
            'name' => 'Communication avec les morts',
            'school' => 'Nécromancie',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => '3 mètres',
            'component' => 'V, S, M (encens incandescent)',
            'duration' => '10 minutes',
            'description' => 'Vous donnez un semblant de vie et d\'intelligence à un cadavre de votre choix situé à portée. Il est alors en mesure de répondre à vos questions. Le cadavre doit encore disposer d\'une bouche et ne doit pas être devenu mort-vivant. Le sort échoue si le cadavre choisi a déjà été la cible de ce sort au cours des dix jours précédents.\n Vous pouvez poser jusqu\'à cinq questions avant la fin de la durée du sort. Les connaissances du cadavre se limitent à ce qu\'il savait de son vivant, y compris au niveau des langues qu\'il parle. Les réponses sont souvent brèves, cryptiques ou répétitives et le cadavre n\'est absolument pas obligé de vous donner une réponse sincère si vous lui êtes hostile ou s\'il vous reconnaît comme étant un ennemi. Ce sort ne ramène pas l\'âme de la cible dans son corps,juste l\'esprit qui l\'animait; le cadavre ne peut donc pas apprendre de nouvelles informations, ne comprend rien de ce qui s\'est passé après sa mort et est incapable de faire des spéculations sur l\'avenir.'
         ]);
         Spell::insert([
            'name' => 'Communication avec les plantes',
            'school' => 'Transmutation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle (9 mètres de rayon)',
            'component' => 'V, S',
            'duration' => '10 minutes',
            'description' => 'Vous imprégnez la végétation située dans un rayon de 9 mètres autour de vous d\'une conscience et d\'une mobilité limitées, ce qui permet aux plantes de communiquer avec vous et de suivre des ordres simples. Vous pouvez interroger les végétaux sur les événements qui se sont déroulés la veille dans la zone du sort et ainsi obtenir des informations sur les créatures qui sont passées, sur les conditions météorologiques et autres.\n Vous pouvez également transformer un terrain rendu difficile à cause de la végétation (comme des buissons ou d\'épais taillis) en terrain ordinaire pendant toute la durée du sort. Ou vous pouvez transformer un terrain ordinaire où poussent des plantes en terrain difficile pendant toute la durée du sort, par exemple de manière à ce que des plantes grimpantes et des branches gênent vos poursuivants.\n Les plantes peuvent exécuter d\'autres tâches pour vous, si le MD donne son accord. Le sort ne leur permet pas de se déraciner et de se déplacer, mais elles peuvent agiter leurs branches, leurs vrilles et leurs tiges.\n Si une créature végétale se trouve dans la zone, vous pouvez communiquer avec elle comme si vous partagiez un même langage, mais vous ne gagnez pas de capacité magique permettant de l\'influencer.\n Ce sort permet de libérer une créature entravée par les plantes nées d\'un sort d\'enchevêtrement.'
         ]);
         Spell::insert([
            'name' => 'Communion',
            'school' => 'Divination',
            'level' => 5,
            'is_rituel'=> true,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S, M (de l\'encens et une fiole d\'eau bénite ou maudite)',
            'duration' => '1 minute',
            'description' => 'Vous entrez en contact avec votre divinité ou l\'un de ses représentants et lui posez jusqu\'à trois questions auxquelles on peut répondre par oui ou par non. Vous devez les poser avant la fin du sort et vous recevez une réponse correcte à chacune d\'entre elles.\n Les êtres divins ne sont pas forcément omniscients, il se peut donc que vous obteniez « obscur » comme réponse, si votre question porte sur des informations sortant du champ des connaissances de votre divinité. Si une réponse d\'un seul mot risque de se révéler trompeuse ou contraire aux intérêts de la divinité, le MD peut lui substituer une courte phrase.\n Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances (cumulables) que chaque incantation en sus de la première ne reçoive pas de réponse. Le MD effectue ce jet en secret.'
         ]);
         Spell::insert([
            'name' => 'Communion avec la nature',
            'school' => 'Divination',
            'level' => 5,
            'is_rituel'=> true,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Pendant un court instant, vous ne faites plus qu\'un avec la nature et obtenez des informations sur le territoire environnant. En extérieur, ce sort vous transmet des informations sur le terrain qui vous entoure dans un rayon de 4,5 kilomètres. Dans une grotte ou un autre environnement naturel souterrain, le rayon d\'action est de 90 mètres. Ce sort ne fonctionne pas là où les constructions ont remplacé la nature, comme en ville ou dans un donjon.\n Vous obtenez instantanément des informations sur un maximum de trois éléments de votre choix portant sur l\'un des sujets suivants dans votre zone. <LI>Le terrain et les étendues d\'eau.</LI> <LI>Les plantes, les minéraux, les animaux et les peuples majoritaires.</LI> <LI>Les célestes, les fées, les fiélons, les élémentaires ou les morts-vivants dotés d\'une certaine puissance.</LI> <LI>L\'influence émanant des autres plans d\'existence.</LI> <LI>Les constructions.</LI>\n Par exemple, vous pouvez apprendre où se trouve un puissant mort-vivant résidant dans la zone, où sont situés les points d\'eau potable majeurs et où se trouvent les villages les plus proches.'
         ]);
         Spell::insert([
            'name' => 'Compréhension des langues',
            'school' => 'Divination',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une pincée de suie et de sel)',
            'duration' => '1 heure',
            'description' => 'Pendant toute la durée du sort, vous comprenez le sens littéral de tout langage parlé que vous entendez. Vous comprenez aussi les langues écrites que vous voyez, à condition de toucher la surface sur laquelle on a tracé les mots. Il vous faut 1 minute pour lire une page de texte.\n Ce sort ne décode pas les messages secrets compris dans un texte ni les glyphes qui n\'appartiennent pas à un langage écrit, comme un symbole magique.'
         ]);
         Spell::insert([
            'name' => 'Compulsion',
            'school' => 'Enchantement',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Les créatures de votre choix situées à portée dans votre champ de vision et en mesure de vous entendre doivent faire un jet de sauvegarde de Sagesse. Une cible impossible à charmer réussit automatiquement son jet. Si la cible rate son jet, elle est affectée par le sort. Jusqu\'à la fin de celui-ci, vous pouvez, à chaque tour, utiliser une action bonus pour désigner une direction horizontale par rapport à vous. Chaque cible affectée doit alors utiliser son déplacement au mieux pour aller dans cette direction à son prochain tour. Elle peut effectuer son action avant de se déplacer. Une fois qu\'elle s\'est ainsi déplacée, elle peut faire un nouveau jet de sauvegarde de Sagesse pour tenter de mettre un terme à l\'effet du sort.\n Une cible n\'est pas obligée de se rendre au sein d\'une zone à l\'évidence dangereuse, comme un brasier ou une fosse béante, mais elle est prête à provoquer des attaques d\'opportunité pour se déplacer dans la direction indiquée.'
         ]);
         Spell::insert([
            'name' => 'Cône de froid',
            'school' => 'Évocation',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 18 mètres)',
            'component' => 'V, S, M (un petit cône de cristal ou de verre)',
            'duration' => 'instantanée',
            'description' => 'Une bouffée d\'air froid jaillit de vos mains. Toutes les créatures présentes dans un cône de 18 mètres doivent faire un jet de sauvegarde de Constitution. Celles qui le ratent subissent 8d8 dégâts de froid, les autres la moitié seulement.\n Une créature qui succombe suite à ce sort se transforme en statue de glace jusqu\'à ce qu\'elle fonde.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 5e.'
         ]);
         Spell::insert([
            'name' => 'Confusion',
            'school' => 'Enchantement',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S, M (trois coquilles de noix)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Ce sort assaille et pervertit l\'esprit des créatures, générant des hallucinations et provoquant des réactions incontrôlées. Toutes les créatures situées dans une sphère de 3 mètres de rayon autour d\'un point de votre choix situé à portée doivent faire un jet de sauvegarde de Sagesse quand vous lancez le sort. Si elles échouent, le sort les affecte.\n Une cible affectée ne peut pas accomplir de réaction et doit lancer 1d1O au début de chacun de ses tours pour déterminer comment elle se comporte pendant le tour.<TABLE/>\n Une créature affectée peut faire un jet de sauvegarde de Sagesse à la fin de chacun de ses tours. En cas de succès, l\'effet se termine pour elle.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, le rayon de la sphère augmente de 1,50 mètre par niveau au-delà du 4e.'
         ]);
         Spell::insert([
            'name' => 'Contact avec les plans',
            'school' => 'Divination',
            'level' => 5,
            'is_rituel'=> true,
            'cast_time' => '1 minute',
            'range' => 'personnelle',
            'component' => 'V',
            'duration' => '1 minute',
            'description' => 'Vous contactez mentalement un demi-dieu, l\'esprit d\'un sage décédé il y a longtemps, ou une autre entité mystérieuse issue d\'un autre plan. Le contact avec cette intelligence extraplanaire met votre esprit à rude épreuve et risque même de le briser. Quand vous lancez ce sort, vous devez faire un jet de sauvegarde d\'Intelligence DD 15. En cas d\'échec, vous recevez 6d6 dégâts psychiques et vous devenez fou jusqu\'à ce que vous ayez bénéficié d\'un long repos. Tant que vous êtes fou, vous ne pouvez pas entreprendre la moindre action, vous ne comprenez pas ce que disent les autres créatures, vous êtes incapable de lire et vous ne bredouillez que des paroles insensées. Une tierce personne peut mettre un terme à cet effet en vous lançant le sort de restauration supérieure.\n Si vous réussissez votre jet de sauvegarde, vous pouvez poser jusqu\'à cinq questions à l\'entité. Vous devez les poser avant la fin du sort. C\'est le MD qui répond à chacune d\'entre elles avec un mot, comme « oui », « non », « peut-être », « jamais », « hors sujet » ou « obscur » (si l\'entité ignore la réponse à votre question). Si une réponse limitée à un seul mot risque de se révéler trompeuse, le MD peut la remplacer par une courte phrase.'
         ]);
         Spell::insert([
            'name' => 'Contact glacial',
            'school' => 'Nécromancie',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => '1 round',
            'description' => 'Vous faites apparaître une main fantomatique et squelettique à l\'emplacement d\'une créature située à portée. Faites un jet d\'attaque de sort à distance contre la créature pour la transir de froid. Si l\'attaque touche, la victime reçoit 1d8 dégâts nécrotiques et ne peut pas récupérer de point de vie avant le début de votre prochain tour.Jusque-là, la main s\'accroche à elle.\n Si votre cible est un mort-vivant, il est en plus désavantagé lors des jets d\'attaque effectués contre vous jusqu\'à la fin de votre prochain tour.\n Les dégâts du sort augmentent de ld8 quand vous atteignez le niveau 5 (2d8), le niveau 11 (3d8) et le niveau 17 (4d8).'
         ]);
         Spell::insert([
            'name' => 'Contagion',
            'school' => 'Nécromancie',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '7 jours',
            'description' => 'Votre simple contact transmet des maladies. Faites une attaque de sort au corps à corps contre une créature à portée. Si vous touchez, vous lui inoculez une maladie de votre choix, à sélectionner parmi celles décrites plus loin.\n La cible doit faire un jet de sauvegarde de Constitution à la fin de chacun de ses tours. Une fois qu\'elle en a raté trois, la maladie fait effet pendant toute la durée du sort et la créature n\'a plus à faire de jet de sauvegarde. Si elle réussit trois jets de sauvegarde, elle guérit de sa maladie et le sort se termine.\n Comme le sort déclenche une maladie naturelle chez la cible, tout effet qui guérit une maladie ou améliore ses symptômes s\'y applique.\n <B>Mal aveuglant.</B> La créature est en proie à de violentes douleurs cérébrales et ses yeux deviennent d\'un blanc laiteux. Elle est désavantagée lors des tests de Sagesse et des jets de sauvegarde de Sagesse et elle est aveugle.\n <B>Fièvre répugnante.</B> Une forte fièvre s\'empare de la créature qui est désavantagée lors des tests de Force, des jets de sauvegarde de Force et des jets d\'attaque basés sur la Force.\n <B>Pourriture.</B> La chair de la créature se met à pourrir. Elle est désavantagée lors des tests de Charisme et devient vulnérable à tous les dégâts.\n <B>Bouille-crâne.</B> La créature a soudain l\'esprit enfiévré. Elle est désavantagée lors des tests d\'Intelligence et des jets de sauvegarde d\'intelligence. De plus, au combat, elle se comporte comme si elle était sous l\'effet d\'un sort de confusion./n <B>Convulsions.</B> La créature est agitée de tremblements. Elle est désavantagée lors des tests de Dextérité, des jets de sauvegarde de Dextérité et des jets d\'attaque basés sur la Dextérité.\n <B>Mort poisseuse.</B> La créature est affligée de saignements incontrôlables. Elle est désavantagée lors des tests de Constitution et des jets de sauvegarde de Constitution. De plus, elle est étourdie jusqu\'à la fin de son prochain tour à chaque fois qu\'elle subit des dégâts.'
         ]);
         Spell::insert([
            'name' => 'Contamination',
            'school' => 'Nécromancie',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous transmettez une maladie virulente à une créature située à portée dans votre champ de vision. La cible doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle subit 14d6 dégâts nécrotiques, la moitié seulement si elle réussit. Ces dégâts ne peuvent pas faire passer les points de vie de la cible au-dessous de 1. Si la cible rate son jet de sauvegarde, son total de points de vie maximum est réduit, pendant 1 heure, d\'un montant égal aux dégâts nécrotiques reçus. Tout effet qui guérit les maladies ramène le maximum de points de vie de la cible à la normale sans avoir besoin d\'attendre une heure.'
         ]);
         Spell::insert([
            'name' => 'Contingence',
            'school' => 'Évocation',
            'level' => 6,
            'cast_time' => '10 minutes',
            'range' => 'personnelle',
            'component' => 'V, S, M (une statuette de vous taillée dans l\'ivoire et ornée de gemmes d\'une valeur minimum de 1 500 po)',
            'duration' => '10 jours',
            'description' => 'Choisissez un sort de niveau 5 ou moins que vous êtes en mesure de lancer, qui possède une durée d\'incantation d\'une action, et qui peut vous prendre pour cible. Vous lancez ce sort (que l\'on appelle le sort contingent) lors de l\'incantation de la contingence. Vous dépensez donc les emplacements des deux sorts, mais le contingent ne fait pas effet immédiatement. Il s\'activera lorsque certaines conditions seront remplies. Vous devez décrire ces dernières au moment où vous lancez les deux sorts. Par exemple, lors d\'une contingence associée à une respiration aquatique, vous pouvez stipuler que la respiration aquatique doit se déclencher quand vous vous trouvez immergé dans l\'eau ou dans un liquide similaire.\n Le sort contingent prend effet dès que les circonstances sont remplies pour la première fois, que vous le vouliez ou non, ce qui met un terme à la contingence.\n Le sort contingent affecte uniquement votre personne, même s\'il peut normalement affecter d\'autres créatures. Vous ne pouvez utiliser qu\'un seul sort de contingence à la fois, si vous en lancez un second, les effets du précédent se dissipent. De plus, la contingence prend fin si sa composante matérielle n\'est plus sur votre personne.'
         ]);
         Spell::insert([
            'name' => 'Contresort',
            'school' => 'Abjuration',
            'level' => 3,
            'cast_time' => '1 réaction à utiliser quand vous voyez une créature située dans un rayon de 18 mètres autour de vous lancer un sort',
            'range' => '18 mètres',
            'component' => 'S',
            'duration' => 'instantanée',
            'description' => 'Vous tentez d\'interrompre une créature en pleine incantation. Si elle essayait de lancer un sort de niveau 3 ou moins, il échoue et reste sans effet. Si le sort est de niveau 4 ou plus, faites un test de caractéristique en utilisant votre caractéristique d\'incantation. Le DD est de 10 + niveau du sort. Si vous réussissez, le sort de la créature échoue et reste sans effet.\n Au moment de l\'incantation, vous pouvez désigner plusieurs créatures de votre choix que le sort ignorera.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, le sort à interrompre est automatiquement sans effet s\'il est d\'un niveau égal ou inférieur à celui de l\'emplacement de sort utilisé.'
         ]);
         Spell::insert([
            'name' => 'Contrôle de l\'eau',
            'school' => 'Transmutation',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '90 mètres',
            'component' => 'V, S, M (une goutte d\'eau et une pincée de poussière)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => 'Jusqu\'à la fin du sort, vous contrôlez toute étendue d\'eau indépendante située dans la zone de votre choix, cette dernière devant tenir dans un cube d\'au maximum 30 mètres d\'arête. Quand vous lancez ce sort, vous pouvez choisir l\'un des effets suivants. À votre tour, vous pouvez utiliser une action pour répéter l\'effet ou en appliquer un nouveau.\n <B>Inondation.</B> Vous faites monter le niveau d\'une étendue d\'eau isolée d\'un maximum de 6 mètres. Si la zone comprend une rive, l\'eau déborde et se répand sur la terre ferme.\n Si vous avez lancé le sort sur une grande étendue d\'eau, vous créez une vague de 6 mètres de haut qui traverse la zone affectée d\'un bout à l\'autre pour se briser une fois arrivée à la fin de la zone. Tous les véhicules de taille Très Grande ou inférieure qui se trouvent sur le chemin de la vague sont emportés jusqu\'au bout de la zone. Tous ces véhicules ont 25% de chances de chavirer.\n Le niveau de l\'eau reste plus élevé jusqu\'à la fin du sort ou jusqu\'à ce que vous choisissiez un autre effet. Si l\'effet d\'inondation produit une vague, elle se reforme au début de votre prochain tour tant que vous gardez cet effet actif.\n <B>Écarter les eaux.</B> Vous écartez les eaux de la zone pour y créer un passage. Il traverse toute la zone, les eaux formant une muraille de chaque côté. Le passage demeure jusqu\'à la fin du sort ou jusqu\'à ce que vous optiez pour un effet différent. Dans ces deux cas, l\'eau remplit alors progressivement le passage, au fil du round suivant, jusqu\'à ce que le niveau de l\'eau revienne à la normale.\n <B>Modifier le cours de l\'eau.</B> Vous changez l\'itinéraire de l\'eau courante qui traverse la zone et l\'envoyez dans la direction de votre choix, même si elle doit pour cela franchir des obstacles comme passer par-dessus un mur ou couler dans une direction improbable. L\'eau suit vos instructions dans la zone affectée, mais dès qu\'elle en sort, elle reprend un cours normal défini par le terrain qu\'elle parcourt. L\'eau continue de couler là où vous l\'avez choisi jusqu\'à la fin du sort ou jusqu\'à ce que vous décidiez d\'un autre effet.\n <B>Tourbillon.</B> Cet effet nécessite une étendue d\'eau d\'au moins 15 mètres carrés pour 7,50 mètres de fond et se traduit par la formation d\'un tourbillon au centre de la zone. Il se présente sous forme d\'un vortex de 1,50 mètre de large à sa base pour un maximum de 15 mètres de large au sommet et une hauteur de 7,50 mètres. Toutes les créatures et tous les objets qui se trouvent dans l\'eau et dans un rayon de 7,50 mètres autour du tourbillon sont entraînés vers lui sur 3 mètres. Une créature peut s\'éloigner à la nage si elle réussit un test de Force (Athlétisme) contre le DD du jet de sauvegarde de votre sort.\n Quand une créature entre dans le vortex pour la première fois de son tour ou qu\'elle y commence son tour, elle doit faire un jet de sauvegarde de Force. Si elle échoue, elle reçoit 2d8 dégâts contondants et se fait emporter par le vortex jusqu\'à la fin du sort. Si elle réussit son jet, elle subit seulement la moitié des dégâts et n\'est pas prise dans le vortex. Une créature emportée par le vortex peut utiliser une action pour tenter de s\'en éloigner comme décrit plus haut, mais elle est désavantagée lors de son test de Force (Athlétisme). À chaque tour, la première fois qu\'un objet entre dans le vortex, il subit 2d8 dégâts contondants. Ces dégâts se répètent à chaque round passé dans le vortex.'
         ]);
         Spell::insert([
            'name' => 'Contrôle du climat',
            'school' => 'Transmutation',
            'level' => 8,
            'cast_time' => '10 minutes',
            'range' => 'personnelle (rayon de 7,5 kilomètres)',
            'component' => 'V, S, M (encens incandescent et un peu de bois et de terre mélangés dans de l\'eau)',
            'duration' => 'concentration, jusqu\'à 8 heures',
            'description' => 'Vous prenez le contrôle de la météo dans un rayon de 7,5 kilomètres autour de vous pendant toute la durée du sort. Vous devez être en extérieur au moment de l\'incantation. Si vous vous rendez dans un endroit d\'où vous ne voyez pas directement le ciel, le sort se termine prématurément.\n Au moment de l\'incantation, vous changez les conditions météorologiques actuelles déterminées par le MD en fonction du climat et de la saison. Vous pouvez modifier les précipitations, la température et le vent. Il faut 1d4 × 10 minutes pour que les nouvelles conditions s\'installent. Vous pouvez ensuite les modifier à nouveau. Le temps retourne progressivement à la normale une fois le sort terminé.\n Quand vous modifiez les conditions météorologiques, cherchez les conditions actuelles dans les tables suivantes vous pouvez les décaler d\'un cran vers le haut ou le bas. Quand vous modifiez le vent, vous pouvez changer sa direction.<TABLE/> <TABLE/> <TABLE/>'
         ]);
         Spell::insert([
            'name' => 'Convocations instantanées de Drawmij',
            'school' => 'Invocation',
            'level' => 6,
            'is_rituel'=> true,
            'cast_time' => '1 minute',
            'range' => 'contact',
            'component' => 'V, S, M (un saphir d\'une valeur de 1 000 po)',
            'duration' => 'jusqu\'à dissipation',
            'description' => 'Vous touchez un objet pesant 5 kilos ou moins et dont la dimension la plus longue est de 1,80 mètre ou moins. Le sort laisse une marque invisible sur la surface de l\'objet et inscrit le nom de l\'objet sur le saphir que vous utilisez comme composante matérielle. Chaque fois que vous lancez ce sort, vous devez utiliser un saphir différent.\n Ensuite, vous pouvez utiliser une action quand vous le désirez pour prononcer le nom de l\'objet et broyer le saphir. L\'objet apparaît immédiatement dans votre main, en dépit des distances physiques et planaires, et le sort se termine.\n Si l\'objet est actuellement porté ou transporté par quelqu\'un d\'autre, il (l\'objet) n\'arrive pas jusqu\'à vous quand vous broyez le saphir, mais vous apprenez qui est la créature qui détient l\'objet et vous savez à peu près où elle se trouve à ce moment-là.\n Dissipation de la magie ou un effet similaire appliqué sur le saphir met un terme à l\'effet du sort.'
         ]);
         Spell::insert([
            'name' => 'Coquille antivie',
            'school' => 'Abjuration',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => 'personnelle (3 mètres de rayon)',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => 'Une barrière scintillante se déploie depuis votre personne jusqu\'à englober une zone d\'un rayon de 3 mètres. Elle se déplace avec vous, reste centrée sur vous et repousse les créatures autres que les morts-vivants et les créatures artificielles. Cette barrière persiste pendant toute la durée du sort.\n La barrière empêche les créatures affectées de la franchir ou de passer un membre au travers. Une créature affectée peut lancer des sorts ou porter des attaques à distance ou via une arme à allonge, tout cela franchissant la barrière.\n Si vous vous déplacez de telle manière qu\'une créature affectée est contrainte de traverser la barrière, le sort se termine.'
         ]);
         Spell::insert([
            'name' => 'Corde enchantée',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (extrait de maïs en poudre et boucle de parchemin torsadé)',
            'duration' => '1 heure',
            'description' => 'Vous touchez une longueur de corde d\'au maximum 18 mètres. L\'une de ses extrémités s\'élève alors dans les airs, jusqu\'à ce que toute la corde se dresse perpendiculairement au sol. Une entrée invisible s\'ouvre à l\'extrémité supérieure de la corde et débouche sur un espace extradimensionnel qui persiste jusqu\'à la fin du sort.\n On peut atteindre cet espace extradimensionnel en grimpant jusqu\'au sommet de la corde. Il peut accueillir un maximum de huit créatures de taille Moyenne ou inférieure. On peut ensuite tirer la corde dans l\'espace extradimensionnel, afin que personne ne la voie en dehors de l\'abri.\n Les attaques et les sorts ne peuvent pas traverser l\'entrée de l\'espace extradimensionnel, ni depuis l\'intérieur ni depuis l\'extérieur. En revanche, les créatures qui se trouvent à l\'intérieur peuvent regarder dehors grâce à une fenêtre de 90 centimètres sur 1,50 mètre centrée sur la corde.\n Tout ce qui se trouve dans l\'espace extradimensionnel tombe à l\'extérieur quand Je sort se termine.'
         ]);
         Spell::insert([
            'name' => 'Cordon de flèches',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '1,50 mètre',
            'component' => 'V, S, M (quatre flèches ou carreaux ou plus)',
            'duration' => '8 heures',
            'description' => 'Vous fichez quatre projectiles (flèches ou carreaux) non magiques en terre, à portée, et les imprégnez de magie afin de protéger une zone.Jusqu\'à la fin du sort, dès qu\'une créature autre que vous approche dans un rayon de 9 mètres autour des projectiles pour la première fois de son tour ou finit son tour à un tel endroit, une munition s\'envole pour la frapper. La créature doit réussir un jet de sauvegarde de Dextérité, sans quoi elle subit 1d6 dégâts perforants. Le projectile est ensuite détruit. Le sort se termine s\'il ne reste plus de projectiles.\n Au moment de l\'incantation, vous pouvez désigner plusieurs créatures de votre choix que le sort ignorera.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 3 ou plus, vous pouvez enchanter deux projectiles de plus par niveau au-delà du 2e.'
         ]);
         Spell::insert([
            'name' => 'Couleurs dansantes',
            'school' => 'Illusion',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 4,50 mètres)',
            'component' => 'V, S, M (une poignée de poudre ou de sable, colorée en rouge, jaune et bleu)',
            'duration' => '1 round',
            'description' => 'Un éventail de lumières colorées éblouissantes jaillit de votre main. Lancez 6d10. Le total représente le nombre de points de vie de créatures que le sort affecte. Les créatures situées dans un cône de 4,50 mètres, prenant votre personne comme point d\'origine, sont affectées dans l\'ordre croissant de leurs points de vie actuels (en ignorant les créatures inconscientes et les créatures aveugles).\n Chaque créature affectée, en commençant par celle qui possède actuellement le moins de points de vie, est aveuglée jusqu\'à la fin du sort. Soustrayez du total obtenu le nombre de points de vie actuel de chaque créature affectée avant de passer à la suivante, en choisissant chaque fois celle qui possède le moins de points de vie. Pour qu\'une créature soit affectée, elle doit posséder un nombre de points de vie actuel inférieur ou égal au total restant.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, lancez 2d10 supplémentaires par niveau au-delà du ler.'
         ]);
         Spell::insert([
            'name' => 'Couronne du dément',
            'school' => 'Enchantement',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Choisissez un humanoïde situé à portée dans votre champ de vision. Il doit réussir un jet de sauvegarde de Sagesse, sans quoi vous le charmez pendant toute la durée du sort. Tant que la cible est sous votre charme, une couronne tordue en acier dentelé apparaît sur sa tête et une lueur démente brille dans son regard.\n À chacun de ses tours, avant de se déplacer, la cible doit utiliser son action pour porter une attaque armée contre une créature (autre qu\'elle-même) que vous choisissez mentalement. Si vous ne choisissez pas de créature ou qu\'il n\'y en a pas à portée, la cible agit normalement.\n Lors de vos tours suivants, vous devez utiliser votre action pour garder le contrôle de la cible, sinon le sort se termine. La cible peut faire un jet de sauvegarde de Sagesse à la fin de chacun de ses tours. Si elle réussit, le sort se termine.'
         ]);
         Spell::insert([
            'name' => 'Création',
            'school' => 'Illusion',
            'level' => 5,
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (un petit bout de matière de même type que l\'objet que vous voulez créer)',
            'duration' => 'spéciale',
            'description' => 'Vous tirez des bribes de matière ombreuse de l\'Obscur pour créer à portée des objets inertes en matière végétale: du tissu, de la corde, du bois ou des objets similaires. Ce sort permet aussi de créer des objets minéraux comme de la pierre, du cristal ou du métal. L\'objet créé ne doit pas être plus grand qu\'un cube de 1,50 mètre d\'arête et doit impérativement être d\'une forme et d\'un matériau que vous avez déjà vus.\n La durée du sort dépend du matériau choisi pour façonner l\'objet. S\'il est fait de plusieurs matières, c\'est la durée la plus courte qui s\'applique.<TABLE/>\n Si vous utilisez les matériaux créés via ce sort comme composantes matérielles pour un autre sort, ce dernier échoue.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 6 ou plus, l\'arête du cube augmente de 1,50 mètre par niveau au-delà du 5e.'
         ]);
         Spell::insert([
            'name' => 'Création de mort-vivant',
            'school' => 'Nécromancie',
            'level' => 6,
            'cast_time' => '1 minute',
            'range' => '3 mètres',
            'component' => 'V, S, M (un pot d\'argile rempli de poussière tombale, un pot d\'argile rempli d\'eau saumâtre et un onyx noir d\'une valeur de 150 po par cadavre)',
            'duration' => 'instantanée',
            'description' => 'Ce sort se lance uniquement de nuit. Choisissez jusqu\'à trois cadavres de créatures humanoïdes de taille Moyenne ou Petite situés à portée. Chacun se change en goule placée sous votre contrôle. (Le MD dispose des statistiques de ces créatures).\n À chacun de vos tours, vous pouvez utiliser une action bonus pour contrôler mentalement les créatures que vous avez animées avec ce sort si elles se trouvent dans un rayon de 36 mètres (si vous en contrôlez plusieurs, vous pouvez en commander une ou plusieurs à la fois, à condition de donner le même ordre à toutes). Vous pouvez décider de l\'action que la créature va entreprendre et de l\'endroit où elle va se rendre lors de son prochain tour, ou donner des consignes plus génériques, comme de garder une salle ou un couloir. En l\'absence d\'ordre de votre part, la créature se contente de se défendre contre les créatures hostiles. Dès qu\'une créature a reçu un ordre, elle s\'y conforme jusqu\'à avoir accompli sa tâche.\n La créature reste sous votre contrôle pendant 24 heures, après quoi elle cesse d\'obéir aux ordres que vous lui avez donnés. Pour la maintenir sous votre contrôle pendant 24 heures de plus, vous devez lui relancer ce sort avant que les 24 heures de contrôle en cours ne se soient écoulées. Cette nouvelle utilisation du sort vous permet de réaffirmer votre contrôle sur un maximum de trois créatures que vous avez déjà animées via ce sort au lieu d\'en animer de nouvelles.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, vous pouvez animer ou maintenir votre contrôle sur quatre goules. Quand vous le lancez à partir d\'un emplacement de niveau 8, vous pouvez animer ou maintenir votre contrôle sur cinq goules ou deux blêmes ou deux nécrophages. Quand vous le lancez à partir d\'un emplacement de niveau 9, vous pouvez animer ou maintenir votre contrôle sur six goules ou trois blêmes ou trois nécrophages ou deux momies.'
         ]);
         Spell::insert([
            'name' => 'Création de nourriture et d\'eau',
            'school' => 'Invocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous créez 22,5 kilos de nourriture et 120 litres d\'eau, soit par terre, soit dans des récipients installés à portée. Cela suffit à nourrir et abreuver un maximum de quinze humanoïdes ou de cinq montures pendant 24 heures. Les vivres sont fades mais nourrissants. Ils se gâtent si personne ne les a mangés dans les 24 heures suivant leur création. L\'eau est claire et ne croupit pas.'
         ]);
         Spell::insert([
            'name' => 'Création ou destruction d\'eau',
            'school' => 'Transmutation',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une goutte d\'eau pour créer de l\'eau ou quelques grains de sable pour en détruire)',
            'duration' => 'instantanée',
            'description' => 'Vous créez ou détruisez de l\'eau.\n <B>Création d\'eau.</B> Vous créez jusqu\'à 40 litres d\'eau potable qui apparaissent à portée, dans un récipient ouvert.\n Sinon, l\'eau peut tomber en pluie dans un cube de 9 mètres d\'arête à portée, éteignant toutes les flammes à nu dans la zone.\n <B>Destruction d\'eau.</B> Vous détruisez jusqu\'à 40 litres d\'eau situés à portée dans un récipient ouvert.\n Sinon, vous pouvez détruire le brouillard dans un cube de 9 mètres d\'arête situé à portée.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 2 ou plus, vous créez ou détruisez 40 litres d\'eau de plus par niveau au-delà du ler ou bien l\'arête du cube affecté augmente de 1,50 mètre par niveau au-delà du ler.'
         ]);
         Spell::insert([
            'name' => 'Croissance d\'épines',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (sept épines acérées ou sept brindilles taillées en pointe)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => 'Dans une zone de 6 mètres de rayon centrée sur un point à portée, le sol se met à se déformer et donne naissance à un tapis de pointes et d\'épines. La zone se mue en terrain difficile pendant toute la durée du sort. Quand une créature entre dans la zone ou s\'y déplace, elle reçoit 2d4 dégâts perforants par tranche de 1,50 mètre parcouru.\n La transformation du sol est camouflée, de manière à ce que le terrain ait l\'air naturel. Une créature dans l\'incapacité de voir la zone au moment de l\'incantation doit faire un test de Sagesse (Perception) contre le DD du jet de sauvegarde de votre sort. Si elle le réussit, elle remarque que le terrain est dangereux avant d\'y entrer.'
         ]);
         Spell::insert([
            'name' => 'Croissance végétale',
            'school' => 'Transmutation',
            'level' => 3,
            'cast_time' => '1 action ou 8 heures',
            'range' => '45 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Ce sort décuple la vitalité des plantes d\'une zone donnée. Le sort a deux modes d\'utilisation, l\'un apportant des avantages immédiats, l\'autre sur le long terme.\n Si vous lancez ce sort en une action, choisissez un point à portée. Toutes les plantes ordinaires situées dans un rayon de 30 mètres autour de ce point deviennent particulièrement touffues et la végétation s\'épaissit. Une créature qui se déplace dans cette zone doit dépenser 1,20 mètre de déplacement pour parcourir 30 centimètres.\n Vous pouvez exclure une ou plusieurs portions, de n\'importe quelle taille, de la zone affectée par le sort.\n Si vous lancez le sort sur une période de huit heures, vous enrichissez la terre. Toute la végétation dans un rayon de 800 mètres autour d\'un point de votre choix situé à portée devient luxuriante pendant un an. Elle donne deux fois plus de nourriture que la normale lors de la récolte.'
         ]);
         Spell::insert([
            'name' => 'Danse irrésistible d\'Otto',
            'school' => 'Enchantement',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'concentration,jusqu\'à 1 minute',
            'description' => 'Choisissez une créature située à portée dans votre champ de vision. La cible entame une danse comique, se mettant à tape du pied et à caracoler sur place.\n Les créatures insensibles au charme sont immunisées contre ce sort.\n Une fois que la créature s\'est mise à danser, elle doit dépenser la totalité de son déplacement pour danser sans quitter son espace. De plus, elle est désavantagée lors des jets de sauvegarde de Dextérité et des jets d\'attaque. Tant que la cible est affectée par ce sort, les autres créatures sont avantagées par rapport à elle lors des jets d\'attaque. Une créature en train de danser peut utiliser son action pour faire un jet de sauvegarde de Sagesse et reprendre le contrôle de son corps. Si elle réussit, le sort se termine.'
         ]);
         Spell::insert([
            'name' => 'Déblocage',
            'school' => 'Transmutation',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V',
            'duration' => 'instantanée',
            'description' => 'Choisissez un objet situé à portée et dans votre champ de vision. Ce peut être une porte, une boîte, un coffre, des menottes, un cadenas ou un autre objet disposant d\'un système de fermeture ordinaire ou magique.\n Une cible fermée par une serrure ordinaire, coincée ou bloquée par une barre se déverrouille ou se débloque. Si l\'objet a plusieurs serrures, le sort en ouvre une seule.\n Si vous visez une cible fermée par un verrou magique, ce dernier est supprimé pendant 10 minutes, au cours desquelles on peut ouvrir et fermer la cible normalement.\n Quand vous lancez le sort, un cliquetis émane de l\'objet et retentit si fort qu\'on l\'entend dans un rayon de 90 mètres.'
         ]);
         Spell::insert([
            'name' => 'Déguisement',
            'school' => 'Illusion',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => '1 heure',
            'description' => 'Vous faites en sorte que votre personne (y compris vos vêtements, votre armure, vos armes et les autres objets en votre possession) prenne une apparence différente jusqu\'à la fin du sort ou jusqu\'à ce que vous utilisiez une action pour y mettre un terme. Vous pouvez passer pour une personne de trente centimètres de plus ou de moins, sembler gros, maigre ou entre les deux. Vous ne pouvez pas changer le type de votre corps, vous devez choisir une forme possédant la même conformation que vous au niveau des membres. En dehors de cela, les détails de l\'illusion sont laissés à votre imagination.\n Les changements qu\'apporte le sort ne résistent pas à un examen physique. Par exemple, si vous l\'utilisez pour ajouter un chapeau à votre tenue, les objets passent au travers et toute personne qui essaie de le toucher ne sentira que de l\'air, ou des cheveux et un crâne. Si vous utilisez le sort pour paraître plus mince qu\'en réalité, la main de quelqu\'un qui tente de vous toucher se heurtera à vous alors que, visuellement, elle semble encore dans le vide.\n Pour percer votre déguisement à jour, une créature peut dépenser une action pour vous examiner. Elle doit alors réussir un test d\'Intelligence (Investigation) contre le DD du jet de sauvegarde du sort.'
         ]);
         Spell::insert([
            'name' => 'Demi-plan',
            'school' => 'Invocation',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'S',
            'duration' => '1 heure',
            'description' => 'Vous créez une porte floue sur une surface plate et solide située à portée dans votre champ de vision. Elle est assez large pour laisser passer sans mal des créatures de taille Moyenne. Quand quelqu\'un ouvre la porte, elle donne sur un demi-plan ressemblant à une pièce vide de 9 mètres de côté (dans toutes les dimensions) faite de bois ou de pierre. La porte disparaît quand le sort se termine et les créatures et les objets encore dans le demi-plan y restent piégés, car elle s\'efface aussi de leur côté.\n Vous pouvez créer un nouveau demi-plan pour chaque incantation du sort ou relier la porte à un demi-plan que vous avez précédemment créé via ce sort. De plus, si vous connaissez la nature et le contenu d\'un demi-plan qu\'une autre créature a créé grâce à ce sort, vous pouvez lui relier votre propre porte.'
         ]);
         Spell::insert([
            'name' => 'Déplacer la terre',
            'school' => 'Transmutation',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S, M (une lame de fer et un petit sac contenant un mélange de terres : de l\'argile, du terreau et du sable)',
            'duration' => 'concentration,jusqu\'à 2 heures',
            'description' => 'Choisissez une zone de terrain à portée d\'un maximum de 12 mètres de côté. Vous pouvez remodeler la terre, le sable ou l\'argile qu\'elle comporte comme bon vous semble pendant toute la durée du sort. Vous pouvez augmenter ou diminuer l\'altitude de la zone, creuser ou combler une tranchée, ériger ou abattre un mur, ou former un pilier. L\'amplitude de ces modifications ne peut pas excéder la moitié de la dimension la plus importante de la zone affectée. Donc, si vous modifiez une zone de 12 mètres de côté, vous pouvez créer un pilier de 6 mètres de haut au maximum, modifier l\'altitude de la zone de 6 mètres au plus, creuser une tranchée d\'un maximum de 6 mètres de profondeur, etc. Il faut 10 minutes pour finaliser ces modifications.\n Au bout de chaque période de 10 minutes passées à vous concentrer sur le sort, vous pouvez choisir une nouvelle zone de terrain à modifier.\n Comme les transformations se produisent lentement, il est bien rare qu\'une créature se retrouve piégée ou blessée à cause des mouvements du terrain.\n Ce sort est incapable de manipuler la pierre naturelle et les constructions de pierre. La roche et les structures s\'adaptent au nouvel agencement du terrain. Si vos modifications déstabilisent une structure, elle peut très bien s\'effondrer.\n De même, le sort n\'affecte pas directement la croissance des plantes. La terre déplacée emporte les végétaux avec elle.'
         ]);
         Spell::insert([
            'name' => 'Désintégration',
            'school' => 'Transmutation',
            'level' => 6,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (de la magnétite et une pincée de poussière)',
            'duration' => 'instantanée',
            'description' => 'Un mince rayon de lumière verte jaillit de votre doigt pointé vers une cible située à portée dans votre champ de vision. La cible peut être une créature, un objet ou une création de force magique, comme un mur issu d\'un mur de force.\n Une créature visée par ce sort doit faire un jet de sauvegarde de Dextérité. Si elle le rate, elle subit 10d6+40 dégâts de force. Si ces dégâts la réduisent à 0 point de vie, elle est désintégrée.\n Une créature désintégrée est réduite à l\'état de fine poussière grise, tout comme tous les objets qu\'elle porte et transporte, à l\'exception des objets magiques. Pour ressusciter une créature ainsi désintégrée, il faut impérativement recourir à une résurrection suprême ou un souhait.\n Ce sort désintègre automatiquement les objets non magiques de taille Grande ou inférieure et les créations de force magique. Si la cible est un objet de Très Grande taille ou plus, le sort désintègre un cube de 3 mètres d\'arête au sein de l\'objet. Ce sort reste sans effet sur les objets magiques.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 7 ou plus, les dégâts augmentent de 3d6 par niveau au-delà du 6e.'
         ]);
         Spell::insert([
            'name' => 'Détection de la magie',
            'school' => 'Divination',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration.jusqu\'à 10 minutes',
            'description' => 'Pendant toute la durée du sort, vous percevez la présence de magie dans un rayon de 9 mètres. Si vous percevez ainsi une magie, vous pouvez dépenser votre action pour discerner une faible aura autour d\'une créature ou d\'un objet visible dans la zone et imprégné de magie. Vous découvrez aussi à quelle école appartient cette magie, le cas échéant.\n Le sort ignore la plupart des obstacles, mais il ne peut pas franchir 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince feuille de plomb, ni 1 mètre de bois ou de terre.'
         ]);
         Spell::insert([
            'name' => 'Détection des pensées',
            'school' => 'Divination',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (une pièce de cuivre)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Pendant toute la durée du sort, vous parvenez à lire les pensées de certaines créatures. Quand vous lancez ce sort, puis en tant qu\'action à votre tour jusqu\'à la fin du sort, vous pouvez focaliser vos pensées sur une créature située dans votre champ de vision et dans un rayon de 9 mètres. Si elle dispose d\'une Intelligence de 3 ou moins ou ne parle aucune langue, elle n\'est pas affectée.\n Au départ, vous découvrez les pensées de surface de la créature, c\'est-à-dire ce qu\'elle a à l\'esprit à ce moment-là. Par une action, vous pouvez tourner votre attention vers les pensées d\'une autre créature ou tenter de vous enfoncer plus profondément dans l\'esprit de celle que vous sondez actuellement. Dans ce cas, cette créature doit faire un jet de sauvegarde de Sagesse. Si elle échoue, vous avez un aperçu de son mode de raisonnement (le cas échéant), de son état émotionnel ou de ce qui occupe une place importante dans son esprit (par exemple quelque chose qui l\'inquiète fortement, qu\'elle aime, qu\'elle déteste ... ). Si elle réussit, le sort se termine. Dans les deux cas, la cible sait que vous sondez son esprit et, à moins que vous ne tourniez votre attention vers une autre créature, votre cible peut utiliser son action à son tour pour faire un test d\'Intelligence opposé au vôtre. Si elle réussit, le sort se termine.\n Les questions directement posées à l\'oral à une cible orientent naturellement le cours de ses pensées, ce sort est donc particulièrement utile lors d\'un interrogatoire.\n Vous pouvez aussi utiliser ce sort pour détecter la présence de créatures intelligentes que vous ne voyez pas. Vous pouvez chercher les pensées qui se trouvent dans un rayon de 9 mètres autour de vous au moment où vous lancez ce sort ou bien par une action tandis que le sort est actif. Le sort peut franchir des obstacles, mais il est arrêté par soixante centimètres de roche, 2,5 centimètres de métal autre que le plomb ou une mince feuille de plomb. Vous ne pouvez pas repérer les créatures dotées d\'une Intelligence de 3 ou moins, ni celles qui ne parlent aucune langue.\n Une fois que vous avez ainsi détecté la présence d\'une créature, vous pouvez lire ses pensées pendant le reste de la  durée du sort, comme expliqué plus haut, même si vous ne la voyez pas, mais elle doit tout de même se trouver à portée.'
         ]);
         Spell::insert([
            'name' => 'Détection du bien et du mal',
            'school' => 'Divination',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' =>'Pendant toute la durée du sort, vous savez s\'il y a une aberration, un céleste, un élémentaire, une fée, un fiélon ou un mort-vivant dans un rayon de 9 mètres autour de vous et vous savez précisément où il se trouve. De même, vous savez si un lieu ou un objet situé dans un rayon de 9 mètres a été consacré ou profané.\n Le sort ignore la plupart des obstacles, mais il ne peut pas franchir 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince feuille de plomb, ni 1 mètre de bois ou de terre.'
         ]);
         Spell::insert([
            'name' => 'Détection du poison et des maladies',
            'school' => 'Divination',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (un brin d\'if )',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => 'Pendant toute la durée du sort, vous percevez la présence de poisons, de créatures venimeuses et de maladies dans un rayonde 9 mètres autour de vous. Vous déterminez également leur emplacement et identifiez à chaque fois le type de poison, de créature ou de maladie concerné.\n Le sort ignore la plupart des obstacles, mais il ne peut pas franchir 30 centimètres de pierre, 2,5 centimètres de métal ordinaire, une mince feuille de plomb, ni 1 mètre de bois ou de terre.'
         ]);
         Spell::insert([
            'name' => 'Disque flottant de Tenser',
            'school' => 'Invocation',
            'level' => 1,
            'is_rituel'=> true,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S, M (une goutte de mercure)',
            'duration' => '1 heure',
            'description' => 'Ce sort crée un plan de force circulaire horizontal d\'un mètre de diamètre pour 2,5 centimètres d\'épaisseur. Il flotte à un mètre du sol dans un espace inoccupé de votre choix situé à portée et dans votre champ de vision. Le disque persiste pendant toute la durée du sort et peut accueillir jusqu\'à 250 kilos. Si on pose plus de poids dessus, le sort se termine et tout ce qui se trouvait sur le disque tombe à terre.\n Le disque reste immobile tant que vous vous tenez dans un rayon de 6 mètres. Si vous vous en éloignez plus que cela, il vous suit de manière à rester dans les 6 mètres autour de vous. Il peut se déplacer sur un terrain irrégulier, monter ou descendre des escaliers, des pentes, etc. Mais il ne peut pas franchir une différence de niveau de trois mètres ou plus. Par exemple, il ne peut pas passer au-dessus d\'une fosse de 3 mètres de profondeur ni la quitter s\'il a été formé au fond.\n Si vous vous éloignez à plus de 30 mètres du disque (typiquement parce qu\'il ne peut pas contourner un obstacle pour vous suivre), le sort se termine.'
         ]);
         Spell::insert([
            'name' => 'Dissipation de la magie',
            'school' => 'Abjuration',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Choisissez une créature, un objet ou un effet magique à portée. Tout sort de niveau 3 ou inférieur qui l\'affecte se termine. Si la cible est affectée par un sort de niveau 4 ou plus, faites un test de caractéristique en utilisant votre caractéristique d\'incantation. Le DD est de 10 + niveau du sort. Ce dernier se termine si vous réussissez votre test.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, vous mettez automatiquement un terme à un sort affectant la cible quand le niveau de ce sort est égal ou inférieur au niveau de l\'emplacement de sort que vous utilisez.'
         ]);
         Spell::insert([
            'name' => 'Dissipation du bien et du mal',
            'school' => 'Abjuration',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (eau bénite ou poudre d\'argent et de fer)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Une énergie scintillante vous entoure et vous protège contre les fées, les morts-vivants et les créatures originaires d\'au-delà du plan matériel. Pendant toute la durée du sort, les célestes, les élémentaires, les fées, les fiélons et les morts-vivants sont désavantagés lors de leurs jets d\'attaque contre vous.\n Vous pouvez terminer le sort plus tôt en utilisant l\'une des fonctions spéciales suivantes.\n <B>Annulation d\'enchantement.</B> Vous utilisez votre action pour toucher une créature à votre portée qui se trouve charmée, terrorisée ou possédée par un céleste, un élémentaire, une fée, un fiélon ou un mort-vivant. Cette créature n\'est alors plus charmée, terrorisée ou possédée par ces créatures.\n <B>Renvoi.</B> Vous utilisez votre action pour faire une attaque de sort au corps à corps contre un céleste, un élémentaire, une fée, un fiélon ou un mort-vivant situé à une distance inférieure ou égale à votre allonge. Si vous touchez la créature, vous tentez de la renvoyer sur son plan natal. Elle doit réussir un jet de sauvegarde de Charisme ou retourner sur son plan natal (si elle ne s\'y trouve pas déjà). Si un mort-vivant ne se trouve pas sur son plan natal, il est renvoyé en Gisombre tandis qu\'une fée sera expulsée dans la Féerie sauvage.'
         ]);
         Spell::insert([
            'name' => 'Divination',
            'school' => 'Divination',
            'level' => 4,
            'is_rituel'=> true,
            'cast_time' => '1 action',
            'range' => 'personnelle',
            'component' => 'V, S, M (de l\'encens et une offrande sacrificielle adaptée à votre religion, l\'ensemble valant au moins 25 po, et que le sort consume)',
            'duration' => 'instantanée',
            'description' => 'Grâce à votre magie et à une offrande, vous entrez en contact avec un dieu ou l\'un de ses serviteurs. Vous lui posez une unique question à propos d\'un objectif, d\'un événement ou d\'une activité qtù doit se dérouler dans les sept jours à venir. Le MD vous donne une réponse sincère, pouvant être une courte phrase, des vers cryptiques ou un présage.\n Le sort ne tient pas compte d\'une éventuelle modification des circonstances susceptible de bouleverser l\'issue des événements, comme l\'incantation de sorts supplémentaires ou la perte ou l\'arrivée d\'un compagnon.\n Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances par incantation en sus de la première que vous obteniez une prémonition aléatoire au lieu d\'une prémonition fiable. C\'est au MD de faire ce jet en secret.'
         ]);
         Spell::insert([
            'name' => 'Doigt de mort',
            'school' => 'Nécromancie',
            'level' => 7,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous envoyez de l\'énergie négative dans le corps d\'une créature située à portée dans votre champ de vision, ce qui lui inflige des douleurs déchirantes. La cible doit faire un jet de sauvegarde de Constitution. Si elle échoue, elle subit 7d8+30 dégâts nécrotiques, la moitié seulement si elle réussit.\n Si ce sort achève un humanoïde, ce dernier se relève au début de votre prochain tour sous forme de zombi à jamais sous votre contrôle. Il suit vos ordres verbaux au mieux de ses capacités.'
         ]);
         Spell::insert([
            'name' => 'Domination d\'animal',
            'school' => 'Enchantement',
            'level' => 4,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous tentez d\'envoûter une bête située à portée dans votre champ de vision. Elle doit réussir un jet de sauvegarde de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Elle est avantagée lors du jet de sauvegarde si vous ou des créatures amicales envers vous êtes en train de la combattre.\n Tant que la bête est charmée, vous entretenez un lien télépathique avec elle, qui persiste tant que vous vous trouvez sur le même plan d\'existence. Vous pouvez utiliser ce lien télépathique pour donner des ordres à cette créature tant que vous êtes conscient (ce qui ne vous demande pas d\'action). Elle fait de son mieux pour vous obéir. Vous pouvez lui donner un ordre simple et générique, comme « attaque cette créature », « cours jusque là-bas » ou « va chercher cet objet ». Si elle ne reçoit pas de nouvelles instructions de votre part une fois l\'ordre exécuté, elle se contente de se défendre et de se préserver au mieux.\n Vous pouvez utiliser votre action pour prendre le contrôle total de votre cible et la diriger de façon précise. Jusqu\'à la fin de votre prochain tour, elle exécute seulement les actions que vous choisissez et ne fait rien que vous ne lui ayez autorisé. Pendant cette période, vous pouvez aussi lui faire exécuter une réaction, mais pour cela, vous devez également dépenser votre propre réaction.\n Chaque fois que la cible subit des dégâts, elle a droit à un nouveau jet de sauvegarde de Sagesse contre le sort. Si elle le réussit, le sort prend fin.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 5, la durée devient « concentration, jusqu\'à 10 minutes ». Si vous lancez ce sort en utilisant un emplacement de niveau 6, la durée devient « concentration, jusqu\'à 1 heure ». Si vous lancez ce sort en utilisant un emplacement de niveau 7, la durée devient « concentration, jusqu\'à 8 heures ».'
         ]);
         Spell::insert([
            'name' => 'Domination de monstre',
            'school' => 'Enchantement',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 heure',
            'description' => 'Vous tentez d\'envoûter une créature située à portée dans votre champ de vision. Elle doit réussir un jet de sauvegarde de Sagesse, sans quoi vous la charmez pendant toute la durée du sort. Elle est avantagée lors du jet de sauvegarde si vous ou des créatures amicales envers vous êtes en train de la combattre.\n Tant que la créature est charmée, vous entretenez un lien télépathique avec elle qui persiste tant que vous vous trouvez sur le même plan d\'existence. Vous pouvez utiliser ce lien télépathique pour donner des ordres à cette créature tant que vous êtes conscient (ce qui ne vous demande pas d\'action). Elle fait de son mieux pour vous obéir. Vous pouvez lui donner un ordre simple et générique, comme « attaque cette créature », « cours jusque là-bas » ou « va chercher cet objet ». Si elle ne reçoit pas de nouvelles instructions de votre part une fois l\'ordre exécuté, elle se contente de se défendre et de se préserver au mieux.\n Vous pouvez utiliser votre action pour prendre le contrôle total de votre cible et la diriger de façon précise. Jusqu\'à la fin de votre prochain tour, elle exécute seulement les actions que vous choisissez et ne fait rien que vous ne lui ayez autorisé. Pendant cette période, vous pouvez aussi lui faire exécuter une réaction, mais pour cela, vous devez également dépenser votre propre réaction.\n Chaque fois que la cible subit des dégâts, elle a droit à un nouveau jet de sauvegarde de Sagesse contre le sort. Si elle le réussit, le sort prend fin.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 9, la durée devient « concentration, jusqu\'à 8 heures ».'
         ]);
         Spell::insert([
            'name' => 'Domination de personne',
            'school' => 'Enchantement',
            'level' => 5,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous tentez d\'envoûter un humanoïde situé à portée et dans votre champ de vision. Il doit réussir un jet de sauvegarde de Sagesse, sans quoi vous le charmez pendant toute la durée du sort. Il est avantagé lors du jet de sauvegarde si vous ou des créatures amicales envers vous êtes en train de le combattre.\n Tant que l\'humanoïde est charmé, vous entretenez un lien télépathique avec lui qui persiste tant que vous vous trouvez sur le même plan d\'existence. Vous pouvez utiliser ce lien télépathique pour donner des ordres à cette créature tant que vous êtes conscient (ce qui ne vous demande pas d\'action). Elle fait de son mieux pour vous obéir. Vous pouvez lui donner un ordre simple et générique, comme « attaque cette créature », « cours jusque là-bas » ou « va chercher cet objet ». Si elle ne reçoit pas de nouvelles instructions de votre part une fois l\'ordre exécuté, elle se contente de se défendre et de se préserver au mieux.\n Vous pouvez utiliser votre action pour prendre le contrôle total de votre cible et la diriger de façon précise. Jusqu\'à la fin de votre prochain tour, elle exécute seulement les actions que vous choisissez et ne fait rien que vous ne lui ayez autorisé. Pendant cette période, vous pouvez aussi lui faire exécuter une réaction, mais pour cela, vous devez également dépenser votre propre réaction.\n Chaque fois que la cible subit des dégâts, elle a droit à un nouveau jet de sauvegarde de Sagesse contre le sort. Si elle le réussit, le sort prend fin.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un  emplacement de niveau 6, la durée devient « concentration, jusqu\'à 10 minutes ». Si vous lancez ce sort en utilisant un emplacement de niveau 7, la durée devient « concentration, jusqu\'à 1 heure ». Si vous lancez ce sort en utilisant un emplacement de niveau 8 ou plus la durée devient « concentration, jusqu\'à 8 heures ».'
         ]);
         Spell::insert([
            'name' => 'Doux repos',
            'school' => 'Nécromancie',
            'level' => 2,
            'is_rituel'=> true,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S, M (une pincée de sel et une pièce de cuivre à poser sur chaque œil du cadavre et qui doivent rester en place pendant toute la durée du sort)',
            'duration' => '10 jours',
            'description' => 'Vous touchez un cadavre ou assimilé. Pendant toute la durée du sort, la cible est protégée contre la décomposition et ne peut pas se transformer en mort-vivant.\n Le sort rallonge aussi la période pendant laquelle on peut rappeler la cible d\'entre les morts, car les jours passés sous l\'influence de ce sort ne sont pas décomptés de la période pendant laquelle on peut utiliser des sorts comme relever les morts.'
         ]);
         Spell::insert([
            'name' => 'Druidisme',
            'school' => 'Transmutation',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => '9 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous créez l\'un des effets suivants à portée après quelques murmures adressés aux esprits de la nature.\n Vous créez un effet sensoriel minuscule et inoffensif qui annonce le temps qu\'il fera là où vous vous trouvez pendant les 24 heures à venir. Cet effet peut prendre la forme d\'un orbe doré si le temps va rester dégagé, d\'un nuage s\'il va pleuvoir, de flocons s\'il va neiger, etc. L\'effet persiste pendant 1 round.\n Vous faites instantanément éclore une fleur ou un bourgeon ou germer une graine.\n Vous créez un effet sensoriel instantané inoffensif, comme des feuilles qui tombent, un coup de vent, le bruit que ferait un petit animal ou une légère odeur de moufette. L\'effet doit être contenu dans un cube d\'au maximum 1,50 mètre d\'arête.\n Vous allumez ou éteignez instantanément une chandelle, une torche ou un petit feu de camp.'
         ]);
         Spell::insert([
            'name' => 'Duel forcé',
            'school' => 'Enchantement',
            'level' => 1,
            'cast_time' => '1 action bonus',
            'range' => '9 mètres',
            'component' => 'V',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous poussez une créature à vous affronter en duel. Une créature située à portée dans votre champ de vision doit faire un jet de sauvegarde de Sagesse. Si elle le rate, vous l\'obnubilez et elle ne peut résister à votre injonction divine. Pendant toute la durée du sort, elle est désavantagée lors des jets d\'attaque effectués contre toute créature autre que vous et doit faire un jet de sauvegarde de Sagesse chaque fois qu\'elle tente de s\'éloigner à plus de 9 mètres de vous. Si elle réussit ce jet de sauvegarde, le sort ne gêne pas ses mouvements pour ce tour.\n Le sort se termine si vous attaquez une créature autre que celle visée par ce sort, si vous lancez un sort sur une créature hostile autre qu\'elle, si une créature amicale envers vous la blesse ou lui lance un sort néfaste ou si vous terminez votre tour à plus de 9 mètres d\'elle.'
         ]);
         Spell::insert([
            'name' => 'Éclair',
            'school' => 'Évocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle (ligne de 30 mètres)',
            'component' => 'V, S, M (un peu de fourrure et une baguette en ambre, en cristal ou en verre)',
            'duration' => 'instantanée',
            'description' => 'Un éclair formant une ligne de 30 mètres de long pour 1,50 mètre de large jaillit de votre personne et file dans la direction de votre choix. Chaque créature située sur la ligne doit faire un jet de sauvegarde de Dextérité. Celles qui échouentsubissent 8d6 dégâts de foudre, les autres la moitié seulement.\n La foudre embrase les objets inflammables de la zone qui ne sont ni portés ni transportés par une créature.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de ld6 par niveau au-delà du 3e.'
         ]);
         Spell::insert([
            'name' => 'Éclat du soleil',
            'school' => 'Évocation',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (du feu et un éclat d\'héliotrope)',
            'duration' => 'instantanée',
            'description' => 'La chaude lumière du soleil illumine une zone de 18 mètres de rayon centrée sur un point de votre choix situé à portée. Chaque créature présente dans cette lumière doit faire un jet de sauvegarde de Constitution. Celles qui échouent subissent 12d6 dégâts radiants et sont aveuglées pendant 1 minute. Les autres subissent seulement la moitié des dégâts et ne sont pas aveuglées par le sort. Les vases et les morts-vivants sont désavantagés lors de ce jet de sauvegarde.\n Une créature aveuglée par le sort fait un autre jet de Constitution à la fin de chacun de ses tours. Dès qu\'elle réussit, sa cécité disparaît.\n Ce sort dissipe toutes les ténèbres présentes dans la zone qui sont issues d\'un sort.'
         ]);
         Spell::insert([
            'name' => 'Embruns prismatiques',
            'school' => 'Évocation',
            'level' => 7,
            'cast_time' => '1 action',
            'range' => 'personnelle (cône de 18 mètres)',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Huit rayons de lumière multicolores jaillissent de votre main. Chacun a une couleur différente et possède des pouvoirs et objectifs distincts. Chaque créature présente dans un cône de 18 mètres doit faire un jet de sauvegarde de Dextérité. Lancez 1d8 par cible pour savoir quelle couleur l\'affecte.\n <B>1.Rouge.</B> La cible subit 10d6 dégâts de feu si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.\n <B>2.Orange.</B> La cible subit 10d6 dégâts d\'acide si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.\n <B>3.Jaune.</B> La cible subit 10d6 dégâts de foudre si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.\n <B>4.Vert.</B> La cible subit 10d6 dégâts de poison si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.\n <B>5.Bleu.</B> La cible subit 10d6 dégâcs de froid si elle rate son jet de sauvegarde, la moitié seulement si elle le réussit.\n <B>6.Indigo.</B> Si la cible rate son jet de sauvegarde, elle est entravée et doit alors faire un jet de sauvegarde de Constitution à la fin de chacun de ses tours. Si elle en réussit trois, le sort se termine, si elle en rate trois, elle se change définitivement en pierre et elle est en proie à l\'état pétrifié. Les succès et les échecs n\'ont pas à être consécutifs : tenez le compte dans chaque catégorie jusqu\'à ce que l\'une d\'elles arrive à trois.\n <B>7.Violet.</B> La cible est aveugle si elle rate son jet de sauvegarde. Elle doit alors faire un jet de sauvegarde de Sagesse au début de votre prochain tour. Si elle le réussit, elle recouvre la vue, si elle le rate, elle est emportée sur un autre plan d\'existence choisi par le MD et recouvre aussi la vue. (En général, une créature qui ne se trouve pas sur son propre plan d\'existence est bannie là-bas tandis que les autres créatures sont envoyées sur le plan astral ou éthéré).\n <B>8.Spécial.</B> Deux rayons viennent frapper la cible. Relancez deux fois le dé en le relançant chaque fois que vous sortez un 8.'
         ]);
         Spell::insert([
            'name' => 'Emprisonnement',
            'school' => 'Abjuration',
            'level' => 9,
            'cast_time' => '1 minute',
            'range' => '9 mètres',
            'component' => 'V, S, M (un portrait sur un vélin ou une statuette sculptée à l\'effigie de la cible et une composante spéciale qui varie en fonction de la version du sort choisie et vaut au moins 500 po par dé de vie de la cible)',
            'duration' => 'jusqu\'à dissipation',
            'description' => 'Vous créez des entraves magiques pour immobiliser une créature située à portée dans votre champ de vision. La cible doit réussir un jet de sauvegarde de Sagesse ou se retrouver emprisonnée par le sort. Si elle réussit, elle est immunisée contre ce sort si vous le lancez de nouveau. Tant que la créature est affectée par le sort, elle n\'a pas besoin de respirer, de manger, ni de boire et ne vieillit plus. Les sorts de divination ne parviennent plus à la localiser ni à la percevoir.\n Vous devez opter pour l\'une des formes d\'emprisonnement suivantes quand vous lancez le sort.\n <B>Enseveli.</B> La cible est ensevelie dans les profondeurs de la terre, dans une sphère de force magique tout juste assez grande pour la contenir. Rien ne peut traverser cette sphère et les créatures ne peuvent pas recourir au voyage planaire pour y entrer ou en sortir.\n La composante spéciale de cette version du sort est un petit orbe en mithral.\n <B>Enchaîné.</B> La cible est retenue par de lourdes chaînes fermement ancrées au sol. Elle est entravée jusqu\'à ce que le sort se termine et, jusque-là, elle ne peut pas se déplacer ni être déplacée, par quelque moyen que ce soit.\n La composante spéciale de cette version du sort est une fine chaîne faite de métal précieux.\n <B>Prison isolée.</B> Le sort transporte la cible dans un minuscule demi-plan protégé contre la téléportation et les voyages planaires. Ce demi-plan peut être un labyrinthe, une cage, une tour ou une structure confinée similaire de votre choix.\n La composante spéciale de cette version du sort est une représentation miniature de la prison, faite de jade.\n <B>Confinement minimal.</B> La cible rétrécit jusqu\'à ne plus faire que 2,5 centimètres de haut et se retrouve emprisonnée dans une gemme ou un objet similaire. La lumière traverse la gemme normalement (ce qui permet à la cible de voir l\'extérieur et aux autres créatures de regarder dedans) mais rien d\'autre ne peut traverser sa paroi, pas même les méthodes de téléportation ni les voyages planaires. Il est impossible de tailler la gemme ou de la briser tant que le sort fait effet.\n La composante spéciale de cette version du sort est une grande gemme transparente comme un corindon, un diamant ou un rubis.\n <B>Sommeil.</B> La cible s\'endort et il est impossible de la réveiller.\n La composante spéciale de cette version du sort est un bouquet d\'herbes soporifiques très rares.\n <B>Mettre fin au sort.</B> Lors de l\'incantation et quelle que soit la version du sort, vous pouvez préciser une condition spéciale qui met fin au sort et libère la cible. Cette condition peut être aussi spécifique ou aussi élaborée que vous le désirez, mais le MD doit confirmer que cette condition est réalisable et a une chance d\'être remplie. Elle peut se baser sur le nom de la créature, son identité ou sa divinité, mais sinon elle doit reposer sur des actions ou des qualités observables et non sur des éléments intangibles comme le niveau, la classe ou les points de vie.\n Dissipation de la magie peut mettre fin au sort à condition d\'être lancée depuis un emplacement de sort de niveau 9 en visant la prison ou la composante matérielle spéciale utilisée pour lancer le sort.\n Vous pouvez utiliser une composante spéciale pour créer une prison à la fois seulement. Si vous relancez ce sort en utilisant la même composante, la cible de la première incantation est libérée sur-le-champ.'
         ]);
         Spell::insert([
            'name' => 'Enchevêtrement',
            'school' => 'Invocation',
            'level' => 1,
            'cast_time' => '1 action',
            'range' => '27 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Des herbes et des lianes entremêlées jaillissent du sol dans un carré de 6 mètres de côté centré sur un point à portée. Pendant toute la durée du sort, les végétaux transforment la zone en terrain difficile.\n Une créature qui se trouve dans la zone affectée lorsque vous lancez le sort doit réussir un jet de sauvegarde de Force, sans quoi elle reste entravée dans les plantes jusqu\'à ce que le sort se termine. Une créature entravée peut utiliser une action pour faire un test de Force contre le DD du sort. Si elle réussit, elle se libère.\n Quand le sort se termine, les plantes invoquées se flétrissent.'
         ]);
         Spell::insert([
            'name' => 'Entrave planaire',
            'school' => 'Abjuration',
            'level' => 5,
            'cast_time' => '1 heure',
            'range' => '18 mètres',
            'component' => 'V, S, M (un bijou d\'une valeur minimale de 1 000 po, que le sort consume)',
            'duration' => '24 heures',
            'description' => 'Grâce à ce sort, vous vous attachez de force les services d\'un céleste, d\'un élémentaire, d\'une fée ou d\'un fiélon. La créature doit se trouver à portée pendant toute la durée du sort. (En général, elle est d\'abord invoquée au centre d\'un cercle magique inversé où elle reste piégée le temps de l\'incantation). La cible doit faire un jet de sauvegarde de Charisme à la fin de l\'incantation. Si elle échoue, elle est contrainte de vous servir pendant toute la durée du sort. Si elle a été invoquée ou créée via un autre sort, la durée de ce dernier se prolonge jusqu\'à égaler celle de l\'entrave planaire.\n La créature liée doit suivre vos instructions au mieux de ses capacités. Vous pouvez lui demander de vous accompagner lors d\'une aventure, de protéger un lieu ou de transmettre un message. La créature obéit à vos instructions à la lettre, mais si elle est hostile envers vous, elle peut tout à fait interpréter vos paroles de manière à satisfaire ses propres objectifs. Si la créature a exécuté vos instructions avant la fin du sort, elle revient vers vous pour vous en informer si elle se trouve sur le même plan d\'existence que vous. Si vous êtes sur un autre plan, elle se rend là où vous l\'avez liée et y reste jusqu\'à la fin du sort.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau supérieur, la durée augmente: 10 jours au niveau 6, 30 au niveau 7, 180 au niveau 8 et un an et un jour au niveau 9.'
         ]);
         Spell::insert([
            'name' => 'Envoi de message',
            'school' => 'Évocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'illimitée',
            'component' => 'V, S, M (un petit bout de fil de cuivre)',
            'duration' => '1 round',
            'description' => 'Vous envoyez un court message d\'au maximum 25 mots à une créature qui vous est familière. Elle entend le message dans son esprit, sait que c\'est vous qui le lui avez envoyé si elle vous connaît, et peut vous répondre immédiatement de la même manière. Le sort permet aux créatures dotées d\'une Intelligence minimale de 1 de comprendre le sens de votre message.\n Vous pouvez envoyer votre message à n\'importe quelle distance et même sur un autre plan d\'existence, mais si la cible est sur un autre plan, il y a 5% de chances que le message n\'arrive pas à destination.'
         ]);
         Spell::insert([
            'name' => 'Envoûtement',
            'school' => 'Enchantement',
            'level' => 2,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S',
            'duration' => '1 minute',
            'description' => 'Vous entonnez une suite de paroles envoûtantes qui obligent les créatures de votre choix qui vous entendent et sont situées à portée et dans votre champ de vision à faire un jet de sauvegarde de Sagesse. Une créature qui ne peut pas être charmée réussit automatiquement ce jet de sauvegarde. Si vous ou vos compagnons vous battez contre une de ces créatures, elle est avantagée lors du jet de sauvegarde. Si la créature rate son jet, elle est désavantagée lors des tests de Sagesse (Perception) destinés à percevoir une créature autre que vous jusqu\'à ce que le sort se termine ou jusqu\'à ce qu\'elle ne puisse plus vous entendre. Le sort se termine si vous êtes neutralisé ou dans l\'incapacité de parler.'
         ]);
         Spell::insert([
            'name' => 'Épargner les mourants',
            'school' => 'Nécromancie',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Vous touchez une créature vivante à 0 point de vie, ce qui la stabilise. Ce sort n\'a aucun effet sur les morts-vivants et les créatures artificielles.'
         ]);
         Spell::insert([
            'name' => 'Épée de Mordenkainen',
            'school' => 'Évocation',
            'level' => 7,
            'cast_time' => '1 action',
            'range' => '18 mètres',
            'component' => 'V, S, M (une épée en platine miniature avec le pommeau et la poignée en cuivre et zinc, d\'une valeur de 250 po)',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous créez un plan de force en forme d\'épée qui plane à portée et persiste pendant toute la durée du sort.\n Dès que l\'épée apparaît, vous faites une attaque de sort au corps à corps contre une cible de votre choix située dans un rayon de 1,50 mètre autour de l\'épée. Si l\'épée touche, la cible subit 3d10 dégâts de force. Tant que le sort n\'est pas terminé, vous pouvez dépenser une action bonus à chacun de vos tours pour déplacer l\'épée d\'un maximum de 6 mètres afin de la conduire à un endroit situé dans votre champ de vision, puis répéter l\'attaque contre la même cible ou une autre.'
         ]);
         Spell::insert([
            'name' => 'Esprit faible',
            'school' => 'Enchantement',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => '45 mètres',
            'component' => 'V, S, M (une poignée de sphères en argile, en cristal, en verre ou minérales)',
            'duration' => 'instantanée',
            'description' => 'Vous vous attaquez à l\'esprit d\'une créature située à portée dans votre champ de vision en essayant de briser son intellect et sa personnalité. La cible subit 4d6 dégâts psychiques et doit faire un jet de sauvegarde d\'Intelligence.\n Si la cible rate son jet, son Intelligence et son Charisme tombent à 1. Elle ne peut plus lancer de sorts, activer d\'objet magique, comprendre une langue, ni communiquer de manière intelligible. En revanche, elle est toujours capable de reconnaître ses amis, de les suivre et même de les protéger.\n La créature peut refaire un jet de sauvegarde tous les 30 jours. Le sort se termine dès qu\'elle réussit.\n On peut mettre un terme à ce sort avec restauration supérieure, guérison ou souhait.'
         ]);
         Spell::insert([
            'name' => 'Esprit impénétrable',
            'school' => 'Abjuration',
            'level' => 8,
            'cast_time' => '1 action',
            'range' => 'contact',
            'component' => 'V, S',
            'duration' => '24 heures',
            'description' => 'Vous touchez une créature consentante et, jusqu\'à la fin du sort, vous l\'immunisez contre les dégâts psychiques, les effets percevant les émotions ou révélant les pensées, les sorts de divination et l\'état charmé. Ce sort déjoue même les souhaits et les sorts et effets de même puissance qui cherchent à affecter l\'esprit de la cible ou à obtenir des informations sur elle.'
         ]);
         Spell::insert([
            'name' => 'Esprits gardiens',
            'school' => 'Invocation',
            'level' => 3,
            'cast_time' => '1 action',
            'range' => 'personnelle (4,50 mètres de rayon)',
            'component' => 'V, S, M (un symbole sacré)',
            'duration' => 'concentration, jusqu\'à 10 minutes',
            'description' => 'Vous appelez des esprits qui vous protègent. Ils volètent autour de vous dans un rayon de 4,50 mètres pendant toute la durée du sort. Si vous êtes Bon ou Neutre, ils ont une apparence angélique ou féerique (à vous de choisir). Si vous êtes Mauvais, ils ont une apparence fiélone.\n Quand vous lancez le sort, vous pouvez désigner autant de créatures que vous le voulez afin qu\'il ne les affecte pas. Une créature affectée voit sa vitesse réduite de moitié dans la zone et, quand elle y entre pour la première fois de son tour ou quand elle y commence son tour, elle doit faire un jet de sauvegarde de Sagesse. Si elle échoue, elle subit 3d8 dégâts radiants (si vous êtes Bon ou Neutre) ou 3d8 dégâts nécrotiques (si vous êtes Mauvais). Si elle réussit son jet de sauvegarde, elle subit seulement la moitié de ces dégâts.',
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 4 ou plus, les dégâts augmentent de 1d8 par niveau au-delà du 3e.'
         ]);
         Spell::insert([
            'name' => 'Étrangeté',
            'school' => 'Illusion',
            'level' => 9,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'concentration, jusqu\'à 1 minute',
            'description' => 'Vous puisez dans les peurs les plus profondes d\'un groupe de créatures et créez des êtres illusoires dans leur esprit, qu\'elles sont les seules à voir. Chaque créature située dans une sphère de 9 mètres de rayon centrée sur un point de votre choix situé à portée doit faire un jet de sauvegarde de Sagesse. Celles qui ratent leur jet sont terrorisées pendant toute la durée. Les illusions se basent sur les peurs enfouies en chaque cible et transforment leurs pires cauchemars en menace implacable.\n À la fin de chacun de ses tours, une créature terrorisée doit faire un jet de sauvegarde de Sagesse. Si elle échoue elle subit 4d10 dégâts psychiques; si elle réussit, le sort se termine pour elle.'
         ]);
         Spell::insert([
            'name' => 'Éveil',
            'school' => 'Transmutation',
            'level' => 5,
            'cast_time' => '8 heures',
            'range' => 'contact',
            'component' => 'V, S, M (une agate d\'une valeur minimale de 1 000 po, que le sort consomme)',
            'duration' => 'instantanée',
            'description' => 'Une fois que vous avez passé la durée de l\'incantation à tracer des sentiers magiques dans une pierre précieuse, vous touchez un animal ou une plante de taille Très Grande ou inférieure qui doivent être dépourvus de toute valeur d\'intelligence ou posséder une Intelligence de 3 ou moins. La cible reçoit alors une Intelligence de 10 et la possibilité de parler un langage de votre connaissance. Si la cible est une plante, elle peut se déplacer à l\'aide de ses branches, de ses racines, de ses lianes, de ses vrilles ou autre et gagne des sens similaires à ceux d\'un humain. C\'est au MD de choisir les statistiques appropriées à la plante éveillée, en lui appliquant par exemple le profil d\'un buisson ou d\'un arbre éveillé.\n La bête ou la plante éveillée est sous votre charme pendant 30 jours ou jusqu\'à ce que vous ou l\'un de vos compagnons la blessiez. Une fois que l\'effet de charme se termine, la créature éveillée décide seule si elle reste amicale envers vous, selon la façon dont vous l\'avez traitée lorsqu\'elle était charmée.'
         ]);
         Spell::insert([
            'name' => 'Explosion occulte',
            'school' => 'Évocation',
            'level' => 0,
            'cast_time' => '1 action',
            'range' => '36 mètres',
            'component' => 'V, S',
            'duration' => 'instantanée',
            'description' => 'Un éclair d\'énergie crépitante file vers une créature à portée. Faites un jet d\'attaque de sort à distance contre la cible. Si vous réussissez, elle subit 1d10 dégâts de force.\n Le sort crée des rayons supplémentaires quand vous atteignez certains niveaux : il lance deux rayons au niveau 5, trois au niveau 11 et quatre au niveau 17. Vous pouvez diriger tous les rayons sur une même cible ou les répartir entre plusieurs. Faites un jet d\'attaque distinct pour chaque rayon.'
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
         ]);
         Spell::insert([
            'name' => '',
            'school' => '',
            'level' => 0,
            'is_rituel'=> true,
            'cast_time' => '',
            'range' => '',
            'component' => '',
            'duration' => '',
            'description' => '',
            'upper_lvl' => ''
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
