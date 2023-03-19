<?php

namespace Database\Seeders;

use App\Models\Song;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jkt48 = Artist::where('name', 'JKT48')->first();
        $rapsodi = Album::where('name', 'Rapsodi')->first();

        Song::create(
            [
                'artist_id' => $jkt48->id,
                'album_id' => $rapsodi->id,
                'title' => 'Rapsodi',
                'lyric' => '
                Kulihat ada yang bersinar
                Di kedua bola matamu (oh kasihku)
                Kau buat malam gelap ini
                Jadi penuh cahaya
                Terang kilau pesona

                Kasih andai anganku bersuara dia kan bernyanyi
                Rapsodi indah yang kan bermuara di fajar hati
                Kelingking kita berjanji
                Jari manis jadi saksi
                Bahagia
                Hingga sang bumi
                Enggan berputar lagi

                Kau buat aku sempurna
                Saat kau berkata iya (oh kasihku)
                Kau izinkan ku berlaga
                Mengarungi dunia (mengarungi dunia)
                Di sisimu selamanya

                Kasih andai anganku bersuara dia kan bernyanyi
                Rapsodi indah yang kan bermuara di fajar hati
                Kelingking kita berjanji
                Jari manis jadi saksi
                Bahagia
                Hingga sang bumi
                Tak berputar lagi

                Lala
                Kita saling bersandar
                Lala
                Hingga bumi tak berputar
                Cinta kita takkan pudar
                Selamanya

                Kasih dengar anganku bersuara di fajar hati
                Kelingking kita berjanji
                Jari manis jadi saksi
                Bahagia
                Tuk selamanya

                Kasih andai anganku bersuara dia kan bernyanyi
                Rapsodi indah yang kan bermuara di fajar hati
                Kelingking kita berjanji
                Jari manis jadi saksi
                Bahagia
                Hingga sang bumi (tak berputar lagi)
                
                Kasih andai anganku bersuara dia kan bernyanyi (di sisiku)
                Rapsodi indah yang kan bermuara di fajar hati
                Kelingking kita berjanji
                Jari manis jadi saksi
                Bahagia
                Hingga sang bumi
                Enggan berputar lagi
                ',
                'written_by' => 'Laleilmanino',
            ]
        );
    }
}
