<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Pedro Lima',
            'email' => 'pedro@example.com',
            'password' => bcrypt('senha123'),
            'role' => 'lider',
            'phone' => '(83) 98888-8888',
            'function' => 'mídia',
            'birth_date' => '1990-05-15',
        ]);

        \App\Models\User::create([
            'name' => 'João Silva',
            'email' => 'joao@example.com',
            'password' => bcrypt('senha456'),
            'role' => 'membro',
            'phone' => '(83) 91111-1111',
            'function' => 'violão',
            'birth_date' => '1995-01-10',
        ]);

        \App\Models\User::create([
            'name' => 'Maria Oliveira',
            'email' => 'maria@example.com',
            'password' => bcrypt('senha789'),
            'role' => 'membro',
            'phone' => '(83) 92222-2222',
            'function' => 'vocalista',
            'birth_date' => '1998-03-20',
        ]);
    }
}
