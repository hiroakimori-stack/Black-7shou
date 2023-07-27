<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Users2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users2')->insert([
            [
                'name' => '森',
                'email' => 'n@gmail.com',
                'password' => Hash::make('0000'),
                'created_at' => '1997/9/1 14:00:00'
            ],
        ]);
    }
}
