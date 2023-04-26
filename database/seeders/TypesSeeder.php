<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('task_types')->insert(
            [
                'type' => 'Incidente'
            ]
        );
        DB::table('task_types')->insert(
            [
                'type' => 'Solicitação de serviço'
            ]
        );
        DB::table('task_types')->insert(
            [
                'type' => 'Melhoria'
            ]
        );
        DB::table('task_types')->insert(
            [
                'type' => 'Projetos'
            ]
        );
    }
}
