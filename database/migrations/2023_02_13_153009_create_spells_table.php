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
            'name' => 'Agrandir/Rétrécir',
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
            'description' => 'Les objets prennent vie sur votre ordre. Choisissez jusqu\'à dix objets non magiques à portée que personne ne porte ni ne transporte. Les cibles de taille Moyenne comptent comme deux objets, celles de taille Grande comme quatre et celles de taille Très Grande comme huit. Vous ne pouvez pas animer d\'objet de taille supérieure. Chaque cible s\'anime et devient une créature placée sous votre contrôle jusqu\'à la fin du sort ou jusqu\'à tomber à O point de vie.\n Par une action bonus, vous pouvez donner un ordre mental à toute créature créée via ce sort qui se trouve au maximum à 150 mètres de vous (si vous en contrôlez plusieurs, vous pouvez donner un ordre à l\'une d\'elles, certaines d\'entre elles ou toutes à la fois, à condition de donner le même ordre à toutes). À vous de décider quelle action la créature va entreprendre et à quel endroit elle se déplacera au cours du tour suivant, mais vous pouvez aussi lui donner un ordre plus générique, comme de garder une salle ou un couloir. En l\'absence d\'ordre, la créature se contente de se défendre contre les créatures hostiles. Une fois qu\'elle a reçu un ordre, elle continue à le suivre jusqu\'à ce qu\'elle ait accompli sa tâche.\n <Table/> \n Un objet animé est une créature artificielle avec une CA, des points de vie, des attaques, une Force et une Dextérité déterminés par sa taille. Sa Constitution est de 10 tandis que son Intelligence et sa Sagesse sont de 3 et son Charisme de 1. Il a une vitesse de 9 mètres. S\'il est dépourvu de pattes ou d\'appendices susceptibles de le mouvoir, il gagne à la place la capacité de voler à une vitesse de 9 mètres et peut utiliser le vol stationnaire. Si l\'objet est solidement attaché à une surface ou à un objet de plus grande taille, comme une chaîne vissée à un mur, sa vitesse est de O. L\'objet possède la vision aveugle dans un rayon de 9 mètres ; au-delà, il est aveugle. Quand l\'objet animé tombe à O point de vie, il reprend sa forme originelle d\'objet et tout dégât en surplus est infligé à sa forme originelle.\n Si vous ordonnez à un objet animé d\'attaquer, il a droit à une attaque au corps à corps unique contre une créature située dans un rayon de 1,50 mètre. Il porte une attaque de coup avec un bonus d\'attaque et des dégâts contondants déterminés en fonction de sa taille. Le MD peut tout à fait décider qu\'un objet animé inflige des dégâts perforants ou tranchants si sa forme le lui permet.',
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
            'upper_lvl' => 'Si vous lancez ce sort en utilisant un emplacement de niveau 5 ou plus, les dégâts augmentent de 1dlO par niveau au-delà du 4e.'
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
            'description' => 'Vous lancez des bâtonnets ornés de gemmes ou des os de dragon, tirez des cartes ornementées ou utilisez une autre méthode de divination pour recevoir un présage de la part d\'une entité d\'un autre monde. Ce présage concerne les résultats de la conduite que vous comptez tenir dans les trente prochaines minutes. C\'est au MD de choisir l\'un des présages suivants :\n <LI>Bonheur pour un résultat positif</LI> <LI>Malheur pour un résultat négatif</LI> <LI>Bonheur et malheur pour un résultat comportant du positif et du négatif<\LI> <LI>Rien pour un résultat n\'étant ni positif ni négatif</LI> \n Le sort ne tient pas compte d\'une éventuelle modification des circonstances, comme l\'incantation de sorts supplémentaires, ou la perte ou l\'arrivée d\'un compagnon.\n Si vous lancez ce sort à deux reprises ou plus avant un long repos, il y a 25% de chances par incantation en sus de la première que vous obteniez une prémonition aléatoire au lieu d\'une prémonition fiable. C\'est au MD de faire ce jet en secret.'
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
            'name' => 'Boule de feu à explosion retardée',
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
