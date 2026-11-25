<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Александр', 'surname' => 'Михайлов', 'patronymic' => '', 'email' => 'mihailo12v@example.com'],
            ['name' => 'Ярослав', 'surname' => 'Николенко', 'patronymic' => 'Евгеньевич', 'email' => 'yarik228@example.com'],
            ['name' => 'Иван', 'surname' => 'Иванов', 'patronymic' => 'Иванович', 'email' => 'mihailov@example.com'],
        ];
        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'surname' => $user['surname'],
                'patronymic' => $user['patronymic'],
                'email' => $user['email'],
                'password' => Hash::make('password'),
            ]);
        }
    }
}
