<?php

use App\Models\Background;
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
        Schema::create('backgrounds', function (Blueprint $table) {
            $table->uuid('id')->primary()->default(Str::uuid());
            $table->string('name', 191);
            $table->text('description');
        });
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Acolyte',
            'description' => '<p>Vous avez passé votre vie au service d\'un temple dédié à un dieu particulier ou à un panthéon de dieux. Vous servez d\'intermédiaire entre le domaine du sacré et le monde mortel. Vous accomplissez les rites sacrés et faites les sacrifices nécessaires qui vous permettent de mettre les fidèles en présence du divin. Vous n\'êtes pas nécessairement un clerc (accomplir des rites sacrés n\'est pas la même chose que canaliser la puissance divine).</p><p>Choisissez un dieu, un panthéon de dieux ou un être semi-divin parmi ceux disponible, avec qui vous déterminerez la nature exacte de vos tâches religieuses. Étiez-vous un petit fonctionnaire dans la hiérarchie du temple, élevé depuis l\'enfance pour assister les prêtres lors des rites sacrés ? Ou bien un grand prêtre qui a soudain ressenti le besoin de servir son dieu différemment ? Peut-être étiez-vous à la tête d\'un culte indépendant non affilié à un quelconque temple, ou faisiez-vous partie d\'un groupe occulte au service d\'un maître démoniaque que vous avez renié.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Artisan de guilde',
            'description' => '<p>Vous êtes membre d\'une guilde d\'artisans. Vous êtes très doué dans un domaine particulier et travaillez en étroite collaboration avec les autres artisans. Vous avez gagné une place de choix dans le monde mercantile et, grâce à vos talents et aux richesses qu\'ils vous ont permis d\'accumuler, vous n\'êtes plus assujetti aux contraintes d\'un ordre social féodal. Vous avez appris votre art en tant qu\'apprenti auprès d\'un maître artisan, sous la tutelle de votre guilde,jusqu\'à ce vous deveniez un maître à votre tour.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Artiste',
            'description' => '<p>Vous exultez devant un parterre de spectateurs que vous savez captiver, divertir et même inspirer. Vos poèmes touchent le cœur de vos auditeurs et éveillent en eux joie ou tristesse, rire ou colère. Votre musique allège leur humeur ou traduit leur chagrin. Vos pas de danse les captivent, votre humour les pique au vif. Quelle que soit la technique que vous utilisez, vous ne vivez que pour l\'art.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Charlatan',
            'description' => '<p>Vous avez toujours su vous y prendre avec les gens. Vous savez ce qui les motive, il vous suffit de discuter quelques minutes avec eux pour attiser leurs désirs et vous lisez en eux comme dans un livre ouvert après quelques questions bien orientées. Ce sont des talents bien utiles et vous n\'hésitez pas à vous en servir à votre avantage. </p><p>Vous savez ce que les gens veulent et vous le leur donnez. Ou plutôt vous promettez de le leur donner. Le bon sens devrait les mettre en garde contre ce qui semble trop beau pour être vrai mais, dès que vous êtes dans les parages, ils perdent tout sens commun. Cette bouteille de liquide rose soignera sans doute ces rougeurs disgracieuses, cet onguent (qui n\'est rien de plus que de la graisse colorée avec un peu de poudre d\'argent) leur rendra vigueur et jeunesse et il se trouve qu\'un pont de la ville est en vente. Ces merveilles sont complètement impensables mais, dans votre bouche, elles semblent parfaitement réalistes.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Criminel',
            'description' => '<p>Vous êtes un criminel expérimenté habitué à enfreindre la loi. Vous avez passé beaucoup de temps parmi les malfrats et vous avez encore des contacts dans le monde de la pègre. À la différence de la plupart des gens, vous êtes proche de tout ce qui touche au meurtre, au vol, à la violence et à tous ces méfaits commis dans les zones d\'ombre de la société, et vous avez survécu jusqu\'à ce jour en violant les lois et régulations de la société.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Enfant des rues',
            'description' => '<p>Vous avez grandi dans la rue, seul, orphelin et pauvre. Vous n\'aviez personne pour veiller sur vous ni pourvoir à vos besoins, alors vous avez appris à vous débrouiller seul. Vous vous êtes battu férocement pour un peu de nourriture et vous étiez toujours aux aguets à cause d\'autres âmes désespérées susceptibles de voler votre pitance. Vous dormiez sur les toits ou dans les allées, exposé aux éléments, et vous avez supporté la maladie sans médecin ni endroit douillet pour vous rétablir. Vous avez survécu malgré tout, grâce à votre ruse, votre force, votre vitesse ou un mélange de tout cela.</p><p>Vous commencez votre carrière avec de quoi vivre modestement pendant au moins dix jours. Comment avez-vous trouvé cet argent? Qu\'est-ce qui vous a permis de quitter votre vie de misère et de faire route vers des jours meilleurs ?</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Ermite',
            'description' => '<p>Vous avez vécu dans l\'isolement (complètement seul ou dans une communauté cloîtrée, comme un monastère) pendant les années formatrices de votre vie. Pendant cette période passée loin du vacarme de la société, vous avez trouvé le calme, la solitude et, peut-être, une partie des réponses que vous cherchiez.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Héros du peuple',
            'description' => '<p>Vous êtes d\'origine modeste mais vous êtes destiné à accomplir de grandes choses. Les habitants de votre village vous considèrent déjà comme leur champion et votre destin vous pousse à vous dresser contre les tyrans et les monstres qui menacent les petites gens.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Marin',
            'description' => '<p>Vous avez navigué des années en mer et affronté de violentes tempêtes, des monstres surgis des profondeurs et des individus désireux d\'envoyer votre bateau par le fond. Votre premier amour restera toujours la ligne d\'horizon au loin, mais le temps est venu pour vous de passer à autre chose.</p><p>Quelle est la nature du bateau sur lequel vous avez vogué. Était-ce un navire marchand, un vaisseau de guerre, un navire d\'exploration ou encore un bateau pirate ? Était-il célèbre ou redouté ? Voyageait-il au loin ? Navigue-t-il encore ou est-il porté disparu et tous ses marins présumés morts ?</p><p>Quelles étaient vos fonctions à bord ? Maître d\'équipage, capitaine, navigateur, cuisinier, autre ? Qui était le capitaine ? Et le second ? Avez-vous quitté votre équipage en bons termes ou vous êtes-vous enfui ?</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Noble',
            'description' => '<p>Vous disposez d\'argent, de pouvoirs et de privilèges. Vous possédez un titre de noblesse et votre famille a des terres, collecte des taxes et dispose d\'une influence politique considérable. Vous pouvez être un aristocrate gâté qui ignore ce qu\'est le travail et le manque de confort, un ancien marchand qui vient tout juste d\'accéder au statut de noble ou un vaurien déshérité bouffi de sa propre importance. Mais vous pouvez aussi être un seigneur honnête et travailleur qui se soucie sincèrement des gens qui vivent et travaillent sur ses terres et prend très au sérieux ses responsabilités à leur égard.</p><p>Choisissez un titre approprié et déterminer quelle autorité il vous donne. Un titre de noblesse ne fonctionne pas seul, il est lié à toute votre famille et sera transmis à vos enfants. Vous devez donc définir ce titre mais aussi votre famille et l\'influence que ses membres exercent sur vous.</p><p>Êtes-vous issu d\'une ancienne famille bien établie ou avez-vous tout récemment reçu votre titre ? Quelle influence exerce votre famille et jusqu\'où ? Quelle est sa réputation parmi le reste de l\'aristocratie ? Comment les roturiers la considèrent-ils ?</p><p>Quelle est votre position au sein de votre famille ? Êtes-vous l\'héritier du titre ? L\'avez-vous déjà reçu ? Comment ressentez vous une telle responsabilité ? Êtes-vous placé si loin dans la ligne de succession que tout Je monde se moque de ce que vous faites tant que vous ne faites pas honte à votre nom ? Que pense votre chef de famille de votre carrière d\'aventurier ? Êtes-vous dans les bonnes grâces de votre famille ou ses autres membres vous évitent-ils ?</p><p>Votre famille a-t-elle des armoiries ? Un blason que vous portez peut-être sur une chevalière ? Des couleurs particulières que vous arborez en permanence ? Un animal que vous considérez comme le symbole de votre lignée ou même comme un membre spirituel de la famille ?</p><p>Ces détails vous aideront à définir la place de votre famille et l\'importance de votre titre dans le monde du jeu.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Sage',
            'description' => '<p>Vous avez passé des années à améliorer votre connaissance du multivers. Vous avez étudié des manuscrits et des parchemins et écouté de grands experts parler des sujets qui vous intéressent. Vos efforts ont fait de vous un maître dans votre domaine d\'étude.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Sauvageon',
            'description' => '<p>Vous avez grandi dans les terres sauvages, loin de la civilisation et du confort des villes et de la technologie. Vous avez assisté à la migration de troupeaux plus larges que des forêts, survécu à un climat plus extrême que ce qu\'un citadin peut imaginer et goûté au plaisir d\'être le seul être intelligent à des kilomètres à la ronde. Vous avez la vie sauvage dans le sang, que vous soyez un nomade, un explorateur, un reclus, un chasseur-cueilleur ou même un maraudeur. Vous comprenez le fonctionnement de la nature, même dans les régions que vous ne connaissez pas.</p>'
        ]);
        Background::insert([
            'id' => Str::uuid(),
            'name' => 'Soldat',
            'description' => '<p>Aussi loin que remontent vos souvenirs, la guerre a toujours fait partie de votre vie. Dans votre jeunesse, vous vous êtes entraîné, vous avez appris à utiliser une arme et une armure et à maîtriser les techniques de survie de base, y compris sur un champ de bataille. Vous faisiez peut-être partie d\'une armée régulière ou d\'une compagnie de mercenaires ou vous avez peut-être appartenu à une milice locale qui a joué un rôle important lors d\'une guerre récente.</p><p>Quand vous choisissez cet historique, choisissez à quelle organisation militaire vous apparteniez, quel grade vous avez atteint dans sa hiérarchie et quelles ont été vos expériences durant votre carrière militaire. Apparteniez-vous à une armée régulière, la garde d\'une cité ou une milice villageoise ? Ou bien serviez-vous dans l\'armée privée ou la compagnie mercenaire d\'un noble ou d\'un marchand ?</p>'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('backgrounds');
    }
};
