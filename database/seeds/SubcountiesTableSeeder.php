<?php

use Illuminate\Database\Seeder;
use App\Subcounty;

class SubcountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sub_county = ['Central Division','Kawempe Division','Makindye Division','Nakawa Division','Rubaga Division',
                        'Bukomero','Butemba','Dwaniro','Gayaza','Kapeke','Kibiga','Kiboga T.c.','Kyankwanzi','Lwamata','Mulagi',
                        'Muwanga','Nsambya','Ntwetwe','Wattuba','Bujjumba','Kalangala T.c.','Mugoye','Bamunanika','Kalagala',
                        'Kamira','Kikyusa','Zirobwe','Mazinga','Bubeke','Bufumira','Kyamuswa','Mazinga','Bombo T.c.','Butuntumula',
                        'Katikamu','Luwero','Luwero T.c.','Makulubita','Nyimbwa','Wobulenzi T.c.','Bigasa','Butenga','Kibinge','Kitanda',
                        'Bukakata','Buwunga','Kabonera','Kisekka','Kkingo','Kyanamukaaka','Lwengo','Malongo','Mukungwe','Ndagwe','Bukulula',
                        'Kalungu','Kyamuliibwa','Lukaya T.c.','Lwabenge','Katwe/butego','Kimanya/kyabakuza','Nyendo/senyange','Budde',
                        'Bulo','Kalamba','Kibibi','Ngando','Kabulasoke','Kyegonza','Maddu','Mpenja','Buwama','Kamengo','Kiringente',
                        'Kituntu','Mpigi','Mpigi T.c.','Muduma','Nkozi','Bagezza','Butoloogo','Kasambya','Kitenga','Kiyuni','Madudu',
                        'Mubende T.c.','Bukuya','Kassanda','Kiganda','Myanzi','Buikwe','Kawolo','Lugazi T.c.','Najja','Najjembe',
                        'Ngogwe','Njeru T.c.','Nkonkonjeru T.c.','Nyenga','Ssi - Bukunja','Wakisi','Bugaya','Busamuzi','Bweema','Nairambi',
                        'Goma','Kkome Islands','Kyampisi','Mukono T.c.','Nakisunga','Nama','Ntenjeru','Kasawo','Kimenyedde','Nabaale','Nagojje',
                        'Ntunda','Seeta- Namuganga','Kakooge','Kalongo','Kalungi','Lwabyata','Lwampanga','Nabiswera','Nakasongola T.c.',
                        'Nakitoma','Wabinyonyi','Kakuuto','Kasasa','Kibanda','Kifamba','Kyebe','Byakabanda','Ddwaniro','Kacheera',
                        'Kagamba (buyamba)','Kyalulangira','Lwamaggwa','Lwanda','Rakai T.c.','Kabira','Kalisizo','Kasaali','Kirumba',
                        'Kyotera T.c.','Lwankoni','Nabigasa','Lwemiyaga','Ntusi','Lugusulu','Lwebitakuli','Mateete','Mijwala','Sembabule T.c.',
                        'Bbaale','Galiraaya','Kayonza','Wabwoko-kitimbwa','Busana','Kangulumira','Kayunga','Kayunga T.c.','Nazigo','Kakiri',
                        'Kasanje','Katabi','Masulita','Namayumba','Nsangi','Ssisa','Wakiso','Wakiso T.c.','Division A','Division B','Busukuma',
                        'Gombe','Kira','Nabweru','Nangabo','Ssabagabo-makindye','Kaliiro','Kasagama','Kinuuka','Lyantonde','Lyantonde T.c.',
                        'Mpumudde','Butayunja','Kakindu','Maanyi','Malangala','Bulera','Busimbi','Kikandwa','Mityana T.c.','Ssekanyonyi',
                        'Kapeeka','Kasangombe','Kikamulo','Nakaseke','Ngoma','Semuto','Wakyato','Banda','Budhaya','Bugiri T.c.','Bulesa',
                        'Bulidha','Buluguyi','Buswale','Buwunga','Buyinja','Iwemba','Kapyanga','Muterere','Nabukalu','Nankoma','Sigulu Islands',
                        'Mutumba','Buhehe','Bulumbi','Busia T.c.','Busitema','Buteba','Dabani','Lumino','Lunyo','Masaba','Masafu','Buyanga',
                        'Ibulanku','Makuutu','Namalemba','Bulamagi','Iganga T.c.','Nabitende','Nakalama','Nakigo','Nambale','Namungalwe',
                        'Nawandala','Bukanga','Bukooma','Bulongo','Ikumbya','Irongo','Nawampiti','Waibuga','Busedde','Kakira','Mafubira',
                        'Central Division','Mpumudde/kimaka','Masese/walukuba','Budondo','Butagaya','Buwenge','Buwenge T.c.','Buyengo',
                        'Bugaya','Buyende','Kagulu','Kidera','Nkondo','Balawoli','Bulopa','Butansi','Kamuli T.c.','Kitayunjwa','Nabwigulu',
                        'Namasagali','Namwendwa','Bugulumbya','Kisozi','Mbulamuti','Nawanyago','Wankole','Benet','Binyiny','Kaproron','Kwanyiny',
                        'Ngenge','Chema','Kapchorwa T.c.','Kaptanya','Kaserem','Kawowo','Sipi','Tegeres','Kapujan','Katakwi','Katakwi T.c',
                        'Magoro','Ngariam','Toroma','Usuk','Ongongoja','Omodoi','Atutur','Kanyum','Kumi','Kumi T.c.','Mukongoro','Nyero','Ongino',
                        'Kapir','Kobwin','Mukura','Ngora','Bufumbo','Bukonde','Bukyiende','Bungokho','Bungokho-mutoto','Busano','Busiu','Busoba',
                        'Nakaloke','Namanyonyi','Wanale','Industrial','Northern Division','Wanale Division','Butebo','Kabwangasi','Kakoro','Kibale',
                        'Petete','Bulangira','Buseta','Kibuku','Kadama','Tirinyi','Kagumu','Kirika','Agule','Apopong','Gogonyo','Kameke','Kasodo',
                        'Pallisa','Pallisa T.c.','Puti-puti','Kamuge','Bugondo','Kadungulu','Pingire','Atiira','Kateta','Kyere','Olio','Arapai',
                        'Asuret','Gweri','Kamuda','Katine','Soroti','Tubur','Eastern Division','Northern Division','Western Division','Kwapa','Mella',
                        'Merikit','Molo','Mukuju','Osukuru','Eastern Division','Western Division','Iyolwa','Kirewa','Kisoko','Mulanda','Nabuyoga',
                        'Nagongera','Paya','Petta','Rubongi','Alwa','Kaberamaido','Kobulubulu','Ochero','Kaberamaido T.c','Anyara','Bululu','Kalaki',
                        'Otuboi','Baitambogwe','Buwaaya','Immanyiro','Kigandalo','Kityerera','Malongo','Mayuge T.c.','Buhugu','Bumasifwa','Busulani',
                        'Butandiga','Buteza','Buwalasi','Buyobo','Sironko T.c.','Zesui','Bukhulo','Buginyanya','Bukhalu','Bulago','Bulegeni','Buluganya',
                        'Bunambutye','Masiira','Muyembe','Sisiyi','Abarilela','Asamuk','Kuju','Orungo','Wera','Morungatuny','Acowa','Obalanga','Budaka',
                        'Iki-iki','Kaderuna','Kamonkoli','Lyama','Naboa','Kameruka','Bubiita','Bududa','Bukibokolo','Bukigai','Bulucheke','Bumayoka',
                        'Bushika','Bukedea','Kachumbala','Kidongole','Kolir','Malera','Bukwa','Chesower','Kabei','Suam','Budumba','Busaba','Busolwe',
                        'Butaleja','Kachonga','Nawanjofu','Nazimasa','Bumanya','Gadumire','Namugongo','Namwiwa','Nawaikoke','Bubutu','Bugobero','Bumbo',
                        'Bumwoni','Bupoto','Butiru','Buwabwala','Buwagogo','Kaato','Sibanga','Bulange','Ivukula','Kibaale','Magada','Namutumba','Nsinze',
                        'Adjumani T.c','Adropi','Ciforo','Dzaipi','Ofua','Pakelle','Aboke','Akalo','Alito','Ayer','Bala','Abongomola','Aduku','Chawente',
                        'Inomo','Nambieso','Akokoro','Apac','Apac T.c.','Cegere','Ibuje','Arua Hill','Oli River','Adumi','Aroi','Dadamu','Manibe','Oluko',
                        'Pajulu','Offaka','Ogoko','Okollo','Rhino Camp','Rigbo','Uleppi','Ajia','Arivu','Logiri','Vurra','Awach','Bungatira','Paicho','Palaro',
                        'Patiko','Bar-dege','Laroo','Layibi','Pece','Bobi','Koro','Lakwana','Lalogi','Odek','Ongako','Kitgum T.c.','Kitigum Matidi','Labongo Akwang',
                        'Labongo Amida','Labongo Layamo','Lagoro','Mucwini','Namokora','Omiya Anyima','Orom','Agoro','Lokung','Madi Opei','Parabek Ogili','Padibe East',
                        'Padibe West','Palabek Gem','Palabek Kal','Paloga','Kacheri','Kotido','Kotido T.c.','Nakapelimoru','Panyangara','Rengen','Adekokwok',
                        'Amach','Aromo','Barr','Lira','Ogur','Adyel','Central','Ojwina','Railway','Abako','Aloi','Amugo','Apala','Omoro','Adwari','Okwang',
                        'Olilim','Orum','Iriiri','Lokopo','Lopei','Lotome','Matany','Ngoleriet','Katikekile','Nadunget','Rupa','Northern Division','Southern Division',
                        'Aliba','Gimara','Itula','Dufile','Lefori','Metu','Moyo T.c.','Moyo','Pakwach','Pakwach T.c.','Panyango','Panyimur','Wadelai','Atyak','Jangokoro',
                        'Kango','Nyapea','Paidha','Paidha T.c.','Zeu','Akworo','Erussi','Kucwiny','Nebbi','Nebbi T.c','Nyaravur','Parombo','Kakomongole','Moruita',
                        'Nakapiripirit T.c.','Namalu','Lolachat','Lorengedwat','Nabilatuk','Amudat','Karita','Loroo','Acholibur','Atanga','Awer','Kilak','Laguti',
                        'Lapul','Pader T.c.','Pajule','Puranga','Adilang','Lapono','Lira Palwo','Lukole','Omot','Paimol','Parabongo','Patongo','Wol','Apo','Drajani',
                        'Kei','Kuru','Midigo','Odravu','Romogi','Yumbe T.c.','Abim','Alerek','Lotukei','Morulem','Nyakwae','Aputi','Awelo','Muntu','Namasale',
                        'Amuru','Atiak','Lamogi','Pabbo','Alero','Anaka','Purongo','Koch Goma','Agwata','Batta','Dokolo','Kangai','Kwera','Kaabong T.c.','Kalapata',
                        'Kapedo','Karenga','Kathile','Lolelia','Loyoro','Sidok','Kaabong Subcounty','Koboko T.c.','Kuluba','Lobule','Ludara','Midia','Aber','Acaba',
                        'Iceme','Loro','Minakulu','Ngai','Otwal','Yivu','Nyadri','Oleba','Oluvu','Tara','Oluffe','Kijomoro','Aii - Vu','Beleafe','Katrini','Odupi',
                        'Omugo','Uriama','Bubandi','Bubukwanga','Bundibugyo T.c.','Busaru','Harugali','Kasitu','Nduguto','Kanara','Karugutu','Rwebisengo','Bihanga',
                        'Burere','Karungu','Rwengwe','Katerera','Katunguru','Kichwamba','Ryeru','Bumbaire','Bushenyi T.c.','Kakanju','Kyabugimbi','Kyamuhunga','Kyeizoba',
                        'Nyabubare','Bitereko','Kabira','Kanyabwanga','Kashenshero','Kiyanga','Mitooma','Mutara','Bugongi','Kabwohe-itendero T.c','Kagango','Kigarama',
                        'Kitagata','Kyangyenyi','Shuuku','Buhanika','Buseruka','Busiisi','Hoima T.c.','Kigorobya T.c.','Kigorobya','Kitoba','Kyabigambire','Bugambe',
                        'Buhimba','Kabwoya','Kiziranfumbi','Kyangwali','Kabale Central','Kabale Northern','Kabale Southern','Buhara','Kaharo','Kamuganguzi','Kitumba',
                        'Kyanamira','Maziba','Rubaya','Bubare','Bufundi','Hamurwa','Ikumba','Muko','Bukinda','Kamwezi','Kashambya','Rwamucucu','Buheesi','Kibiito','Kisomoro',
                        'Rwiimi','Bukuku','Busoro','Hakibaale','Karambi','Kicwamba','Mugusu','Ruteete','Eastern','Western','Southern','Bwera','Ihandiro','Karambi','Kisinga',
                        'Kitholhu','Kyarumba','Kyondo','Mahango','Munkunyu','Nyakiyumbu','Bugoye','Karusandara','Kasese T.c','Katwe Kabatoro T.c.','Kilembe','Kitswamba',
                        'Kyabarungira','L.katwe','Maliba','Muhokya','Rukoki','Bwanswa','Kakindo','Kasambya','Kisiita','Nalweyo','Nkooko','Bwikara','Kagadi','Kiryanga',
                        'Kyanaisoke','Mabaale','Mpeefu','Muhoro','Rugashari','Bwamiramira','Kibaale T.c.','Kyebando','Matale','Mugarama','Bukimbiri','Busanza','Chahi',
                        'Kanaba','Kirundo','Kisoro T.c.','Muramba','Murora','Nyabwishenya','Nyakabande','Nyakinama','Nyarubuye','Nyarusiza','Nyundo','Budongo','Bwijanga',
                        'Karujubu','Kimengo','Masindi T.c','Miirya','Nyangahya','Pakanyi','Kigumba','Kiryandongo','Masindi -port','Mutunda','Bubaare','Bukiro','Kagongi',
                        'Kakiika','Kashare','Rubaya','Rubindi','Rwanyamahembe','Kakoba','Kamukuzi','Nyamitanga','Bugamba','Mwizi','Ndaija','Nyakayojo','Rugando','Bwongyera',
                        'Ihunga','Kibatsi','Nyabihoko','Itojo','Ntugamo','Ntungamo T.c','Nyakyera','Ruhaama','Rukoni','Rweikiniro','Kayonza','Ngoma','Rubaare','Rugarama',
                        'Buyanja','Kebisoni','Nyakishenyi','Nyarushanje','Bugangari','Buhunga','Bwambara','Kagunga','Nyakagyeme','Ruhinda','Rukungiri T.c.','Bwiizi','Kahunge',
                        'Kamwenge','Kamwenge T.c.','Nkoma','Kicheche','Mahyoro','Ntara','Nyabbani','Kambuga','Kanyantorogo','Kayonza','Kihiihi','Kirima','Nyamirama','Rugyeyo',
                        'Rutenga','Kanungu T.c','Mpungu','Hapuyo','Kakabara','Kasule','Kyegegwa','Mpara','Bufunjo','Bugaaki','Butiiti','Katoke','Kihuura','Kyarusozi','Kyenjojo T.c.',
                        'Nyankwanzi','Nyantungo','Biiso','Buliisa','Bisheshe','Ibanda T.c.','Ishongororo','Kicuzi','Kikyenkye','Nyabuhikye','Nyamarebe','Rukiri','Endinzi','Kashumba',
                        'Ngarama','Rugaaga','Birere','Kabingo','Kabuyanda','Kikagate','Masha','Nyakitunda','Buremba','Burunga','Kanoni','Kazo','Rwemikoma','Kanyaryeru','Kashongi',
                        'Kenshunga','Kikatsi','Kinoni','Nyakashashara','Sanga'
                    ];
   for($i=0; $i < count($sub_county); $i++){
   $subcounty = new Subcounty();
   if(Subcounty::where("id",$i)->exists()){
       $subcounty->id = $i+1;
   }
   else{
       $subcounty->id = $i;
   } 
   $subcounty->subcounty=$sub_county[$i];
   $subcounty->save();
  
    }
    }
}
