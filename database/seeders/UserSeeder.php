<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Elham Syahrian Putra',
                'username' => 'elham55',
                'email' => 'elham@gmail.com',
                'password' => Hash::make('qweqweqwe'),
                'birthday' => Carbon::parse('2002-04-22'),
                'avatar' => 'default/avatar_default.jpg',
                'cover' => 'default/cover_default.jpg'
            ],     
        );
        User::create(
            [
                'name' => 'Angelina Christy',
                'username' => 'christy',
                'email' => 'christy@gmail.com',
                'password' => Hash::make('qweqweqwe'),
                'birthday' => Carbon::parse('2005-12-05'),
                'avatar' => 'default/avatar_default.jpg',
                'cover' => 'default/cover_default.jpg'
            ],     
        );
    }
}
