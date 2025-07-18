<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create(['name' => 'Admin', 'email' => 'admin@physicsfree.com', 'password' => Hash::make('pfadmin'), 'role' => 'admin']);

        $users = [
            ['name' => 'Alice Johnson', 'email' => 'alice@physicsfree.com'],
            ['name' => 'Bob Smith', 'email' => 'bob@physicsfree.com'],
            ['name' => 'Charlie Brown', 'email' => 'charlie@physicsfree.com'],
            ['name' => 'Diana Prince', 'email' => 'diana@physicsfree.com'],
            ['name' => 'Ethan Hunt', 'email' => 'ethan@physicsfree.com'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make('password'), // default password
            ]);
        }

        $classrooms = [
            [
                'name' => '2025 Advanced Level',
                'year' => 2025,
                'day' => 'monday',
                'institute' => 'Sipwin (Kurunegala)',
                'type' => 'physical',
                'medium' => 'english',
                'start_time' => '09:00',
                'end_time' => '11:00',
            ],
            [
                'name' => '2026 Advanced Level',
                'year' => 2026,
                'day' => 'wednesday',
                'institute' => 'Sipwin (Kurunegala)',
                'type' => 'online',
                'medium' => 'sinhala',
                'start_time' => '14:00',
                'end_time' => '16:00',

            ],
            [
                'name' => '2027 Advanced Level',
                'year' => 2027,
                'day' => 'friday',
                'institute' => 'Gathika (Kurunegala)',
                'type' => 'online',
                'medium' => 'english',
                'start_time' => '10:30',
                'end_time' => '12:00',

            ],
            [
                'name' => '2025 Advanced Level',
                'year' => 2025,
                'day' => 'tuesday',
                'institute' => 'Gathika (Kandy)',
                'type' => 'physical',
                'medium' => 'sinhala',
                'start_time' => '13:00',
                'end_time' => '15:00',

            ],
            [
                'name' => '2025 Advanced Level',
                'year' => 2025,
                'day' => 'thursday',
                'institute' => 'Sakya (Nugegoda)',
                'type' => 'online',
                'medium' => 'english',
                'start_time' => '08:00',
                'end_time' => '10:00',

            ],
            [
                'name' => '2025 Advanced Level',
                'year' => 2025,
                'day' => 'sunday',
                'institute' => 'Sakya (Nugegoda)',
                'type' => 'online',
                'medium' => 'english',
                'start_time' => '11:00',
                'end_time' => '13:00',

            ],
            [
                'name' => '2027 Advanced Level',
                'year' => 2027,
                'day' => 'tuesday',
                'institute' => 'Sakya (Nugegoda)',
                'type' => 'physical',
                'medium' => 'sinhala',
                'start_time' => '17:00',
                'end_time' => '19:00',
            ],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create([
                'name' => $classroom['name'],
                'year' => $classroom['year'],
                'day' => $classroom['day'],
                'institute' => $classroom['institute'],
                'type' => $classroom['type'],
                'medium' => $classroom['medium'],
                'start_time' => $classroom['start_time'],
                'end_time' => $classroom['end_time'],
            ]);
        }

    }
}
