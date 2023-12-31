<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'username' => 'kapsek',
                'password' => Hash::make('kapsek'),
                'role' => 'kapsek'
            ],
            [
                'username' => 'staff',
                'password' => Hash::make('staff'),
                'role' => 'staff'
            ],

            // [
            //     'username' => 'peserta',
            //     'password' => Hash::make('peserta123'),
            //     'role' => 'peserta'
            // ],
        ]);
    }
}
