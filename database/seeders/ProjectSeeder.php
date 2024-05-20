<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 8; $i++) {
            $project = new Project();
            $project->name = $faker->words(4, true);
            $project->language = $faker->words(1, true);
            $project->slug = Str::of($project->name)->slug('-');
            $project->save();
        }
    }
}
