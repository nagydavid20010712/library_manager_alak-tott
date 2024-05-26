<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(Book::count() == 0) {
            $books = [
                [
                    "isbn" => 9789635619801,
                    "title" => "Vérből és hamuból",
                    "description" => "EGY SZŰZ...

                    Egy új korszak hajnalán, a születésekor kiválasztották Poppyt, ezért az élete sosem volt igazán a sajátja. A Szűz élete magányos. Sohasem érinthetik meg. Sohasem nézhetnek rá. Sohasem szólhatnak hozzá. Sohasem tapasztalhatja meg az élvezeteket. Ám ő Felemelkedésének napjára várva szívesebben tölti idejét a testőreivel, és inkább harcol a gonosszal, ami elvette tőle a családját, mint hogy arra készüljön, hogy az istenek méltónak találják. De ez a döntés sem volt sohasem az övé.
                    
                    EGY KÖTELESSÉG...
                    
                    Az egész királyság jövőjének terhe Poppy vállát nyomja, és ez olyasvalami, amire egyáltalán nem biztos, hogy vágyik. Hiszen egy Szűznek is van szíve. És lelke. És vágyai. És amikor Hawke, az arany szemű őr felesküszik rá, hogy biztosítja a Felemelkedését, így belép az életébe, a végzet és a kötelesség összekuszálódik a sóvárgással. Hawke felkorbácsolja a lány indulatait, elülteti benne a kételyt azzal szemben, amiben eddig hitt, és megkísérti azzal, ami tilos.
                    
                    EGY KIRÁLYSÁG...
                    
                    Egy bukott királyság, amit magára hagytak az istenek, és amitől rettegnek a halandók, ismét feltámad, hogy erőszakkal és bosszúval mindenáron visszaszerezze, ami egykor az övé volt. És ahogy az átkozottak árnyéka egyre közelebb húzódik, a tiltott és a helyes közötti határvonal is elmosódik. Poppy nem csupán a szívét kockáztatja, hanem azt is, hogy méltatlannak találják az istenek, ráadásul az élete is veszélybe kerül, amikor minden véres fenyegetés, ami egyben tartja a világát, kezdi felfedni magát.
                    ",
                    "publish_date" => 2020,
                    "writers" => "Jennifer L Armentrout",
                    "publisher" => "Könyvmolyképző",
                    "genre" => "fantasy",
                    "language" => "magyar",
                    "number_of_pages" => 681,
                    "created_at" => now(),
                    "modified_at" => now(),
                    "cover" => "images/book_covers/9789635619801.jpg"
                ],
                [
                    "isbn" => 9789635971077,
                    "title" => "Hús és tűz királysága",
                    "description" => "Erősebb a szerelem a bosszúnál?

                    EGY ÁRULÁS...
                    
                    Minden, amiben Poppy valaha hitt, hazugság, beleértve a férfit is,
                    akibe beleszeretett. És nem igazán tudja, ki is ő valójában a Szűz fátyla nélkül.
                    Azt viszont tudja, hogy semmi nem jelent rá akkora veszélyt, mint ő. A Sötét Szerzet. Atlantia királyfija. Aki azt akarja, hogy Poppy küzdjön ellene, és ez egy olyan parancs, aminek ezer örömmel engedelmeskedik. Lehet, hogy elrabolta, de sosem lesz az övé.
                    
                    EGY DÖNTÉS...
                    
                    Casteel Da'Neer hazugságai ugyanolyan megnyerőek, mint az érintése.
                    Az igazságai pedig olyan érzékiek, mint a harapása. De Poppy
                    csak rajta keresztül kaphatja meg, amit akar - hogy megtalálja a bátyját, Iant.
                    Az, hogy együttműködik Casteellel, ahelyett, hogy ellene dolgozna,
                    kockázatot rejt magában. A királyfi mégis minden lélegzetvételével kísérti őt,
                    és azt kínálja fel, amire a lány mindig is vágyott. És Poppy túlságosan vakmerő,
                    túlságosan kiéhezett ahhoz, hogy ellenálljon a kísértésnek.
                    
                    EGY TITOK...
                    
                    Azonban a nyugtalanság egyre fokozódik Atlantiában, miközben a királyfi
                    hazatérését várják. Egyre többet suttognak háborúról, és Poppy
                    az események kellős közepébe csöppent. Sötét titkok törnek felszínre,
                    amelyek beszivárogtak a két királyság véráztatta bűneibe, és mindkét királyság
                    bármit megtenne azért, hogy rejtve maradjon az igazság. De amikor megrázkódik
                    a föld, és az ég vérezni kezd, lehet, hogy már túl késő.
                    
                    Vesd bele magad!",
                    "publish_date" => 2022,
                    "writers" => "Jennifer L Armentrout",
                    "publisher" => "Könyvmolyképző",
                    "language" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 654,
                    "created_at" => now(),
                    "modified_at" => now(),
                    "cover" => "images/book_covers/9789635971077.jpg"
                ],
                [
                    "isbn" => 9789635975556,
                    "title" => "Az aranyozott csontkorona",
                    "description" => "Ő VOLT AZ ÁLDOZAT ÉS A TÚLÉLŐ...

                    Poppy álmodni sem mert volna róla, hogy ekkora szerelemre lel
                    Casteel királyfi mellett. Élvezni szeretné a boldogságát, azonban először ki kell
                    szabadítaniuk Casteel bátyját, majd megkeresni Poppyét. Veszélyes küldetésük
                    következményei olyan messzire nyúlhatnak, amilyenről egyikük sem álmodott.
                    Mert Poppy a Kiválasztott, az Áldott, ő Atlantia valódi uralkodója.
                    Az istenek királyának vére folyik az ereiben.
                    
                    
                    AZ ELLENSÉG ÉS A HARCOS...
                    
                    Poppy mindig arra vágyott, hogy a saját életét irányíthassa, nem másokét.
                    Most azonban döntenie kell, hogy lemond arról, ami megilleti, vagy megszerzi
                    az aranyozott koronát, és a hús és tűz királynőjévé válik. Ám ahogy a királyságok
                    sötét bűnei és véráztatta titkai napvilágra kerülnek, felébred egy rég elfeledett erő,
                    és valódi veszéllyel fenyeget. És őket semmi nem állíthatja meg,
                    hogy megakadályozzák, hogy a korona valaha is Poppy fejére kerüljön.
                    
                    
                    A SZERELMES ÉS A TÁRS...
                    
                    Azonban a legnagyobb fenyegetés rájuk és Atlantiára a távoli Nyugaton várakozik.
                    A vér és hamu királynőjének megvannak a saját tervei, és több száz éve csak arra
                    vár, hogy végre megvalósítsa őket. Poppynak és Casteelnek meg kell próbálnia
                    a lehetetlent - elutazni az istenek földjére, hogy felébresszék magát a királyt.
                    Ahogy fény derül a megdöbbentő titkokra és a legdurvább árulásokra, ellenségek
                    bukkannak fel, hogy megingassák mindazt, amiért ok ketten harcolnak. Ők pedig
                    megtapasztalják, hogy meddig hajlandók elmenni a népükért - és egymásért.
                    
                    
                    ÉS POPPYBÓL KIRÁLYNŐ LESZ...
                    ",
                    "publish_date" => 2023,
                    "writers" => "Jennifer L Armentrout",
                    "publisher" => "Könyvmolyképző",
                    "language" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 657,
                    "created_at" => now(),
                    "modified_at" => now(),
                    "cover" => "images/book_covers/9789635975556.jpg"
                ],
                [
                    "isbn" => 9789634578550,
                    "title" => "Sötét, magányos átok",
                    "description" => "Egy elátkozott birodalomban...
                    a szerelem a legsötétebb zugokba kényszerül.
                    
                    Légy szerelmes, törd meg az átkot!
                    
                    Rhen herceg, Emberfall trónörököse azt hitte, minden rendben lesz. Bár egy nagy hatalmú varázslónő megátkozta, és arra ítélte, hogy folyamatosan újraélje a tizennyolcadik évének őszét, ő biztosra vette, hogy ha egy lány beleszeret, azonnal megmenekül. Azonban minden ősz végén gonosz, kíméletlen bestiává változik.
                    
                    És elérkezett az utolsó ősz...
                    
                    Harperhez sosem volt kegyes a sors. A családja romokban, a bátyja pedig, aki képtelen összetartani a családot, folyamatosan alábecsüli őt. Harper már korán megtanulta, hogy csak kemény küzdelmek árán boldogulhat. De amikor egy embertársa megmentésére siet, hirtelen Rhen elátkozott világában találja magát.
                    
                    Törd meg az átkot, mentsd meg a birodalmat!
                    
                    Herceg? Szörny? Átok? Harper azt sem tudja, hol van és mit higgyen. De ahogy egyre több időt tölt el Rhennel a mágikus birodalomban, lassan megérti, mi minden forog kockán. És amikor Rhen rájön, hogy Harper nem csak egy újabb meghódítandó nőnemű, ismét feltámad benne a remény. De hatalmas erők állnak szemben Emberfall-lal... Vajon ha megtörik az átok, az elég ahhoz, hogy megmentse őket és a birodalom népét a teljes pusztulástól?
                    ",
                    "publish_date" => 2019,
                    "publisher" => "Könyvmolyképző",
                    "langugae" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 526,
                    "writers" => "Brigid Kemmerer",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9789634578550.jpg"
                ],
                [
                    "isbn" => 9789635976416,
                    "title" => "Merész, gyilkos eskü",
                    "description" => "Királyságok csapnak össze. Te kinek az oldalára állsz?

                    A lenyűgöző Átoktörő-sorozat befejező része.
                    Nézz szembe a félelmeiddel, vívd meg a csatát!
                    
                    Emberfall rohamosan pusztul, és a végletekig megosztott: vannak, akik úgy vélik, a trón Rhent illeti, ám mások alig várják, hogy új korszak kezdődjön Grey, a jogos örökös vezetésével. Grey két hónap türelmi időt adott Emberfallnak a támadás előtt, ám ez idő alatt Rhen mindenkitől elfordult, még Harpertől is, aki kétségbeesetten próbál segíteni neki, hogy megtalálja a békéhez vezető utat.
                    
                    Vívd meg a csatát, mentsd meg a királyságot!
                    
                    Eközben Lia Mara azért küzd, hogy anyjánál emberségesebben uralkodjon Syhl Shallow felett. Miután a mágusokat kiűzték az országból, évtizedekig tartó békés időszak köszöntött be, ám az alattvalók közül nem mindenki
                    nézi jó szemmel, hogy Lia Mara egy varázserővel bíró herceggel és egy aparóval szövetkezik. A háború közeledtével Lia Mara elbizonytalanodik: valóban ő az a királynő, akire az országának szüksége van? A két birodalom egyre közelebb sodródik a fegyveres összecsapáshoz, ami próbára teszi a hűséget, szerelmeket sodor veszélybe, egy régi ellenség újbóli felbukkanása pedig mindenkire fenyegetést jelent.
                    
                    Hagyd, hogy magával ragadjon!",
                    "publish_date" => 2023,
                    "publisher" => "Könyvmolyképző",
                    "language" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 456,
                    "writers" => "Brigid Kemmerer",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9789635976416.jpg"
                ],
                [
                    "isbn" => 9789635618385,
                    "title" => "Harcos, megtört szív",
                    "description" => "Szívdobogtatóan gyönyörű mese szeretetről,
                    barátságról és hűségről.
                    
                    Keresd meg az örököst, nyerd el a trónt!
                    
                    Az átok végül megtört, de Rhen, Emberfall hercege most még aggasztóbb nehézségekkel szembesül. Szárnyra kelt a pletyka, hogy nem ő a trón jogos örököse, és hogy tiltott varázslat szabadult Emberfallra. Bár Harper Rhen mellett áll, Grey, a herceg testőre eltűnt, ami komoly kérdéseket vet fel.
                    
                    Nyerd el a trónt, mentsd meg a királyságot!
                    
                    Lehet, hogy Grey a trónörökös, de ő nem akarja kiadni a titkát. Mióta megölte Lilithet, szökésben van, és nem kíván szembeszállni Rhennel - mindaddig, amíg Karis Luran ismét fenyegetőzni nem kezd, hogy lerohanja Emberfallt. Karis Luran lánya, Lia Mara azonban gyűlöli az erőszakot, és meglátja a rést anyja tervében. De vajon meg tudja győzni Greyt, hogy Emberfall érdekében álljon ki Rhen ellen?
                    
                    Az izgalmas, lebilincselő történet folytatódik, miközben emberek mérettetnek meg, és egy új szerelem is kibontakozik a háború szélére sodródott birodalomban.
                    
                    Varázsold el magad vele te is!",
                    "publish_date" => 2021,
                    "publisher" => "Könyvmolyképző",
                    "language" => "magyar",
                    "genre" => "fantasy",
                    "number_of_pages" => 490,
                    "writers" => "Brigid Kemmerer",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9789635618385.jpg"
                ],
                [
                    "isbn" => 9789634572435,
                    "title" => "Velünk véget ér",
                    "description" => "Néha az okozza a legtöbb fájdalmat, aki szeret.
                    Lilynek nem ment mindig könnyen a sora, de annál keményebben dolgozott, hogy olyan életet élhessen, amilyenre vágyik. Elhagyta a Maine állambeli kisvárost, ahol felnőtt; egyetemet végzett, és Bostonba költözött, ahol saját vállalkozásba kezdett. Amikor szikrázni kezd a levegő közte és a jóképű idegsebész, Ryle Kincaid között, Lily életében hirtelen minden túl szép lesz ahhoz, hogy igaz legyen.
                    Ryle magabiztos, makacs, kicsit talán arrogáns is, de emellett érzékeny, okos, és Lily a gyengéje - bár a kapcsolatoktól való viszolygása aggodalomra ad okot.
                    Lilyt mégsem csak az új kapcsolata foglalkoztatja. Rengeteget gondol Atlas Corriganre is - az első szerelmére, aki a hátrahagyott múltjához köti. A fiú, aki lelki társa és védelmezője volt, most újra feltűnik a színen, veszélyeztetve ezzel mindent, amit Lily és Ryle együtt felépített.
                    Ebben a merész és mélyen személyes regényben Colleen Hoover szívszorongató történetet tár elénk, ami új, izgalmas utakra vezeti őt magát mint írót is. A Velünk véget ér felejthetetlen mese a szerelemről, amiért nagy árat kell fizetni.
                    Add át magad a reménynek!",
                    "publish_date" => 2017,
                    "publisher" => "Könyvmolyképző",
                    "language" => "magyar",
                    "genre" => "romantikus",
                    "number_of_pages" => 421,
                    "writers" => "Colleen Hoover",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9789634572435.jpg"
                ],
                [
                    "isbn" => 9789633994184,
                    "title" => "Velünk kezdődik",
                    "description" => "Mielőtt véget ért, Atlasszal kezdődött el.

                    Lily és a volt férje, Ryle éppen csak beleszokik a közös gyerekfelügyelet ritmusába, amikor Lily hirtelen újra összefut első szerelmével, Atlasszal. A csaknem két külön töltött év után Lily fellelkesül, hogy az idő most az egyszer az ő javukra játszik, és azonnal igent mond, amikor Atlas randevúra hívja.
                    
                    Ám lelkesedését csírájában fojtja el a gondolat, hogy noha többé nem házasok, Ryle azért nagyon is része az életének, és gyűlölni fogja Atlas Corrigant, amiért jelen van a volt felesége és a kislánya életében.",
                    "publish_date" => 2023,
                    "publisher" => "Könyvmolyképző",
                    "language" => "magyar",
                    "genre" => "romantikus",
                    "number_of_pages" => 334,
                    "writers" => "Colleen Hoover",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9789633994184.jpg"
                ],
                [
                    "isbn" => 9786155628689,
                    "title" => "S.T.A.L.K.E.R. - Hadműveleti Zóna",
                    "description" => "Hemult felkavaró álmok kísértik, miközben csapatával kifelé tartanak a Zónából. A szerelme, Gyinka kiszabadítására szervezett akció jól alakult, már csak élve el kell érniük a Határt. Ám valami titokzatos, láthatatlan hatalom jár a nyomukban, mindent elpusztítva, ami az útjába kerül.
                    Az előttük húzódó labirintus hirtelen megsokszorozódik, amikor találkoznak egy régi ismerőssel, és megtudják tőle, hogy a Zónában valójában hét párhuzamos valóság keresztezi egymást. Az egyik ráadásul egy olyan, életre kelt rémálom, ahol az anomáliákból továbbfejlesztett fegyverekkel vívják épp a harmadik világháborút.
                    A stalkerek csapata kereszttűzbe keveredik a vérszomjas szörnyetegek és a zónatechnológiás szuperfegyverek harapófogójában, és úgy tűnik, már csak a csoda segíthet rajtuk ebben a feje tetejére állt világban.
                    ",
                    "publish_date" => 2018,
                    "publisher" => "Metropolis Media Group",
                    "language" => "magyar",
                    "genre" => "sci-fi",
                    "number_of_pages" => 241,
                    "writers" => "Vaszilij Orehov",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9786155628689.jpg"
                ],
                [
                    "isbn" => 9786155628399,
                    "title" => "S.T.A.L.K.E.R. - Tűzvonal",
                    "description" => " Hemul legutóbbi, tragikusan végződő 'túravezetése' után klánját, barátait, munkáját és szerelmét is elvesztette, ezért végleg hátat fordított a Zónának. Vagy legalábbis így gondolta. Most azonban ismét a Zónában van, a hangulata pedig nem valami rózsás, mert egy régi barátja pisztolya mered rá negyven lépés távolságról.
                    A cél persze nem ő, hanem egy körülötte keringő, életveszélyes relikvia, egy úgynevezett Boszorkánytojás, melynek már a puszta érintése is halálos. Hemul és barátja abban bíznak, hogy egy jól irányzott lövés kitérítheti szédítő pályájáról, és ezzel alkalom nyílik a menekülésre.
                    A találat nyomán a relikvia szétrobban, és szilánkjai beterítik a stalkert... ám ő mégis életben marad, sőt látomása támad: egy tüzes vonalat pillant meg maga előtt.",
                    "publish_date" => 2017,
                    "publisher" => "Metropolis Media Group",
                    "language" => "magyar",
                    "genre" => "sci-fi",
                    "number_of_pages" => 360,
                    "writers" => "Vaszilij Orehov",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9786155628399.jpg"
                ],
                [
                    "isbn" => 9786155628177,
                    "title" => "S.T.A.L.K.E.R. - Katasztrófa sújtotta terület",
                    "description" => "Hemul, a kommandós kiképzőből lett stalker rosszul tűri, ha csapata nem az elvárásai szerint viselkedik. Ám mivel kockázatos küldetéseiért kapott pénze rendszerint kifolyik a keze közül, most mégis kénytelen kísérőül szegődni egy csoport extrém kalandokat kereső, öntörvényű turista mellé. A Zóna azonban nem az a hely, ahová önfeledt szafarikra járhat az ember.
                    A vadásztúra ígéretesen indul, ám a mutánsoktól hemzsegő vidék korántsem veszélytelen. Az első összecsapások után a csapat tagjai arra is ráébrednek, hogy a legveszedelmesebb szörnyeknek olykor emberarcuk van. No persze olykor a turisták sem egyszerű turisták. De hogy az önként vállalt vesszőfutást ki ússza meg élve, ki juthat ki a Zónából - ha ki lehet még jutni belőle egyáltalán -, azt még egy tapasztalt stalker sem tudja előre megmondani.",
                    "publish_date" => 2017,
                    "publisher" => "Metropolis Media Group",
                    "language" => "magyar",
                    "genre" => "sci-fi",
                    "number_of_pages" => 361,
                    "writers" => "Vaszilij Orehov",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9786155628177.jpg"
                ],
                [
                    "isbn" => 9789635047703,
                    "title" => "Tündérmese",
                    "description" => "A legendás történetmondó, Stephen King képzelete legmélyebb kútjába merül alá ebben a varázslatos regényben. A Tündérmese kiválóan ötvözi Óz Smaragdvárosát a Grimm fivérek meséivel és az üveghegyen túl is rettegve hallgatott gótikus rémtörténetekkel. Lenyűgöző esti mese Stephen King jól ismert szórakoztató és félelmetes stílusában.
                    A legendás történetmondó, Stephen King képzelete legmélyebb kútjába merül alá ebben a varázslatos regényben.
                    A Tündérmese csodálatos és káprázatos regény, amely megható tisztelgés Lovecraft, Ray Bradbury, C. S. Lewis és a fantasztikum számos más szerzője előtt. Kiválóan ötvözi Óz Smaragdvárosát a Grimm fivérek meséivel és az üveghegyen túl is rettegve hallgatott gótikus rémtörténetekkel. Charlie Reade egy átlagos középiskolás srác, remekül baseballozik, a focicsapat egyik legjobb játékosa, és szorgalmas tanuló. De nagy terhet cipel a vállán. Édesanyja hétéves korában életét vesztette egy autóbalesetben, az apját pedig a gyász és a bánat az ivásba száműzte. A fiúnak túl hamar kellett megtanulnia, hogyan vigyázzon magára - és a lassan felépülő apjára.
                    Évekkel később Charlie egy nap találkozik a környékükön élő, egykoron szebb napokat megélt Radar nevű kutyával és magának való, idős gazdájával, Howard Bowditchcsal, mikor megmenti a nagy házában remeteként élő öregembert. A gondoskodó Charlie végül ápolóként marad Mr. Bowditch mellett, és közben nemcsak az idős férfihoz kerül közelebb, hanem teljesen szívébe zárja Radart. Amikor Bowditch váratlanul meghal, Radart és a vagyonát is a fiúra hagyja, valamint egy rejtélyes magnókazettát, amelyen elmeséli különös, senki által nem ismert történetét. És hogy milyen titokzatos világot rejt a zárt fészer a hátsó udvaron. Charlie-nak végül alá kell szállnia a különös országba, hogy megmentse beteg kutyája életét, és megküzdjön e másik világot elátkozó gonosszal.",
                    "publish_date" => 2023,
                    "publisher" => "Európa Könyvkiadó kft.",
                    "language" => "magyar",
                    "genre" => "thriller, fantasy",
                    "number_of_pages" => 631,
                    "writers" => "Stephen King",
                    "created_at" => today(),
                    "modified_at" => today(),
                    "cover" => "images/book_covers/9789635047703.jpg"
                ]
            ];

            Book::insert($books);
        }
    }
}
