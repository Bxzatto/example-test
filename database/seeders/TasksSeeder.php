<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert(
            [
                'title' => 'Atualizar dependências',
                'description'=> '<span>teste</span>',
                'user_id' => 1,
                'type_id' => 1,
                'priority_id' => 2,
                'status_id' => 1
            ]
        );
        DB::table('tasks')->insert(
            [
                'title' => 'Atualizar website',
                'description'=> '<span>teste</span>',
                'user_id' => 2,
                'type_id' => 1,
                'priority_id' => 2,
                'status_id' => 1
            ]
        );
    }
}
