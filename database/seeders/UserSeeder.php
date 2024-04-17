<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'fname' => 'Test User',
            'lname' => 'ai',
            'email' => 'teeerst@example.com',
            'password' =>'pass',
            'is_admin' => 1
        ]);
    }
}
