<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jkt48 = Artist::where('name','JKT48')->first();
        Album::create(
            [
                'artist_id' => $jkt48->id,
                'name' => 'Rapsodi',
                'cover' => '',
                'release_date' => date('2020-01-09'),
            ]
        );
    }
}
