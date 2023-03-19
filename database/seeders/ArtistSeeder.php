<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avatar = 'default/avatar_default.jpg';
        Artist::create(
            [
                'name' => 'JKT48',
                'profile' => 'JKT48 adalah grup idola asal Indonesia dan grup saudari AKB48 yang pertama di luar Jepang.',
                'avatar' => $avatar
            ]
        );
    }
}
