<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HaikuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('haikus')->insert([
            'number' => Str::random(10),
            'registration_date' => Str::random(10).'@gmail.com',
            'content' => Hash::make('password'),
        ]);
    }
}
