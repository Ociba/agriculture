<?php

use Illuminate\Database\Seeder;
use App\County;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $county = ['Kiboga','Bujumba','Kyamuswa','Bamunanika','Katikamu','Bukomansimbi','Bukoto','Kyazanga','Kalungu',
                        'Masaka Municipality','Butambala','Gomba','Mawokota','Buwekula','Kassanda','Buikwe','Buvuma Islands',
                        'Mukono','Nakifuma','Buruli','Kakuuto','Kooki','Kyotera','Lwemiyaga','Mawogola','Bbaale','Ntenjeru',
                        'Busiro','Entebbe Municipality','Kyadondo','Kabula','Busujju','Mityana','Nakaseke','Bukooli',
                        'Samia-Bugwe','Bugweri','Kigulu','Luuka','Butembe','Jinja Municipality','Kagoma','Budiope','Bugabula',
                        'Buzaaya','Kween','Tingey','Usuk','Kumi','Ngora','Bungokho','Mbale Municipality','Butebo','Kibuku',
                        'Pallisa','Kasilo','Serere','Soroti','Soroti Municipality','Tororo','Tororo Municipality','West Budama(kisoko)',
                        'Kaberamaido','Kalaki','Bunya','Budadiri','Bulambuli','Amuria','Kapelebyong','Budaka','Manjiya','Bukedea',
                        'Kongasis','Bunyole','Bulamogi','Bubulo','Busiki','East Moyo','Kole','Kwania','Maruzi','Arua Municipality',
                        'Ayivu','Madi-okollo','Vurra','Aswa','Gulu Municipality','Omoro','Chua','Lamwo','Jie','Erute','Lira Municipality',
                        'Moroto','Otuke','Bokora','Matheniko','Moroto Municipality','Obongi','West Moyo','Jonam','Okoro','Padyere',
                        'Chekwii','Pian','Pokot','Aruu','Agago','Aringa','Labwor','Kioga','Kilak','Nwoya','Dokolo','Dodoth',
                        'Koboko','Oyam','Maracha','Terego','Bwamba','Ntoroko','Buhweju','Bunyaruguru','Igara','Ruhinda',
                        'Sheema','Bugahya','Buhaguzi','Kabale Municipality','Ndorwa','Rubanda','Rukiga','Bunyangabu','Burahya',
                        'Fort Portal Municipality','Bukonjo','Busongora','Bugangaizi','Buyaga','Buyanja','Bufumbira','Bujenje',
                        'Buruuli','Kibanda','Kashari','Mbarara Municipality','Rwampara','Kajara','Ruhaama','Rushenyi','Rubabo',
                        'Rujumbura','Kibale','Kitagwenda','Kinkiizi','Kyaka','Mwenge','Bukanga','Isingiro','Kazo','Nyabushozi',
                        'oditel','bombo','Kampala'
                    ];
        for($i=0; $i < count($county); $i++){
            $counties = new County();
            if(County::where("id",$i)->exists()){
                $counties->id = $i+1;
            }
            else{
                $counties->id = $i;
            } 
            $counties->county=$county[$i];
            $counties->save();
           
    }
    }
}
