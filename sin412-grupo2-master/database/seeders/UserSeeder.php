<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Alayne Garufe',
            'email' => 'alayneckg@hotmail.com',
            'password' => Hash::make('bZ9@wJN19FWW'),
            'phone' => '012997568060',
            'TDAH' => false,
            'papel' => 'admin'
        ]);
    }
}
