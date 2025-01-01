<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'student_number' => '32214016562',
            'name' => 'Student One',
            'email' => 'student1@example.com',
            'password' => Hash::make('7102023'),
        ]);

        User::create([
            'student_number' => '32214016561',
            'name' => 'Student Two',
            'email' => 'student2@example.com',
            'password' => Hash::make('7102023'),
        ]);
    }
}
