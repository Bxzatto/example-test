<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task_priorities')->insert(
            [
                'priority' => 'Alta'
            ]
        );
        DB::table('task_priorities')->insert(
            [
                'priority' => 'Média'
            ]
        );
        DB::table('task_priorities')->insert(
            [
                'priority' => 'Baixa'
            ]
        );
        DB::table('task_priorities')->insert(
            [
                'priority' => 'Sem prioridade'
            ]
        );
    }
}
