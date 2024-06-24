<?php

namespace Database\Seeders;

use App\Models\Child;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Classes;
use App\Models\Parents;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Types\Parent_;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \Database\Factories\ChildFactory::new()->count(50)->create();
        Teacher::factory()->count(50)->create();
        Parents::factory()->count(50)->create();
        Classes::factory()->count(50)->create();

        // User::factory(10)->create();

        Teacher::all()->each(function ($teacher) {
            $teacher->children()->attach(
                Child::inRandomOrder()->limit(rand(1, 10))->pluck('id')->toArray()
            );
        });

        // Attach classes to teachers
        Teacher::all()->each(function ($teacher) {
            $teacher->classes()->attach(
                Classes::inRandomOrder()->limit(rand(1, 10))->pluck('id')->toArray()
            );
        });
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
