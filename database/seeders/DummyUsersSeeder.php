<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin Sislab',
                'email' => 'admin1@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Dinda',
                'email' => 'dinda@gmail.com',
                'role' => 'mahasiswa',
                'password' => bcrypt('12345678')
            ],
        ];
        
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
