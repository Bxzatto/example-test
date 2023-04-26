<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task_status')->insert(
            [
                'status' => 'Aberta'
            ]
        );
        DB::table('task_status')->insert(
            [
                'status' => 'Finalizada'
            ]
        );
    }
}
