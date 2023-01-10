<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create(
            [
                'name' => 'Elham Syahrian Putra',
                'username' => 'elham55',
                'email' => 'test@example.com',
                'password' => hash::make('qwertyui'),
                'birthday' => Carbon::parse('2002-04-22'),
                'avatar' => 'default/avatar_default.jpg',
                'cover' => 'default/cover_default.jpg'
            ],
            
        );
    }
}
