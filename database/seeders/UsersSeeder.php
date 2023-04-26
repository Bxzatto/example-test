<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'login' => 'usuario01',
                'password' => Hash::make('123456'),
            ]);
        DB::table('users')->insert(
            [
                'login' => 'usuario02',
                'password' => Hash::make('8892374'),
            ]);
    }
}
